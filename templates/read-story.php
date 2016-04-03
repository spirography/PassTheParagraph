<!-- Story Title -->
<?php

    $story_id = htmlspecialchars($_GET["s"]);
    $story = query("SELECT * from stories WHERE id=?", $story_id);

    if (count($story) != 1) {
        apologize("NOT FOUND");
    }

    /*foreach($story[0] as $key => $value)
    {
        echo $key." has the value ". $value . "<br>";
    }*/

    echo '<div class="jumbotron text-center themed-color-' . $story[0]["genre"] . '" style="padding: 15px 0;"><h1>' . $story[0]["title"] . '</h1></div>';
?>
<div id="reading-container">
<div id="sentences">
<!-- Story Submissions and Stuff -->
<script type='text/javascript'>/*<![CDATA[*/<?php
            $contributions = query("SELECT id, content, date_created FROM submissions WHERE story_id=?", $story_id);
            $js_array = json_encode($contributions);
            echo "var contributions = ". $js_array . ";\n";
            echo "var story_id = parseInt(". json_encode($story_id) . ");\n";
            echo "var genre = parseInt(" . json_encode($story[0]["genre"]). ");\n";
            echo "render_fragments(false);\n";
            echo "start_checking_a_story_for_updates();\n"; // check if others have added to story
        ?>;/*]]>*/</script>
</div>

<!-- Form for Submitting Next Part of Story -->
<div id="sentence-submission">
    <div id="sentence-display">&nbsp;</div>

        <!-- CONTRIBUTION START -->
        <textarea id="sentence-form" name="sentence" rows="2" cols="70" maxlength="140" onchange="display_char_limit()" onkeyup="display_char_limit()" class="form-control"></textarea>
        <!--CONTRIBUTION END -->

        <!-- SUBMISSION BUTTON START -->
        <button onclick="submit_sentence()" class="btn btn-default">Add to Story</button>
        <!-- SUBMISSION BUTTON END -->
</div>
</div>
