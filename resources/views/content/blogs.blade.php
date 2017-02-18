<div class="col-lg-12 col-md-12 col-sm-12 video">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="content_middle_leftbar">
        <div class="single_category wow fadeInDown">
         
          <ul class="catg1_nav">
            @foreach($new_blog2 as $log)
            <li class="item-video">
              <div class="catgimg_container"> 
                <a href="{{ route('show.blog.detail',$log->alias) }}" class="catg1_img">
                  <div class="thumb-smaller" style="background-image:url({!! asset('uploads/'.$log->images) !!});"></div>
                </a>
                </div>
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
                <h2 ><a href="{{ route('show.blog.detail',$log1->alias) }}">{{ $log1->name}}</a></h2>
                 <div class="comments_box"> 
                  <span class="meta_date">{{$log1->created_at}}</span><a  href="{{ route('show.blog.detail',$log1->alias) }}">Read More...</a>
                </div>
                <p>{{$log1->text}}</p>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
</div>
