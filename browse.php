

<!-- Story Title -->
<h1><?php
    // configuration
    require("includes/config.php");

    $story_id = htmlspecialchars($_GET["s"]);
    $story = query("SELECT * from stories WHERE id=?", $story_id);

    if (count($story) != 1) {
        pageredirect("index.php");
    }

    foreach($story[0] as $key => $value)
    {
        echo $key." has the value ". $value . "<br>";
    }

        // $table = '';
        //
        //
        // foreach ($userdata as $row)
        // {
        //     $table = "<tr><td>{$row["timestamp"]}</td><td>{$row["level"]}</td><td>{$row["player_kills"]}</td><td>{$row["enemy_kills"]}</td></tr>" . $table;
        //     }
        //     print($table);
?>
</h1>
