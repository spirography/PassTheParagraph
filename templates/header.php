<!DOCTYPE html>
<html>
  <head>
    <!-- CSS References Go Here -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">

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

          </nav>

          <!-- Navbar End -->

          <!-- Content Goes Here -->
          <div id="content">
