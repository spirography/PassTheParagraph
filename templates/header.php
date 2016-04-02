<!DOCTYPE html>
<html>
  <head>
    <!-- CSS References Go Here -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/form.css" rel="stylesheet" type="text/css">
    <link href="css/navbar.css" rel="stylesheet" type="text/css">

    <!-- Favicon References Go Here -->

    <!-- Title -->
    <?php if (isset($title)): ?>
    <title>
      <?= htmlspecialchars($title) ?>
    </title>
    <?php else: ?>
    <title>Pass the Paragraph
    </title>
    <?php endif ?>

    <!-- JavaScript References -->
    <script src="js/script.js"></script>
  </head>

  <!-- Body Start -->
  <body>
      <div id="container">
          <!-- Navbar Start -->
          <nav id="navbar">
            <ul>
              <li><a class="active" href="#home">Home</a></li>
              <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn" onclick="GenreMenu()">Genres</a>
                <div class="dropdown-content" id="genres">
                  <a href="#1">Realistic Fiction</a>
                  <a href="#2">Historical</a>
                  <a href="#3">Mystery</a>
                  <a href="#4">Science Fiction</a>
                  <a href="#5">Fantasy</a>
                </div>
              </li>
            </ul>

            <script>
            function GenreMenu() {
               document.getElementById("genres").classList.toggle("show");
            }

            window.onclick = function(e) {
              if (!e.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var d = 0; d < dropdowns.length; d++) {
                  var openDropdown = dropdowns[d];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            </script>
          </nav>

          <!-- Navbar End -->

          <!-- Content Goes Here -->
          <div id="content">
