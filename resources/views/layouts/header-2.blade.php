


<header>

      
      <!--start: Row -->
      <div  style="margin-top: 10px;">
              
          <!--start: Logo -->
          <div class="logo col-lg-3 col-md-3 col-sm-3 col-xs-6">
                  
              <a class="brand" href="#"><img src="{!! asset('css/img/logo-group.png') !!}" alt="Logo" class="logo"></a>
                  
          </div >
          <!--end: Logo -->
         <div class="ol-lg-2 col-md-2 col-sm-2 col-xs-12 text-center"><img class="letgo img-responsive" alt="" src="{!! asset('css/img/letgo.png') !!}" ></div>
          <div class="app-logo col-lg-6 col-md-6 col-sm-6 col-xs-10" >
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
      
        @include('layouts.topbar')
      </div>
    </div>        
  </div>
  <!--end: Container-->   
</header>