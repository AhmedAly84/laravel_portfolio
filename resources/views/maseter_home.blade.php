<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ahmed Ali</title>

		<!-- Bootstrap -->
		<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
		<!-- Material Design Icons -->
		<link href="{{asset('front/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Ionicons -->
		<link href="{{('front/fonts/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="{{asset('front/css/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{asset('front/css/owl.theme.default.css')}}" rel="stylesheet">
		<!-- Style.css -->
		<link href="{{asset('front/css/style.css')}}" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<!-- Search -->
		<div class="search-overlay"></div>
		{{-- <div class="search">
			<a href="" class="search-close"><i class="md md-close"></i></a>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h4>Just Start Typing Text and Press Enter</h4>
					<form class="search-form">
						<input type="text" id="search" name="search" class="text-center" />
					</form> <!-- end .search-form -->
				</div> <!-- end .col-sm-6 -->
			</div> <!-- end .row -->
		</div> --}}

        <!-- end .row -->
		<!-- Slide Out -->
		{{-- <div class="slide-out-overlay"></div>
		<div class="slide-out">
			<header class="slide-out-header clearfix">
				<div class="clearfix">
					<a href="" class="slide-out-close pull-left"><i class="md md-close"></i></a>
					<a href="" class="open-search pull-right"><i class="md md-search"></i></a>
					<a href="" class="slide-out-share pull-right"><i class="md md-more-vert"></i></a>
				</div> <!-- end .clearfix -->
				<!-- Popup -->
				<div class="slide-out-popup">
					<nav class="social-nav">
						<ul class="list-unstyled">
							<li><a href="">Facebook</a></li>
							<li><a href="">Twitter</a></li>
							<li><a href="">Linkedin</a></li>
							<li><a href="">Google+</a></li>
							<li><a href="">Behance</a></li>
						</ul> <!-- end .list-unstyled -->
					</nav> <!-- end .social-nav -->
				</div> <!-- end .slide-out-popup -->
				<div class="image"><img src="{{asset('front/images/head01.png')}}" alt="alt text" class="img-responsive"></div>
				<div class="content">
					<h5>Benjamin Thomson</h5>
					<span>Web & UX Designer</span>
				</div> <!-- end .content -->
				<div class="text-right">
					<a href="" class="button link-button white icon-left"><i class="md md-file-download"></i>Download Resume</a>
				</div> <!-- end .text-right -->
			</header> <!-- end .slide-out-header -->
			<div class="slide-out-widgets">
				<div class="slide-out-widget">
					<h4>Drink A Coffee With Me Today</h4>
					<form action="scripts/contact.php" method="post" class="form-horizontal contact-form">
						<div class="form-group">
							<label class="col-sm-3 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="contact-name" name="contact-name" />
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="contact-email" name="contact-email" />
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Message</label>
							<div class="col-sm-9">
								<textarea name="contact-message" class="contact-message" rows="3"></textarea>
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3">
								<button type="submit" class="button solid-button purple">Send Message</button>
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="contact-loading alert alert-info form-alert">
							<span class="message">Loading...</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div>
						<div class="contact-success alert alert-success form-alert">
							<span class="message">Success!</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div>
						<div class="contact-error alert alert-danger form-alert">
							<span class="message">Error!</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div>
					</form> <!-- end contact-form -->
				</div> <!-- end .slide-out-widget -->
				<div class="slide-out-widget">
					<h4>Follow On Instagram</h4>
					<div class="instagram">
						<a href=""><img src="{{asset('front/images/instagram01.jpg')}}" alt="alt text" class="img-responsive"></a>
						<a href=""><img src="{{asset('front/images/instagram02.jpg')}}" alt="alt text" class="img-responsive"></a>
						<a href=""><img src="{{asset('front/images/instagram03.jpg')}}" alt="alt text" class="img-responsive"></a>
						<a href=""><img src="{{asset('front/images/instagram04.jpg')}}" alt="alt text" class="img-responsive"></a>
						<a href=""><img src="{{asset('front/images/instagram05.jpg')}}" alt="alt text" class="img-responsive"></a>
						<a href=""><img src="{{asset('front/images/instagram06.jpg')}}" alt="alt text" class="img-responsive"></a>
					</div> <!-- end .instagram -->
				</div> <!-- end .slide-out-widget -->
			</div> <!-- end .slide-out-widgets -->
		</div> --}}
         <!-- end .slide-out -->

		<!-- Header -->
	@include('front.header')
		<!-- Section Navigation -->
		{{-- <div class="section-nav">
			<nav class="section1">
				<a href="#section2" class="forward"><i class="md md-chevron-right"></i></a>
				<a href="#section1" class="backward"><i class="md md-chevron-left"></i></a>
			</nav>
		</div> --}}

        <!-- end .section-nav -->

		<!-- Sections -->
		<div class="sections">
			<div class="sections-wrapper clearfix">

                @yield('contant')
            </div> <!-- end .sections-wrapper -->
		</div> <!-- end .sections -->
                @include('front.footer')
			<!-- jQuery -->
		<script src="{{asset('front/js/jquery-1.11.2.min.js')}}"></script>
		<!-- Bootstrap -->
		<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
		<!-- Inview -->
		<script src="{{asset('front/js/jquery.inview.min.js')}}"></script>
		<!-- SmoothScroll -->
		<script src="{{asset('front/js/smoothscroll.js')}}"></script>
		<!-- jQuery Knob -->
		<script src="{{asset('front/js/jquery.knob.min.js')}}"></script>
		<!-- Owl Carousel -->
		<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
		<!-- Isotope -->
		<script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script>
		<!-- Images Loaded -->
		<script src="{{asset('front/js/imagesloaded.pkgd.min.js')}}"></script>
		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<!-- Scripts.js -->
		<script src="{{asset('front/js/scripts.js')}}"></script>

	</body>
</html>
