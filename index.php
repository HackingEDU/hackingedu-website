<?php require_once './config.php'; ?>
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

		<!-- Menu button -->
		<div id="menuToggle"><i class="fa fa-bars"></i></div>
	</nav>

    <!-- Contact Form Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="m-top-10">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <h1>Contact Form</h1>

            <div class="auth contact-form well auth-box">
                <!-- <h1 class="text-center">Bootstrap form theme <span>It's nice!</span> </h1> -->
                <div id="big-form" class="">
		            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            <h3 class="pull-left">What can we help you with?</h3>
                  <form>
                    <!-- <fieldset> -->

                      <!-- Form Name -->
                      <!-- <legend>Contact Form</legend> -->

                      <!-- Name -->
                      <div class="form-group">
                        <!-- <label class="pull-left control-label" for="textinput">Your Name</label> -->
                        <div class="">
                          <input id="textinput" name="textinput" placeholder="Your Name" class="form-control input-md contact-border-bottom" type="text">
                          <!-- <span class="help-block">help</span> -->
                        </div>
                      </div>

                      <!-- Email -->
                      <div class="form-group">
                        <!-- <label class="pull-left control-label" for="textinput">Your Email</label> -->
                        <div class="">
                          <input id="textinput" name="textinput" placeholder="example@hacker.com" class="form-control input-md contact-border-bottom" type="text">
                          <!-- <span class="help-block">help</span> -->
                        </div>
                      </div>


                      <div class="form-group">
                        <!-- Subject -->
                        <textarea class="form-control subject" id="" name="textarea" placeholder="Subject"></textarea>
                        <!-- Textarea -->
                        <textarea class="form-control" id="textarea" name="textarea" placeholder="Ask away! :)"></textarea>
                      </div>

                    <!-- </fieldset> -->
                  </form>
                </div>
                <div class="clearfix"></div>
              </div>
 		</div>
      </div>
    </div>

	<!-- MAIN IMAGE SECTION -->
	<div id="home" class="headerwrap ">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<!-- <h1>Hacking Edu</h1> -->
					<img class="main-img" src="./assets/img/hacklogo-white-no-border.png" alt="">
					<h3>SF Bay Area</h3>
					<h2>Disrupting The Education Market</h2>
					<!-- <div class="btn-row"> -->
					<a class="main-btn apply-btn" href="#apply">Hacker Application</a>
					<a class="main-btn volunteer-btn" href="#apply">Volunteer</a>
					<a class="main-btn sponsor-btn" href="#apply">Sponsor</a>
					<!-- </div> -->
					<div class="spacer"></div>
					<!-- <i class="fa fa-angle-down"></i> -->
				</div>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->

	<!-- ABOUT -->
    <div class="container ">
      <div class="row mt">
      	<div id="about" class="col-lg-8">
	        <h1>What is Hacking Edu?</h1>
	        <p>This year we will have various companies from all over the bay area coming along with a couple of their trusted software engineers to help each hacker with their projects.</p>
      	</div>
      	<div class="col-lg-4">
      		<p class="pull-right"><br><a href="#apply"><button type="button" class="btn btn-green">Sign Up Now!</button></a></p>
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


	<!-- APPLY -->
	<div id="apply" class="">
		<div class="container">
			<div class="row mt">
				<h1 class="white-text">Applications are Going Quickly</h1>

				<div class="container auth2">
				    <!-- <h1 class="text-center">Bootstrap form theme <span>It's nice!</span> </h1> -->
				    <div id="big-form" class="well auth-box2" style="color: #fff">
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
				              <input id="textinput" name="textinput" placeholder="University" class="form-control input-md" type="text">
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

				          <button id="singlebutton" name="singlebutton" class="btn btn-default">Button</button>

				        </fieldset>
				      </form>
				    </div>
				    <div class="clearfix"></div>
				  </div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- services section -->


	<!-- SPONSORS -->
	<div id="sponsors" class="container ">
		<div class="row mt">
			<div class="col-lg-12">
				<h1>2015 Hacking Edu Sponsors</h1>
			</div><!-- col-lg-12 -->
			<div class="col-lg-8">
				<p>We're excited to get the sponsors underway.  We plan to have Google, Evernote, Visa, and more!</p>
			</div><!-- col-lg-8 -->
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



	<!-- RULES -->
	<div id="rules"></div>
	<div id="sp">
		<div class="container">
			<div class="row">
				<h2>Hackathon Rules</h2>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /portrwrap -->

    <div class="container">
      <div class="row mt centered">
      	<div class="col-lg-8 col-lg-offset-2">
	        <h1><b>Spot Free Theme</b></h1>
	        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      	</div>
      </div><!-- /row -->
    </div><!-- /.container -->

    <!-- MAC IMAGE -->
	<div class="container">
		<div class="row centered">
			<div class="col-lg-10 col-lg-offset-1">
				<img class="img-responsive" src="assets/img/spot.png" alt="Spot Theme">
			</div>
		</div>
	</div>


	<!-- CLIENT INFORMATION -->
	<div id="lg">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-lg-offset-1 desc">
					<h3>Client Desctription</h3>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
					<p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
				</div>

				<div class="col-lg-4 col-lg-offset-1 desc">
					<h3>Agency Resume</h3>
					<br>
					<h5><b>Team Leader:</b> REBECCA ZEARING</h5>
					<h5><b>Agency Job:</b> WEB DESIGN, WEB DEVELOPMENT</h5>
					<h5><b>Proposal Description:</b></h5>
					<p class="tm">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.<br/>Lorem Ipsum passage, and going through the cites of the word in classical literature.</p>
					<p><a href="http://BlackTie.co"><i class="fa fa-link"></i> Visit Site</a></p>

				</div>

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- dg -->

	<!-- SCHEDULE -->
	<div id="schedule"></div>
	<div id="sp-standout"></div>

	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-8 col-lg-offset-2">
				<h1>Schedule</h1>
				<ul class="process effect-2" id="process">
					<li><img src="assets/img/sp/p01.png"></li>
					<li><img src="assets/img/sp/p02.png"></li>
					<li><img src="assets/img/sp/p04.png"></li>
					<li><img src="assets/img/sp/p03.png"></li>
				</ul>
			</div><!-- col-lg-8 -->
		</div><!-- row -->
	</div><!-- container -->


	<!-- SCHEDULE -->


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
    <div class="container ">
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
