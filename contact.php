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



  <style>

  .navbar {
  /*background-color: #fff;*/
  font-family: 'Special Elite', cursive;
  margin-bottom: 0;
  z-index: 9999;
  border: 0;
  font-size: 15px !important;
  line-height: 1.42857143 !important;
  border-radius: 0;
  }

  .navbar li a, .navbar .navbar-brand {
    color: #000 !important;
  }


  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: red !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #000 !important;
  }

  .jumbotron {
    background-color: #eee;
  }



  .period {
    color: red;
  }

  .col-md-4 {

  }

  #container-one {
    background-color: red;
  }


  /* footer */
  footer {
    background-color: #eee;
    padding: 32px;
  }


  /* Media */
  @media screen and (max-width: 768px) {
  .col-sm-4 {
    text-align: center;
    margin: 25px 0;
  }


  </style>
</head>
<body>




<!-- Navigation bar -->
<nav class="navbar navbar-default navbar-fixed-top">

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span></button>
      <!-- </<!--  --><!--button>  -->

      <a id="logo" class="navbar-brand" href="#home">pass the paragraph<span class="period">.</span></a>

    </div>



    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">home</a></li>
        <li><a href="browse.html">browse<span class="caret"></span></a></li>
        </li>
        <li><a href="contact.html">contact</a></li>
      </ul>
    </div>

  </div>


</nav>


<!-- Intro Jumbotron-->
<div class ="jumbotron text-center">

<h2>Contact</h2>

</div>



<!-- Contact container -->
<div id="contact" class="container">

  <p class="text-right">Questions? Comments? Suggestions? Please email us!</p>
  <div class="row test">
    <div class="col-md-4">

      <p><i class="fa fa-envelope-o"></i> <a href="mailto:email@email.com" target="_blank">email@email.com</a></p>

      <p><a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i>   Facebook Page</a></p>


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



</footer>
</body>
</html>
