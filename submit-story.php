<?php

    // configuration
    require("includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        // validate submission
        if (empty($_POST["TODO: change this"]))
        {
            apologize("You must enter a valid thingamabob here");
        }


        // once everything has been validated,
        // add the story to the database


    }
    else
    {
        // else render submission form
        render("submit-story_form.php", ["title" => "Submit a Story"]);
    }


?>
