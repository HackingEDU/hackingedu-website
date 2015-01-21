<?php
$to = "james@thekao.com";

// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["email"]==""||$_POST["subject"]==""||$_POST["message"]=="") {
    echo "Please fill all fields..";
}

$name = $_POST["name"];
$email= $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$headers = "From: " . $email . "\r\n" .
           "Reply-To: james@thekao.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

$isSent = mail($to, $subject, $message, $headers);

// require_once './../views/header.php'; //
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/img/favicon.ico?v=1.1">
    <!-- <link rel="shortcut icon" href="hackinged.ico"> -->
    <!-- <link rel="shortcut icon" href="assets/ico/faviconΩ.png"> -->

    <title>HackingEDU</title>

    <link rel="stylesheet" href="./../libraries/flexisel-master/css/style.css">
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap Image Gallery -->
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-image-gallery.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./libraries/owl.carousel/owl-carousel/owl.carousel.css"> -->
    <!-- <link rel="stylesheet" href="./libraries/owl.carousel/owl-carousel/owl.theme.css"> -->
    <!-- <link rel="stylesheet" href="./libraries/Smooth-Div-Scroll/css/smoothDivScroll.css"> -->
    <script src="../assets/js/modernizr.custom.js"></script>
    <!--<script type="text/javascript" src="./assets/js/jssor.core.js"></script>
    <script type="text/javascript" src="./assets/js/jssor.utils.js"></script>
    <script type="text/javascript" src="./assets/js/jssor.slider.js"></script> -->


  </head>

  <body>

	<!-- Menu -->
	<nav class="menu " id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a class="close-it" href="#home">HackingEDU</a></h1>
			<i class="fa fa-arrow-right menu-close close-it"></i>
			<a class="close-it" href="#about">About</a>
            <a class="close-it" href="#team">Team</a>
            <a class="close-it" href="#rules">Rules</a>
            <a class="close-it" href="#schedule">Schedule</a>
            <a class="close-it" href="#sponsors">Sponsors</a>
			<a href="http://hackingedu.tumblr.com/">Blog</a>
			<a class="close-it" data-toggle="modal" data-target="#contactModal">Contact</a>
			<a href="<?php echo FACEBOOK_URL; ?>" target="rss"><i class="fa fa-facebook"></i></a>
			<a href="<?php echo TWITTER_URL; ?>" target="rss"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo GOOGLE_PLUS_URL; ?>" target="rss" rel="publisher"><i class="fa fa-google-plus"></i></a>
            <a href="<?php echo INSTAGRAM_URL; ?>" target="rss" rel="publisher"><i class="fa fa-instagram"></i></a>
			<a href="<?php echo LINKEDIN_URL; ?>" target="rss" rel="publisher"><i class="fa fa-linkedin"></i></a>
			<a class="close-it" href="mailto:team@hackingedu.co"><i class="fa fa-envelope"></i></a>
		</div>

		<!-- Menu button -->
		<div id="menuToggle"><i class="fa fa-bars"></i></div>
	</nav>

  <!-- Social Like/Follow Buttons -->
  <div class="top-left-social">
    <!-- Facebook Like -->
    <div class="fb-like" data-href="<?php echo FACEBOOK_URL; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share=""></div>
    <!-- Google+ Plus -->
    <div class="g-follow" data-annotation="bubble" data-height="20" data-href="<?php echo GOOGLE_PLUS_URL; ?>" data-rel="publisher"></div>
    <!-- Twitter Follow -->
    <a href="<?php echo TWITTER_URL; ?>" class="twitter-follow-button" data-show-count="true">Follow @hackingedusf</a>
  </div>

  <div id="body">
    <!-- MAIN IMAGE SECTION -->
    <div id="home" class="headerwrap">
      <div class="container">
        <div class="row mg-bottom-7em">
          <div class="col-lg-8 col-lg-offset-2">
            <img class="marg-top-20 col-xs-12 col-sm-10 col-lg-10 col-sm-offset-1 col-lg-offset-1" alt="HackingEDU hackathon" src="./../assets/img/hacklogo-white-no-border.png" alt="">
            <div class="col-lg-10 col-lg-offset-1">
              <h1 class="mobile-size">Thanks!</h1>
            </div>
          </div>
        </div><!-- row -->
      </div><!-- /container -->
    </div><!-- /headerwrap -->
  </div>
</body>
</html>
