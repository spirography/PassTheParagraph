<form action="submit.php" method="post">
    <fieldset>
        <div class="form-group" style="width: 300px; text-align: center; margin: auto;">
            <h1><font face = "HelveticaNeue">Submit a Story</font></h1>
            <br>

        <h2><font face = "HelveticaNeue" size = "3">Select a Genre</font></h2>

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

        <!-- TITLE START -->
        <input type="text" name="title" placeholder="Title" maxLength="63" class="form-control">
        <br>
        <!-- TITLE END -->

        <!-- FIRST SENTENCE START -->
        <div id="sentence-display">&nbsp;</div>
        <textarea id="sentence-form" name="beginning" placeholder="The first few sentences of your story" rows="5" maxlength="200" onchange="display_char_limit()" onkeyup="display_char_limit()" class="form-control"></textarea>
        <script type="text/javascript">display_char_limit();</script>
        <br>
        <!--FIRST SENTENCE END -->

        <!-- SUBMISSION BUTTON START -->
        <button type="submit" class="btn btn-default"><font face = "HelveticaNeue">Submit Story</font></button>
        <!-- SUBMISSION BUTTON END -->
        </div>
    </fieldset>
</form>
