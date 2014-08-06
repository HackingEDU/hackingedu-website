<?php require_once './config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="./favicon.ico"> -->
    <link rel="shortcut icon" href="http://www.hackedu.co/favicon.ico">
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

	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.html#home">LINK</a></h1>
			<i class="fa fa-arrow-right menu-close"></i>
			<a href="index.html">Home</a>
			<a href="services.html">About</a>
			<a href="portfolio.html">Sponsors</a>
			<a href="about.html">FAQs</a>
			<a href="#contact">Contact</a>
			<a href="<?php echo FACEBOOK_URL; ?>"><i class="fa fa-facebook"></i></a>
			<a href="<?php echo TWITTER_URL; ?>"><i class="fa fa-twitter"></i></a>
			<a href="<?php echo GOOGLE_PLUS_URL; ?>" rel="publisher"><i class="fa fa-google-plus"></i></a>
			<a href="mailto:hackingeduteam@gmail.com"><i class="fa fa-envelope"></i></a>
		</div>

		<!-- Menu button -->
		<div id="menuToggle"><i class="fa fa-bars"></i></div>
	</nav>

	<!-- MAIN IMAGE SECTION -->
	<div class="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<!-- <h1>Hacking Edu</h1> -->
					<img class="main-img" src="./assets/img/hacklogo-white-no-border.png" alt="">
					<h3>SF Bay Area</h3>
					<h2>Disrupting The Education Market</h2>
					<!-- <div class="btn-row"> -->
					<a class="main-btn apply-btn" href="#">Hacker Application</a>
					<a id="volunteer-btn-slide" class="main-btn volunteer-btn" target="_blank" href="#">Volunteer</a>
					<a id="" class="main-btn sponsor-btn" href="#">Sponsor</a>
					<!-- </div> -->
					<div class="spacer"></div>
					<!-- <i class="fa fa-angle-down"></i> -->
				</div>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->

	<!-- WELCOME SECTION -->
    <div class="container">
      <div class="row mt">
      	<div class="col-lg-8">
	        <h1>What is Hacking Edu?</h1>
	        <p>This year we will have various companies from all over the bay area coming along with a couple of their trusted software engineers to help each hacker with their projects.</p>
      	</div>
      	<div class="col-lg-4">
      		<p class="pull-right"><br><button type="button" class="btn btn-green">Sign Up Now!</button></p>
      	</div>
      	  <div class="col-lg-8">
      	  	<!-- <h1>Our Process</h1> -->
      	  	<hr>
      	  	<h3><b>LEARN</b></h3>
      	  	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      	  	<br>
      	  	<h3><b>DESIGN</b></h3>
      	  	<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>
      	  	<br>
      	  	<h3><b>BUILD</b></h3>
      	  	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      	  	<br>
      	  	<h3><b>EVOLVE</b></h3>
      	  	<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software.</p>
      	  </div><!-- col-lg-8 -->
      	  <div class="col-lg-4">
      		<ul class="process effect-2" id="process">
      			<li><img src="assets/img/process/pro01.png"></li>
      			<li><img src="assets/img/process/pro02.png"></li>
      			<li><img src="assets/img/process/pro03.png"></li>
      			<li><img src="assets/img/process/pro04.png"></li>
      		</ul>
      	  </div><!-- col-lg-4 -->
      </div><!-- /row -->
    </div><!-- /.container -->


	<!-- SERVICES SECTION -->
	<div id="services">
		<div class="container">
			<div class="row mt">
				<h1 class="white-text">Applications are Going Quickly</h1>

				<div class="container auth">
				    <!-- <h1 class="text-center">Bootstrap form theme <span>It's nice!</span> </h1> -->
				    <div id="big-form" class="well auth-box">
				      <form>
				        <fieldset>

				          <!-- Form Name -->
				          <legend>Sign Up Form</legend>

						  <!-- Form Type -->
				          <div class="btn-group">
				            <a href="#" class="btn btn-default">Hacker</a>
				            <a href="#" class="btn btn-default">Volunteer</a>
				            <a href="#" class="btn btn-default">Sponsor</a>
				          </div>


				          <!-- Name -->
				          <div class="form-group">
				            <label class=" control-label" for="textinput">Your Name</label>
				            <div class="">
				              <input id="textinput" name="textinput" placeholder="Student Hacker" class="form-control input-md" type="text">
				              <!-- <span class="help-block">help</span> -->
				            </div>
				          </div>

				          <!-- Email -->
				          <div class="form-group">
				            <label class=" control-label" for="textinput">Your Email</label>
				            <div class="">
				              <input id="textinput" name="textinput" placeholder="you@yourSchool.edu" class="form-control input-md" type="text">
				              <!-- <span class="help-block">help</span> -->
				            </div>
				          </div>

				          <!-- Major -->
				          <div class="form-group">
				            <label class=" control-label" for="textinput">Your Major</label>
				            <div class="">
				              <input id="textinput" name="textinput" placeholder="Computer Science" class="form-control input-md" type="text">
				              <!-- <span class="help-block">help</span> -->
				            </div>
				          </div>

				          <!-- School -->
				          <div class="form-group">
				            <label class=" control-label" for="textinput">Your School</label>
				            <div class="">
				              <input id="textinput" name="textinput" placeholder="Computer Science" class="form-control input-md" type="text">
				              <!-- <span class="help-block">help</span> -->
				            </div>
				          </div>

				          <!-- Gender -->
				          <div class="form-group">
				            <label class=" control-label" for="radios">Gender?</label>
				            <div class="">
				              <label class="radio-inline" for="radios-0">
				                <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
				                Male
				              </label>
				              <label class="radio-inline" for="radios-1">
				                <input name="radios" id="radios-1" value="2" type="radio">
				                Female
				              </label>
				              <label class="radio-inline" for="radios-2">
				                <input name="radios" id="radios-2" value="3" type="radio">
				                Other
				              </label>
				            </div>
				          </div>

				          <!-- Grade -->
				          <div class="form-group">
				            <label class=" control-label" for="radios">What grade will you be in this Spring?</label>
				            <div class="">
				              <label class="radio-inline" for="radios-0">
				                <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
				                Freshman
				              </label>
				              <label class="radio-inline" for="radios-1">
				                <input name="radios" id="radios-1" value="2" type="radio">
				                Sophomore
				              </label>
				              <label class="radio-inline" for="radios-2">
				                <input name="radios" id="radios-2" value="3" type="radio">
				                Junior
				              </label>
				              <label class="radio-inline" for="radios-2">
				                <input name="radios" id="radios-2" value="3" type="radio">
				                Senior
				              </label>
				              <label class="radio-inline" for="radios-2">
				                <input name="radios" id="radios-2" value="3" type="radio">
				                Highschool
				              </label>
				              <label class="radio-inline" for="radios-2">
				                <input name="radios" id="radios-2" value="3" type="radio">
				                Graduate Student
				              </label>
				            </div>
				          </div>

				          <!-- First Hackathon? -->
				          <div class="form-group">
				            <label class=" control-label" for="radios">Is this your first hackathon?</label>
				            <div class="">
				              <label class="radio-inline" for="radios-0">
				                <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
				                Yes
				              </label>
				              <label class="radio-inline" for="radios-1">
				                <input name="radios" id="radios-1" value="2" type="radio">
				                No
				              </label>
				            </div>
				          </div>

				          <!-- Github -->
				          <div class="form-group">
				            <label class=" control-label" for="textinput">Your Github</label>
				            <div class="">
				              <input id="textinput" name="textinput" placeholder="@github_username" class="form-control input-md" type="text">
				              <!-- <span class="help-block">help</span> -->
				            </div>
				          </div>

				          <!-- LinkedIn -->
				          <div class="form-group">
				            <label class=" control-label" for="textinput">Your LinkedIn</label>
				            <div class="">
				              <input id="textinput" name="textinput" placeholder="https://linkedin.com/in/your_linkedin_url" class="form-control input-md" type="text">
				              <!-- <span class="help-block">help</span> -->
				            </div>
				          </div>

				          <!-- Travel Arrangements? -->
				          <div class="form-group">
				            <label class=" control-label" for="radios">Will you need a travel reimbersment/arrangement to attend Hacking Edu?</label>
				            <div class="">
				              <label class="radio-inline" for="radios-0">
				                <input name="radios" id="radios-0" value="1" type="radio">
				                Yes
				              </label>
				              <label class="radio-inline" for="radios-1">
				                <input name="radios" id="radios-1" value="2" checked="checked" type="radio">
				                No
				              </label>
				            </div>
				          </div>

				          <!-- Textarea -->
				          <div class="form-group">
				            <label class=" control-label" for="textarea">At Hacking Edu we want to show the world the new ways we can learn.  How do you plan to tackle this challenge?</label>
				            <div class="">
				              <textarea class="form-control" id="textarea" name="textarea">Tell us about your idea! :)</textarea>
				            </div>
				          </div>

				        </fieldset>
				      </form>
				    </div>
				    <div class="clearfix"></div>
				  </div>
<!-- 				<div class="col-lg-1 centered">
					<i class="fa fa-certificate"></i>
				</div>
				<div class="col-lg-3">
					<h3>Quality Design</h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>

				<div class="col-lg-1 centered">
					<i class="fa fa-question-circle"></i>
				</div>
				<div class="col-lg-3">
					<h3>Awesome Support</h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div>


				<div class="col-lg-1 centered">
					<i class="fa fa-globe"></i>
				</div>
				<div class="col-lg-3">
					<h3>Global Services</h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				</div> -->

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- services section -->


	<!-- BLOG POSTS -->
	<div class="container">
		<div class="row mt">
			<div class="col-lg-12">
				<h1>2015 Hacking Edu Sponsors</h1>
			</div><!-- col-lg-12 -->
			<div class="col-lg-8">
				<p>We're excited to get the sponsors underway.  We plan to have Google, Evernote, Visa, and more!</p>
			</div><!-- col-lg-8 -->

<!-- 			<div class="col-lg-4 goright">
				<p><a href="#"><i class="fa fa-angle-right"></i> See All Posts</a></p>
			</div> -->
		</div><!-- row -->

<!-- 		<div class="row mt">
			<div class="col-lg-4">
				<img class="img-responsive" src="assets/img/post01.jpg" alt="">
				<h3><a href="#">Designing for the reader experience</a></h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				<p><a href="#"><i class="fa fa-link"></i> Read More</a></p>
			</div>
			<div class="col-lg-4">
				<img class="img-responsive" src="assets/img/post02.jpg" alt="">
				<h3><a href="#">25 Examples of flat web & application design</a></h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				<p><a href="#"><i class="fa fa-link"></i> Read More</a></p>
			</div>
			<div class="col-lg-4">
				<img class="img-responsive" src="assets/img/post03.jpg" alt="">
				<h3><a href="#">We are an award winning design agency</a></h3>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
				<p><a href="#"><i class="fa fa-link"></i> Read More</a></p>
			</div> -->
		<!-- </div>row -->

	    <!-- PORTFOLIO SECTION -->
	    <div id="portfolio">
	    	<div class="container"
		    	<div class="row mt">
					<ul class="grid effect-2" id="grid">
						<!-- <li><a href="singleproject.html"><img src="assets/img/portfolio/1.jpg"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/3.jpg"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/4.jpg"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/12.png"></a></li> -->
						<li><a href="singleproject.html"><img src="assets/img/portfolio/13.png"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/10.png"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/9.jpg"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/2.jpg"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/14.png"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/5.jpg"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/6.jpg"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/7.jpg"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/6.jpg"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/9.jpg"></a></li>
						<li><a href="singleproject.html"><img src="assets/img/portfolio/11.png"></a></li>
					</ul>
		    	</div><!-- row -->
		    </div><!-- container -->
	    </div><!-- portfolio -->
	</div><!-- container -->


	<!-- CLIENTS LOGOS -->
<!-- 	<div id="lg">
		<div class="container">
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
				</div> -->
			<!--</div><!-- row -->
		<!--</div><!-- container -->
	<!--</div><!-- dg -->


	<!-- CALL TO ACTION -->
	<div id="call">
		<div class="container">
			<div class="row">
				<h3>Interested in Sponsoring?</h3>
				<div class="col-lg-8 col-lg-offset-2">
					<p>Although this is our first year, we want to show the universities in the bay area that students can make new and better products to improve the education system.  Help make a difference by supporting us!</p>
					<p><button type="button" class="btn btn-green btn-lg">Show Your Support!</button></p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Call to action -->

<!-- 	<div class="container">
		<div class="row mt">
			<div class="col-lg-12">
				<h1>Stay Connected</h1>
				<p>Join us on our social networks for all the latest updates, product/service announcements and more.</p>
				<br> -->
			<!-- </div><!-- col-lg-12 -->

			<!-- <div class="col-lg-4">
	      		<p class="pull-right"><br><button type="button" class="btn btn-green">Contact Us!</button></p>
	      	</div> -->
		<!-- </div> --><!-- row -->
	<!-- </div> --><!-- container -->
    <div class="container">
    	<div class="row mt">
      		<div class="col-lg-8">
	        	<h1>Stay Connected</h1>
	        	<p>Join us on our social networks for all the latest updates, product/service announcements and more.</p>
      		</div>
      		<div class="col-lg-4">
      			<p class="pull-right"><br><button type="button" class="btn btn-green">Contact Us!</button></p>
      		</div>
    	</div><!-- /row -->
    </div><!-- /.container -->

	<!-- SOCIAL FOOTER -->
	<section id="contact"></section>
	<div id="sf">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 dg">
					<h4 class="ml">FACEBOOK</h4>
					<p class="centered"><a href="<?php echo FACEBOOK_URL; ?>"><i class="fa fa-facebook"></i></a></p>
					<p class="ml">> Become A Friend</p>
				</div>
				<div class="col-lg-4 lg">
					<h4 class="ml">TWITTER</h4>
					<p class="centered"><a href="<?php echo TWITTER_URL; ?>"><i class="fa fa-twitter"></i></a></p>
					<p class="ml">> Follow Us</p>
				</div>
				<div class="col-lg-4 dg">
					<h4 class="ml">GOOGLE +</h4>
					<p class="centered"><a href="<?php echo GOOGLE_PLUS_URL; ?>"><i class="fa fa-google-plus"></i></a></p>
					<p class="ml">> Add Us To Your Circle</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Social Footer -->



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
