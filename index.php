<?php require_once './application/config.php'; ?>
<?php require_once './views/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico?v=1.1">
    <!-- <link rel="shortcut icon" href="hackinged.ico"> -->
    <!-- <link rel="shortcut icon" href="assets/ico/faviconΩ.png"> -->

    <title>Hacking Edu</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.custom.js"></script>

  </head>

  <body>
	<?php $section = trim($_SERVER['PATH_INFO'], '/');?>
	<!-- Menu -->
	<nav class="menu " id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="#home">Hacking Edu</a></h1>
			<i class="fa fa-arrow-right menu-close"></i>
			<a href="#home">Home</a>
			<a href="#about">About</a>
			<a href="#sponsors">Sponsors</a>
			<a href="#rules">Rules</a>
			<a href="#schedule">Schedule</a>
			<!-- <a href="#myModal">Contact</a> -->
			<a class="" data-toggle="modal" data-target="#myModal">Contact</a>
			<a href="<?php echo FACEBOOK_URL; ?>"><i class="fa fa-facebook"></i></a>
			<a href="<?php echo TWITTER_URL; ?>"><i class="fa fa-twitter"></i></a>
			<a href="<?php echo GOOGLE_PLUS_URL; ?>" rel="publisher"><i class="fa fa-google-plus"></i></a>
			<a href="mailto:hackingeduteam@gmail.com"><i class="fa fa-envelope"></i></a>
		</div>
		<?php echo $section; ?>
		<!-- Menu button -->
		<div id="menuToggle"><i class="fa fa-bars"></i></div>
	</nav>
	<!-- MAIN IMAGE SECTION -->
	<div id="home" class="headerwrap ">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<!-- <h1>Hacking Edu</h1> -->
					<img class="main-img" src="./assets/img/hacklogo-white-no-border.png" alt="">
					<h3>SF Bay Area</h3>
					<h2>Disrupting The Education Market</h2>
					<!-- HACKER APPLICATION -->
					$is_admin = ($user['permissions'] == 'admin' ? true : false);
					<a class="main-btn apply-btn" href="<?php // $form = ()  ?>">Hacker Application</a>
					<!-- VOLUNTEER APPLICATION -->
					<a class="main-btn volunteer-btn" href="#apply">Volunteer</a>
					<!-- SPONSOR APPLICATION -->
					<a class="main-btn sponsor-btn" href="#apply">Sponsor</a>
					<div class="spacer"></div>
				</div>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->

	<!-- ABOUT -->
	<?php require_once './views/about.php'; ?>

	<!-- APPLY -->
	<?php require_once './views/formSignUp.php'; ?>

	<!-- SPONSORS -->
	<?php require_once './views/sponsors.php'; ?>

	<!-- RULES -->
	<?php require_once './views/rules.php'; ?>

    <!-- MAC IMAGE -->
<!-- 	<div class="container">
		<div class="row centered">
			<div class="col-lg-10 col-lg-offset-1">
				<img class="img-responsive" src="assets/img/spot.png" alt="Spot Theme">
			</div>
		</div>
	</div> -->

	<!-- SCHEDULE -->
	<?php require_once './views/schedule.php'; ?>




	<!-- CALL TO ACTION -->
	<div id="call">
		<div class="container ">
			<div class="row">
				<h3>Interested in Sponsoring?</h3>
				<div class="col-lg-8 col-lg-offset-2">
					<p>Although this is our first year, we want to show the universities in the bay area that students can make new and better products to improve the education system.  Help make a difference by supporting us!</p>
					<p><button type="button" class="btn btn-green btn-lg">Show Your Support!</button></p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Call to action -->

	<!-- STAY CONNECTED -->
    <div class="container ">
    	<div class="row mt">
      		<div class="col-lg-8">
	        	<h1>Stay Connected</h1>
	        	<p>Join us on our social networks for all the latest updates, service announcements and more.</p>
      		</div>
      		<div class="col-lg-4">
      			<p class="pull-right"><br><button type="button" class="btn btn-green">Contact Us!</button></p>
      		</div>
    	</div><!-- /row -->
    </div><!-- /.container -->

	<!-- SOCIAL FOOTER -->
	<section id="contact"></section>
	<div id="sf">
		<div class="container ">
			<div class="row">
				<a href="<?php echo FACEBOOK_URL; ?>">
					<div class="col-lg-4 dg">
						<h4 class="ml">FACEBOOK</h4>
						<p class="centered"><i class="fa fa-facebook"></i></p>
						<p class="ml">> Become A Friend</p>
					</div>
				</a>
				<a href="<?php echo TWITTER_URL; ?>">
					<div class="col-lg-4 lg">
						<h4 class="ml">TWITTER</h4>
						<p class="centered"><i class="fa fa-twitter"></i></p>
						<p class="ml">> Follow Us</p>
					</div>
				</a>
				<a href="<?php echo GOOGLE_PLUS_URL; ?>">
					<div class="col-lg-4 dg">
						<h4 class="ml">GOOGLE +</h4>
						<p class="centered"><i class="fa fa-google-plus"></i></p>
						<p class="ml">> Add Us To Your Circle</p>
					</div>
				</a>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Social Footer -->


    <!-- Contact Form Modal -->
	<?php require_once './views/formContact.php'; ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
	<script src="assets/js/masonry.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/classie.js"></script>
	<script src="assets/js/AnimOnScroll.js"></script>
	<script>
		new AnimOnScroll( document.getElementById( 'grid' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		} );
		new AnimOnScroll( document.getElementById( 'process' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		} );
	</script>
  </body>
</html>
