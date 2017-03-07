@extends('layouts.master-2')

@section('content')
<style>
   
  .lb-dataContainer{
    background-color: white;
  }
  .company_image {
    margin-top:40px;    
}

.company_image .title {
    margin-bottom:20px;    
}

.company_image img {
   padding: 2px 2px 2px 2px;
    background-color: white;
  margin-bottom:20px;
}

.gray img:hover{
  filter: gray;
  -webkit-filter: grayscale(1); 
}

.tilt img:hover {
  -webkit-transform: rotate(-10deg);
     -moz-transform: rotate(-10deg);
       -o-transform: rotate(-10deg);
      -ms-transform: rotate(-10deg);
          transform: rotate(-10deg);
          
    -webkit-transition-duration: 500ms;
       -moz-transition-duration: 500ms;
         -o-transition-duration: 500ms;
            transition-duration: 500ms;
}
.thumb {
    width: 250px;
    height: 200px;

    background-color: #3e3e3e;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
}
</style>
<div class="content_bottom app-detail">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="bs-example bs-example-tooltip cate" data-example-id="static-tooltips">
        <a href="{{ route('categories.1') }}">
          <img src="{!! asset('css/img/category/6-small-447.png') !!}" class="img-cate">
          <div class="tooltip right" role="tooltip"> 
            <div class="tooltip-arrow"></div> 
              <div class="tooltip-inner">{{$dreams->name}}</div> 
          </div>
        </a>
      </div>
    </div>
      <div class="company_image">
  
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
             @foreach($dreams_image as $image)
           <div class="col-md-3 col-sm-12 col-xs-12 tilt">
              <a class="example-image-link" href="{!! asset('uploads/'.$image->image) !!}" data-lightbox="example-set" data-title="{{$image->description}}">
                  
                  <div class="thumb img-responsive example-image" style="background-image:url({!! asset('uploads/'.$image->image) !!});"></div>
              </a>
          </div>
            @endforeach

        </div>
        
    </div>
</div>
</div>
  

@endsection
