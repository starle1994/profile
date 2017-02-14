<!DOCTYPE html>
<html>
<head>
<title>magExpress</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='{!! url('css/assets/css/bootstrap.min.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/font-awesome.min.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/animate.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/slick.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/theme.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/style.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/css/style.css') !!}' rel='stylesheet' type='text/css' />
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
    @include('layouts.header')
<div class="container">

    
    <div class="slider-wrapper">
        @include('layouts.banner')
    </div>
  <section id="mainContent">
    @yield('content')
  </section>
</div>
<footer id="footer">
  @include('layouts.footer')
</footer>
    <script src='{!! url('css/assets/js/jquery.min.js') !!}' type='text/javascript'></script>
    <script src='{!! url('css/assets/js/bootstrap.min.js') !!}' type='text/javascript'></script>
    <script src='{!! url('css/assets/js/wow.min.js') !!}' type='text/javascript'></script>
    <script src='{!! url('css/assets/js/slick.min.js') !!}' type='text/javascript'></script>
    <script src='{!! url('css/assets/js/custom.js') !!}' type='text/javascript'></script>
    <script src='{!! url('js/flexslider.js') !!}' type='text/javascript'></script>
    <script src='{!! url('js/carousel.js') !!}' type='text/javascript'></script>
    <script src='{!! url('js/jquery.cslider.js') !!}' type='text/javascript'></script>
    <script src='{!! url('js/slider.js') !!}' type='text/javascript'></script>
    <script src='{!! url('js/custom.js') !!}' type='text/javascript'></script>
</body>
</html>