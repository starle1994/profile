
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm6">
      <div class="latest_slider ">
        <div class="slick_slider item-video">
          @foreach($company_images as $image)
          <div class="single_iteam">
              <img src="{!! asset('uploads/'.$image->image) !!}" alt="{{$image->name}}" width="550px" height="400px">   
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm6">
      <div class="content_top_right">
        <ul class="featured_nav wow fadeInDown">
          @foreach($company_images as $image)
          <li class="">
             <div class="imgWrap text-center item-video">
              <img src="{!! asset('uploads/thumb/'.$image->image) !!}" alt="">
              <p class="imgDescription" style="padding-top: 70px;">{{$image->description}}</p>
              <div class="title_caption"><a href="pages/single.html">{{$image->name}}</a></div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>