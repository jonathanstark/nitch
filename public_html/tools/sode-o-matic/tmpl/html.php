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
