<div class="col-lg-4 col-md-4 col-sm-4">
  <div class="content_middle_leftbar">
    <div class="single_category wow fadeInDown">
     
      <ul class="catg1_nav">
        @foreach($new_blog2 as $log)
        <li class="item-video">
          <div class="catgimg_container"> <a href="{{ route('show.blog.detail',$log->alias) }}" class="catg1_img"><img alt="" src="{!! asset('uploads/thumb/'.$log->images) !!}"></a></div>
          <h3 class="post_titile"><a href="{{ route('show.blog.detail',$log->alias) }}">{{ $log->name}}</a></h3>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
  <div class="col-lg-8 col-md-8 col-sm-8">
    <div class="content_middle_middle">
      <div class="slick_slider2">
        @foreach($new_blog as $log1)
          <div class="single_featured_slide"> <a href="{{ route('show.blog.detail',$log1->alias) }}"><img src="{!! asset('uploads/thumb/'.$log1->images) !!}" alt=""></a>
            <h2><a href="{{ route('show.blog.detail',$log1->alias) }}">{{ $log1->name}}</a></h2>
            
          </div>
        @endforeach
      </div>
    </div>
  </div>
