

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


<!-- Story Submissions and Stuff -->
<script type='text/javascript'>/*<![CDATA[*/<?php
            $contributions = query("SELECT content, date_created FROM submissions WHERE story_id=?", $story_id);
            $js_array = json_encode($contributions);
            echo "var contributions = ". $js_array . ";\n";
        ?>;/*]]>*/</script>
</table>
<div style="height:380px;min-width:312px;overflow-y:scroll">
<table style="table-layout:fixed">
<?php
    // display the continuations of the story
    // TODO: only display the first few
    // $fragments = '';
    // foreach ($userdata as $row)
    // {
    //     //     $table = "<tr><td>{$row["timestamp"]}</td><td>{$row["level"]}</td><td>{$row["player_kills"]}</td><td>{$row["enemy_kills"]}</td></tr>" . $table;
    // }
    //     print($fragments);
        ?>
</table>
