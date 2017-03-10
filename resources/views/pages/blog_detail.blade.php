@extends('layouts.master-2')

@section('content')
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58b83b17ca4ed388"></script> 
<div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_page_area">
            <ol class="breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li><a href="{{ route('categories.3') }}">My Blog</a></li>
              <li class="active">{{($cate!=null) ? $cate->name : ''}}</li>
            </ol>
            <h2 class="post_titile">{{ $get_blog->name}} </h2>
            <div class="single_page_content">
              <div class="post_commentbox"> <i class="fa fa-calendar"></i>{{ $get_blog->created_at}} </span> <a href="#"><i class="fa fa-tags"></i>{{($cate!=null) ? $cate->name : ''}}</a> </div>
              <img class="img-center" src="{!! asset('uploads/'.$get_blog->images) !!}" alt="">
              {!! $get_blog->description !!}
            </div>
          </div>
        </div>
        <div class="similar_post">
          <h2>May be you Like <i class="fa fa-thumbs-o-up"></i></h2>
          <ul class="small_catg similar_nav wow fadeInDown animated">
          <?php for ($i=1; $i < $recent_post->count(); $i++) { ?>
             <li>
              <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="{!! asset('uploads/thumb/'.$recent_post[$i]->images) !!}" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">{{ $recent_post[$i]->name}} </a></h4>
                  <p>{{ $recent_post[$i]->text }}  </p>
                </div>
              </div>
            </li>
          <?php } ?>
           
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-4" style="margin-top: 20px;">
      @include('content.facebook')
      </div>
    </div>

@endsection