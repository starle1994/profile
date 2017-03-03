
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Slick Slider - Example #9</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://googledrive.com/host/0B1RR6fhjI2QROGt0MTFoVkhMdUk/fonts.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
<link href='{!! url('css/assets/css/bootstrap.min.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/style.css') !!}' rel='stylesheet' type='text/css' />

</head>

<body>
<header>  
      <div  style="margin-top: 5px;">
              
          <!--start: Logo -->
          <div class="logo col-lg-3 col-md-3 col-sm-3">
                  
              <a class="brand" href="#"><img src="{!! asset('css/img/logo-group.png') !!}" alt="Logo" class="logo"></a>
                  
          </div >
          <div class="ol-lg-2 col-md-2 col-sm-2"><img class="letgo" alt="" src="{!! asset('css/img/letgo.jpg') !!}" ></div>
          <div class="app-logo col-lg-6 col-md-6 col-sm-6" >
            @if($apps != null)
                @foreach($apps as $app)
                  <img class="img" alt="" src="{!! asset('uploads/'.$app->logo) !!}" >
                @endforeach
              @endif
          </div>
          <!--start: Logo -->
          <div class="col-lg-1 col-md-1 col-ms-2 image-lang" >
              <?php 
            $name   = '';
            $arr = explode('/', Request::path());

            for($i = 1; $i<count($arr); $i++){
               $name .= '/'.$arr[$i];
            }
            $lang = app()->getLocale();
            $jp= '';
            $en= '';
            if ($lang =='en') {
              $en = 'en';
            } else {
              $jp = 'jp';
            }
            
         ?>
                 <span class="lang"><a href="/jp{{$name}}"><img class="<?php echo $jp ?>" src="{{ asset('css/img/ja.gif') }}" /> </a></span>   
                <span class="lang"><a href="/en{{$name}}"><img class="<?php echo $en ?>" src="{{ asset('css/img/en.gif') }}" /> </a></span>
                
                  
          </div>
       
      </div>
</header>
 @include('layouts.banner')
<div class="body-content">
    <div class="container content">

  <section id="mainContent">
    @yield('content')
  </section>
</div>
 </div>
 <footer id="footer">
  @include('layouts.footer')
</footer>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://kenwheeler.github.io/slick/slick/slick.js'></script>
<script src='{!! url('css/assets/js/bootstrap.min.js') !!}' type='text/javascript'></script>
    <script >
      $(document).ready(function(){
  
  $(".Modern-Slider").slick({
    autoplay:true,
    autoplaySpeed:10000,
    speed:600,
    slidesToShow:1,
    slidesToScroll:1,
    pauseOnHover:false,
    dots:true,
    pauseOnDotsHover:true,
    cssEase:'linear',
   // fade:true,
    draggable:false,
    prevArrow:'<button class="PrevArrow"></button>',
    nextArrow:'<button class="NextArrow"></button>', 
  });
  
})
    </script>

</body>
</html>
