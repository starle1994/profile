@extends('layouts.master-2')

@section('content')
<div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_page_area">
            <h2 class="post_titile">{{ $banner->name}} </h2>
            <div class="single_page_content">
              <img class="img-center" src="{!! asset('uploads/'.$banner->image) !!}" alt="">
              {!! $banner->text !!}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4" style="margin-top: 20px;">
      @include('content.facebook')
      </div>
    </div>

@endsection