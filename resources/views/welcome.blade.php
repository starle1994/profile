@extends('layouts.master')

@section('content')
  @foreach($videos as $key => $values)
    <div class="row">
      <div class="col-md-12 special-title">
        <div class="head-title">{{$key}}</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        @foreach($values as $value)
            <?php 
                $embedCode = '<iframe src="'.$value->link.'" frameborder="0" allowfullscreen></iframe>';
                preg_match('/src="([^"]+)"/', $embedCode, $match);

                // Extract video url from embed code
                $videoURL = $match[1];
                $urlArr = explode("/",$videoURL);
                $urlArrNum = count($urlArr);

                // YouTube video ID
                $youtubeVideoId = $urlArr[$urlArrNum - 1];

                // Generate youtube thumbnail url
                $thumbURL = 'http://img.youtube.com/vi/'.$youtubeVideoId.'/0.jpg';
             ?>
        <div class="bg-white col-xs-12 col-sm-3"><img src="{!! $thumbURL !!}" class="img-responsive"></div>
        @endforeach
      </div>
    </div>
@endforeach

    <div class="row" style="margin-top: 20px;">
      <ul class="sidebar col-xs-12 col-sm-4 col-md-3">
       @foreach($apps as $app)
        <li>
          <img width="100%" src="{!! asset('uploads/'.$app->logo) !!}"/>
        </li>
       @endforeach
       <li>
        @include('content.facebook')
     
       </li>
      </ul>
      <div class="main-content col-xs-12 col-sm-8 col-md-9">
        <div class="row topic">
          <div class="col-xs-12 col-md-6">
            <div class="head-title col-md-12">Schedule</div>
            <div class="col-md-12 bg-white">
              <ul class="block">
                <li class="img">
                  <img width="100%" src="{{ url('images/img.png') }}"/>
                </li>
                <li class="description">
                  description <br/>
                  description
                </li>
              </ul>
            </div>
            <div class="col-md-12 bg-white">
              <ul class="block">
                <li class="img">
                  <img width="100%" src="{{ url('images/img.png') }}"/>
                </li>
                <li class="description">
                  description <br/>
                  description
                </li>
              </ul>
            </div>
            <div class="col-md-12 bg-white">
              <ul class="block">
                <li class="img">
                  <img width="100%" src="{{ url('images/img.png') }}"/>
                </li>
                <li class="description">
                  description <br/>
                  description
                </li>
              </ul>
            </div>
          </div>

          <div class="col-xs-12 col-md-6">
            <div class="head-title col-md-12">Topice</div>
            <div class="col-md-12 bg-white">
              <ul class="block">
                <li class="img">
                  <img width="100%" src="{{ url('images/img.png') }}"/>
                </li>
                <li class="description">
                  description <br/>
                  description
                </li>
              </ul>
            </div>
            <div class="col-md-12 bg-white">
              <ul class="block">
                <li class="img">
                  <img width="100%" src="{{ url('images/img.png') }}"/>
                </li>
                <li class="description">
                  description <br/>
                  description
                </li>
              </ul>
            </div>
            <div class="col-md-12 bg-white">
              <ul class="block">
                <li class="img">
                  <img width="100%" src="{{ url('images/img.png') }}"/>
                </li>
                <li class="description">
                  description <br/>
                  description
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 special-title">
            <div class="head-title">Blog</div>
          </div>
        </div>
      <div class="row blog">
        <div class="col-md-12">
            <div class="bg-white col-xs-12 col-md-4">
              <img width="100%" src="{{ url('images/img.png') }}"/>
              <p>description description description description description </p>
            </div>
            <div class="bg-white col-xs-12 col-md-4">
              <img width="100%" src="{{ url('images/img.png') }}"/>
              <p>description description description description description </p>
            </div>
            <div class="bg-white col-xs-12 col-md-4">
              <img width="100%" src="{{ url('images/img.png') }}"/>
              <p>description description description description description </p>
            </div>
          </div>
      </div>

      <div class="row">
          <div class="col-md-12 special-title">
            <div class="head-title">Content</div>
          </div>
        </div>
      <div class="row blog-content">
        <div class="col-xs-12">
          <div class="col-xs-12 col-sm-6 bg-white">
            <img width="100%" src="{{ url('images/img.png') }}"/>
          </div>
          <div class="col-xs-12 col-sm-6 bg-white">
            <img width="100%" src="{{ url('images/img.png') }}"/>
          </div>
          <div class="col-xs-12 col-sm-6 bg-white">
            <img width="100%" src="{{ url('images/img.png') }}"/>
          </div>
          <div class="col-xs-12 col-sm-6 bg-white">
            <img width="100%" src="{{ url('images/img.png') }}"/>
          </div>
        </div>
      </div>
      </div>
    </div>
@endsection

