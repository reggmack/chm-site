<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are a manufacturer and supplier of granite monuments, memorials, headstone markers, tombstones, gravestone, urns, vases, stone cross, benches and granite and marble statues. We understand the importance of family and we design and produce unique memorials that lovingly tell stories in stone.">
    <meta name="keywords" content="custom memorials, custom headstones, custom tombstones, custom gravestones, granite monuments, memorials, headstone markers, tombstones, gravestones, urns, vases, stone cross, benches, granite statues, marble statues, best headstones, best tombstones, best memorials, headstone design, tombstone design, memorial design, epitaphs, headstone epitaphs">
    <meta name="author" content="Graphix Ninja">

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
    <nav class="nav-extended nav-full-header splash">
      <div class="nav-background">
        <img class="active" src="img/backgrounds/bg-large-1.jpg" alt="cemetaryscape">
        <img src="img/backgrounds/bg-large-2.jpg" alt="cityscape">
        <img src="img/backgrounds/bg-large-3.jpg" alt="cityscape">
      </div>
      <div class="nav-wrapper container">
        <a href="index.php" class="brand-logo"><img class="responsive-img" src="img/chm-logo-black.svg" alt="chm logo"><span class="pad-bot-20">Clarksville Highway Memorials</span></a>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="featured.php">Gallery</a></li>
          <li><a href="terms.php">Our Terms</a></li>
          <li><a class='dropdown-button' href='about.php' data-activates='about-dropdown' data-belowOrigin="true" data-constrainWidth="false">About Us<i class="material-icons right">arrow_drop_down</i></a></li>
          <li><a href="epitaphs.php">Epitaphs</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <!-- Dropdown Structure -->
        <ul id='about-dropdown' class='dropdown-content'>
          <li><a href="about.php">Our Story</a></li>
          <li><a href="testimonials.php">Testimonials</a></li>
        </ul>

      </div>
      <div class="nav-header valign-wrapper">
        <div class="carousel carousel-slider center" data-indicators="true">
          <div class="carousel-item white-text" href="#one!">
            <div class="container valign-wrapper">
              <h1 style="margin:0">Heavenly Monuments</h1>
              <!-- <div class="tagline-splash">We have hundreds of well crafted and beautiful imported monuments available. We also can produce custom monuments to suit you and your loved ones needs.</div> -->
                <a href="featured.php" class="waves-effect waves-light btn shop-btn">Shop Now</a>
            </div>
          </div>
          <div class="carousel-item white-text" href="#two!">
            <div class="container valign-wrapper">
              <h1 style="margin:0">Heavenly Designs</h1>
              <div class="tagline"><p class="italianno" style="font-size: xx-large">Free Shipping within 150 mile radius</p></div>
              <a href="featured.php" class="waves-effect waves-light btn shop-btn">Shop Now</a>
            </div>
          </div>
          <div class="carousel-item white-text" href="#three!">
            <div class="container valign-wrapper">
              <h1 style="margin:0">Call Us Today</h1>
              <div class="tagline"><p style="font-size: xx-large">(615) 299-1535</p></div>
              <a href="featured.php" class="waves-effect waves-light btn shop-btn">Shop Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Fixed Masonry Filters -->
      <div class="categories-wrapper splash-gray">
        <div class="categories-container">
          <ul class="categories container nav-stretch" data-filter="type">
            <!-- <li class="active"><a href="#all">All</a></li> -->
            <li><a href="featured.php">Gallery</a></li>
            <li><a href="gallery.php#sing-mark-gran">Single Markers Granite</a></li>
            <li><a href="gallery.php#comp-mark-gran">Companion Markers Granite</a></li>
            <li><a href="gallery.php#sing-mark-bron">Single Markers Bronze</a></li>
            <li><a href="gallery.php#comp-mark-bron">Companion Markers Bronze</a></li>
            <li><a href="gallery.php#sing-monu">Single Monuments</a></li>
            <li><a href="gallery.php#comp-monu">Companion Monuments</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <ul class="side-nav" id="nav-mobile">
      <li><a href="featured.php"><i class="material-icons">collections</i>Gallery</a></li>
      <li><a href="terms.php"><i class="material-icons">gavel</i>Terms and Conditions</a></li>
      <li><a href="about.php"><i class="material-icons">person</i>About Us</a></li>
      <li><a href="testimonials.php"><i class="material-icons">comment</i>Testimonials</a></li>
      <li><a href="epitaphs.php"><i class="material-icons">import_contacts</i>Epitaphs</a></li>
      <li><a href="contact.php"><i class="material-icons">local_phone</i>Contact Us</a></li>
    </ul>


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
