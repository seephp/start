<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title','Practice')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('template/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('template/css/grayscale.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
@include('front.nav')
<!-- Intro Header -->
@include('front.header')
<!-- Download Section -->
<section id="download" class="download-section content-section text-center">
    <div class="container">
        <div class="col-lg-8 mx-auto">
            <h2>Download Grayscale</h2>
            <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
            <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<!-- Map Section -->

@yield('content')

<!-- Footer -->
@include('front.footer')
<!-- Bootstrap core JavaScript -->
<script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}'"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('template/js/grayscale.min.js')}}"></script>

</body>

</html>
