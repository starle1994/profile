
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6" id="big-image">
      <div class="latest_slider ">
        <div class="slick_slider item-video">
          @foreach($company_images as $image)
          <div class="single_iteam">
              <div class="thumb" style="background-image:url({!! asset('uploads/'.$image->image) !!});"></div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6" id="image-right" style="color: #fff">
      <div class="content_top_right">
        <ul class="featured_nav wow fadeInDown">
          @foreach($company_images as $image)
          <li class="col-lg-3 col-md-3 col-sm-3">
             <div class="imgWrap text-center item-video">
              <div class="thumb-smaller" style="background-image:url({!! asset('uploads/'.$image->image) !!});"></div>
              <p class="imgDescription" style="padding-top: 70px;">{{$image->description}}</p>
              <div class="title_caption">{{$image->name}}</div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>