<!DOCTYPE html>
<html>
<head>
	<title>contact | pass the paragraph.</title>


	<!-- default -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap and jQuery-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 	<!-- Font awesome for icons-->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Font for nav bar -->
	<link href='https://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/responsive.css" type="text/css">
	<link rel="stylesheet" href="css/styles.css" type="text/css">

	<script src="js/script.js"></script>


</head>




<body>

<!-- Navigation bar -->
<nav class="navbar navbar-default navbar-top">

	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span></button>
			<!-- <img src="img/logo.png" href="pass the paragraph logo" width="35"> -->
			<a id="logo" class="navbar-brand" href="index.php">pass the paragraph<span class="period">.</span></a>

		</div>



		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">home</a></li>
				<li class="dropdown"><a class ="dropdown-toggle" data-toggle="dropdown" href="browse.php">browse<span class="caret"></span></a>
	 				<ul class="dropdown-menu">
	 					
		 				<li><a href="browse.php?g=1">Realistic Fiction</a></li>
		 				<li><a href="browse.php?g=2">Science Fiction</a></li>
		 				<li><a href="browse.php?g=3">Mystery</a></li>
		 				<li><a href="browse.php?g=4">Fantasy</a></li>
						<li><a href="browse.php?g=5">Historical</a></li>
						<li><a href="browse.php?g=6">Comedy</a></li>
	 				</ul>
				</li>
				<li><a href="submit-story.php">submit</a></li>
				<li><a href="contact.php">contact</a></li>
			</ul>
		</div>

	</div>
</nav>




<!-- jumbotron -->
<div class="jumbotron text-center">
	<h2>Contact</h2>
</div>



<!-- Contact container -->
<div class="container">
 <p class="text-center">Questions? Comments? Suggestions? Talk to us!</p>
  <div class="row test">
    <div class="col-md-4">
 
      <p><span class="glyphicon glyphicon-map-marker"></span> University of Rochester, Rochester, NY 14627</p>
      <p><span class="glyphicon glyphicon-phone"></span> Phone: +1 585 275 2121</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Email: <a href="mailto:admit@admissions.rochester.edu" target="_blank">admit@admissions.rochester.edu</a></p> 
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div>












<!-- google maps -->
<style>
#googleMap {
    width: 100%; /* Span the entire width of the screen */
    height: 400px; /* Set the height to 400 pixels */
    -webkit-filter: grayscale(100%);
    filter: grayscale(50%); /* Change the color of the map to black and white * /
}
</style>






<!-- Add Google Maps -->

<div id="googleMap"></div>


<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(43.128597, -77.630039);

function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>
