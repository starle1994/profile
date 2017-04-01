@extends('layouts.master')

@section('content')
<style type="text/css">
  .td-video-play-ico > img {
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
}
.shadow{
      box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16), 0 0 0 1px rgba(0,0,0,0.08);
    transition: box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
}
.banner{
  padding-right: 0px;
  padding-left: 0px;
}
.thumbnail{
  height: 200px;
  text-align: center;
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
              if ($value->image == null) {
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
              }else{
                $thumbURL = asset('uploads/'.$value->image);
              }
                
                $target = 'myModal-'.$value->id ; 
                $target_1= '#'.$target ;
             ?>

        <div class="bg-white col-xs-6 col-sm-3 col-md-3" data-toggle="modal" data-target="{{$target_1}}">
            <img src="{!! $thumbURL !!}" class="img-responsive">
            <span class="td-video-play-ico">
               <img width="40" class="td-retina" src="{!! asset('css/img/ico-video-large.png') !!}" alt="video">
           </span>
        </div>
        <div id="{{$target}}" class="modal fade in" data-keyboard="false" data-backdrop="static" >
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{{$value->name}}</h4>
              </div>
              <div class="embed-responsive embed-responsive-16by9" class="modal-body" id="yt-player">
                <iframe  src="{{$value->link}}" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> 
        @endforeach
      </div>
    </div>
@endforeach

    <div class="row" style="margin-top: 20px;">
      <ul class="sidebar col-xs-12 col-sm-4 col-md-3">
        @if($apps != null)
                <?php $i =1 ?>
                @foreach($apps as $app)
                  <?php 
                    $id = 'a';
                    $id_ban = 'a';

                    if ($app->banner != null) {
                      $id = 'app_pop'.$i ;
                      $id_ban = 'app_baner'.$i;
                    }
                  ?>
                  <li class="col-xs-6 col-sm-12 col-md-12 banner" id="{{$id}}">
                  <a data-toggle="modal" href="{{ ($app->banner == null) ? '' : '#shortModal'}}" >
                  <?php $link = 'uploads/'.$app->logo ?>
                  <img src="{{ asset('uploads') . '/'.  $app->logo }}" class="img-responsive"></a>
                  <input type="hidden" id="{{$id_ban}}" value="{{$app->id}}">
                  </li >
                  <?php $i++; ?>
                @endforeach
              @endif
        
       <li>
        @include('content.facebook')
       
       </li>
      </ul>
      <div class="main-content col-xs-12 col-sm-8 col-md-9">
        <div class="row topic">
          <div class="col-xs-12 col-md-6 col-sm-6 ">
            <div class="head-title col-md-12"><a href="{{ route('schedule')}}">{{trans('user.schedule')}}</a></div>
            <div class="panel-body shadow" id="mygrid-wrapper-div" data-spy="scroll" style="  overflow: auto;
    height: 250px;background-color: #fff">
              <div class="col-md-12">
                @if($schedules != null)
                
                <?php foreach ($schedules as  $value): ?>
                                    <div class="col-md-12 bg-white">
                        <ul class="block">
                          <strong>{{$value->start_time}}</strong>
                          <li class="description">
                           
                           {{$value->name_event}}
                          
                          </li>
                        </ul>
                      </div>
                <?php endforeach ?>
              @endif
              </div>
              
          </div>
        </div>
            
          <div class="col-xs-12 col-md-6 col-sm-6">
            <div class="head-title col-md-12">{{trans('user.topice')}}</div>
            <div class="panel-body shadow " id="mygrid-wrapper-div" data-spy="scroll" style="  overflow: auto; height: 250px;background-color: #fff">
                   <?php $i = 0 ;foreach ($blogs as $key => $values): ?>
                      <?php foreach ($values as  $value): ?>
                        <div class="col-md-12 bg-white">
                            <ul class="block">
                              <li class="img">
                                          <a  href="{{ route('show.blog.detail',$value->alias) }}"><img width="100%" alt=""  src="{!! asset('uploads/'.$value->images) !!}"> </a>
                                        </li>
                              <li class="description">
                               <a  href="{{ route('show.blog.detail',$value->alias) }}">
                               {{mb_substr($value->name,0,25)}}...
                               </a>
                              </li>
                            </ul>
                        </div>
                    <?php endforeach ?>
                <?php endforeach ?>
              </div>
          </div>
        </div>

         <div class="row topic">
          <div class="col-md-12 special-title">
            <div class="head-title"><a href="{{ route('categories.1')}}">{{trans('user.category1')}}</a></div>
          </div>
       
          <div class="col-md-12  ">
             <div class="carousel slide media-carousel bg-white shadow" id="media">
                <div class="carousel-inner " style="padding-bottom: 20px;">
                    <?php $i = 0 ;foreach ($company_images as $key => $values): ?>
                      <div class="item  {{ ($i == 0) ? 'active' : '' }}">
                        <div class="row">
                        <?php foreach ($values as  $value): ?>
                          <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="thumb-smaller img-thumbnail" style="background-image:url({!! asset('uploads/'.$value->image) !!});"></div>
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

        <div class="row topic">
          <div class="col-md-12 special-title">
            <div class="head-title"><a href="{{ route('categories.3')}}">{{trans('user.category3')}}</a></div>
          </div>
          <div class="col-md-12  ">
             <div class="carousel bg-white slide media-carousel shadow" id="media1">
                <div class="carousel-inner ">
                    <?php $i = 0 ;foreach ($blogs as $key => $values): ?>
                      <div class="item  {{ ($i == 0) ? 'active' : '' }}">
                        <div class="row">
                        <?php foreach ($values as  $value): ?>
                          <div class="col-md-4 col-sm-4 col-xs-4">
                            <a class="thumbnail" href="{{ route('show.blog.detail',$value->alias) }}">
                            <div class="thumb-smaller img-thumbnail" style="background-image:url({!! asset('uploads/'.$value->images) !!});"></div>
                            {{mb_substr($value->name,0,25)}}...</a>
                          </div> 
                        <?php endforeach ?>
                         </div>
                      </div>
                      <?php $i++ ?>
                    <?php endforeach ?>
              </div>
            </div>                          
          </div>
        </div>
       
        <div class="row topic">
          <div class="col-md-12 special-title">
            <div class="head-title"><a href="{{ route('categories.4')}}">{{trans('user.category4')}}</a></div>
          </div>
          <div class="col-md-12  ">
             <div class="carousel bg-white slide media-carousel shadow" id="media2">
                <div class="carousel-inner " style="padding-bottom: 20px;">
                    <?php $i = 0 ;foreach ($projects as $key => $values): ?>
                      <div class="item  {{ ($i == 0) ? 'active' : '' }}">
                        <div class="row">
                        <?php foreach ($values as  $value): ?>
                          <div class="col-md-4 col-sm-4 col-xs-4">
                          <a href="{{ route('dream.detail',$value->alias) }}">
                            <div class="thumb-smaller img-thumbnail" style="background-image:url({!! asset('uploads/'.$value->image) !!});"></div></a>
                          </div>
                        <?php endforeach ?>
                         </div>
                      </div>
                      <?php $i++ ?>
                    <?php endforeach ?>
              </div>
              <a data-slide="prev" href="#media2" class="left carousel-control">‹</a>
              <a data-slide="next" href="#media2" class="right carousel-control">›</a>
            </div>                          
          </div>
        </div>
       
        

      <div class="row">
          <div class="col-md-12 special-title">
            <div class="head-title">{{trans('user.content')}}</div>
          </div>
        </div>
      <div class="row blog-content ">
        <div class="col-xs-12 ">
          <div class="col-xs-6 col-sm-6 bg-white shadow ">
          <a href="{{ route('categories.2')}}">
            <img width="100%" src="{!! asset('css/img/content/video.png') !!}"/>
          </a>
          </div>
          <div class="col-xs-6 col-sm-6 bg-white shadow ">
          <a href="{{ route('categories.3')}}">
           <img width="100%" src="{!! asset('css/img/content/blog.png') !!}"/>
           </a>
          </div>
         <div class="col-xs-6 col-sm-6 bg-white shadow">
         <a href="{{ route('categories.9')}}">
            <img width="100%" src="{!! asset('css/img/content/app.png') !!}"/>
          </a>
          </div>
          <div class="col-xs-6 col-sm-6 bg-white shadow">
          <a href="{{ route('categories.1')}}">
           <img width="100%" src="{!! asset('css/img/content/photolist.png') !!}"/>
           </a>
          </div>
          <div class="col-xs-6 col-sm-6 bg-white shadow">
          <a href="{{ route('schedule')}}">
            <img width="100%" src="{!! asset('css/img/content/schedule.png') !!}"/>
            </a>
          </div>
          <div class="col-xs-6 col-sm-6 bg-white shadow">
          <a href="{{ route('categories.5')}}">
           <img width="100%" src="{!! asset('css/img/content/starry-project.png') !!}"/>
           </a>
          </div>
          <div class="col-xs-6 col-sm-6 bg-white shadow" style=" border-bottom-left-radius:8px;">
          <a href="{{ route('categories.4')}}">
            <img width="100%" src="{!! asset('css/img/content/dream.png') !!}"/>
            </a>
          </div>
          <div class="col-xs-6 col-sm-6 bg-white shadow" style=" border-bottom-right-radius:8px;">
          <a href="{{ route('categories.10')}}">
           <img width="100%" src="{!! asset('css/img/content/contact.png') !!}"/>
           </a>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div id="shortModal" class="modal modal-wide fade" data-backdrop="static" >
      <div class="modal-dialog modal-lg" style="width: 80%; margin-top: 10%">
        <div class="modal-content">
          <div class="modal-body" style="padding: 0px 15px 15px 15px;background-color: #E93E33 ">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <div id="pop">
                
              </div>
          </div>
      
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

