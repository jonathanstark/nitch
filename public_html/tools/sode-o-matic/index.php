<?php
ini_set('display_errors', true);
set_time_limit(0);
#
# Grab the xml for the live itunes rss feed
$itunes_xml = simplexml_load_file('http://nitch.cc/itunes.rss');
#
# Calc the date of the coming friday (or todays date if it is friday)
$this_friday = date('Y-m-d', strtotime('+'. (5 - date('N')) . ' days'));
#
# Calc the number for this episode based on the rss feed
$last_title = (string)$itunes_xml->channel->item[count($itunes_xml->channel->item)-1]->title;
preg_match('/[0-9]+/', $last_title, $matches);
$this_episode_number = $matches[0] + 1;
#
# If post is not set, include the form template and cya
if (empty($_POST['action'])) {
    include('./tmpl/html.php');
    die;
}
#
# POST must be set, so prepare to render the templates and trigger a download
#
# Calc some values
$_POST['display_title'] = sprintf('Episode %s: %s', $_POST['episode_number'], $_POST['episode_name']);
$_POST['audio_file_name'] = str_replace(' ', '_', preg_replace('/[^a-zA-Z0-9 ]+/', '', $_POST['display_title']));
$_POST['page_name'] = strtolower(str_replace('_', '-', $_POST['audio_file_name']));
$_POST['description'] = 'Jonathan and Kelli talk about ' . trim($_POST['description']);

#
# Loop through the itunes rss feed to make sure that this title is unique
foreach ($itunes_xml->channel->item as $item) {
    $episode_name = explode(': ', (string)$item->title)[1];
    if(strtolower($_POST['episode_name']) == strtolower($episode_name)) {
        die('You already used ' . $episode_name . ' as a name. Click your back button, dope.');
    }
}
#
# Loop through related links and create, well... links
$lines = explode(PHP_EOL, $_POST['links']);
// print_r($lines);die;
$_POST['links'] = '';
foreach ($lines as $line) {
    if (substr($line, 0, 1) != '*') {
        $_POST['links'].= $line . PHP_EOL;
    } else {
        if (stripos($line, '](')) {
            $_POST['links'].= $line . PHP_EOL;
        } else {
            $line = trim($line, '*');
            $line = trim($line);
            $url = sprintf('http://www.google.com/search?q=%s&btnI', str_replace(' ', '+', $line));
            $title = '';
            #
            # Use curl to try to get the actual page info for the link
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $html = curl_exec($ch);
            if(!curl_errno($ch)) {
                $url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
            }
            preg_match('/<title>(.+)<\/title>/', $html, $matches);
            if (isset($matches[1])) {
                $title = $matches[1];
            }
            #
            # Append findings to var
            $_POST['links'].= sprintf('* [%s](%s "%s")', $line, $url, $title) . PHP_EOL;
            #
            # Thottle so google doesn't freak out
            sleep(5);
        }
    }
}
#
# Kill the trailing line return
$_POST['links'] = trim($_POST['links']);
header('Content-Type: text/plain');
// echo $_POST['links'];die;
#
# Update the rss file
$rss_xml = file_get_contents('http://nitch.cc/itunes.rss');
$xml_template = file_get_contents('./tmpl/xml.php');
$xml_item = sprintf($xml_template
    , $_POST['display_title']
    , $_POST['page_name']
    , date('D, d M Y', strtotime($_POST['publication_date']))
    , $_POST['description']
    , $_POST['audio_file_name']
    , $_POST['duration']
);
$data = str_replace("    </channel>", $xml_item, $rss_xml);
file_put_contents('../../itunes.rss', $data);
#
# Write out the md file
$md_template = file_get_contents('./tmpl/md.php');
$data = sprintf($md_template
    , $_POST['display_title']
    , date('F j, Y', strtotime($_POST['publication_date']))
    , $_POST['duration']
    , $_POST['description']
    , $_POST['audio_file_name']
    , $_POST['housekeeping']
    , $_POST['links']
    , $_POST['titles']
);
file_put_contents('../../podcast/' . $_POST['page_name'] . '.md', $data);
#
# We out.
header('Location: ./?done=1');