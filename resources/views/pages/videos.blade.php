@extends('layouts.master-2')

@section('content')
<div class="row">
    <div class="archive_style_1" style="margin-bottom: 20px;">
             
      <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text">It's my shooow</span> </h2>
    </div>
  
      @foreach($videos as $key => $video)
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
              <a href="{{ route('categories.1') }}">
                <img src="{!! asset('css/img/category/cate2.png') !!}" class="img-cate">
                <div class="tooltip right" role="tooltip"> 
                  <div class="tooltip-arrow"></div> 
                    <div class="tooltip-inner">{{ $key}}</div> 
                </div>
              </a>
             
            </div>
          </div>
          <?php foreach ($video as $video): ?>
               @if($video != null)
                <?php 
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
                 ?>
                 
                  <div class="col-lg-3 col-md-3 col-sm-3" style="margin-bottom: 30px">
                    <div class="content_middle_leftbar">
                      <div class="single_category wow fadeInDown">
                        
          
                          <div class="item-video">
                              
                            <div class="catgimg_container" data-toggle="modal" data-target="#myModal">
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
                  <div id="myModal" class="modal fade" >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">{{$video->name}}</h4>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9" class="modal-body" >
                          <iframe  src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                  </div>
                @endif  
          <?php endforeach ?>
       
      @endforeach
   
</div>

 <script>
$('.close').click(function () {
  $('#myModal').hide();
  $('#myModal iframe').attr("src", jQuery("#myModal iframe").attr("src"));
});
</script>
@endsection