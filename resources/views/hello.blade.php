@extends('layouts.master-2')

@section('content')

@endsection

<!DOCTYPE html>
<html>
<head>
<title>.RsGroup</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="google-site-verification" content="3HylZq9Dh1kwha5C6r44XbCm12CGdzvkGWk3A23MjJ4" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='{!! url('css/assets/css/bootstrap.min.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/font-awesome.min.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/slick.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/theme.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/style.css') !!}' rel='stylesheet' type='text/css' />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
  <header>  
      <!--start: Row -->
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
      <!--end: Row -->

  <div style="clear: both;"></div>
  <div >
    <div id="navarea">  
      <div class="container">
      
       <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav custom_nav">
        <li  class="home"><a id='home' href="{{ route('index') }}">{{trans('user.home')}}</a></li>
        @foreach($categories as $cate)
         <?php $route = route('categories.'.$cate->id.'');$li_id ='categories-'.$cate->id?>
        <li ><a id='{{$li_id}}'' href="{{ $route }}">{{trans($cate->name)}}</a></li>
        @endforeach
        
      </ul>
    </div>
  </div>
</nav>
      </div>
    </div>        
  </div>
  <!--end: Container-->   
</header>
  <div class="body-content">
    <div class="container content">

  <section id="mainContent">
     {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
  </section>
</div>
 </div>

<footer id="footer">
  @include('layouts.footer')
</footer>

   
</body>
</html>
