<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>SMBarber - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{ asset('css/versions.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="cube-wrapper">
		  <div class="cube-folding">
			<span class="leaf1"></span>
			<span class="leaf2"></span>
			<span class="leaf3"></span>
			<span class="leaf4"></span>
		  </div>
		  <span class="loading" data-name="Loading">SMBarber Loading</span>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">

        <!-- Sidebar-wrapper -->
        <div id="sidebar-wrapper">
			<div class="side-top">
				<div class="logo-sidebar">
					<a href="index.html"><img src="{{ asset('images/logos/logo.png') }}" alt="image"></a>
				</div>
				<ul class="sidebar-nav">
					<li><a class="active" href="index.html">Home</a></li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="services.html">Our Services</a></li>
					<li><a href="barbers.html">Our Barbers</a></li>
					<li><a href="appointment.html">Appointment</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
        </div>
        <!-- End Sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
			
            <div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('uploads/barber_slider.jpg');">
                <div class="container-fluid">
                    <div class="row">
						<div id="full-width" class="owl-carousel owl-theme">
							<div class="text-center item">
								<div class="col-md-8 col-md-offset-2 col-sm-12">
									<div class="big-tagline text-center">
										<h2><strong>The Barber Shop</strong><br>
										in New York</h2>
										<p class="lead">With SMBarber responsive landing page template, you can showcase your next barber shop websites!</p>
										<a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">APPOINTMENT NOW</a>
									</div>
								</div>
							</div>
							<div class="text-center item">
								<div class="col-md-8 col-md-offset-2 col-sm-12">
									<div class="big-tagline text-center">
										<h2><strong>The Barber Shop</strong><br>
										in New York</h2>
										<p class="lead">With SMBarber responsive landing page template, you can showcase your next barber shop websites!</p>
										<a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">APPOINTMENT NOW</a>
									</div>
								</div>
							</div>
							<div class="text-center item">
								<div class="col-md-8 col-md-offset-2 col-sm-12">
									<div class="big-tagline text-center">
										<h2><strong>The Barber Shop</strong><br>
										in New York</h2>
										<p class="lead">With SMBarber responsive landing page template, you can showcase your next barber shop websites!</p>
										<a href="#" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">APPOINTMENT NOW</a>
									</div>
								</div>
							</div>
						</div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->

            <section class="section nopad cac text-center">
                <a href="#"><h3>Interesting our awesome barber services? Just drop an appointment form below!</h3></a>
            </section>