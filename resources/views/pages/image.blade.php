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
   padding: 10px 10px 10px 10px;
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

</style>
<link rel="stylesheet" href="dist/css/lightbox.min.css">
<div class="company_image">
    <div class="row">
        <h2 class="text-center text-muted title">Image Gallery With Effects</h2>
    </div> 
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
             @foreach($company_images as $image)
         <div class="col-md-3 col-sm-4 col-xs-6 tilt">
            <a class="example-image-link" href="{!! asset('uploads/'.$image->image) !!}" data-lightbox="example-set" data-title="{{$image->name}}">
                <img class="img-responsive example-image" src="{!! asset('uploads/thumb/'.$image->image) !!}"  />
            </a>
        </div>
            @endforeach

        </div>
        
    </div>
</div>

@endsection