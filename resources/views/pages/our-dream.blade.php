@extends('layouts.master-2')

@section('content')
<style type="text/css">
  .well { margin-top:20px; background-color: #E93E33; border-radius: 4px; border: none; border-bottom: 3px solid #eeeeee; box-shadow: none; margin-bottom: 30px; padding: 20px; color: #fff}
.well h2, .well h3, .well h4, .well h5, .well h6 { margin-top: 10px; color: #fff}
</style>
<div class="content_bottom app-detail">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
        <a href="{{ route('categories.1') }}">
          <img src="{!! asset('css/img/category/6-small-447.png') !!}" class="img-cate">
          <div class="tooltip right" role="tooltip"> 
            <div class="tooltip-arrow"></div> 
              <div class="tooltip-inner">ドリームプロジェクト</div> 
          </div>
        </a>
      </div>
    </div>
      <div class="col-lg-12 col-md-12 text-center">
            <div class="single_page_content banner-app">
    
              <div class="row">
             @if($dreams->isEmpty()==false)
                @foreach($dreams as $dream)
                  <div class="col-md-3">
                  <a href="{{ route('dream.detail',$dream->alias) }}">
                    <div class="well">
                        <img src="{!! asset('uploads/'.$dream->image) !!}" class="img-cate">
                        <div><h3>{{$dream->name}}</h3></div>
                      </div>
                  </a>
                    </div>
                @endforeach

              @endif
              </div>
              
          </div>
      </div>
</div>
@endsection