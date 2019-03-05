<!DOCTYPE html>
<html lang="en">
<head>
	<title>G.C.C</title>
	<meta charset="UTF-8">
	<meta name="description" content="LibChurch Event Template">
	<meta name="keywords" content="event, libChurch, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img1/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/custom/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/custom/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/custom/themify-icons.css"/>
	<link rel="stylesheet" href="css/custom/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- header top section -->
	{{-- <div class="top-nav-section hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="social">
						<a href="#"><i class="ti-facebook"></i></a>
						<a href="#"><i class="ti-twitter-alt"></i></a>
						<a href="#"><i class="ti-google"></i></a>
						<a href="#"><i class="ti-instagram"></i></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-7 col-lg-6">
					<div class="counter-top">
						<h5>Upcoming Event:</h5>
						<div class="counter">
							<div class="counter-item"><h4>10</h4>Days</div>
							<div class="counter-item"><h4>08</h4>hours</div>
							<div class="counter-item"><h4>40</h4>Mins</div>
							<div class="counter-item"><h4>56</h4>secs</div>
						</div>
						<a href="#" class="top-readmore hidden-sm">readmore</a>
					</div>
				</div>
				<div class="col-sm-3 col-md-2 col-lg-3">
					<div class="user-input">
						<a href="#">My account <i class="fa fa-angle-down"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- header top section end-->


	<!-- Header section  -->
	<header class="header-section">
		<div class="container">		
			<!-- logo -->
			<a href="index.html" class="site-logo"><img src="img/logo.png" alt=""></a>
			<a href="" class="site-btn hidden-xs">Be A Member</a>
			<!-- nav menu -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<nav class="main-menu">
				<ul>
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="sermons.html">Sermons</a></li>
					<li><a href="event.html">Event</a></li>
					<li><a href="blog.html">blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="hero-content">
			<div class="hc-inner">
				<div class="container">
					
						@if (count($data) > 0)
							@foreach ($data as $item)
								<h2>
									{{$item->title}}
								</h2>
								<p>
									{{$item->content}}
								</p>
							@endforeach
						@endif
					
					<a href="" class="site-btn sb-wide sb-line">join with us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Event section -->
	<section class="event-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<!-- event info -->
					<div class="event-info">
						<div class="event-date">
							<h2>20</h2>
							may
						</div>
						<h3>MEGA CRUSADE</h3>
						<p><i class="fa fa-calendar"></i> 8:00 Am — 10:00 Am  <i class="fa fa-map-marker"></i> Central District, Riga, LV-1050, Latvia</p>
					</div>
				</div>
				 {{-- <div class="col-md-7 col-lg-6"> --}}
					<!-- counter -->
					 {{-- <div class="counter">
						<div class="counter-item"><h4>10</h4>Days</div>
						<div class="counter-item"><h4>08</h4>hours</div>
						<div class="counter-item"><h4>40</h4>Mins</div>
						<div class="counter-item"><h4>40</h4>Mins</div>
						<div class="counter-item"><h4>40</h4>Mins</div>
						<div class="counter-item"><h4>56</h4>secs</div>
					</div>
					<a href="" class="site-btn sb-light-line">Read more OK</a> --}}
				{{-- </div>  --}}
			</div>
		</div>
	</section>
	<!-- Event section end -->


	<!--The dynamic body section comes here.. yeilding the content from the various static pages to reduce the code base-->
	@yield('content')

	<!-- Footer top section -->
	<section class="footer-top-section spad">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 footer-top-content">
					<div class="section-title title-left">
						<h2>Contact Us</h2>
					</div>
					<h3>New York, USA</h3>
					<p>207 Park Avenue New York, NY 90210</p>
					<p><span>Email:</span> info@colorlib.com</p>
					<h4>Phone:</h4>
					<h5>+1 (409) 987–4567</h5>
				</div>
			</div>
		</div>
		<!-- googel map -->
		<div class="map-area" id="map-canvas"></div>
	</section>
	<!-- Footer top section end-->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 copyright">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site was created and is maintined by StanTech
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/main.js"></script>

	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>
	
</body>
</html>