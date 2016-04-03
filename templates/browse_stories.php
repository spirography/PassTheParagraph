

<!-- Intro Jumbotron-->
<div class ="jumbotron text-center">

	<h1>Pass the Paragraph</h1>
	<p>Pass the Paragraph is a website where individuals can collaborate to develop a story. You can either continue someone else’s story or start your own and watch it evolve as others contribute. Each segment contributed must be 200 characters or less.</p>

</div>


<!-- Story previews-->
<div id="story-container" class="container">
    <script type='text/javascript'>/*<![CDATA[*/
        <?php
                $stories = query("SELECT * from stories ORDER BY id DESC LIMIT 6"); // TODO: make AJAX-ey
				for($i = 0; $i < count($stories); $i++) { // get hook of the story
					$val = query("SELECT content from submissions WHERE story_id = ? LIMIT 1", $stories[$i]["id"]);
					$stories[$i]["content"] = $val[0]["content"];
					echo "console.log(" . json_encode($val) . ");\n";
				}
                // get first sentences
                $js_array = json_encode($stories);
                echo "var stories = ". $js_array . ";\n";
                echo "var last_story_id = stories[stories.length-1].id;\n";
                echo "display_stories(3);\n";
                echo "start_checking_for_earlier_stories();\n";
            ?>;/*]]>*/</script>
</div>
