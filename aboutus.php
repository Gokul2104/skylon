<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Skylon">

    <meta name="author" content="2G developers">

    <title>Skylon</title>

    <!-- Mobile Specific Meta
		================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

    <!-- CSS
		================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Grid Component css -->
    <link rel="stylesheet" href="css/component.css">
    <!-- Slit Slider css -->
    <link rel="stylesheet" href="css/slit-slider.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Media Queries -->
    <link rel="stylesheet" href="css/media-queries.css">

    <!--
		Google Font
		=========================== -->

    <!-- Oswald / Title Font -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <!-- Ubuntu / Body Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery.js"></script>
    <!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <style>
        /*=========================
          Icons
         ================= */
        
        /* footer social icons */
        ul.social-network {
        	list-style: none;
        	display: inline;
        	margin-left:0 !important;
        	padding: 0;
        }
        ul.social-network li {
        	display: inline;
        	margin: 0 5px;
        }
        
        
        /* footer social icons */
        .social-network a.icoRss:hover {
        	background-color: #F56505;
        }
        .social-network a.icoFacebook:hover {
        	background-color:#3B5998;
        }
        .social-network a.icoTwitter:hover {
        	background-color:#33ccff;
        }
        .social-network a.icoGoogle:hover {
        	background-color:#BD3518;
        }
        .social-network a.icoVimeo:hover {
        	background-color:#0590B8;
        }
        .social-network a.icoLinkedin:hover {
        	background-color:#007bb7;
        }
        .social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
        .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
        	color:#fff;
        }
        a.socialIcon:hover, .socialHoverClass {
        	color:#44BCDD;
        }
        
        .social-circle li a {
        	display:inline-block;
        	position:relative;
        	margin:0 auto 0 auto;
        	-moz-border-radius:50%;
        	-webkit-border-radius:50%;
        	border-radius:50%;
        	text-align:center;
        	width: 50px;
        	height: 50px;
        	font-size:20px;
        }
        .social-circle li i {
        	margin:0;
        	line-height:50px;
        	text-align: center;
        }
        
        .social-circle li a:hover i, .triggeredHover {
        	-moz-transform: rotate(360deg);
        	-webkit-transform: rotate(360deg);
        	-ms--transform: rotate(360deg);
        	transform: rotate(360deg);
        	-webkit-transition: all 0.2s;
        	-moz-transition: all 0.2s;
        	-o-transition: all 0.2s;
        	-ms-transition: all 0.2s;
        	transition: all 0.2s;
        }
        .social-circle i {
        	color: #fff;
        	-webkit-transition: all 0.8s;
        	-moz-transition: all 0.8s;
        	-o-transition: all 0.8s;
        	-ms-transition: all 0.8s;
        	transition: all 0.8s;
        }
        
        a#icon {
         background-color: #D3D3D3;   
        }
        
        .button {
         font-size: 1em;
         padding: 10px;
         color: #fff;
         border: 2px solid #FF9800;
         border-radius: 20px;
         text-decoration: none;
         cursor: pointer;
         transition: all 0.3s ease-out;
        }
        .button:hover {
         background: #06D85F;
        }
        
        .overlay {
         position: fixed;
         top: 0;
         bottom: 0;
         left: 0;
         right: 0;
         background: rgba(0, 0, 0, 0.7);
         transition: opacity 500ms;
         visibility: hidden;
         opacity: 0;
        }
        .overlay:target {
         visibility: visible;
         opacity: 1;
        }
        .popup1 {
         margin: 70px auto;
         padding: 20px;
         background: #fff;
         border-radius: 5px;
         width: 30%;
         position: relative;
         transition: all 5s ease-in-out;
        }
        
        .popup1 h2 {
         margin-top: 0;
         color: #000;
         font-family: Tahoma, Arial, sans-serif;
        }
        .popup1 .close {
         position: absolute;
         top: 20px;
         right: 30px;
         transition: all 200ms;
         font-size: 30px;
         font-weight: bold;
         text-decoration: none;
         color: #000;
        }
        .popup1 .close:hover {
         color: #000;
        }
        .popup1 .content {
         max-height: 30%;
         overflow: auto;
        }
        
        .pop-form form {
            padding: 0 15px 15px 15px;
        }
        
        .pop-form input,
        .pop-form textarea {
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 12px;
            width: 254px;
            max-width: 254px;
            margin-bottom: 10px;
            margin-left: 7px;
            padding: 6px;
            border: none;
            border-radius: 4px;
            color: #999;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .pop-form input:focus,
        .pop-form textarea:focus {
            outline: none;
            box-shadow: none;
        }
        
        .pop-form input[type='submit'] {
            display: block;
            width: 120px;
            margin: 0 auto;
            padding: 0 20px;
            height: 40px;
            line-height: 40px;
            border-radius: 20px;
            cursor: pointer;
            transition: all .4s ease;
            color: #000 !important;
            border: none;
        }
        
        .pop-form input[type='submit']:hover {
            box-shadow: 0 3px 3px 0 rgba(0,0,0,0.07),0 1px 7px 0 rgba(0,0,0,0.02),0 3px 1px -1px rgba(0,0,0,0.1);
        }
        
        .pop-form textarea {
            min-height: 110px;
        	color:#000000;
        }
        
        
        .pop-form ::-webkit-input-placeholder {
            color: #000;
        }
        
        .pop-form ::-moz-placeholder{
            color: #000;
        }
        
        .pop-form :-ms-input-placeholder {
            color: #000;
        }
        
        .pop-form :-moz-placeholder {
            color: #000;
        }
        
        .pop-form input[type='submit'] {
            background: #000000;
        }
        
        
        @media screen and (max-width: 700px){
         .box{
         width: 70%;
         }
         .popup1{
         width: 70%;
         }
        }
    </style>


    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        		
        		  ga('create', 'UA-54152927-1', 'auto');
        		  ga('send', 'pageview');
    </script>
    <style>
        /* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
        .icon-bar1 {
          position: fixed;
          top: 50%;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        
        /* Style the icon bar links */
        .icon-bar1 a {
          display: block;
          text-align: center;
          padding: 10px;
          transition: all 0.3s ease;
          color: white;
          font-size: 10px;
        }
        
        /* Style the social media icons with color, if you want */
        .icon-bar1 a:hover {
          background-color: #000;
        }
        
        .facebook {
          background: #3B5998;
          color: white;
        }
        
        .twitter {
          background: #55ACEE;
          color: white;
        }
        
        .google {
          background: #dd4b39;
          color: white;
        }
        
        .linkedin {
          background: #007bb5;
          color: white;
        }
        
        .youtube {
          background: #bb0000;
          color: white;
        } 
        
        /* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
        .earnatskylon {
          position: fixed;
          top: 50%;
          right:-60px;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        
        /* Style the icon bar links */
        .earnatskylon a {
          display: block;
          text-align: center;
          padding: 2px;
		  margin-right:10px;
          transition: all 0.3s ease;
          color: white;
          font-size: 18px;
          -webkit-transform: rotate(90deg);
          -moz-transform: rotate(90deg);
          -o-transform: rotate(90deg);
          -ms-transform: rotate(90deg);
          transform: rotate(90deg);
        
        }
        
        /* Style the social media icons with color, if you want */
        .earnatskylon a:hover {
          background-color: #000;
        }
        
        .earn {
          background: #3B5998;
          color: white;
        }
        
        .rot{
        }
    </style>

</head>

<body id="body">
<!--
		Database Connection
		==================================== -->
    <?php

    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'id6491760_skylon1';
    $dbPassword = 'skylon@12345';
    $dbName     = 'id6491760_skylon1';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
	
	
    //Get image data from database
    $result = $db->query("SELECT * FROM products");
	$comments = $db->query("SELECT * FROM comments");
    
   // if($result->num_rows>0){
	//	$flag=0;
	//$i=0;
      // while( $imgData = $result->fetch_assoc()){
		//   $i++;
	   //}
      ?>

        <!-- End Database
	   ==================================== -->
    <div class="earnatskylon" style="height:30px;">
        <a href="#" class="earn">
            <p class="rot" style="padding:4px;">Earn&nbsp;&nbsp;at&nbsp;&nbsp;Skylon</p>
        </a>
    </div>
    <div class="icon-bar1" style="width:32px;height:32px;">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google"><i class="fa fa-google"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>
    <!--
	    Start Preloader
	    ==================================== -->
    <div id="loading-mask">
        <div class="loading-img">
            <img alt="Skylon Preloader" src="img/preloader.gif" />
        </div>
    </div>
    <!--
        End Preloader
        ==================================== -->

    <!-- 
        Fixed Navigation
        ==================================== -->
    <header id="navigation" class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <a class="navbar-brand" href="#body">
                    <h1 id="logo">
                        <img src="img/logo-meghna.png" alt="Skylon" />
                    </h1>
                </a>
                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="earnatskylon.html">Earn at Skylon</a></li>
                </ul>
            </nav>
            <!-- /main nav -->

        </div>
    </header>
    <!--
        End Fixed Navigation
        ==================================== -->


    <!--
        Welcome Slider
        ==================================== -->
    <section id="home">

        <div id="slitSlider" class="sl-slider-wrapper">
            <div class="sl-slider">

                <!-- single slide item -->
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-1"></div>
                        <div class="carousel-caption">
                            <div>
                                <img class="wow fadeInUp" src="img/meghna.png" alt="Skylon">
                                <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="heading animated fadeInRight">Skylon India</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /single slide item -->

                <!-- single slide item -->
                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-2"></div>
                        <div class="carousel-caption">
                            <div>
                                <h2 class="heading animated fadeInDown">Interior Design</h2>
                                <!--<h3 class="animated fadeInUp">With all Mejor Browser support including IE 9</h3> -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /single slide item -->

                <!-- single slide item -->
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-3"></div>
                        <div class="carousel-caption">
                            <div>
                                <h2 class="heading animated fadeInRight">Together We Can Grow</h2>
                                <!-- <h3 class="animated fadeInLeft">Clean and Professional Design</h3> -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /single slide item -->

            </div>
            <!-- /sl-slider -->

            <nav id="nav-arrows" class="nav-arrows">
                <span class="nav-arrow-prev">Previous</span>
                <span class="nav-arrow-next">Next</span>
            </nav>

            <nav id="nav-dots" class="nav-dots">
                <span class="nav-dot-current"></span>
                <span></span>
                <span></span>
            </nav>

        </div>
        <!-- /slider-wrapper -->
    </section>
    <!--/#home section-->




    <!--
		Start Main Features
		==================================== -->
    <section id="main-counter">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="title text-center wow fadeIn" data-wow-duration="1500ms">
                    <h2 style="color:#000000;">About <span class="color">Us</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
                <!-- features item -->
                <div id="features">
                    <div class="item">

                        <div class="features-item">
                            <div class="col-md-12 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                <h1 style="color:#000000;">Skylon India focuses on providing interior design & services to today's growing interior designing sector. A real set of experienced Handcrafted labors, budding enthusiast architects and engineers much interested to outbreak
                                    the talent of interior designing and execution in own thoughts. In a much competitive world of growing business we focus much more on effective work satisfaction rather than the profit. As a company, we care about CLIENTS,
                                    employees,Labours, vendors, and whoever else we come across in our work. We believe that people are more important than projects, products, or problems. We care about PERFECTION. When our work is done, our customers
                                    rave about our services and products, and we are inspired to progress. We conceive that our positive work environment and commitment to team-work allow us to give our customers the ultimate service experience.
                                </h1>
                            </div>

                        </div>
                    </div>



                </div>
                <!-- /features item -->

            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- End section -->

    <!--
		Start Main Features
		==================================== -->
    <section id="main-counter">
        <div class="container">
            <div class="row">
                <!-- features item -->
                <div id="features">
                    <div class="item">

                        <div class="features-item">

                            <div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div style="color:#000000;">
                                    <i class="fa fa-child fa-4x"></i>
                                </div>
                                <h1 style="color:#000000;">Our objective:</h1>
                                <h3>Skylon india’s main objective is to motivate and help our workers to claim their power and to satisfy client needs.</h3>
                            </div>
                            <!-- features media -->
                            <div class="col-md-6 feature-media media-wrapper wow fadeInUp hidden-sm hidden-xs hidden-md" data-wow-duration="500ms">
                                <div style="color:#000000;">
                                    <i class="fa fa-child fa-4x"></i>
                                </div>
                                <h1 style="color:#000000;">Our strength:</h1>
                                <h3>Our main strength- Innovative thinking, uniqueness and influence at work.</h3>
                            </div>
                            <!-- /features media -->

                            <!-- features content -->

                            <!-- /features content -->

                        </div>
                    </div>



                </div>
                <!-- /features item -->

            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- End section -->
	
	

    <!--
		Start Main Features
		==================================== -->
    <section id="main-counter">
        <div class="container">
            <div class="row">
                <!-- /section title -->
                <!-- features item -->
                <div id="features">
                    <div class="item">

                        <div class="features-item">
                            <div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div style="color:#000000;">
                                    <i class="fa fa-child fa-4x"></i>
                                </div>
                                <h1 style="color:#000000;">Our oath:</h1>
                                <h3>We assure that we deliver our work with greater quality at the given time.</h3>
                            </div>
                            <!-- features media -->
                            <div class="col-md-6 feature-media media-wrapper wow fadeInUp hidden-sm hidden-xs hidden-md" data-wow-duration="500ms">
                                <div style="color:#000000;">
                                    <i class="fa fa-child fa-4x"></i>
                                </div>
                                <h1 style="color:#000000;">Our ambiance:</h1>
                                <h3>At Skylon India, we commence Works which will shape your Dreams to a whole new level.</h3>
                            </div>
                            <!-- /features media -->

                            <!-- features content -->

                            <!-- /features content -->

                        </div>
                    </div>



                </div>
                <!-- /features item -->

            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- End section -->
	 <!-- Start Portfolio Section
		=========================================== -->

        <section id="team-skills" style="position:relative;z-index=-1;">
            <div class="container">
                <div class="row wow fadeInDown" data-wow-duration="500ms">
                    <div class="col-lg-12">

                        <!-- section title -->
                        <div class="title text-center">
                            <h2 style="color:#000000">Our <span class="color">Works</span></h2>
                            <div class="border"></div>
                        </div>


                    </div>
                    <!-- /end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->

            <!-- portfolio items -->
            <div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
                <ul id="og-grid" class="og-grid">
                    <?php
				if($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
				
						
					echo '<li class="mix app">';
					
						?><a href="javascript:void(0)" data-largesrc="data:image/jpeg;base64,<?php echo base64_encode($row['image'])?>" data-title=<?php echo $row[ "prod_name"]?> data-description="<?php echo $row["prod_desc"]?>" >
							<img src="data:image/jpeg;base64,<?php echo base64_encode($row['image'])?>">
							<?php
							echo '<div class="hover-mask">';
								echo "<h3>".$row["prod_name"]."</h3>";
								echo '<span>';
									echo '<i class="fa fa-plus fa-2x"></i>';
								echo '</span>';
							echo '</div>';
						echo '</a>'; echo '</li>'; } } ?>


                </ul>
                <!-- end og grid -->
            </div>
            <!-- portfolio items wrapper -->

        </section>
        <!-- End section -->
    <!-- Srart Contact Us
		=========================================== -->
    <!-- Google Map -->
    <div class="google-map wow fadeInDown" data-wow-duration="500ms">
        <div id="map-canvas"></div>
    </div>
    <section id="foot-counter" class="bg-one">

        <!-- /Google Map -->
        <div class="container">
            <div class="row">



                <!-- section title -->
                <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                    <h2>Get In <span style="color:#dbbe3f;">Touch</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <!-- Contact Details -->
                <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                    <h1 style="color:#dbbe3f">Contact Details</h1>
                    <br>
                    <div class="contact-details">
                        <div class="con-info clearfix">
                            <i class="fa fa-home fa-lg" style="color:#ffffff"></i>
                            <span style="color:#ffffff">AP:1725,102ndStreet,<br>14thSector,<br>k.k.Nagar,<br>Chennai-600078.</span>
                        </div>

                        <div class="con-info clearfix">
                            <i class="fa fa-phone fa-lg" style="color:#ffffff"></i>
                            <span style="color:#ffffff">Phone: +919840492966</span>
                        </div>

                        <div class="con-info clearfix">
                            <i class="fa fa-fax fa-lg" style="color:#ffffff"></i>
                            <span style="color:#ffffff">Phone: +917200107659</span>
                        </div>

                        <div class="con-info clearfix">
                            <i class="fa fa-envelope fa-lg" style="color:#ffffff"></i>
                            <span style="color:#ffffff">Email: skylonindia@gmail.com</span>
                        </div>
                    </div>
                </div>
                <!-- / End Contact Details -->
                <div class="col-md-6" style="padding-left:35px">
                    <h1><a href="#">Our Services</a></h1>
                </div>
                <div class="col-md-6" style="padding-left:35px">
                    <h1><a href="#">About Us</a></h1>
                </div>
                <div class="col-md-6" style="padding-left:35px">
                    <h1><a href="#popup1">Contact Us</a></h1>
                </div>
                <div class="col-md-6">

                </div>
                <div class="col-md-4">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>


            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

        <div id="popup1" class="overlay">
            <div class="popup1">
                <h2 style="color:#000;">Contact Us</h2>
                <a class="close" href="#">×</a>
                <div class="pop-form">
                    <!-- Form -->
                    <div class="pop-form" id="pop-form1">
                        <p class="title" style="color:#000;">Send a message</p>

                        <p class="message" style="color:#000;">Let's Talk</p>

                        <form method="post" id="contactForm1" name="form" style="color:#000000;">
                            <input type="text" name="cpname" placeholder="Name:" required>
                            <input type="email" name="cpemail" placeholder="Email:" required>
                            <input type="tel" name="cpphone" placeholder="Phone:" required>
                            <textarea name="cpmessage" placeholder="Message:" required style="color:#000000;"></textarea>
                            <button id="submit" value="Send message"> SEND TO US</a>
			</form>
			<script type="text/javascript">

				var frm = $('#contactForm1');
				frm.submit(function (e) {
				e.preventDefault();
				$.ajax({
				type: frm.attr('method'),
				url: frm.attr('email.php'),
				data: frm.serialize(),
				success: function (data) {
				console.log('Submission was successful.');
				console.log(data);
				},
				error: function (data) {
				console.log('An error occurred.');
				console.log(data);
				},
				});
				$('#contactForm1').text("new dialog title");
				});

			</script>
		</div>
	</div>
</div>	
			
		</section> <!-- end section -->
		
		<!-- end Contact Area
		========================================== 
		
		<footer id="foot-counter" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links 
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links 

						<!-- copyright 
						<div class="copyright text-center">
							<a href="index.html">
								<img src="img/skylon.png" alt="Skylon" /> 
							</a>
							<br />
							
							<p>Developed by 2G Developers.</p>
						</div>
						<!-- /copyright 
						
					</div> <!-- end col lg 12 
				</div> <!-- end row 
			</div> <!-- end container 
		</footer> <!-- end footer -->
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="js/jquery-1.12.2.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Slitslider -->
		<script src="js/jquery.slitslider.js"></script>
		<script src="js/jquery.ba-cond.min.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Portfolio Filtering -->
		<script src="js/jquery.mixitup.min.js"></script>
		<!-- Custom Scrollbar -->
		<script src="js/jquery.nicescroll.min.js"></script>
		<!-- Jappear js -->
		<script src="js/jquery.appear.js"></script>
		<!-- Pie Chart -->
		<script src="js/easyPieChart.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing-1.3.pack.js"></script>
		<!-- tweetie.min -->
		<script src="js/tweetie.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Highlight menu item -->
		<script src="js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="js/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script src="js/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script src="js/wow.min.js"></script>
		<!-- For video responsive -->
		<script src="js/jquery.fitvids.js"></script>
		<!-- Grid js -->
		<script src="js/grid.js"></script>
		<!-- Custom js -->
		<script src="js/custom.js"></script>

    </body>
</html>