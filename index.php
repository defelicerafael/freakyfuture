<?php
ini_set('error_reporting', E_ALL);
error_reporting(-1);
header("Content-Type: text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Freaky Future - A DYSTOPIC INMERSIVE EXPERIENCE</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/app.css" media="all">
        <link rel="stylesheet" type="text/css" href="lib/flickity/css/flickity.min.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/carousel.css" media="all">

        <!-- META DESCRIPTION -->
        <meta name="description" content="taxmotor">
        
        <meta property="og:url"           content="https://freakyfuture.com" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Freaky Future" />
        <meta property="og:description"   content="A DYSTOPIC INMERSIVE EXPERIENCE" />
        <meta property="og:image"         content="img/footer/logosolo.png" />
    </head>
    <body>
          <div>
              <header>  
                <?php include_once "templates/header.php";?>
              </header>
              <section>
                <?php include_once "templates/collection.php";?>
                <?php include_once "templates/carousel.php";?>
                <?php include_once "templates/mint.php";?>
                <?php include_once "templates/text.php";?>
                <?php include_once "templates/purcharse.php";?>
                <?php include_once "templates/long-term.php";?>
                <?php include_once "templates/our-goals.php";?>
                <?php include_once "templates/the-team.php";?>
              </section>
              <footer>
                <?php include_once "templates/footer.php";?>    
              </footer>
          </div>
           
          
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/flickity/js/flickity.pkgd.min.js"></script>
        <script src="js/audio.js"></script>
        <script src="js/mint.js"></script>
    </body>
</html>
