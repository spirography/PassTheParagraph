<?php

// configuration
require("includes/config.php");
// if form was submitted (square clicked) (takes row and col as POST arguments)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // check if values are given
    $contents = json_decode(file_get_contents("php://input"), true);
    if (!isset($contents)) {
        echo "ERROR";
    } else {
        // check if JSON was correctly defined for the variables
        if (!isset($contents["sentence"]) || !isset($contents["story"])) {
            echo "ERROR";
        } else {
            // TODO: check if sentence is a valid sentence id
            // TODO: check if story is a valid story id

            // check for updates
            $updates = query("SELECT * from submissions WHERE story_id=? AND id > ?", $contents["story"], $contents["sentence"]);

            // return updates as JSON array
            echo json_encode($updates);

        }
    }
}


?>
