<?php

// configuration
require("includes/config.php");
// if form was submitted (square clicked) (takes row and col as POST arguments)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // check if values are given
    $contents = json_decode(stripslashes(file_get_contents("php://input")), true);
    if ($contents == null) {
        echo "ERROR";
    } else {
        // check if JSON was correctly defined for the variables
        if ($contents["content"] == null || $contents["story"] == null) {
            echo "ERROR";
        } else {
            // TODO: check if content is within the valid length
            // TODO: check if story is a valid story id

            // insert sentence into database
            query("INSERT into submissions (story_id, content) VALUES (?, ?)", $contents["story"], $contents["content"]);
            echo $contents["content"]; // success

        }
    }
}


?>
