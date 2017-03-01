@extends('layouts.master')

@section('content')
    
<div class="content_top">

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

      <marquee direction="left"  style="font-size: 14px; margin-top: 25px; color: #E93E33; font-weight: bold;">境遇や出会いに感謝・感謝！ほんまおおきに</marquee>

    </div>

  <div class="col-lg-12 col-md-12 col-sm-12">
      @include('content.company_images')
  </div>
  
</div>
<div class="row">

  <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="col-lg-3 col-md-3 col-sm-4">
            <a href="{{ route('categories.2') }}">
            <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
              <img src="{!! asset('css/img/category/cate3.png') !!}" class="img-cate">
              <div class="tooltip right" role="tooltip"> 
                <div class="tooltip-arrow"></div> 
                  <div class="tooltip-inner">{{ trans('user.category2')}}</div> 
              </div> 
            </div>
            </a>
          </div>

           <div class="col-lg-9 col-md-9 col-sm-8">
            <marquee direction="left"  style="font-size: 14px; margin-top: 25px; color: #E93E33; font-weight: bold;">「It’s my shoow」という名前でyoutubeで活動しています</marquee>
          </div>
   
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="content_middle">
                  
                  @include('content.videos')  
                </div>
                <div class="content_middle">
                
                    <div class="col-lg-3 col-md-3 col-sm-3">
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

                    <div class="col-lg-9 col-md-9 col-sm-9">
                      <marquee direction="left"  style="font-size: 14px; margin-top: 25px; color: #E93E33;font-weight: bold;">毎日の出来事を書いています！今すぐチェック↓</marquee>
                    </div>
                
                  @include('content.blogs')
                </div>
                <div class="content_bottom">
              @include('content.blogs-v2')
            </div>
            </div>
            
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
  
    <div class="content_top">
  
        <div class="col-lg-3 col-md-3 col-sm3">
        <a href="{{ route('categories.5') }}">
          <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
            <img src="{!! asset('css/img/category/cate3.png') !!}" class="img-cate">
            <div class="tooltip right" role="tooltip"> 
              <div class="tooltip-arrow"></div> 
                <div class="tooltip-inner">{{ trans('user.category4')}}</div> 
            </div> 
          </div>
        </a>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9">

      <marquee direction="left"  style="font-size: 14px; margin-top: 25px ; color: #E93E33; font-weight: bold;">スターリープロジェクトとはたくさんの人の夢に触れ、応援し合うプロジェクトです</marquee>

    </div>

      <div class="col-lg-12 col-md-12 col-sm-12">
          <div id="portfolio"  >
            
               <div class="pad-top" >
                @foreach($projects as $project)
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="#portfolioBig1"  data-toggle="modal">
                      <img src="{!! asset('uploads/'.$project->image) !!}" class="img-responsive " alt="" />
                    </a>
                  </div>
                    
                @endforeach  
          
          </div>             
      </div>
    </div>
@endsection

