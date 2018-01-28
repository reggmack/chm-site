<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heavenly Monuments</title>

    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheet -->
    <link href="css/gallery-materialize.min.css" rel="stylesheet">
    <link href="css/chm.css" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

    <!-- Prism -->
    <link href="css/prism.css" rel="stylesheet">
    
  </head>

  <body>

    <!-- Navbar and Header -->
    <?php include("includes/header.html");?>

    <!-- Gallery -->
    <div id="portfolio" class="section gray">
      <div class="container">
          <h3 class="cinzel">Featured Design Types</h3>
        <div class="gallery row">
          <!-------------------------------- Single Marker Granite -------------------------------->
          <div class="col l4 m6 s12 gallery-item gallery-filter sing-mark-gran">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray" href="gallery.php#sing-mark-gran">
                <img class="responsive-img" src="img/feat-sing-mark-gran.jpg" alt="Single Marker Granite">
              </a>
              <div class="gallery-header">
                <span><b>Single Marker Granite</b></span>
              </div>
              
             
            </div>
          </div>
          
          <!-------------------------------- Companion Marker Granite -------------------------------->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter comp-mark-gran">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray" href="gallery.php#comp-mark-gran">
                <img class="responsive-img" src="img/feat-comp-mark-gran.jpg" alt="Companion Marker Granite">
              </a>
              <div class="gallery-header">
                <span><b>Companion Marker Granite</b></span>
              </div>
              
            </div>
          </div>
          
          <!-------------------------------- Single Marker Bronze -------------------------------->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter sing-mark-bron">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray" href="gallery.php#sing-mark-bron">
                <img class="responsive-img" src="img/feat-sing-mark-bron.jpg" alt="Single Marker Bronze">
              </a>
              <div class="gallery-header">
                <span><b>Single Marker Bronze</b></span>
              </div>
       
            </div>
          </div>

          <!-------------------------------- Companion Marker Bronze -------------------------------->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter comp-mark-bron">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray" href="gallery.php#comp-mark-bron">
                <img class="responsive-img" src="img/feat-comp-mark-bron.jpg" alt="Companion Markers Bronze">
              </a>
              <div class="gallery-header">
                <span><b>Companion Markers Bronze</b></span>
              </div>
              
            </div>
          </div>

          <!-------------------------------- Single Monument -------------------------------->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter sing-monu">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray" href="gallery.php#sing-monu">
                <img class="responsive-img" src="img/feat-sing-mon.jpg" alt="Single Monument">
              </a>
              <div class="gallery-header">
                <span><b>Single Monument Granite</b></span>
              </div>
              
            </div>
          </div>
          
          <!-------------------------------- Companion Monument -------------------------------->
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter comp-monu">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray" href="gallery.php#comp-monu">
                <img class="responsive-img" src="img/feat-comp-mon-gran.jpg" alt="Companion Monument">
              </a>
              <div class="gallery-header">
                <span><b>Companion Monument Granite</b></span>
              </div>
              
            </div>
          </div>

        </div><!-- END GALLERY ROW -->
      </div>
    </div><!-- /.container -->

    <?php include("includes/footer.html");?>


    <!-- Core Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="js/color-thief.min.js"></script>
    <script src="js/galleryExpand.js"></script>
    <script src="js/init.js"></script>

  </body>
</html>
