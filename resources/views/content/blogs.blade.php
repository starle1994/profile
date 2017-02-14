<div class="col-lg-3 col-md-3 col-sm-3">
  <div class="content_middle_leftbar">
    <div class="single_category wow fadeInDown">
     
      <ul class="catg1_nav">
        @foreach($new_blog2 as $log)
        <li class="item-video">
          <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="{!! asset('uploads/thumb/'.$log->images) !!}"></a></div>
          <h3 class="post_titile"><a href="pages/single.html">{{ $log->name}}</a></h3>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
  <div class="col-lg-6 col-md-6 col-sm-6">
    <div class="content_middle_middle">
      <div class="slick_slider2">
        @foreach($new_blog as $log)
          <div class="single_featured_slide"> <a href="pages/single.html"><img src="{!! asset('uploads/thumb/'.$log->images) !!}" alt=""></a>
            <h2><a href="pages/single.html">{{ $log->name}}</a></h2>
            
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    <div class="content_middle_rightbar">
      <div class="single_category wow fadeInDown">
        <ul class="catg1_nav">
        @foreach($new_blog3 as $log)
          <li class="item-video">
            <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="{!! asset('uploads/thumb/'.$log->images) !!}"></a></div>
            <h3 class="post_titile"><a href="pages/single.html">{{ $log->name}}</a></h3>
          </li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>