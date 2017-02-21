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

      <marquee direction="left"  style="font-size: 14px; margin-top: 25px;"><a href="" style=" color: #FFA500">RINO </a>-- <a href="" style=" color: #FFA500 ">URANAI</a> -- <a href="" style=" color: #FFA500">CONSULTANT </a>-- <a href="" style=" color: #FFA500">MATCHING</a></marquee>

    </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12">
      @include('content.company_images')
  </div>
  
</div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="col-lg-3 col-md-3 col-sm-3">
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

           <div class="col-lg-9 col-md-9 col-sm-9">
            <marquee direction="left"  style="font-size: 14px; margin-top: 25px;"><a href="" style=" color: #FFA500">RINO </a>-- <a href="" style=" color: #FFA500">URANAI</a> -- <a href="" style=" color: #FFA500">CONSULTANT </a>-- <a href="" style=" color: #FFA500">MATCHING</a></marquee>
          </div>
   
  </div>
  <div class="col-lg-9 col-md-9 col-sm-9">
      <div class="content_middle">
        
        @include('content.videos')  
      </div>
      <div class="content_middle">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
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

          <div class="col-lg-8 col-md-8 col-sm-8">
            <marquee direction="left"  style="font-size: 14px; margin-top: 25px;"><a href="" style=" color: #FFA500">RINO </a>-- <a href="" style=" color: #FFA500">URANAI</a> -- <a href="" style=" color: #FFA500">CONSULTANT </a>-- <a href="" style=" color: #FFA500">MATCHING</a></marquee>
          </div>
        </div>
        @include('content.blogs')
      </div>
      <div class="content_bottom">
    @include('content.blogs-v2')
  </div>
  </div>
  <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-3" style="  padding-left: 0px !important; padding-right: 35px !important;">
    @include('content.my-app')
    <div style="margin-top: 20px;">
      @include('content.schedule')
      </div>

    <div style="margin-top: 20px;">
    @include('content.facebook')
    </div>
  </div>

  </div>
 
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
                @foreach($projects as $project)
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="#portfolioBig1"  data-toggle="modal">
                      <img src="{!! asset('uploads/'.$project->image) !!}" class="img-responsive " alt="" />
                       @foreach($project->images as $image)
                    
                         <a class="example-image-link" href="{!! asset('uploads/'.$image->image) !!}" data-lightbox="example-set" data-title="{{$image->description}}">
                  
                             .
                          </a>
                      @endforeach
                    </a>
                  </div>
                    
                @endforeach  
              </div>
          </div>             
      </div>
    </div>
@endsection

