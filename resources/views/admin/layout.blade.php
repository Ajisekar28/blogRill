<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>@yield('title')</title>

  {{-- <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css"> --}}

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/dist/magnific-popup.css') }}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

<!-- Header Start --> 

<header class="navigation">
	
	<nav class="navbar navbar-expand-lg  py-2 fixed-top" id="navbar">
		<div class="container">

		  <a class="navbar-brand" href="{{route('blog.index')}}">
		      <img src="{{ asset('images/logo_web.png') }}" alt="Gambar logo" class="img-fluid" style="max-height: 75px;">
		      Blog<span>Rill</span>
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{route('admin.blog')}}">Blog <span class="sr-only">(current)</span></a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Logout</a></li>
			</ul>

			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
			  <a href="{{route('admin.index')}}" class="btn btn-solid-border btn-round-full">Master</a>
			</form>
		  </div>
		</div>
	</nav>
</header>

<!-- Header Close --> 

<section class="page-title bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Our blog</span>
                    <h1 class="text-capitalize mb-4 text-lg">@yield('title')</h1>
					<h6 class="list-inline-item"><a href="index.html" class="text-white">@yield('title')</a></h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section blog-wrap bg-gray">

@yield('content');

</section>

<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="footer-btm pt-4">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">Megakit.</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
					</div>
				</div>
				<div class="col-lg-6 text-left text-lg-right">
					<ul class="list-inline footer-socials">
						<li class="list-i	<div class="footer-btm pt-4">
							<div class="row">
								<div class="col-lg-4 col-md-12 col-sm-12">
									<div class="copyright">
										&copy; Copyright Reserved to <span class="text-color">Megakit.</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
									</div>
								</div>
				
								<div class="col-lg-4 col-md-12 col-sm-12">
									<div class="copyright">
									Distributed by  <a href="https://themewagon.com/" target="_blank">Themewagon</a>
									</div>
								</div>
								<div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
									<ul class="list-inline footer-socials">
										<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2"></i>Facebook</a></li>
										<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2"></i>Twitter</a></li>
										<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="ti-linkedin mr-2 "></i>Linkedin</a></li>
									</ul>
								</div>
							</div>
						</div>nline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2"></i>Facebook</a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2"></i>Twitter</a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="ti-linkedin mr-2 "></i>Linkedin</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
   
    </div>

    <!-- 
    Essential Scripts
    =====================================-->

    
    {{-- <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="js/contact.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    
    <script src="js/script.js"></script> --}}

	<!-- Main jQuery -->
	<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
	<script src="{{ asset('js/contact.js') }}"></script>
	<!-- Bootstrap 4.3.1 -->
	<script src="{{ asset('plugins/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
	<!-- Slick Slider -->
	<script src="{{ asset('plugins/slick-carousel/slick/slick.min.js') }}"></script>
	<!-- Counterup -->
	<script src="{{ asset('plugins/counterup/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>

	<!-- Your Custom JavaScript -->
	<script src="{{ asset('js/script.js') }}"></script>

  </body>
  </html>