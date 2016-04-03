<form action="submit-story.php" method="post">
    <fieldset>
        <div class="form-group" style="width: 300px; text-align: center; margin: auto;">
            <h1>Submit a Story</h1>
            <br>
        <!-- TITLE START -->
        <input type="text" name="title" placeholder="Title" maxLength="63" class="form-control">
        <br>
        <!-- TITLE END -->

        <!-- GENRE START -->
        <select name="genre" class="form-control">
            <option value="1">Realistic Fiction</option>
            <option value="2">Science Fiction</option>
            <option value="3">Mystery</option>
            <option value="4">Fantasy</option>
            <option value="5">Historical</option>
            <option value="6">Comedy</option>
        </select>
        <br>
        <!-- GENRE END -->

        <!-- FIRST SENTENCE START -->
        <textarea name="beginning" rows="2" cols="70" maxlength="140" class="form-control"></textarea>
        <br>
        <!--FIRST SENTENCE END -->

        <!-- SUBMISSION BUTTON START -->
        <button type="submit" class="btn btn-default">Submit Story</button>
        <!-- SUBMISSION BUTTON END -->
        </div>
    </fieldset>
</form>
