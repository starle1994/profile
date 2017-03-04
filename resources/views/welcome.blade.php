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
        <div class=" blog">
          <div class="col-md-12  bg-white">
             <div class="carousel slide media-carousel" id="media">
                <div class="carousel-inner ">
                    <?php $i = 0 ;foreach ($blogs as $key => $values): ?>
                      <div class="item  {{ ($i == 0) ? 'active' : '' }}">
                        <div class="row">
                        <?php foreach ($values as  $value): ?>
                          <div class="col-md-4">
                            <a class="thumbnail" href="#"><img alt=""  src="{!! asset('uploads/'.$value->images) !!}"> <p>{{$value->name}}</p></a>
                          </div> 
                        <?php endforeach ?>
                         </div>
                      </div>
                      <?php $i++ ?>
                    <?php endforeach ?>
              </div>
              <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
              <a data-slide="next" href="#media" class="right carousel-control">›</a>
            </div>                          
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 special-title">
            <div class="head-title">Blog</div>
          </div>
        </div>
        <div class=" blog">
          <div class="col-md-12  bg-white">
             <div class="carousel slide media-carousel" id="media">
                <div class="carousel-inner ">
                    <?php $i = 0 ;foreach ($company_images as $key => $values): ?>
                      <div class="item  {{ ($i == 0) ? 'active' : '' }}">
                        <div class="row">
                        <?php foreach ($values as  $value): ?>
                          <div class="col-md-4">
                            <a class="thumbnail" href="#"><img alt=""  src="{!! asset('uploads/'.$value->images) !!}"> <p>{{$value->name}}</p></a>
                          </div> 
                        <?php endforeach ?>
                         </div>
                      </div>
                      <?php $i++ ?>
                    <?php endforeach ?>
              </div>
              <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
              <a data-slide="next" href="#media" class="right carousel-control">›</a>
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
            <img width="100%" src="{!! asset('css/img/content/video.png') !!}"/>
          </div>
          <div class="col-xs-12 col-sm-6 bg-white">
           <img width="100%" src="{!! asset('css/img/content/blog.png') !!}"/>
          </div>
         <div class="col-xs-12 col-sm-6 bg-white">
            <img width="100%" src="{!! asset('css/img/content/app.png') !!}"/>
          </div>
          <div class="col-xs-12 col-sm-6 bg-white">
           <img width="100%" src="{!! asset('css/img/content/photolist.png') !!}"/>
          </div>
          <div class="col-xs-12 col-sm-6 bg-white">
            <img width="100%" src="{!! asset('css/img/content/schedule.png') !!}"/>
          </div>
          <div class="col-xs-12 col-sm-6 bg-white">
           <img width="100%" src="{!! asset('css/img/content/starry-project.png') !!}"/>
          </div>
          <div class="col-xs-12 col-sm-6 bg-white">
            <img width="100%" src="{!! asset('css/img/content/dream.png') !!}"/>
          </div>
          <div class="col-xs-12 col-sm-6 bg-white">
           <img width="100%" src="{!! asset('css/img/content/contact.png') !!}"/>
          </div>
        </div>
      </div>
      </div>
    </div>
@endsection

