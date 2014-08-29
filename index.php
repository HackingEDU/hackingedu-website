<?php
// For Google Analytics
include_once './application/analyticstracking.php';
// For team section (holds Member class)
include_once './application/controllers/teamController.php';
echo $google_analytics; ?>

	<?php require_once './application/config.php'; ?>
	<?php require_once './views/header.php'; ?>
		<!-- Social Like/Follow Buttons -->
		<div class="top-left-social">
			<!-- Facebook Like -->
			<div class="fb-like" data-href="https://www.facebook.com/hackingedusf" data-layout="button_count" data-action="like" data-show-faces="true" data-share=""></div>
			<!-- Google+ Plus -->
			<div class="g-follow" data-annotation="bubble" data-height="20" data-href="https://plus.google.com/100755871712588838625" data-rel="publisher"></div>
			<!-- Twitter Follow -->
			<a href="https://twitter.com/hackingedusf" class="twitter-follow-button" data-show-count="true">Follow @hackingedusf</a>
		</div>

		<!-- MAIN IMAGE SECTION -->
		<div id="home" class="headerwrap">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<img class="marg-top-20 col-xs-12 col-sm-10 col-lg-10 col-sm-offset-1 col-lg-offset-1" src="./assets/img/hacklogo-white-no-border.png" alt="">
						<div class="col-lg-10 col-lg-offset-1">
							<h3>SF Bay Area</h3>
							<h2>Disrupting The Education Market</h2>
						</div>
						<!-- HACKER APPLICATION -->
						<a class="btn marg-left-6 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-3 col-sm-3 col-xs-12 main-btn apply-btn" href="#apply">Hacker Application</a>
						<!-- <a type="button" class="btn btn-default" href="#hackerForm" data-toggle="tab">Hacker</a> -->
						<!-- VOLUNTEER APPLICATION -->
						<a class="btn col-lg-3 col-md-3 col-sm-3 col-xs-12 main-btn volunteer-btn" href="#apply">Volunteer</a>
						<!-- SPONSOR APPLICATION -->
						<a class="btn col-lg-3 col-md-3 col-sm-3 col-xs-12 main-btn sponsor-btn sponsor-btn-pad" href="#apply">Sponsor</a>
						<div class="spacer"></div>
					</div>
				</div><!-- row -->
			</div><!-- /container -->
		</div><!-- /headerwrap -->
		<div id="fb-root"></div>

		<!-- ABOUT -->
		<?php require_once './views/about.php'; ?>

		<!-- APPLICATION FORMS -->
		<?php require_once './views/formSignUp.php'; ?>

		<!-- SPONSORS -->
		<?php require_once './views/team.php'; ?>

		<!-- RULES -->
		<?php require_once './views/rules.php'; ?>

		<!-- SCHEDULE -->
		<?php require_once './views/schedule.php'; ?>

		<!-- CALL TO ACTION -->
		<div id="sponsors">
			<div class="container ">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="pull-left" style="color: white">2015 Hacking Edu Sponsors</h1>
					</div>
				</div>
				<div class="row centered">
					<div class="col-lg-2 col-lg-offset-1">
						<img src="assets/img/clients/c01.gif" alt="">
					</div>
					<div class="col-lg-2">
						<img src="assets/img/clients/c02.gif" alt="">
					</div>
					<div class="col-lg-2">
						<img src="assets/img/clients/c03.gif" alt="">
					</div>
					<div class="col-lg-2">
						<img src="assets/img/clients/c04.gif" alt="">
					</div>
					<div class="col-lg-2">
						<img src="assets/img/clients/c05.gif" alt="">
					</div>
				</div><!-- row -->
				<div class="row">
					<h3>Interested in Sponsoring?</h3>
					<div class="col-lg-8 col-lg-offset-2">
						<p>Although this is our first year, we want to show the universities in the bay area that students are ready for a change.  Help make a difference by supporting us! Either fill out the <strong><a href="#apply" class="sponsor-btn">form</a></strong> or shoot us an email at <strong><a href="mailto:sponsor@hackingedu.co">sponsor@hackingedu.co</a></strong></p>
						<p><a href="#apply"><button type="button" class="btn btn-green btn-lg sponsor-btn">Show Your Support!</button></a></p>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- Call to action -->

		<!-- STAY CONNECTED -->
	    <div class="container ">
	    	<div class="row mt">
	      		<div class="col-lg-8">
		        	<h1>Stay Connected</h1>
		        	<p>Join us on our social networks for all the latest updates, service announcements and more or shoot us an email at <strong><a href="mailto:team@hackingedu.co">team@hackingedu.co</a></strong>.</p>
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
					<a href="<?php echo FACEBOOK_URL; ?>" target="rss">
						<div class="col-lg-4 dg">
							<h4 class="ml">FACEBOOK</h4>
							<p class="centered"><i class="fa fa-facebook"></i></p>
							<p class="ml">> Become A Friend</p>
						</div>
					</a>
					<a href="<?php echo TWITTER_URL; ?>" target="rss">
						<div class="col-lg-4 lg">
							<h4 class="ml">TWITTER</h4>
							<p class="centered"><i class="fa fa-twitter"></i></p>
							<p class="ml">> Follow Us</p>
						</div>
					</a>
					<a href="<?php echo GOOGLE_PLUS_URL; ?>" target="rss">
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
		<!-- SOCIAL MEDIA BUTTONS @ TOP -->
		<!-- Google+ Plus Button / Follow Button -->
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<script>
			// // Hacker Form Validation ?
			// H5F.setup(document.getElementById('ss-form'));
			// _initFormViewer("[100,\x22#CCC\x22,[]\n]\n");

			// Facebook Like Button
			window.fbAsyncInit = function() {
				FB.init({
					appId      : '{your-app-id}',
					xfbml      : true,
					version    : 'v2.0'
				});
			};
			(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {return;}
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));

			// Twitter Follow Button
			!function(d,s,id){
				var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){
					js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);
				}
			}(document, 'script', 'twitter-wjs');


			// ANIMATIONS ON SCROLL
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

			// DIRECT TO CORRECT FORM
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
