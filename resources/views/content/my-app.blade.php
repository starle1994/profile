
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
                @foreach($apps as $app)
                <li id="app_pop">
                <a data-toggle="modal" href="#shortModal" >
                <?php $link = 'uploads/'.$app->logo ?>
                <div class="thumb-app" style="background-image:url({!! $link !!});"></div></a>
                <input type="hidden" id="app_baner" value="{{$app->id}}">
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
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body">
              <div id="pop">
                
              </div>
          </div>
      
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div>
  
<script>
      $(document).ready(function() {
        $('#app_pop').on('click', function(e){
          var id = $('#app_baner').val();
           $.ajax({
            url: '{{ route('ajaxGetBanner') }}',
                type: 'GET',
                data: {id: id},
                success: function (data) {
                  console.log(data);
                  $('#pop').empty();
                  var html = '<a href="'+data.route+'">';
                  html +='<img src="'+data.src+'" class="img-responsive"></a>';
                  
                  $('#pop').append(html);    
                },
            });
      });
    });
</script>