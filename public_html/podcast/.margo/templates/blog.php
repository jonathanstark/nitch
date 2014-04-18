<?php require_once '../../inc/header.php'; ?>
    <div class="section podcast index description">
        <p>A weekly podcast about building apps that run everywhere using open web standards like HTML, CSS, JavaScript, REST, and JSON. Hosted by <a href="http://jonathanstark.com">Jonathan Stark</a> and <a href="http://kellishaver.com">Kelli&nbsp;Shaver</a>.</p>
        <p>
            <select onchange="if(this.value){window.location=this.value}">
                <option value="0">Subscribe to Audio</option>
                <option value="https://itunes.apple.com/us/podcast/the-nitch-podcast/id533361901">iTunes</option>
                <option value="http://feedly.com/index.html#subscription%2Ffeed%2Fhttp%3A%2F%2Fnitch.cc%2Fitunes.rss">Feedly</option>
                <option value="http://pcasts.in/giMk">Pocket Casts</option>
                <option value="pcast://nitch.cc/itunes.rss">Other podcast clients (pcast:// compatible)</option>
                <option value="http://nitch.cc/itunes.rss">RSS</option>
            </select>
        </p>
    </div>
    <div class="section podcast index">
        <?php echo $html ?>
    </div>
<?php require_once '../../inc/footer.php'; ?>
