<div class="logo-bg" style="background-color: #fff">
  <!--start: Container -->
  <div class="container logo">
      
      <!--start: Row -->
      <div  style="padding-right: 0px, padding-left:0px;">
              
          <!--start: Logo -->
          <div class="logo col-lg-3 col-md-3">
                  
              <a class="brand" href="#"><img src="{!! asset('css/img/up.png') !!}" alt="Logo"></a>
                  
          </div>
          <!--end: Logo -->
          <!--start: Logo -->
          <div class="col-lg-9 col-md-9" style="text-align: right;margin-top: 10px; ">
                  
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
        
                <span class="lang"><a href="/en{{$name}}"><img class="<?php echo $en ?>" src="{{ asset('css/img/en.gif') }}" /> </a></span>
                <span class="lang"><a href="/jp{{$name}}"><img class="<?php echo $jp ?>" src="{{ asset('css/img/ja.gif') }}" /> </a></span>
                  
          </div>
       
      </div>
      <!--end: Row -->
      
  </div>

</div>

<header>
  <div class="container" id="topbar">
      
  
      
              
        <div id="navarea">
          @include('layouts.topbar')
        </div>
              
    
      
  </div>
  <!--end: Container-->           
            
</header>