<div class="col-lg-12 col-md-12 col-sm-12 video">
  <div class="row">
    @if($videos->isEmpty() == false)
      @foreach($videos as $video)
        <div class="col-lg-4 col-md-4 col-sm-4 list-video">
          <div class="content_middle_leftbar">
            <div class="single_category wow fadeInDown">
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span>  </h2>
              <ul class="catg1_nav">
                <li class="item-video">
                    
                  <div class="catgimg_container" data-toggle="modal" data-target="#myModal">
                    <img src="{!! asset('uploads/'.$video->image) !!}">
                  </div>
                 <div class="title-image">
                    <h3 class="post_titile"><a href="pages/single.html">{{$video->name}}</a></h3>
                    <div class="comments_box" > <span class="meta_date">{{$video->created_at}}</span></span> </div>
                 </div>
                 
                </li>
              </ul>
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
      @endforeach
    @endif
  </div>
</div>


 

 <script>
$('.close').click(function () {
  $('#myModal').hide();
  $('#myModal iframe').attr("src", jQuery("#myModal iframe").attr("src"));
});
</script>