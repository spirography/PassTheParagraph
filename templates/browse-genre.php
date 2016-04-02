<div class="jumbotron text-center" style="padding: 15px 0;"><h1>Science Fiction</h1></div>

<!-- get stories from database, display them -->
<div id="story-container" class="container">
    <script type='text/javascript'>/*<![CDATA[*/
        <?php
                $stories = query("SELECT * from stories ORDER BY id DESC LIMIT 4"); // TODO: make AJAX-ey
                // get first sentences
                $js_array = json_encode($stories);
                echo "var stories = ". $js_array . ";\n";
                echo "var last_story_id = stories[stories.length-1].id;\n";
                echo "display_stories(2);\n";
                echo "start_checking_for_earlier_stories();\n";
            ?>;/*]]>*/</script>
</div><!-- container for story previews-->
