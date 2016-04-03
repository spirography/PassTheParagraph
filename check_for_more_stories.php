<?php

// configuration
require("includes/config.php");
// if form was submitted (square clicked) (takes row and col as POST arguments)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // check if values are given
    $contents = json_decode(file_get_contents("php://input"), true);
    if ($contents == null) {
        echo "ERROR1";
    } else if (!isset($contents["story"])) {
        echo "ERROR2";
    } else if (!isset($contents["category"])) {
        echo "ERROR3";
    } else {
        // TODO: check if sentence is a valid sentence id
        // TODO: check if story is a valid story id

        // check for updates
        if ($contents["category"] === 0) {
            $updates = query("SELECT * from stories WHERE id < ? ORDER BY id DESC LIMIT 4", $contents["story"]);
        } else {
            $updates = query("SELECT * from stories WHERE genre=? AND id < ? ORDER BY id DESC LIMIT 4", $contents["category"], $contents["story"]);
        }

        // return updates as JSON array
        echo json_encode($updates);

    }
}


?>
