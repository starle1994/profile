@extends('layouts.master')

@section('content')
    
<div class="content_top">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3">
      <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
        <a href="{{ route('categories.1') }}">
          <img src="{!! asset('css/img/category/cate1.png') !!}" class="img-cate">
          <div class="tooltip right" role="tooltip"> 
            <div class="tooltip-arrow"></div> 
              <div class="tooltip-inner">{{ trans('user.category1')}}</div> 
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9">
      <marquee direction="right"  style="font-size: 20px; margin-top: 20px;"><a href="" style=" color: #FFA500">RINO </a>-- <a href="" style=" color: #FFA500">URANAI</a> -- <a href="" style=" color: #FFA500">CONSULTANT </a>-- <a href="" style=" color: #FFA500">MATCHING</a></marquee>
    </div>
  </div>
  @include('content.company_images')
</div>
<div class="row">
  <div class="col-lg-9 col-md-9 col-sm-9">
      <div class="content_middle">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm12">
            <a href="{{ route('categories.2') }}">
            <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
              <img src="{!! asset('css/img/category/cate1.png') !!}" class="img-cate">
              <div class="tooltip right" role="tooltip"> 
                <div class="tooltip-arrow"></div> 
                  <div class="tooltip-inner">{{ trans('user.category2')}}</div> 
              </div> 
            </div>
            </a>
          </div>
        </div>
        @include('content.videos')  
      </div>
      <div class="content_middle">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm12">
          <a href="{{ route('categories.3') }}">
            <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
              <img src="{!! asset('css/img/category/cate1.png') !!}" class="img-cate">
              <div class="tooltip right" role="tooltip"> 
                <div class="tooltip-arrow"></div> 
                  <div class="tooltip-inner">{{ trans('user.category3')}}</div> 
              </div> 
            </div>
          </a>
          </div>
        </div>
        @include('content.blogs')
      </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3">
    @include('content.my-app')
  </div>
</div>
  <div class="content_bottom">
    @include('content.blogs-v2')
  </div>
    <div class="content_top">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm12">
        <a href="{{ route('categories.4') }}">
          <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
            <img src="{!! asset('css/img/category/cate1.png') !!}" class="img-cate">
            <div class="tooltip right" role="tooltip"> 
              <div class="tooltip-arrow"></div> 
                <div class="tooltip-inner">{{ trans('user.category4')}}</div> 
            </div> 
          </div>
        </a>
        </div>
      </div>
      <div class="row">
          <div id="portfolio"  >
            <div class="container">
               <div class="row text-center pad-top" >
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="#portfolioBig1"  data-toggle="modal">
                      <img src="{!! asset('css/img/7.jpg') !!}" class="img-responsive " alt="" /></a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                          <a href="#portfolioBig2"  data-toggle="modal">
                      <img src="{!! asset('css/img/8.jpg') !!}" class="img-responsive " alt="" /></a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="#portfolioBig3"  data-toggle="modal">
                      <img src="{!! asset('css/img/9.jpg') !!}" class="img-responsive " alt="" />
                      </a>
                  </div>
                     
              </div>
          </div>             
      </div>
    </div>
@endsection

