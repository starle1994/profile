@extends('admin.layouts.master')

@section('content')
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<style type="text/css">
 .box.box-solid{border-top:0}.box.box-solid>.box-header .btn.btn-default{background:transparent}.box.box-solid>.box-header .btn:hover,.box.box-solid>.box-header a:hover{background:rgba(0,0,0,0.1)}.box.box-solid.box-default{border:1px solid #d2d6de}.box.box-solid.box-default>.box-header{color:#444;background:#d2d6de;background-color:#d2d6de}.box.box-solid.box-default>.box-header a,.box.box-solid.box-default>.box-header .btn{color:#444}.box.box-solid.box-primary{border:1px solid #3c8dbc}.box.box-solid.box-primary>.box-header{color:#fff;background:#3c8dbc;background-color:#3c8dbc}.box.box-solid.box-primary>.box-header a,.box.box-solid.box-primary>.box-header .btn{color:#fff}.box.box-solid.box-info{border:1px solid #00c0ef}.box.box-solid.box-info>.box-header{color:#fff;background:#00c0ef;background-color:#00c0ef}.box.box-solid.box-info>.box-header a,.box.box-solid.box-info>.box-header .btn{color:#fff}.box.box-solid.box-danger{border:1px solid #dd4b39}.box.box-solid.box-danger>.box-header{color:#fff;background:#dd4b39;background-color:#dd4b39}.box.box-solid.box-danger>.box-header a,.box.box-solid.box-danger>.box-header .btn{color:#fff}.box.box-solid.box-warning{border:1px solid #f39c12}.box.box-solid.box-warning>.box-header{color:#fff;background:#f39c12;background-color:#f39c12}.box.box-solid.box-warning>.box-header a,.box.box-solid.box-warning>.box-header .btn{color:#fff}.box.box-solid.box-success{border:1px solid #00a65a}.box.box-solid.box-success>.box-header{color:#fff;background:#00a65a;background-color:#00a65a}.box.box-solid.box-success>.box-header a,.box.box-solid.box-success>.box-header .btn{color:#fff}.box.box-solid>.box-header>.box-tools .btn{border:0;box-shadow:none}.box.box-solid[class*='bg']>.box-header{color:#fff}.box .box-group>.box{margin-bottom:5px}.box .knob-label{text-align:center;color:#333;font-weight:100;font-size:12px;margin-bottom:0.3em}.box>.overlay,.overlay-wrapper>.overlay,.box>.loading-img,.overlay-wrapper>.loading-img{position:absolute;top:0;left:0;width:100%;height:100%}
.fc-color-picker{list-style:none;margin:0;padding:0}
.fc-color-picker>li i{float:left;font-size:30px;margin-right:5px;line-height:30px}
.fc-color-picker>li .fa{-webkit-transition:-webkit-transform linear .3s;-moz-transition:-moz-transform linear .3s;-o-transition:-o-transform linear .3s;transition:transform linear .3s}.fc-color-picker>li .fa:hover{-webkit-transform:rotate(30deg);-ms-transform:rotate(30deg);-o-transform:rotate(30deg);transform:rotate(30deg)}#add-new-event{-webkit-transition:all linear .3s;-o-transition:all linear .3s;transition:all linear .3s}
.fc-color-picker>li {
    float: left;
    font-size: 30px;
    margin-right: 5px;
    line-height: 30px;
}
.text-red{color:#dd4b39 !important}.text-yellow{color:#f39c12 !important}.text-aqua{color:#00c0ef !important}.text-blue{color:#0073b7 !important}.text-black{color:#111 !important}.text-light-blue{color:#3c8dbc !important}.text-green{color:#00a65a !important}.text-gray{color:#d2d6de !important}.text-navy{color:#001f3f !important}.text-teal{color:#39cccc !important}.text-olive{color:#3d9970 !important}.text-lime{color:#01ff70 !important}.text-orange{color:#ff851b !important}.text-fuchsia{color:#f012be !important}.text-purple{color:#605ca8 !important}.text-maroon{color:#d81b60 !important}.text-muted {
    color: #777;
}
</style>
<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h1>

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
          </div>
        @endif
    </div>
</div>

{!! Form::open(array('route' => config('quickadmin.route').'.myschedule.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}
@for ($i =1 ; $i<=6; $i++)
  <div class="col-sm-6">
      
  <div class="form-group">
      {!! Form::label('name_event', 'event', array('class'=>'col-sm-2 control-label')) !!}
      <div class="col-sm-10">
        <?php $name_event = 'name_event'.$i ?>
           {!! Form::textarea($name_event, old('name_event'), array('class'=>'form-control ')) !!}
      </div>
  </div><div class="form-group">
      {!! Form::label('start_time', 'start_time', array('class'=>'col-sm-2 control-label')) !!}
      <div class="col-sm-10">
        <?php $start_time = 'start_time'.$i ?>
         {!! Form::text($start_time, old('start_time'), array('class'=>'form-control datepicker')) !!}
          
      </div>
  </div><div class="form-group">
      {!! Form::label('end_time', 'end_time', array('class'=>'col-sm-2 control-label')) !!}
      <div class="col-sm-10">
      <?php $end_time = 'end_time'.$i ?>
          {!! Form::text($end_time, old('end_time'), array('class'=>'form-control datepicker')) !!}
          
      </div>
  </div><div class="form-group">
      {!! Form::label('color', 'color', array('class'=>'col-sm-2 control-label')) !!}
      <div class="col-sm-10">
      <?php $color = 'color'.$i ?>
          {!! Form::text($color, old('color'), array('class'=>'form-control','id'=>$color)) !!}
          
      </div>
  </div>
  
<div class="form-group">
   
    <div class="col-sm-12">
        <div class="box box-solid">
            <div class="box-body">
              <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                <ul class="fc-color-picker" id="color-chooser">
                     <li  id="color0{{$i}}">
                        <input type="hidden" value="#00c0ef" id="aqua">
                        <a class="text-aqua" >
                            <i class="fa fa-square" style="font-size: 20px"></i>
                        </a>
                    </li>
                  <li id="color1{{$i}}"><input type="hidden" value="#0073b7" id="blue"><a class="text-blue" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                  <li id="color2{{$i}}"><input type="hidden" value="#3c8dbc" id="light_blue"><a class="text-light-blue" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                  <li id="color3{{$i}}"><input type="hidden" value="#39cccc" id="teal"><a class="text-teal" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                  <li id="color4{{$i}}"><input type="hidden" value="#f39c12" id="yellow"><a class="text-yellow" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                  <li id="color5{{$i}}"><input type="hidden" value="#ff851b" id="orange"><a class="text-orange" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                  <li id="color6{{$i}}"><input type="hidden" value="#00a65a" id="green"><a class="text-green" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                  <li id="color7{{$i}}"><input type="hidden" value="#01ff70" id="lime"><a class="text-lime" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                  <li id="color8{{$i}}"><input type="hidden" value="#dd4b39" id="red"><a class="text-red" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                  <li id="color9{{$i}}"><input type="hidden" value="#605ca8" id="purple"><a class="text-purple" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                  <li id="color10{{$i}}"><input type="hidden" value="#f012be" id="fuchsia"><a class="text-fuchsia" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                  <li id="color11{{$i}}"><input type="hidden" value="#777" id="muted"><a class="text-muted" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                  <li id="color12{{$i}}"><input type="hidden" value="#001f3f" id="navy"><a class="text-navy" ><i class="fa fa-square"  style="font-size: 20px"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
    </div>    
</div>
  <p>-------------------------------------------------------------------------------------------------</p>
</div>
@endfor



<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}
<script>
    $(document).ready(function() {
        $('#color01').on('click', function(e){
          var color = $('#aqua').val();
          
          $('#color1').empty();
          $('#color1').val(color);
        }); 
        $('#color11').on('click', function(e){
          var color = $('#blue').val();
          $('#color1').empty();
          $('#color1').val(color);
        }); 
        $('#color21').on('click', function(e){
          var color = $('#light_blue').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color31').on('click', function(e){
          var color = $('#teal').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color41').on('click', function(e){
          var color = $('#yellow').val();
          $('#color').empty();
          $('#color').val(color);
        });      
        $('#color51').on('click', function(e){
          var color = $('#orange').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color61').on('click', function(e){
          var color = $('#green').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color71').on('click', function(e){
          var color = $('#lime').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color81').on('click', function(e){
          var color = $('#red').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color91').on('click', function(e){
          var color = $('#purple').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color101').on('click', function(e){
          var color = $('#fuchsia').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color111').on('click', function(e){
          var color = $('#muted').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color121').on('click', function(e){
          var color = $('#navy').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        //
        $('#color01').on('click', function(e){
          var color = $('#aqua').val();
          
          $('#color1').empty();
          $('#color1').val(color);
        }); 
        $('#color11').on('click', function(e){
          var color = $('#blue').val();
          $('#color1').empty();
          $('#color1').val(color);
        }); 
        $('#color21').on('click', function(e){
          var color = $('#light_blue').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color31').on('click', function(e){
          var color = $('#teal').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color41').on('click', function(e){
          var color = $('#yellow').val();
          $('#color').empty();
          $('#color').val(color);
        });      
        $('#color51').on('click', function(e){
          var color = $('#orange').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color61').on('click', function(e){
          var color = $('#green').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color71').on('click', function(e){
          var color = $('#lime').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color81').on('click', function(e){
          var color = $('#red').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color91').on('click', function(e){
          var color = $('#purple').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color101').on('click', function(e){
          var color = $('#fuchsia').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color111').on('click', function(e){
          var color = $('#muted').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color121').on('click', function(e){
          var color = $('#navy').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        //
        $('#color01').on('click', function(e){
          var color = $('#aqua').val();
          
          $('#color1').empty();
          $('#color1').val(color);
        }); 
        $('#color11').on('click', function(e){
          var color = $('#blue').val();
          $('#color1').empty();
          $('#color1').val(color);
        }); 
        $('#color21').on('click', function(e){
          var color = $('#light_blue').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color31').on('click', function(e){
          var color = $('#teal').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color41').on('click', function(e){
          var color = $('#yellow').val();
          $('#color1').empty();
          $('#color1').val(color);
        });      
        $('#color51').on('click', function(e){
          var color = $('#orange').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color61').on('click', function(e){
          var color = $('#green').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color71').on('click', function(e){
          var color = $('#lime').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color81').on('click', function(e){
          var color = $('#red').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color91').on('click', function(e){
          var color = $('#purple').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color101').on('click', function(e){
          var color = $('#fuchsia').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color111').on('click', function(e){
          var color = $('#muted').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        $('#color121').on('click', function(e){
          var color = $('#navy').val();
          $('#color1').empty();
          $('#color1').val(color);
        });
        //
        $('#color02').on('click', function(e){
          var color = $('#aqua').val();
          
          $('#color2').empty();
          $('#color2').val(color);
        }); 
        $('#color12').on('click', function(e){
          var color = $('#blue').val();
          $('#color2').empty();
          $('#color2').val(color);
        }); 
        $('#color22').on('click', function(e){
          var color = $('#light_blue').val();
          $('#color2').empty();
          $('#color2').val(color);
        });
        $('#color32').on('click', function(e){
          var color = $('#teal').val();
          $('#color2').empty();
          $('#color2').val(color);
        });
        $('#color42').on('click', function(e){
          var color = $('#yellow').val();
          $('#color2').empty();
          $('#color2').val(color);
        });      
        $('#color52').on('click', function(e){
          var color = $('#orange').val();
          $('#color2').empty();
          $('#color2').val(color);
        });
        $('#color62').on('click', function(e){
          var color = $('#green').val();
          $('#color2').empty();
          $('#color2').val(color);
        });
        $('#color72').on('click', function(e){
          var color = $('#lime').val();
          $('#color2').empty();
          $('#color2').val(color);
        });
        $('#color82').on('click', function(e){
          var color = $('#red').val();
          $('#color2').empty();
          $('#color2').val(color);
        });
        $('#color92').on('click', function(e){
          var color = $('#purple').val();
          $('#color2').empty();
          $('#color2').val(color);
        });
        $('#color102').on('click', function(e){
          var color = $('#fuchsia').val();
          $('#color2').empty();
          $('#color2').val(color);
        });
        $('#color112').on('click', function(e){
          var color = $('#muted').val();
          $('#color2').empty();
          $('#color2').val(color);
        });
        $('#color122').on('click', function(e){
          var color = $('#navy').val();
          $('#color2').empty();
          $('#color2').val(color);
        });
        //
        $('#color03').on('click', function(e){
          var color = $('#aqua').val();
          
          $('#color3').empty();
          $('#color3').val(color);
        }); 
        $('#color13').on('click', function(e){
          var color = $('#blue').val();
          $('#color3').empty();
          $('#color3').val(color);
        }); 
        $('#color23').on('click', function(e){
          var color = $('#light_blue').val();
          $('#color3').empty();
          $('#color3').val(color);
        });
        $('#color33').on('click', function(e){
          var color = $('#teal').val();
          $('#color3').empty();
          $('#color3').val(color);
        });
        $('#color43').on('click', function(e){
          var color = $('#yellow').val();
          $('#color3').empty();
          $('#color3').val(color);
        });      
        $('#color53').on('click', function(e){
          var color = $('#orange').val();
          $('#color3').empty();
          $('#color3').val(color);
        });
        $('#color63').on('click', function(e){
          var color = $('#green').val();
          $('#color3').empty();
          $('#color3').val(color);
        });
        $('#color73').on('click', function(e){
          var color = $('#lime').val();
          $('#color3').empty();
          $('#color3').val(color);
        });
        $('#color83').on('click', function(e){
          var color = $('#red').val();
          $('#color3').empty();
          $('#color3').val(color);
        });
        $('#color93').on('click', function(e){
          var color = $('#purple').val();
          $('#color3').empty();
          $('#color3').val(color);
        });
        $('#color103').on('click', function(e){
          var color = $('#fuchsia').val();
          $('#color3').empty();
          $('#color3').val(color);
        });
        $('#color113').on('click', function(e){
          var color = $('#muted').val();
          $('#color3').empty();
          $('#color3').val(color);
        });
        $('#color123').on('click', function(e){
          var color = $('#navy').val();
          $('#color3').empty();
          $('#color3').val(color);
        });
         //
        $('#color04').on('click', function(e){
          var color = $('#aqua').val();
          
          $('#color4').empty();
          $('#color4').val(color);
        }); 
        $('#color14').on('click', function(e){
          var color = $('#blue').val();
          $('#color4').empty();
          $('#color4').val(color);
        }); 
        $('#color24').on('click', function(e){
          var color = $('#light_blue').val();
          $('#color4').empty();
          $('#color4').val(color);
        });
        $('#color34').on('click', function(e){
          var color = $('#teal').val();
          $('#color4').empty();
          $('#color4').val(color);
        });
        $('#color44').on('click', function(e){
          var color = $('#yellow').val();
          $('#color4').empty();
          $('#color4').val(color);
        });      
        $('#color54').on('click', function(e){
          var color = $('#orange').val();
          $('#color4').empty();
          $('#color4').val(color);
        });
        $('#color64').on('click', function(e){
          var color = $('#green').val();
          $('#color4').empty();
          $('#color4').val(color);
        });
        $('#color74').on('click', function(e){
          var color = $('#lime').val();
          $('#color4').empty();
          $('#color4').val(color);
        });
        $('#color84').on('click', function(e){
          var color = $('#red').val();
          $('#color4').empty();
          $('#color4').val(color);
        });
        $('#color94').on('click', function(e){
          var color = $('#purple').val();
          $('#color4').empty();
          $('#color4').val(color);
        });
        $('#color104').on('click', function(e){
          var color = $('#fuchsia').val();
          $('#color4').empty();
          $('#color4').val(color);
        });
        $('#color114').on('click', function(e){
          var color = $('#muted').val();
          $('#color4').empty();
          $('#color4').val(color);
        });
        $('#color124').on('click', function(e){
          var color = $('#navy').val();
          $('#color4').empty();
          $('#color4').val(color);
        });
         //
        $('#color05').on('click', function(e){
          var color = $('#aqua').val();
          
          $('#color5').empty();
          $('#color5').val(color);
        }); 
        $('#color15').on('click', function(e){
          var color = $('#blue').val();
          $('#color5').empty();
          $('#color5').val(color);
        }); 
        $('#color25').on('click', function(e){
          var color = $('#light_blue').val();
          $('#color5').empty();
          $('#color5').val(color);
        });
        $('#color35').on('click', function(e){
          var color = $('#teal').val();
          $('#color5').empty();
          $('#color5').val(color);
        });
        $('#color45').on('click', function(e){
          var color = $('#yellow').val();
          $('#color5').empty();
          $('#color5').val(color);
        });      
        $('#color55').on('click', function(e){
          var color = $('#orange').val();
          $('#color5').empty();
          $('#color5').val(color);
        });
        $('#color65').on('click', function(e){
          var color = $('#green').val();
          $('#color5').empty();
          $('#color5').val(color);
        });
        $('#color75').on('click', function(e){
          var color = $('#lime').val();
          $('#color5').empty();
          $('#color5').val(color);
        });
        $('#color85').on('click', function(e){
          var color = $('#red').val();
          $('#color5').empty();
          $('#color5').val(color);
        });
        $('#color95').on('click', function(e){
          var color = $('#purple').val();
          $('#color5').empty();
          $('#color5').val(color);
        });
        $('#color105').on('click', function(e){
          var color = $('#fuchsia').val();
          $('#color5').empty();
          $('#color5').val(color);
        });
        $('#color115').on('click', function(e){
          var color = $('#muted').val();
          $('#color5').empty();
          $('#color5').val(color);
        });
        $('#color125').on('click', function(e){
          var color = $('#navy').val();
          $('#color5').empty();
          $('#color5').val(color);
        });
         //
        $('#color06').on('click', function(e){
          var color = $('#aqua').val();
          
          $('#color6').empty();
          $('#color6').val(color);
        }); 
        $('#color16').on('click', function(e){
          var color = $('#blue').val();
          $('#color6').empty();
          $('#color6').val(color);
        }); 
        $('#color26').on('click', function(e){
          var color = $('#light_blue').val();
          $('#color6').empty();
          $('#color6').val(color);
        });
        $('#color36').on('click', function(e){
          var color = $('#teal').val();
          $('#color6').empty();
          $('#color6').val(color);
        });
        $('#color46').on('click', function(e){
          var color = $('#yellow').val();
          $('#color6').empty();
          $('#color6').val(color);
        });      
        $('#color56').on('click', function(e){
          var color = $('#orange').val();
          $('#color6').empty();
          $('#color6').val(color);
        });
        $('#color66').on('click', function(e){
          var color = $('#green').val();
          $('#color6').empty();
          $('#color6').val(color);
        });
        $('#color76').on('click', function(e){
          var color = $('#lime').val();
          $('#color6').empty();
          $('#color6').val(color);
        });
        $('#color86').on('click', function(e){
          var color = $('#red').val();
          $('#color6').empty();
          $('#color6').val(color);
        });
        $('#color96').on('click', function(e){
          var color = $('#purple').val();
          $('#color6').empty();
          $('#color6').val(color);
        });
        $('#color106').on('click', function(e){
          var color = $('#fuchsia').val();
          $('#color6').empty();
          $('#color6').val(color);
        });
        $('#color116').on('click', function(e){
          var color = $('#muted').val();
          $('#color6').empty();
          $('#color6').val(color);
        });
        $('#color126').on('click', function(e){
          var color = $('#navy').val();
          $('#color6').empty();
          $('#color6').val(color);
        });
    });
</script>
@endsection