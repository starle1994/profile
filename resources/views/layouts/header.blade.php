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
          <div class="col-lg-9 col-md-9" style="text-align: right; ">
                  
              <?php 
            $name   = '';
            $arr = explode('/', Request::path());
            for($i = 1; $i<count($arr); $i++){
               $name .= '/'.$arr[$i];
            }
         ?>
        
                <span class="lang"><a href="/en{{$name}}"><img src="{{ asset('css/img/en.gif') }}" /> </a></span>
                <span class="lang"><a href="/jp{{$name}}"><img src="{{ asset('css/img/ja.gif') }}" /> </a></span>
                  
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