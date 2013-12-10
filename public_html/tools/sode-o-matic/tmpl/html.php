<!doctype html>
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
        <title>The Nitch Podcast "Sode-O-Matic!"</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/screen.css">
    </head>
    <body>
        <h1>The Nitch Podcast "'Sode&#8209;O&#8209;Matic!"</h1>
        <div id="script">
            <h3 id="display_name_preview">Episode XX: Foo Bar Baz!</h3>
            <p id="audio_filename_preview">Episode_XX_Foo_Bar_Baz.mp3</p>
            <p>Hello! And welcome to the Nitch Podcast for <?php echo date('l, F jS, Y', strtotime($this_friday)) ?>. I'm JS (I'm KS) and we're here to talk about building apps that run everywhere using open web standards like HTML, CSS, JavaScript, REST, and JSON.</p>
            <p>This week! We discuss <span id="description_preview"></span></p>
            <p>Please stay tuned, the Nitch Podcast is next...</p>
        </div>
        <form method="post" accept-charset="utf-8">
            <div class="form-item" id="description_wrapper">
                <label for="description">Description</label><br>
                <textarea class="topcoat-textarea" rows="2" id="description" name="description" autofocus></textarea>
            </div>
            <div class="form-item" id="housekeeping_wrapper">
                <label for="housekeeping">Housekeeping</label><br>
                <textarea class="topcoat-textarea" rows="5" id="housekeeping" name="housekeeping" placeholder="e.g., * Update to Feathers gem"></textarea>
            </div>
            <div class="form-item" id="links_wrapper">
                <label for="links">Links</label><br>
                <textarea class="topcoat-textarea" rows="5" id="links" name="links" placeholder="e.g., * Modernizr"></textarea>
            </div>
            <div class="form-item" id="titles_wrapper">
                <label for="titles">Titles</label><br>
                <textarea class="topcoat-textarea" rows="5" id="titles" name="titles" placeholder="e.g., * Pizza Car"></textarea>
            </div>
            <div class="form-item" id="publication_date_wrapper">
                <label for="publication_date">Publication Date</label><br>
                <input class="topcoat-text-input--large" type="date" id="publication_date" name="publication_date" value="<?php echo $this_friday ?>" placeholder="e.g., 2013-11-29">
            </div>
            <div class="form-item" id="episode_number_wrapper">
                <label for="episode_number">Episode Number</label><br>
                <input class="topcoat-text-input--large" type="text" id="episode_number" name="episode_number" value="<?php echo $this_episode_number ?>" placeholder="e.g., 84">
            </div>
            <div class="form-item" id="episode_name_wrapper">
                <label for="episode_name">Episode Name</label><br>
                <input class="topcoat-text-input--large" type="text" id="episode_name" name="episode_name" value="" placeholder="e.g., Pizza Car">
            </div>
            <div class="form-item" id="duration_wrapper">
                <label for="duration">Duration</label><br>
                <input class="topcoat-text-input--large" type="text" id="duration" name="duration" value="" placeholder="e.g., 1:23:45">
            </div>
            <input class="topcoat-button--large--cta" type="submit" name="action" value="Allons-y!">
        </form>
        <script>
            function updateDescriptionPreview() {
                document.getElementById('description_preview').innerText = document.getElementById('description').value;
            }
            function updateNamePreview() {
                var audio_filename, display_name;
                display_name = 'Episode ' + document.getElementById('episode_number').value + ': ' + document.getElementById('episode_name').value;
                audio_filename = display_name.replace(/[^a-zA-Z0-9 ]+/g, ''); // Remove non-alphanum
                audio_filename = audio_filename.replace(/^\s+|\s+$/g, ''); // Trim whitespace
                audio_filename = audio_filename.replace(/ /g, '_'); // Replace whitespace
                audio_filename+= '.mp3';
                document.getElementById('display_name_preview').innerText = display_name;
                document.getElementById('audio_filename_preview').innerText = audio_filename;
            }

            // Update the previews as they are typed
            document.getElementById('description').addEventListener('keyup', updateDescriptionPreview, false);
            document.getElementById('episode_name').addEventListener('keyup', updateNamePreview, false);

            // Loop through inputs
            var watched_ids = ['description', 'duration', 'episode_name', 'housekeeping', 'links', 'titles'];
            watched_ids.forEach(function(id){

                // Listen for changes
                document.getElementById(id).addEventListener('change', function() {
                    console.log(this.id + ': ' + this.value);
                    localStorage.setItem(this.id, this.value);
                }, false);

                // Reload any previous values
                if (!!localStorage.getItem(id)) {
                    document.getElementById(id).value = localStorage.getItem(id);
                    if (id == 'description') {
                        updateDescriptionPreview();
                    }
                    if (id == 'episode_name') {
                        updateNamePreview();
                    }
                }

            });
        </script>
    </body>
</html>
