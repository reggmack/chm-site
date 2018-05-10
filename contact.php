<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Clarksville Highway Memorials</title>

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

    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>

  <body class="doc">

    <!-- Navbar and Header -->
    <?php include("includes/header-contact.html");?>

    <div id="contact" class="section gray">
        <div class="container">
            <div class="row">
                <div class="col s12 l9">
                    <div id="gallery-expand" class="scrollspy">
                        <h3>Contact Us</h3>
                        
                        <div id="contact-form"> 
                            <form class="col s12" action="form.php" method="post" name="classicForm" id="classicForm">
                                <div class="row" style="padding: 7px 0 0 0;">
                                <h5>If you have any questions about our products or services please fill out the form below and we will contact you shortly.</h5>
                                <br>
                                    <!------------------------ NAME ------------------------>
                                    <div class="input-field col s6">
                                        <input id="fName" name="fName" type="text" class="validate" required>
                                        <label for="fName">First Name</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input id="lName" name="lName" type="text" class="validate" required>
                                        <label for="lName">Last Name</label>
                                    </div>
                
                                    <!------------------------ PHONE ------------------------>
                                    <div class="input-field col s6">
                                        <input id="usrBestPhone" type="text" class="recommendedField phone validate" name="usrBestPhone" id="usrBestPhone" maxlength="14" required>
                                        <label for="usrBestPhone">Phone</label>
                                    </div>
                
                                    <!------------------------ EMAIL ------------------------>
                                    <div class="input-field col s6">
                                        <input id="email" name="email" type="email" class="validate" required>
                                        <label for="email">Email</label>
                                    </div>
                
                
                                    <!------------------------ COMMENTS ------------------------>
                                    <div class="input-field col s12">
                                        <textarea id="commentBox" name="commentBox"class="materialize-textarea" required></textarea>
                                        <label for="commentBox">Questions/Comments:</label>
                                    </div>

                                    <div id="html_element"></div>
                
                                    <button id="btnSubmit" class="btn waves-effect waves-light green darken-1 hidden" type="submit" name="action">Submit</button>
                                </div>
                                
                                <div class="g-recaptcha" data-sitekey="6Ld8-EkUAAAAAFBAlz7sXD_IoPNDLtJ6x3gmpA0f" data-callback="recaptchaCallback"></div>
                            </form>

                            <script>
                                function recaptchaCallback() {
                                    var googleResponse = jQuery('#g-recaptcha-response').val();
                                    if (!googleResponse) {
                                        $('<p style="color:red !important" class=error-captcha"><span class="glyphicon glyphicon-remove " ></span> Please fill up the captcha.</p>" ').insertAfter("#html_element");
                                        return false;
                                    } else {            
                                        return true;
}
                                }
                            </script>
                        </div>







                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div>

    <?php include("includes/footer.html");?>


    <!-- Core Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/prism.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/color-thief.min.js"></script>
    <script src="js/galleryExpand.js"></script>
    <script src="js/docs-init.js"></script>

    <script>
            $( document ).ready(function(){
              $(".button-collapse").sideNav();
              
              $(document).ready(function() {
                  $('select').material_select();
              });
            })
        </script>


    

  </body>
</html>
