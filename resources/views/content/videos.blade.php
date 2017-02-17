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
                    <?php $target = 'myModal-'.$video->id ; $target_1= '#'.$target ?>
                  <div class="catgimg_container" data-toggle="modal" data-target="{{$target_1}}">
                    <img src="{!! asset('uploads/thumb/'.$video->image) !!}">
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
        <div id="{{$target}}" class="modal fade in" data-keyboard="false" data-backdrop="static" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{{$video->name}}</h4>
              </div>
              <div class="embed-responsive embed-responsive-16by9" class="modal-body" id="yt-player">
                <iframe  src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
            </div>
          </div>
    </div>  
      @endforeach
    @endif
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#myModal').on('hidden.bs.modal', function () {
        callPlayer('yt-player', 'stopVideo');
    });
</script>