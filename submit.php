<?php

    // configuration
    require("includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        // validate submission
        $form_title = htmlspecialchars($_POST["title"]);
        if (empty($form_title))
        {
            apologize("Need to give a valid title");
        }
        // TODO: check if title is within the valid number of characters

        $form_genre = htmlspecialchars($_POST["genre"]);
        if (empty($form_genre) || $form_genre < 1 || $form_genre > 6 || !ctype_digit($form_genre))
        {
            apologize("Invalid genre chosen: " . $form_genre);
        }

        $form_beginning = htmlspecialchars($_POST["beginning"]);
        if (empty($form_beginning))
        {
            apologize("Need to start the story off with a sentence or two");
        }
        // TODO: check if title is within the valid number of characters

        // once everything has been validated,
        // add the story to the database
        query("INSERT INTO stories (title, genre) VALUES(?, ?)", $form_title, $form_genre);
        // TODO: check if insertion failed

        // get the ID of the newly inserted database
        $last_id = query("SELECT MAX(id) from stories")[0]["MAX(id)"];

        // and add the first submission to the story
        query("INSERT INTO submissions (story_id, content) VALUES(?, ?)", $last_id, $form_beginning);

        // render that specific story page
        pageredirect("read.php?s=" . $last_id);
    }
    else
    {
        // else render submission form
        render("submit-story_form.php", ["title" => "Submit a Story"]);
    }


?>
