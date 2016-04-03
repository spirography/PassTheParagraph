<?php
    // get the correct category and do some error checking
    $category = 0;
    if (isset($_GET["g"])) {
        $category = intval($_GET["g"]);
        if ($category > 6 || $category < 1) {
            $category = 0;
        }
    }
    echo '<div class="jumbotron text-center themed-color-' . $category . '" style="padding: 15px 0;">';
    // display genre at top in big letters
    echo "<h1>";
    switch($category) {
        case 1: echo "Realistic Fiction"; break;
        case 2: echo "Science Fiction"; break;
        case 3: echo "Mystery"; break;
        case 4: echo "Fantasy"; break;
        case 5: echo "Historical"; break;
        case 6: echo "Comedy"; break;
        case 0:
        default: echo "All Genres"; break;
    }
    echo '</h1>';
    echo '</div>'
?>


<!-- get stories from database, display them -->
<div id="story-container" class="container">
    <script type='text/javascript'>/*<![CDATA[*/
        <?php
                $stories = query("SELECT * from stories ORDER BY id DESC LIMIT 4"); // TODO: make AJAX-ey
                // get first sentences
                $js_array = json_encode($stories);
                echo "var stories = ". $js_array . ";\n";
                echo "var genre = " . json_encode($category) . ";\n";
                echo "var last_story_id = stories[stories.length-1].id;\n";
                echo "display_stories(2);\n";
                echo "start_checking_for_earlier_stories();\n";
            ?>;/*]]>*/</script>
</div><!-- container for story previews-->
