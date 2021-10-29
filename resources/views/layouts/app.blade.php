<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dotrex.co/theme-preview/aimer-wedding/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 05:11:45 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ramakant & Monika</title>

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="favicon2.ico" type="image/x-icon">
<link rel="icon" href="favicon2.ico" type="image/x-icon">
<!-- / Favicons
================================================== -->

<!-- >> CSS	
============================================================================== -->
<!-- google web fonts -->
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!-- /google web fonts -->
<!-- bootstrap -->
<link href="{{ asset('vendor1/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- nivo lightbox -->
<link href="{{ asset('vendor1/nivo-lightbox/nivo-lightbox.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('vendor1/nivo-lightbox/themes/default/default.css')}}" type="text/css" />
<!-- animate -->
<link href="{{ asset('vendor1/animate.css')}}" rel="stylesheet">
<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('vendor1/font-awesome/css/font-awesome.min.css')}}">
<!-- main styles -->
<link href="{{ asset('css/styles.css')}}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />  
<style type="text/css">
	

.dataTable-pagination a {

color: #fff; 
}
</style>
<!-- >> /CSS
============================================================================== -->
</head>
<body>

<!-- Page Loader
========================================================= -->
<div class="loader" id="page-loader"> 
  <div class="loading-wrapper">
  	<div class="loader-heart loader-heart1"><img src="img/intro-heart.png" alt=""></div>
  	<div class="loader-heart loader-heart2"><img src="img/intro-heart.png" alt=""></div>
  	<div class="loader-heart loader-heart3"><img src="img/intro-heart.png" alt=""></div>
  </div>   
</div>
<!-- /End of Page loader
========================================================= -->

<!-- === PAGE BACKGROUND === -->
<!-- Background container -->
<div class="page-background-container viewport">
	<!-- background-mask -->
	<div class="bg-mask viewport"></div>
	<!-- /background-mask -->
	<!-- background-slideshow -->
	<div class="bg-slideshow">
		<!-- slideshow-item -->
		<div class="page-background viewport" style="background-image: url('img/slide-bg1.jpg')"></div>
		<!-- /slideshow-item -->	
	</div>
	<!--/Background-slideshow -->
</div>

<div id="body" class="viewport animated">
	
	<div class="container">
		@yield('content')
	</div>
</div>
<!-- /Main Content
================================================== -->

<!-- >> JS
============================================================================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="{{ asset('vendor1/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('vendor1/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Validate -->
<script src="{{ asset('vendor1/validate.js')}}"></script>
<!-- Countdown -->
<script src="{{ asset('vendor1/jquery.countdown.min.js')}}"></script>
<!-- Mansonry -->
<script src="{{ asset('vendor1/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('vendor1/masonry.pkgd.min.js')}}"></script>
<!-- Modal box-->
<script src="{{ asset('vendor1/nivo-lightbox/nivo-lightbox.min.js')}}"></script>
<!-- Cycle -->
<script src="{{ asset('vendor1/cycle2.js')}}"></script>
<!-- SmoothScroll -->
<script src="{{ asset('vendor1/smoothScroll.js')}}"></script>
<!-- Placeholder for IE -->
<script src="{{ asset('vendor1/placeholders.jquery.min.js')}}"></script>
<!-- Crossbrowser -->
<script src="{{ asset('js/cross-browser.js')}}"></script>
<!-- Main Config -->
<script src="{{ asset('js/main.js')}}"></script>
<!-- Holder -->
<script src="{{ asset('vendor1/holder.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{ asset('js/datatables-simple-demo.js')}}"></script>

</body>

</html>
