<?php
ini_set('error_reporting', E_ALL);
error_reporting(-1);
header("Content-Type: text/html;charset=utf-8");
include_once 'server/link.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Freaky Future - A DYSTOPIC INMERSIVE EXPERIENCE</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
        <meta property="og:image"         content="<?php echo $link;?>img/seo.jpg" />
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
              </section>
              <footer>
                <?php include_once "templates/footer.php";?>    
              </footer>
          </div>
           
          
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="lib/flickity/js/flickity.pkgd.min.js"></script>
    </body>
</html>
