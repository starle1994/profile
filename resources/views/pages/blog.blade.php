@extends('layouts.master-2')

@section('content')

    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <div class="archive_style_1">
             
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text">Shoooo Blog</span> </h2>
              @foreach($new_blog as $log)
              <div class="business_category_left wow fadeInDown">
                <ul class="fashion_catgnav">
                  <li>
                    <div class="catgimg2_container"> <a href="{{ route('show.blog.detail',$log->alias) }}"><img alt="" src="{!! asset('uploads/'.$log->images) !!}"></a> </div>
                    <h2 class="catg_titile"><a href="{{ route('show.blog.detail',$log->alias) }}">{{mb_substr($log->name,0,25)}}...</a></h2>
                    <div class="comments_box"> <span class="meta_date">{{ $log->created_at}}</span> <span class="meta_more"><a  href="{{ route('show.blog.detail',$log->alias) }}">Read More...</a></span> </div>
                  </li>
                </ul>
              </div>
             @endforeach
            </div>
          </div>
        </div>

        <div class="pagination_area">
          <nav>
          @include('content.pagination', ['paginator' => $new_blog])
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          <div class="single_bottom_rightbar">
            <h2>Recent Post</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
             @foreach($new_blog as $log)
              <li>
                <div class="media wow fadeInDown"> <a href="{{ route('show.blog.detail',$log->alias) }}" class="media-left"> <img alt="" src="{!! asset('uploads/thumb/'.$log->images) !!}"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">{{mb_substr($log->name,0,25)}}...</a></h4>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
         
         
          <div class="single_bottom_rightbar wow fadeInDown">
            <h2>Categories</h2>
            <ul>
              @foreach($blogs_cate as $cate)

              <li><a href="#">{{$cate->name}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>


@endsection