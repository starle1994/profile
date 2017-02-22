<style>
  .thumb-app{
    height: 150px;

    background-color: #3e3e3e;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
  }
  .modal.modal-wide .modal-dialog {
  width: 100%;
}
.modal-wide .modal-body {
  overflow-y: auto;
}

#tallModal .modal-body p { margin-bottom: 900px }
</style>

<div class="content_middle_rightbar" id="app">
    <div class="single_category wow fadeInDown">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <div class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 APPLICATION
              </a>
            </div>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body item-video" >
             
              <ul class="catg1_nav">
             @if($apps != null)
                @foreach($apps as $app)
                <li  >
                <a data-toggle="modal" href="#shortModal" >
                <?php $link = 'uploads/'.$app->logo ?>
                <div class="thumb-app" style="background-image:url({!! $link !!});"></div></a>
                </li >
                
                @endforeach
              @endif

              </ul>
      
            </div>
          </div>
        </div>
      </div>
    </div>
   <div id="shortModal" class="modal modal-wide fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body">
             <a href="{{ route('show.app.detail','rino-aplication') }}"><img src="{{ asset('uploads/a.jpg') }}" alt="" ></a>
          </div>
      
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div>
  
