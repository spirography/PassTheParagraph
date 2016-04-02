<div class="jumbotron text-center" style="padding: 15px 0;"><h1>Science Fiction</h1></div>

<?php

    // get stories from database
    // TODO: get story genre using GET



    // display them
?>
<script type='text/javascript'>/*<![CDATA[*/<?php
            $stories = query("SELECT * from stories LIMIT 4");
            $js_array = json_encode($stories);
            echo "var stories = ". $js_array . ";\n";
            echo "var last_story_id = ". json_encode(4) . ";\n";
            echo "display_stories();\n";
        ?>;/*]]>*/</script>


<div class="container">
<div class="row text-center">

	<div class="col-md-6 row-height">
        <div class="story-preview">

	    <h2>story title 1</h2>

	    <p>
	    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus ipsum at rhoncus convallis. Donec ac sodales nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi...</p>
	   </div>
   </div>


   <div class="col-md-6 row-height">
       <div class="story-preview">

       <h2>story title 2</h2>

       <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus ipsum at rhoncus convallis. Donec ac sodales nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi...</p>
      </div>
  </div>

</div><!-- container for first row -->


<!-- Container for second row of stories -->
<div class="row text-center">

    <div class="col-md-6 row-height">
        <div class="story-preview">

	    <h2>story title 3</h2>

	    <p>
	    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus ipsum at rhoncus convallis. Donec ac sodales nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi...</p>
	   </div>
   </div>


   <div class="col-md-6 row-height">
       <div class="story-preview">

       <h2>story title 4</h2>

       <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus ipsum at rhoncus convallis. Donec ac sodales nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla facilisi...</p>
      </div>
  </div>

</div>
</div><!-- container for story previews-->
