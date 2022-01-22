<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CONDESIGN -  Thiết kế nội thất</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/decor/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/decor/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/decor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/decor/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/decor/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/decor/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/decor/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/decor/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/decor/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/decor/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/decor/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/decor/css/style.css') }}">
  </head>
  <body>
    @include('furns.menu')
    @include('furns.head')
        @yield('content')
    @include('furns.footer')
  <!-- loader -->

  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src=" {{ asset('assets/decor/js/jquery.min.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/popper.min.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/bootstrap.min.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/jquery.easing.1.3.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/jquery.waypoints.min.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/jquery.stellar.min.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/owl.carousel.min.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/jquery.magnific-popup.min.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/aos.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/jquery.animateNumber.min.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/bootstrap-datepicker.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/jquery.timepicker.min.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src=" {{ asset('assets/decor/js/google-map.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/main.js') }}"></script>
  <script src=" {{ asset('assets/decor/js/script.js') }}"></script>



  </body>
</html>
