@extends('layouts.master')

@section('content')
<style type="text/css">
  .body-content {
    background-color: #ddd;
  }
  .head-title {
      background: #ff0000;
      border-radius: 10px;
      color: #fff;
      font-size: 24px;
      padding: 5px 15px;
      z-index: 2;
  }
  .bg-white {
    background-color: #fff;
    padding-top: 20px;
    padding-bottom: 25px;
    margin-top: -5px;
  }
  .bg-white > p {
    margin-top: 10px;
  }
  .main-content .bg-white {
    padding-bottom: 0;
      padding-top: 20px;
      border-top: 1px dashed #ff0000;
  }
  .blog-content .bg-white {
      border-top: none;
      padding-bottom: 15px;
  }
  .blog-content {
      margin-bottom: 30px;
  }
  .special-title {
    margin-top: -5px;
    z-index: 2;
  }
  ul {
    list-style: none;
    padding: 0;
  }
  .block {
      padding-bottom: 20px;
      margin-bottom: 0;
      display: flex;
  }
  .block li {
    float: left;
  }
  .block .img {
    width: 30%;
    margin-right: 15px;
  }
  .block .description {
    width: calc(70% - 15px);
  }
  .sidebar {
    padding-left: 30px;
    padding-right: 30px;
  }
  .sidebar li {
    margin-bottom: 30px;
  }
  .topic {
    margin-bottom: 30px;
  }
  .blog {
    margin-bottom: 30px;
  }
  .blog .bg-white{
    padding-bottom: 20px;
  }
  @media (min-width: 1200px){

    .container {
        width: 970px !important;
    }
    .img img{
      padding: 2px;
      background-color: #fff;
    }
</style>

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

