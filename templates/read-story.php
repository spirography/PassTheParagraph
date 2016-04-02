<!-- Story Title -->
<?php

    $story_id = htmlspecialchars($_GET["s"]);
    $story = query("SELECT * from stories WHERE id=?", $story_id);

    if (count($story) != 1) {
        apologize("NOT FOUND");
    }

    foreach($story[0] as $key => $value)
    {
        echo $key." has the value ". $value . "<br>";
    }

    echo "<h1>" . $story[0]["title"] . "</h1>";
?>

<div id="sentences">
<!-- Story Submissions and Stuff -->
<script type='text/javascript'>/*<![CDATA[*/<?php
            $contributions = query("SELECT id, content, date_created FROM submissions WHERE story_id=?", $story_id);
            $js_array = json_encode($contributions);
            echo "var contributions = ". $js_array . ";\n";
            echo "render_fragments();\n";
        ?>;/*]]>*/</script>

</div>

<!-- Form for Submitting Next Part of Story -->
<div id="sentence-submission">

        <!-- CONTRIBUTION START -->
        <textarea id="sentence-form" name="sentence" rows="2" cols="70" maxlength="140">

        </textarea>
        <!--CONTRIBUTION END -->

        <!-- SUBMISSION BUTTON START -->
        <button onclick="submit_sentence()">Add to Story</button>
        <!-- SUBMISSION BUTTON END -->
</div>
