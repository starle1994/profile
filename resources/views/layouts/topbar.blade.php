<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav custom_nav">
       
        @foreach($categories as $cate)
         <?php $route = route('categories.'.$cate->id.'');$li_id ='categories-'.$cate->id?>
        <li ><a id='{{$li_id}}'' href="{{ $route }}">{{trans($cate->name)}}</a></li>
        @endforeach
         <li  class="home"><a id='home' href="{{ route('index') }}">{{trans('user.home')}}</a></li>
      </ul>
    </div>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
   <script>
     $(document).ready(function() {
        var pathname = window.location.pathname;
        console.log(pathname.indexOf('/application'));
        if (pathname.indexOf('/home') != -1) {
          $('#home').css({'background-color':'#fff', 'color':'#E93E33','border': '1px solid #E93E33' });
        }else if(pathname.indexOf('/contact') != -1){
          $('#categories-10').css({'background-color':'#fff', 'color':'#E93E33','border': '1px solid #E93E33'});
        } else if (pathname.indexOf('/application') != -1) {
          $('#categories-9').css({'background-color':'#fff', 'color':'#E93E33','border': '1px solid #E93E33'});
        } else if (pathname.indexOf('/project') != -1) {
          $('#categories-5').css({'background-color':'#fff', 'color':'#E93E33','border': '1px solid #E93E33'});
        } else if (pathname.indexOf('/our-dream') != -1) {
          $('#categories-4').css({'background-color':'#fff', 'color':'#E93E33','border': '1px solid #E93E33'});
        } else if (pathname.indexOf('/blog') != -1) {
          $('#categories-3').css({'background-color':'#fff', 'color':'#E93E33','border': '1px solid #E93E33'});
        } else if (pathname.indexOf('/video') != -1) {
          $('#categories-2').css({'background-color':'#fff', 'color':'#E93E33','border': '1px solid #E93E33'});
        } else if (pathname.indexOf('/image') != -1) {
          $('#categories-1').css({'background-color':'#fff', 'color':'#E93E33','border': '1px solid #E93E33'});
        }
     });
 </script>
