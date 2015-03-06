<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:url" content="http://hackingedu.co"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="HackingEDU"/>
    <meta property="og:description" content="HackingEDU, the largest education hackathon conceived with the intent to disrupt the classroom and push the envelope on the contemporary education system."/>
    <meta property="og:image" content="http://hackingedu.co/assets/img/hacklogo-prism.png"/>

    <title>HackingEDU</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="/assets/fonts/GeosansLight.ttf" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/full-slider.css" rel="stylesheet">
    <link href="/assets/css/new-main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Social Media Icons -->
    <div class="social-block">
        <a href="https://www.facebook.com/hackingedusf" style="display: block;"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
        <a href="https://twitter.com/hackingedusf" style="display: block;"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
        <a href="https://instagram.com/hackingedusf" style="display: block;"><i id="social" class="fa fa-instagram fa-3x social-ig"></i></a>
        <a href="mailto:team@hackingedu.co" style="display: block;"><i id="social" class="fa fa-envelope-square fa-3x social-em"></i></a>
    </div>

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" data-ride="carousel" data-interval="6000" class="carousel fade-carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <!-- HackingEDU Main Page -->
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup>
                        <!-- HackingEDU Cover Image -->
                        <img class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 mg-r-2em mg-t-3em" alt="HackingEDU hackathon" src="/assets/img/hacklogo-white-no-border.png" alt="">
                        <h4 class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">Bay Area's Largest Education Hackathon</h4>
                    </hgroup>
                </div>
                <div class="carousel-caption">
                    <!-- Team Recruitment Application -->
                    <p class="lead"><a class="typeform-share btn btn-lg main-btn volunteer-btn"href="https://hackingedu.typeform.com/to/IqBqso" data-mode="2" target="_blank">Join The Team</a></p>
                </div>
            </div>
            <!-- Training Day -->
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <hgroup>
                        <h1 class="marg-t-3em">Training Day</h1>
                    </hgroup>
                </div>
                <div class="carousel-caption">
                    <p class="lead"><a class="typeform-share btn btn-lg main-btn apply-btn" href="https://hackingedu.typeform.com/to/Vub48x" data-mode="2" target="_blank">Training Day Application</a></p>
                </div>
            </div>
            <!-- Sponsorships -->
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">
                    <hgroup>
                        <h1>Sponsorships</h1>
                    </hgroup>
                </div>
                <div class="carousel-caption">
                    <!-- Sponsorship Application -->
                    <p class="lead">
                        <a class="typeform-share btn btn-lg main-btn sponsor-btn sponsor-btn-pad"  href="https://hackingedu.typeform.com/to/BEXo5M" data-mode="2" target="_blank">Sponsor Us</a>
                        <a href="https://drive.google.com/file/d/0BzI2Lz_qv89jY181ZUIwZXY4ZkE/view?usp=sharing" target = "rss" class="btn btn-lg main-btn sponsor-btn sponsor-btn-pad" id="trigger">The Packages</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <script src="/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Swipe to scroll setup -->
    <script>
    //Scrolling setup
        var area = document.getElementById('myCarousel');
        var carousel = $('.carousel');
        var distance = 0;

        if ('ontouchstart' in window) {
            var touch = 0;
            var lastTouch = 0;
            var touchdown = false;
            var isMoving = false;

            area.addEventListener('touchstart', function(e) {
                touchdown = true;
                touch = e.touches[0].pageX;
                //e.preventDefault();
            }, false);

            document.addEventListener('touchmove', function(e) {
                if (!touchdown) {
                    return;
                }

                isMoving = true;
                touchdown = true;
                lastTouch = e.touches[0].pageX;
            }, false);

            document.addEventListener('touchend', function(e) {
                if (!touchdown || !isMoving) {
                    return;
                }

                distance = lastTouch - touch;
                if (Math.abs(distance) < 50) {
                    return;
                }

                if (distance < 0) {
                    carousel.carousel('next');
                } else if (distance > 0) {
                    carousel.carousel('prev');
                }

                touchdown = false;
                isMoving = false;
            }, false);

        } else {
            var pos = 0;
            var mousedown = false;
            area.addEventListener('mousedown', function(e) {
                mousedown = true;
                pos = e.pageX;
            }, false);

            document.addEventListener('mousemove', function(e) {
                if (!mousedown) {
                    return;
                }

                mousedown = true;
            }, false);

            document.addEventListener('mouseup', function(e) {
                if (!mousedown) {
                    return;
                }

                var distance = e.pageX - pos;
                if (Math.abs(distance) < 100) {
                    return;
                }

                if (distance < 0) {
                    carousel.carousel('next');
                } else if (distance > 0) {
                    carousel.carousel('prev');
                }

                mousedown = false;
            }, false);
        }
    </script>

    <script>
    // TypeForm
        // Join The Team
        (function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];s.appendChild(qs,s)}})()
        // Training Day
        (function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];s.appendChild(qs,s)}})()
        // Sponsors
        (function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];s.appendChild(qs,s)}})()

    // Sponsorship PDF Modal

    </script>

    <!-- Script to Activate the Carousel -->
    <script src= "/assets/js/new-main.js">
    // $('.carousel').carousel({
    //     interval: 5000 //changes the speed
    // })
    </script>

</body>

</html>
