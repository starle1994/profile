<style>
  .thumb-app{
    width: 200px;
    height: 150px;

    background-color: #3e3e3e;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
  }
  .modal.modal-wide .modal-dialog {
  width: 90%;
}
.modal-wide .modal-body {
  overflow-y: auto;
}

/* irrelevant styling */
body { text-align: center; }
body p { 
  max-width: 400px; 
  margin: 20px auto; 
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
             
                <li  data-toggle="modal" data-target="#image_sample">
                <a data-toggle="modal" href="#shortModal" >
                <div class="thumb-app" style="background-image:url({!! asset('uploads/app/1.jpg') !!});"></div></a>
                </li >
                <li>
                   <div class="thumb-app" style="background-image:url({!! asset('uploads/app/2.jpg') !!});"></div>
                </li>
                <li>
                   <div class="thumb-app" style="background-image:url({!! asset('uploads/app/3.jpg') !!});"></div>
                </li>
                <li>
                   <div class="thumb-app" style="background-image:url({!! asset('uploads/app/4.jpg') !!});"></div>
                </li>
              </ul>
      
            </div>
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
         <img src="{{ asset('uploads/1368×600_1343.jpg') }}" alt="" >
      </div>
  
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->