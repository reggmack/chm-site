<?php
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Ld8-EkUAAAAALpg2E331OSK_E5M3yZV3HH1jd-2',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else {
        // If CAPTCHA is successfully completed...

        ?>
        


        <?php
 	  $to = 'rmoseley93@gmail.com';
	  $email = ($_REQUEST['email']);
	  $fName = ($_REQUEST['fName']);
	  $lName = ($_REQUEST['lName']);
      $usrBestPhone = ($_REQUEST['usrBestPhone']);
      $commentBox = ($_REQUEST['commentBox']);
      $subject = 'New Inquiry from Heavenly Monuments Site!';
	  $message = "FirstName:$fName\nLastName:$lName\nEmail:$email\nPhone:$usrBestPhone\nComments:$commentBox\n";
	  $from = "From: $email\r\n";
	mail($to, $subject, $message, $from)
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thank You - Clarksville Highway Memorials</title>

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

  <body class="doc">

    <!-- Navbar and Header -->
    <?php include("includes/header-contact.html");?>

    <div id="contact" class="section gray">
        <div class="container">
            <div class="row">
                <div class="col s12 l9">
                    <div id="gallery-expand" class="scrollspy">
                        <h3>Thank you for your interest!</h3>
                        <p>A member of our team will contact you as soon as possible!</p>

                        <a href="gallery.php#all">
                            <p>Please feel free to keep browsing our site!</p>
                        </a></div>
                        

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





<?php
    }
?>




