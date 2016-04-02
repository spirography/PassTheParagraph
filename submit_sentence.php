<?php

// configuration
require("includes/config.php");
// if form was submitted (square clicked) (takes row and col as POST arguments)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // check if values are given
    $contents = json_decode(stripslashes(file_get_contents("php://input")), true);
    if ($contents != null) {

        // query("INSERT into submissions (story_id content) VALUES (?, ?)", $story_id, $contents);
        echo $contents["content"];
    } else {
        echo "NULL";
    }



}


?>
