@extends('layouts.master-2')

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
        <a href="{{ route('categories.1') }}">
          <img src="{!! asset('css/img/category/cate2.png') !!}" class="img-cate">
          <div class="tooltip right" role="tooltip"> 
            <div class="tooltip-arrow"></div> 
              <div class="tooltip-inner">{{trans('user.category2')}}</div> 
          </div>
        </a>
       
      </div>
    </div>
   
  
      @foreach($videos as $key => $video)
           <div class="archive_style_1 col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 20px;">
         
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text">{{$key}}</span> </h2>
          </div>
          <?php foreach ($video as $video): ?>
               @if($video != null)
                <?php 
                  if ($video->image == null) {
                    $embedCode = '<iframe src="'.$video->link.'" frameborder="0" allowfullscreen></iframe>';
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
                    $thumbURL = asset('uploads/'.$video->image);
                  }
                    
                    $target = 'myModal-'.$video->id ; 
                    $target_1= '#'.$target ;
                 ?>
               
                  <div class="col-lg-3 col-md-3 col-sm-3" style="margin-bottom: 30px">
                    <div class="content_middle_leftbar">
                      <div class="single_category wow fadeInDown">
                          <div class="item-video">
                               <?php $target = 'myModal-'.$video->id ; $target_1= '#'.$target ?>
                            <div class="catgimg_container" data-toggle="modal" data-target="{{$target_1}}">
                              <img src="{!! $thumbURL !!}" class="img-responsive">
                            </div>
                            <div class="title-image">
                              <p class="post_titile"><a href="">{{$video->name}}</a></p>
                              <div class="comments_box" > <span class="meta_date">{{$video->created_at}}</span> </div>
                            </div>
                            
                          </div>
                     
                      </div>
                    </div>
                  </div>
                  <div id="{{$target}}" class="modal fade" data-backdrop="static"  >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">{{$video->name}}</h4>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9" class="modal-body" >
                          <iframe  src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
                      </div>
                    </div>
                  </div>
                @endif  
          <?php endforeach ?>
       
      @endforeach
   
 <script>
$('.close').click(function () {
  $('.modal').hide();
  $('.modal iframe').attr("src", jQuery(".modal iframe").attr("src"));
});
</script>
@endsection