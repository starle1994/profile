@extends('layouts.master-2')

@section('content')
<style type="text/css">
  .well { margin-top:20px; background-color: #E93E33; border-radius: 4px; border: none; border-bottom: 3px solid #eeeeee; box-shadow: none; margin-bottom: 30px; padding: 20px; color: #fff}
.well h2, .well h3, .well h4, .well h5, .well h6 { margin-top: 10px; color: #fff}
.lock {
  display: flex;
}
.lock > div {
  display: inline-block;
  align-self: flex-end;
}
.lock .well {
  margin-bottom: 10px;
}
@media (max-width: 640px) {
  .lock {
    display: block;
  }
}
</style>
<div class="content_bottom app-detail">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
        <a href="{{ route('categories.1') }}">
          <img src="{!! asset('css/img/category/cate2.png') !!}" class="img-cate">
          <div class="tooltip right" role="tooltip"> 
            <div class="tooltip-arrow"></div> 
              <div class="tooltip-inner">{{ $banner->name}}</div> 
          </div>
        </a>
         <div class="tooltip " role="tooltip" style="margin-left: 20px;" >
            <div class="tooltip-inner" style="background-color: #fff !important"><img class="img-responsive" src="{!! asset('css/img/category/app-small-995.png') !!}" class="img-cate" style="    display: inline;"></div>
        </div>
        <div class="tooltip " role="tooltip" >
            <div class="tooltip-inner" style="background-color: #fff !important"><img class="img-responsive" src="{!! asset('css/img/category/google-small-997.png') !!}" class="img-cate" style="    display: inline;"></div>
        </div>
      </div>
    </div>
      <div class="col-lg-12 col-md-12">
            <div class="single_page_content banner-app">
              <img class="img-center" src="{!! asset('uploads/'.$banner->banner) !!}" alt="">
              <div class="row">
              @foreach($banner->images as $images)
                  <div class="col-md-6">
          <div class="row lock">
            <div class="col-xs-12 col-md-6">
              <div class="overview-panel">
                <img src="{{ asset('uploads/'.$images->image) }}" class="img-responsive" alt="Free Bootstrap Creative Theme - Start Bootstrap">
              </div>
            </div>
            <div class="col-xs-12 col-md-6">
              <div class="well">
                <h3>{{$images->name}}</h3>
                 
                <div>{!!$images->description!!}</div>
              </div>
            </div>
          </div>
                  </div>
                  @endforeach
              </div>
              
          </div>
      </div>
</div>
@endsection