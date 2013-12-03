<?php
ini_set('display_errors', true);
$xml_template = '<item>
    <title>%1$s</title>
    <link>http://nitch.cc/podcast/%2$2</link>
    <guid>http://nitch.cc/podcast/%2$2</guid>
    <pubDate>%3$s 14:00:00 GMT</pubDate>
    <author>Nitch</author>
    <description>%4$s</description>
    <enclosure url="https://s3.amazonaws.com/nitch/%5$s.mp3" length="64172851" type="audio/mpeg"/>
    <content:encoded>%4$s</content:encoded>
    <itunes:author>Nitch</itunes:author>
    <itunes:duration>%6$s</itunes:duration>
    <itunes:subtitle>%4$s</itunes:subtitle>
    <itunes:summary>%4$s</itunes:summary>
    <itunes:keywords>web, mobile, html5, rest, json</itunes:keywords>
    <itunes:image href="http://nitch.cc/img/512x512.png"/>
    <media:content url="https://s3.amazonaws.com/nitch/%5$s.mp3" fileSize="54566344" type="audio/mpeg"/>
    <itunes:explicit>no</itunes:explicit>
</item>
';
$markdown_template = '%1$s
====
%2$s

Running time: %3$s

%4$s

<audio preload="auto" controls>
    <source src="https://s3.amazonaws.com/nitch/%5$s.mp3" type="audio/mpeg" />
    <source src="https://s3.amazonaws.com/nitch/%5$s.ogg" type="audio/ogg" />
    Your browser does not support HTML5 audio. Please download the episode using the link below.
</audio>

[Download (%6$s MB)](https://s3.amazonaws.com/nitch/%5$s.mp3 "%1$s")

## Housekeeping/News

%7$s

## Related Links

%8$s

## Titles We Considered

%9$s
';
#
# Grab the xml for the itunes rss feed because we need it for a couple things farther down
$itunes_xml = simplexml_load_file('http://nitch.cc/itunes.rss');
// print_r($itunes_xml);die;
#
# If post is set, render the templates and trigger a download
if (isset($_POST['action'])) {
    // print_r($_POST);die;
    #
    # Calc some values
    $_POST['display_title'] = sprintf('Episode %s: %s', $_POST['episode_number'], $_POST['episode_name']);
    $_POST['audio_file_name'] = str_replace(' ', '_', preg_replace('/[^a-zA-Z0-9 ]+/', '', $_POST['display_title']));
    $_POST['page_name'] = strtolower(str_replace('_', '-', $_POST['audio_file_name']));
    // print_r($_POST);die;
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
    $links = explode('*', $_POST['links']);
    // print_r($links);die;
    $_POST['links'] = '';
    foreach ($links as $link) {
        if (!empty($link)) {
            $link = trim($link);
            $url = sprintf('http://www.google.com/search?q=%s&btnI', str_replace(' ', '+', $link));
            $title = '';
            #
            # Use curl to try to get the actual page info for the link
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            // curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $html = curl_exec($ch);
            if(!curl_errno($ch)) {
                $url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
            }
            preg_match('/<title>(.+)<\/title>/', $html, $matches);
            // var_dump($matches);die;
            if (isset($matches[1])) {
                $title = $matches[1];
            }
            #
            # Append findings to var
            $_POST['links'].= sprintf('* [%s](%s "%s")', $link, $url, $title) . PHP_EOL;
        }
    }
    #
    # Kill the trailing line return
    $_POST['links'] = trim($_POST['links']);
    #
    # Get ready to poop out some text
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="'.$_POST['page_name'].'.md"');
    #
    # Render the templates
    printf($xml_template
        , $_POST['display_title']
        , $_POST['page_name']
        , date('D, d M Y', strtotime($_POST['publication_date']))
        , $_POST['description']
        , $_POST['audio_file_name']
        , $_POST['duration']
    );
    printf($markdown_template
        , $_POST['display_title']
        , date('F j, Y', strtotime($_POST['publication_date']))
        , $_POST['duration']
        , $_POST['description']
        , $_POST['audio_file_name']
        , $_POST['file_size']
        , $_POST['housekeeping']
        , $_POST['links']
        , $_POST['titles']
    );
    die;
}
#
# Calc the date of the coming friday (or todays date if it is friday)
$this_friday = date('Y-m-d', strtotime('+'. (5 - date('N')) . ' days'));
#
# Calc the number of the episode based on the rss feed
$last_title = (string)$itunes_xml->channel->item[count($itunes_xml->channel->item)-1]->title;
preg_match('/[0-9]+/', $last_title, $matches);
$this_episode_number = $matches[0] + 1;
#
?>
<!doctype html>
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
        <title>The Nitch Podcast "Sode-O-Matic!"</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css" media="screen">
            *{box-sizing:border-box}html{background:#F4F4F4}body{font-size:large;padding:1em}body,input,textarea{color:#797B7B;font-family:"Helvetica-Neue",Helvetica,sans-serif}input,textarea{width:100%}input[type=submit]{width:auto}h1{font-family: 'Bangers', cursive;margin-top:0;}.form-item{margin-bottom:1em}.topcoat-text-input,.topcoat-text-input--large{line-height:1.313rem;font-size:12px;letter-spacing:0;padding:0 .563rem;border:1px solid #9daca9;border-radius:4px;background-color:#fff;box-shadow:inset 0 1px rgba(0,0,0,0.1);color:#454545;vertical-align:top}.topcoat-text-input:focus,.topcoat-text-input--large:focus{background-color:#fff;color:#454545;border:1px solid #0036ff;box-shadow:0 0 0 2px #6fb5f1}.topcoat-text-input:disabled::-webkit-input-placeholder{color:#454545}.topcoat-text-input:disabled::-moz-placeholder{color:#454545}.topcoat-text-input:disabled:-ms-input-placeholder{color:#454545}.topcoat-text-input:invalid{border:1px solid #ec514e}.topcoat-text-input--large{line-height:1.688rem;font-size:.875rem}.topcoat-text-input--large:disabled{color:#454545}.topcoat-text-input--large:disabled::-webkit-input-placeholder{color:#454545}.topcoat-text-input--large:disabled::-moz-placeholder{color:#454545}.topcoat-text-input--large:disabled:-ms-input-placeholder{color:#454545}.topcoat-text-input--large:invalid{border:1px solid #ec514e}.topcoat-textarea,.topcoat-textarea--large{padding:1rem;font-size:1rem;font-weight:400;border-radius:4px;line-height:1.313rem;border:1px solid #9daca9;background-color:#fff;box-shadow:inset 0 1px rgba(0,0,0,0.1);color:#454545;letter-spacing:0}.topcoat-textarea:focus,.topcoat-textarea--large:focus{background-color:#fff;color:#454545;border:1px solid #0036ff;box-shadow:0 0 0 2px #6fb5f1}.topcoat-textarea:disabled::-webkit-input-placeholder{color:#454545}.topcoat-textarea:disabled::-moz-placeholder{color:#454545}.topcoat-textarea:disabled:-ms-input-placeholder{color:#454545}.topcoat-button,.topcoat-button--quiet,.topcoat-button--large,.topcoat-button--large--quiet,.topcoat-button--cta,.topcoat-button--large--cta{padding:0 .563rem;font-size:12px;line-height:1.313rem;letter-spacing:0;color:#454545;text-shadow:0 1px #fff;vertical-align:top;background-color:#e5e9e8;box-shadow:inset 0 1px #fff;border:1px solid #9daca9;border-radius:4px}.topcoat-button:hover,.topcoat-button--quiet:hover,.topcoat-button--large:hover,.topcoat-button--large--quiet:hover{background-color:#eff1f1}.topcoat-button:focus,.topcoat-button--quiet:focus,.topcoat-button--quiet:hover:focus,.topcoat-button--large:focus,.topcoat-button--large--quiet:focus,.topcoat-button--large--quiet:hover:focus,.topcoat-button--cta:focus,.topcoat-button--large--cta:focus{border:1px solid #0036ff;box-shadow:inset 0 1px rgba(255,255,255,0.36),0 0 0 2px #6fb5f1;outline:0}.topcoat-button:active,.topcoat-button--large:active{border:1px solid #9daca9;background-color:#d2d6d6;box-shadow:inset 0 1px rgba(0,0,0,0.1)}.topcoat-button--large,.topcoat-button--large--quiet{font-size:.875rem;font-weight:600;line-height:1.688rem;padding:0 .875rem}.topcoat-button--large--cta{font-size:.875rem;font-weight:600;line-height:1.688rem;padding:0 .875rem}.topcoat-button--cta,.topcoat-button--large--cta{border:1px solid #134f7f;background-color:#288edf;box-shadow:inset 0 1px rgba(255,255,255,0.36);color:#fff;font-weight:500;text-shadow:0 -1px rgba(0,0,0,0.36)}.topcoat-button--cta:hover,.topcoat-button--large--cta:hover{background-color:#4ca1e4}.topcoat-button--cta:active,.topcoat-button--large--cta:active{background-color:#1e7dc8;box-shadow:inset 0 1px rgba(0,0,0,0.12)}
        </style>
    </head>
    <body>
        <h1>The Nitch Podcast "'Sode&#8209;O&#8209;Matic!"</h1>
        <form method="post" accept-charset="utf-8">
            <div class="form-item" id="publication_date_wrapper">
                <label for="publication_date">Publication Date</label><br>
                <input class="topcoat-text-input--large" type="date" id="publication_date" name="publication_date" value="<?php echo $this_friday ?>" placeholder="e.g., 2013-11-29" required>
            </div>
            <div class="form-item" id="episode_number_wrapper">
                <label for="episode_number">Episode Number</label><br>
                <input class="topcoat-text-input--large" type="text" id="episode_number" name="episode_number" value="<?php echo $this_episode_number ?>" placeholder="e.g., 84" required>
            </div>
            <div class="form-item" id="episode_name_wrapper">
                <label for="episode_name">Episode Name</label><br>
                <input class="topcoat-text-input--large" type="text" id="episode_name" name="episode_name" value="" placeholder="e.g., Pizza Car" required autofocus>
            </div>
            <div class="form-item" id="duration_wrapper">
                <label for="duration">Duration</label><br>
                <input class="topcoat-text-input--large" type="text" id="duration" name="duration" value="" placeholder="e.g., 1:23:45" required>
            </div>
            <div class="form-item" id="file_size_wrapper">
                <label for="file_size">File Size (in megabytes)</label><br>
                <input class="topcoat-text-input--large" type="text" id="file_size" name="file_size" value="" placeholder="e.g., 47.3" required>
            </div>
            <div class="form-item" id="description_wrapper">
                <label for="description">Description</label><br>
                <textarea class="topcoat-textarea" rows="2" id="description" name="description" placeholder="e.g., Jonathan and Kelli talk about yada yada yada..." required>Jonathan and Kelli talk about </textarea>
            </div>
            <div class="form-item" id="housekeeping_wrapper">
                <label for="housekeeping">Housekeeping</label><br>
                <textarea class="topcoat-textarea" rows="10" id="housekeeping" name="housekeeping" placeholder="e.g., * Update to Feathers gem" required></textarea>
            </div>
            <div class="form-item" id="links_wrapper">
                <label for="links">Links</label><br>
                <textarea class="topcoat-textarea" rows="10" id="links" name="links" placeholder="e.g., * Modernizr" required></textarea>
            </div>
            <div class="form-item" id="titles_wrapper">
                <label for="titles">Titles</label><br>
                <textarea class="topcoat-textarea" rows="10" id="titles" name="titles" placeholder="e.g., * Pizza Car" required></textarea>
            </div>
            <input class="topcoat-button--large--cta" type="submit" name="action" value="Allons-y!">
        </form>
    </body>
</html>
