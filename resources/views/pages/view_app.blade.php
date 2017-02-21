@extends('layouts.master-2')

@section('content')
<div class="content_bottom app-detail">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
        <a href="{{ route('categories.1') }}">
          <img src="{!! asset('css/img/category/cate2.png') !!}" class="img-cate">
          <div class="tooltip right" role="tooltip"> 
            <div class="tooltip-arrow"></div> 
              <div class="tooltip-inner">{{ trans('user.view_app')}}</div> 
          </div>
        </a>
      </div>
    </div>
      <div class="col-lg-12 col-md-12">
          @foreach($apps as $app)
            <div class="single_page_content banner-app">
              <a href="{{ route('show.app.detail',$app->alias) }}">
                <img class="img-center" src="{!! asset('uploads/'.$app->banner) !!}" alt="">
              </a>
            </div>
          @endforeach
      </div>
      
    </div>

@endsection