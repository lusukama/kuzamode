<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Kuzamode Pty Ltd is registered with CIPRO and NCR. Specialist in Property Development Management, Residential Property Management. Also service and credit provider." />
	<meta name="keywords" content="Personal Loans, Debt Consolidation, Debt Mediation, Debt Restoration, Small Personal Loans (R1000 - R8000), ICT Clearance, Credit Life, Removing of Judgments, Business Rescue, Business Loans (R50 000 - 2 000 000) Property Management  personal loan" />
  <meta name="keywords" content="Affordable loans, Affordable Debt Consolidation, Affordable Debt Restoration">
    <title>Home - Kuzamode Property</title>
    <link rel="icon" href="public/doc/images/favicon.png">
    <link rel="stylesheet" href="{{ asset('public/doc/css/bootstrap3/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/doc/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/doc/css/bootstrap-override.css')}}" />
    <link rel="stylesheet" href="{{asset('public/doc/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('public/doc/css/custom-font-face.css')}}" />
  	<link rel="stylesheet" href="{{ asset('public/doc/css/media-queries.css')}}" />
  	<link rel="stylesheet" href="{{ asset('public/doc/css/animate.css')}}" />
  	<link rel="stylesheet" href="{{asset('public/doc/css/bootstrap-touch-slider.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/doc/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{ asset('public/doc/css/waypoints.css')}}">
    <link rel="stylesheet" href="{{ asset('public/doc/css/imagehover.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/imagehover.css/2.0.0/css/imagehover.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto+Mono|Roboto:300,400&display=swap" rel="stylesheet">
    </head>
  <body id="app-kuzamode">
    <!-- start project -->
      @include('layouts.navBar')
	  <div id="bootstrap-carousel" style="margin-top:-2px;" class="hidden-xs hidden-sm">
		  @include('layouts.carousel')
	  </div>
    @yield('content')
    <footer>
        @include('layouts.footer')
    </footer>
    <!-- end for project -->
  @include('layouts.jumpTop')
  @include('layouts.scripts')
	<script src="{{ asset('public/doc/scripts/bootstrapTouchSlider.js')}}"></script>
	<script src="{{ asset('public/doc/scripts/custom-bootstrap-carousel.js')}}"></script>
  </body>
</html>
