<?php  // For Google Analytics
include_once './application/analyticstracking.php';
echo $google_analytics; ?>

<?php require_once './application/config.php'; ?>
<?php require_once './views/header.php'; ?>

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
					<a class="main-btn apply-btn" href="#apply">Hacker Application</a>
					<!-- <a type="button" class="btn btn-default" href="#hackerForm" data-toggle="tab">Hacker</a> -->
					<!-- VOLUNTEER APPLICATION -->
					<a class="main-btn volunteer-btn" href="#apply">Volunteer</a>
					<!-- SPONSOR APPLICATION -->
					<a class="main-btn sponsor-btn" href="#apply">Sponsor</a>
					<div class="spacer"></div>
				</div>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	<?php // die($form); ?>
	<?php // die(trim($_SERVER['PATH_INFO'], '/')); ?>

	<!-- ABOUT -->
	<?php require_once './views/about.php'; ?>

	<!-- APPLICATION FORM -->
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
					<p><a href="#apply"><button type="button" class="btn btn-green btn-lg">Show Your Support!</button></a></p>
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
      			<p class="pull-right"><br><a data-toggle="modal" data-target="#contactModal"><button type="button" class="btn btn-green">Contact Us!</button></a></p>
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
	<!-- Levels of Sponsorship Modal -->
	<?php require_once './views/sponsorshipLevelsModal.php'; ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/jquery.js"></script>
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
		$(document).ready(function() {
		    $('.apply-btn').click(function() {
			    $('ul.panel-tabs li.active').removeClass('active');
			    $('ul.panel-tabs li.hackerSignup').addClass('active');
			    $('div.tab-pane.active').removeClass('active');
			    $('div.tab-pane.hackerSignup').addClass('active');
		    });
		    $('.volunteer-btn').click(function() {
		    	$('ul.panel-tabs li.active').removeClass('active');
			    $('ul.panel-tabs li.volunteerSignup').addClass('active');
			    $('div.tab-pane.active').removeClass('active');
			    $('div.tab-pane.volunteerSignup').addClass('active');
		    });
		    $('.sponsor-btn').click(function() {
		    	$('ul.panel-tabs li.active').removeClass('active');
			    $('ul.panel-tabs li.sponsorSignup').addClass('active');
			    $('div.tab-pane.active').removeClass('active');
			    $('div.tab-pane.sponsorSignup').addClass('active');
		    });
		});
	</script>
  </body>
</html>
