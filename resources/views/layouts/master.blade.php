<!DOCTYPE html>
<html>
<head>
<title>.RsGroup</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="google-site-verification" content="3HylZq9Dh1kwha5C6r44XbCm12CGdzvkGWk3A23MjJ4" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='{!! url('css/assets/css/bootstrap.min.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/slick.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/theme.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/style.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/css/style.css') !!}' rel='stylesheet' type='text/css' />

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<style type="text/css">
  .modal-open{
   padding-right: 0px !important;
}
</style>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
  @include('layouts.header')
   <div style="clear: both;"></div>
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
     <script src='{!! url('css/assets/js/jquery.min.js') !!}' type='text/javascript'></script>
    <script src='{!! url('css/assets/js/bootstrap.min.js') !!}' type='text/javascript'></script>
    <script src='{!! url('css/assets/js/wow.min.js') !!}' type='text/javascript'></script>
    <script src='{!! url('css/assets/js/slick.min.js') !!}' type='text/javascript'></script>
    <script src='{!! url('css/assets/js/custom.js') !!}' type='text/javascript'></script> 
<script>
      $(document).ready(function() {
        $('#app_pop1').on('click', function(e){
          var id = $('#app_baner1').val();
          console.log(id);
           $.ajax({
            url: '{{ route('ajaxGetBanner') }}',
                type: 'GET',
                data: {id: id},
                success: function (data) {
                  console.log(data);
                  $('#pop').empty();
                  var html = '<a href="'+data.route+'">';
                  html +='<img src="'+data.src+'" class="img-responsive"></a>';
                  
                  $('#pop').append(html);    
                },
            });
      });
        $('#app_pop2').on('click', function(e){
          var id = $('#app_baner2').val();
          console.log(id);
           $.ajax({
            url: '{{ route('ajaxGetBanner') }}',
                type: 'GET',
                data: {id: id},
                success: function (data) {
                  console.log(data);
                  $('#pop').empty();
                  var html = '<a href="'+data.route+'">';
                  html +='<img src="'+data.src+'" class="img-responsive"></a>';
                  
                  $('#pop').append(html);    
                },
            });
      });
        $('#app_pop3').on('click', function(e){
          var id = $('#app_baner3').val();
          console.log(id);
           $.ajax({
            url: '{{ route('ajaxGetBanner') }}',
                type: 'GET',
                data: {id: id},
                success: function (data) {
                  console.log(data);
                  $('#pop').empty();
                  var html = '<a href="'+data.route+'">';
                  html +='<img src="'+data.src+'" class="img-responsive"></a>';
                  
                  $('#pop').append(html);    
                },
            });
      });
        $('#app_pop4').on('click', function(e){
          var id = $('#app_baner4').val();
          console.log(id);
           $.ajax({
            url: '{{ route('ajaxGetBanner') }}',
                type: 'GET',
                data: {id: id},
                success: function (data) {
                  console.log(data);
                  $('#pop').empty();
                  var html = '<a href="'+data.route+'">';
                  html +='<img src="'+data.src+'" class="img-responsive"></a>';
                  
                  $('#pop').append(html);    
                },
            });
      });
    });
</script>
</body>
</html>
