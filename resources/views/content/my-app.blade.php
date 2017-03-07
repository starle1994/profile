
<div class="content_middle_rightbar" id="app">
    <div class="single_category wow fadeInDown">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default item-video">
          <div class="panel-heading" role="tab" id="headingOne">
            <div class="panel-title">
              <a href="{{ route('categories.9') }}" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 {{trans('user.category9')}}
              </a>
            </div>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body " >
             
              <ul class="catg1_nav">
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
                  <li id="{{$id}}">
                  <a data-toggle="modal" href="{{ ($app->banner == null) ? '' : '#shortModal'}}" >
                  <?php $link = 'uploads/'.$app->logo ?>
                  <img src="{{ asset('uploads') . '/'.  $app->logo }}" class="img-responsive"></a>
                  <input type="hidden" id="{{$id_ban}}" value="{{$app->id}}">
                  </li >
                  <?php $i++; ?>
                @endforeach
              @endif
              </ul>
      
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
  </div>
