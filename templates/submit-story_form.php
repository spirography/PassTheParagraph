<h1>Submit a Story</h1>

<form action="submit-story.php" method="post">
    <fieldset>
        <!-- TITLE START -->
        <input type="text" name="title" placeholder="Title" maxLength="20">
        <!-- TITLE END -->

        <!-- GENRE START -->
        <select name="genre">
            <option value="1">Realistic Fiction</option>
            <option value="2">Historical</option>
            <option value="3">Mystery</option>
            <option value="4">Science Fiction</option>
        </select>
        <!-- GENRE END -->

        <!-- FIRST SENTENCE START -->
        <textarea name="beginning" rows="2" cols="70" maxlength="140">

        </textarea>
        <!--FIRST SENTENCE END -->

        <!-- SUBMISSION BUTTON START -->
        <button type="submit">Submit Story</button>
        <!-- SUBMISSION BUTTON END -->
    </fieldset>
</form>
