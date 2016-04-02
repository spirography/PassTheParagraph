<div class="jumbotron text-center" style="padding: 15px 0;"><h1>Science Fiction</h1></div>

<?php

    // get stories from database
    // TODO: get story genre using GET



    // display them
?>

<div id="story-container" class="container">
    <script type='text/javascript'>/*<![CDATA[*/
        <?php
                $stories = query("SELECT * from stories LIMIT 400"); // TODO: make AJAX-ey
                // get first sentences
                $js_array = json_encode($stories);
                echo "var stories = ". $js_array . ";\n";
                echo "var last_story_id = ". json_encode(4) . ";\n";
                echo "display_stories();\n";
            ?>;/*]]>*/</script>
</div><!-- container for story previews-->
