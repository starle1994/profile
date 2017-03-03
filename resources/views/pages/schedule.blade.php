<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Slick Slider - Example #9</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://googledrive.com/host/0B1RR6fhjI2QROGt0MTFoVkhMdUk/fonts.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>

      <link rel="stylesheet" href="css/style.css">

  <style >
    /* ==== Main CSS === */
*,
*:before,
*:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.04);
}

.Grid1k {
  padding: 0 15px;
  max-width: 1200px;
  margin: auto;
}

.blocks-box,
.slick-slider {
  margin: 0;
  padding: 0!important;
}

.slick-slide {
  float: left /* If RTL Make This Right */ ;
  padding: 0;
}

/* ==== Slider Style === */
.Modern-Slider .item .img-fill{
  height:100vh;
  background:#000;
}

.Modern-Slider .item .img-fill .info{
  position:absolute;
  width:100%;
  height:100%;
  top:0px;
  left:0px;
  background:rgba(0,0,0,.50);
  line-height:100vh;
  text-align:center;
}

.Modern-Slider .item .img-fill img{
  -webkit-filter:blur(5px);
          filter:blur(5px);
}

.Modern-Slider .item .info > div{
  display:inline-block!important;
  vertical-align:middle;
}

.Modern-Slider .NextArrow{
  position:absolute;
  top:50%;
  right:0px;
  width:45px;
  height:45px;
  background:rgba(0,0,0,.50);
  border:0 none;
  margin-top:-22.5px;
  text-align:center;
  font:20px/45px FontAwesome;
  color:#FFF;
  z-index:5;
}

.Modern-Slider .NextArrow:before{content:'\f105';}

.Modern-Slider .PrevArrow{
  position:absolute;
  top:50%;
  left:0px;
  width:45px;
  height:45px;
  background:rgba(0,0,0,.50);
  border:0 none;
  margin-top:-22.5px;
  text-align:center;
  font:20px/45px FontAwesome;
  color:#FFF;
  z-index:5;
}

.Modern-Slider .PrevArrow:before{content:'\f104';}

.Modern-Slider .slick-dots{
  position:absolute;
  height:5px;
  background:rgba(255,255,255,.20);
  bottom:0px;
  width:100%;
  left:0px;
  padding:0px;
  margin:0px;
  list-style-type:none;
}
.Modern-Slider .slick-dots li button{display:none;}
.Modern-Slider .slick-dots li{
  float:left;
  width:0px;
  height:5px;
  background:#d62828;
  position:absolute;
  left:0px;
  bottom:0px;
}

.Modern-Slider .slick-dots li.slick-active{
  width:100%;
  -webkit-animation:ProgressDots 11s both;
          animation:ProgressDots 11s both;
}

.Modern-Slider .item h3{
  font:30px/50px RalewayB;
  text-transform:uppercase;
  color:#FFF;
  -webkit-animation:fadeOutRight 1s both;
          animation:fadeOutRight 1s both;
  margin:0;
  padding:0;
}

.Modern-Slider .item h5{
  margin:0;
  padding:0;
  font:15px/30px RalewayR;
  color:#FFF;
  max-width:600px;
  overflow:hidden;
  height:60px;
  -webkit-animation:fadeOutLeft 1s both;
          animation:fadeOutLeft 1s both;
}

.Modern-Slider .item.slick-active h3{
  -webkit-animation:fadeInDown 1s both 1s;
          animation:fadeInDown 1s both 1s;
}

.Modern-Slider .item.slick-active h5{
  -webkit-animation:fadeInLeft 1s both 1.5s;
          animation:fadeInLeft 1s both 1.5s;
}

.Modern-Slider .item.slick-active{
  -webkit-animation:Slick-FastSwipeIn 1s both;
          animation:Slick-FastSwipeIn 1s both;
}

.Modern-Slider {background:#000;}

/* ==== Slider Image Transition === */
@-webkit-keyframes Slick-FastSwipeIn{
    0%{-webkit-transform:rotate3d(0,1,0,150deg) scale(0)  perspective(400px);transform:rotate3d(0,1,0,150deg) scale(0)  perspective(400px);} 
    100%{-webkit-transform:rotate3d(0,1,0,0deg) scale(1) perspective(400px);transform:rotate3d(0,1,0,0deg) scale(1) perspective(400px);} 
}
@keyframes Slick-FastSwipeIn{
    0%{-webkit-transform:rotate3d(0,1,0,150deg) scale(0)  perspective(400px);transform:rotate3d(0,1,0,150deg) scale(0)  perspective(400px);} 
    100%{-webkit-transform:rotate3d(0,1,0,0deg) scale(1) perspective(400px);transform:rotate3d(0,1,0,0deg) scale(1) perspective(400px);} 
}

@-webkit-keyframes ProgressDots{from{width:0px;}to{width:100%;}}
@keyframes ProgressDots{from{width:0px;}to{width:100%;}}

/* ==== Slick Slider Css Ruls === */
.slick-slider{position:relative;display:block;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}
.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}
.slick-list:focus{outline:none}.slick-list.dragging{cursor:hand}
.slick-slider .slick-track,.slick-slider .slick-list{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
.slick-track{position:relative;top:0;left:0;display:block}
.slick-track:before,.slick-track:after{display:table;content:''}.slick-track:after{clear:both}
.slick-loading .slick-track{visibility:hidden}
.slick-slide{display:none;float:left /* If RTL Make This Right */ ;height:100%;min-height:1px}
.slick-slide.dragging img{pointer-events:none}
.slick-initialized .slick-slide{display:block}
.slick-loading .slick-slide{visibility:hidden}
.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}
  </style>
</head>

<body>
  <div class="Modern-Slider">
  <!-- Item -->
  <div class="item">
    <div class="img-fill">
      <img src="http://i.imgur.com/JNKiMHU.jpg" alt="">
      
    </div>
  </div>
  <!-- // Item -->
  <!-- Item -->
  <div class="item">
    <div class="img-fill">
      <img src="http://i.imgur.com/ESMjChq.jpg" alt="">
      
    </div>
  </div>
  <!-- // Item -->
  <!-- Item -->
  <div class="item">
    <div class="img-fill">
      <img src="http://i.imgur.com/TDxSvHH.jpg" alt="">
      
    </div>
  </div>
  <!-- // Item -->
  <!-- Item -->
  <div class="item">
    <div class="img-fill">
      <img src="http://i.imgur.com/p1XZ3Mu.jpg" alt="">
      <div class="info">
        <div>
          <h3>Separate settings per breakpoint</h3>
          <h5>Donec id ornare dui. Aenean tristique condimentum elit, quis blandit nisl varius sit amet. Sed eleifend felis quis massa viverra</h5>
        </div>
      </div>
    </div>
  </div>
  <!-- // Item -->
</div>
<div class="body-content">
    <div class="container content">

  <section id="mainContent">
    @yield('content')
  </section>
</div>
 </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://kenwheeler.github.io/slick/slick/slick.js'></script>

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
