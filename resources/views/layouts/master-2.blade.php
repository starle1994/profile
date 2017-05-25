<!DOCTYPE html>
<html>
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5695332076027487",
    enable_page_level_ads: true
  });
</script>
<title>.RsGroup</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="google-site-verification" content="3HylZq9Dh1kwha5C6r44XbCm12CGdzvkGWk3A23MjJ4" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='{!! url('css/assets/css/bootstrap.min.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/theme.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/assets/css/style.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('css/css/style.css') !!}' rel='stylesheet' type='text/css' />
<link href='{!! url('dist/css/lightbox.min.css') !!}' rel='stylesheet' type='text/css' />

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<style type="text/css">
  .content{background-color: #fff}
  .modal-open{
   padding-right: 0px !important;
}
</style>
<body>
    @include('layouts.header-2')
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
    <script src='{!! url('dist/js/lightbox-plus-jquery.min.js') !!}'></script>
</body>
</html>