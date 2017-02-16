<div class="col-lg-12 col-md-12">
  <div class="content_bottom_left">
    <div class="single_category wow fadeInDown">
        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Business</a> </h2>
        <div class="business_category_left wow fadeInDown">
          <ul class="fashion_catgnav">
              <li>
                <div class="catgimg2_container"> <a href="{{ route('show.blog.detail',$business[0]->alias) }}"><img alt="" src="{!! asset('uploads/thumb/'.$business[0]->images) !!}"></a> </div>
                <h2 class="catg_titile"><a href="{{ route('show.blog.detail',$business[0]->alias) }}">{{$business[0]->name}}</a></h2>
                <div class="comments_box"> <span class="meta_date">{{$business[0]->created_at}}</span> <span class="meta_more"><a  href="{{ route('show.blog.detail',$business[0]->alias) }}">Read More...</a></span> </div>
                <p>{{$business[0]->text}}</p>
              </li>
            
          </ul>
        </div>
        <div class="business_category_right wow fadeInDown">
          <ul class="small_catg">

          <?php for ($i=1; $i <=3; $i++) {  ?>            
              <li>
                <div class="media wow fadeInDown"> <a class="media-left" href="{{ route('show.blog.detail',$business[$i]->alias) }}"><img src="{!! asset('uploads/thumb/'.$business[$i]->images) !!}" alt=""></a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="{{ route('show.blog.detail',$business[$i]->alias) }}">{{$business[$i]->name}}</a></h4>
                    <div class="comments_box"> <span class="meta_date">{{$business[$i]->created_at}}</span> </div>
                  </div>
                </div>
              </li>
          <?php } ?>
          </ul>
        </div>
    </div>

    <div class="games_fashion_area">
        <div class="games_category">
          <div class="single_category">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Games</a> </h2>
            <ul class="fashion_catgnav wow fadeInDown">
              <li>
                <div class="catgimg2_container"> 
                    <a href="{{ route('show.blog.detail',$food[0]->alias) }}"><img alt="" src="{!! asset('uploads/thumb/'.$food[0]->images) !!}"></a> 
                </div>
                <h2 class="catg_titile"><a href="{{ route('show.blog.detail',$food[0]->alias) }}">{{$food[0]->name}}</a></h2>
                <div class="comments_box"> 
                  <span class="meta_date">{{$food[0]->created_at}}</span><a  href="{{ route('show.blog.detail',$food[0]->alias) }}">Read More...</a>
                </div>
                <p>{{$food[0]->text}}</p>
              </li>
            </ul>
            <ul class="small_catg wow fadeInDown">
              <?php for ($i=1; $i <=2; $i++) {  ?> 
              <li>
                <div class="media"> <a class="media-left" href="{{ route('show.blog.detail',$food[$i]->alias) }}"><img src="{!! asset('uploads/thumb/'.$food[$i]->images) !!}" alt=""></a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="{{ route('show.blog.detail',$food[$i]->alias) }}">{{$food[$i]->name}}</a></h4>
                    <div class="comments_box"> <span class="meta_date">{{$food[$i]->created_at}}</span>  </div>
                  </div>
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>

        <div class="fashion_category">
          <div class="single_category">
            <div class="single_category wow fadeInDown">
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Fashion</a> </h2>
              <ul class="fashion_catgnav wow fadeInDown">
                <li>
                  <div class="catgimg2_container"> <a href="{{ route('show.blog.detail',$fashion[0]->alias) }}"><img alt="" src="{!! asset('uploads/thumb/'.$fashion[0]->images) !!}"></a> </div>
                  <h2 class="catg_titile"><a href="{{ route('show.blog.detail',$fashion[0]->alias) }}">{{$fashion[0]->name}}</a></h2>
                  <div class="comments_box"> <span class="meta_date">{{$fashion[0]->created_at}}</span> <a  href="{{ route('show.blog.detail',$fashion[0]->alias) }}">Read More...</a> </div>
                  <p>{{$fashion[0]->text}}</p>
                </li>
              </ul>
              <ul class="small_catg wow fadeInDown">
                <?php for ($i=1; $i <=2; $i++) {  ?> 
              <li>
                <div class="media"> <a class="media-left" href="{{ route('show.blog.detail',$fashion[$i]->alias) }}"><img src="{!! asset('uploads/thumb/'.$fashion[$i]->images) !!}" alt=""></a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="{{ route('show.blog.detail',$fashion[$i]->alias) }}">{{$fashion[$i]->name}}</a></h4>
                    <div class="comments_box"> <span class="meta_date">{{$fashion[$i]->created_at}}</span>  </div>
                  </div>
                </div>
              </li>
              <?php } ?>
              </ul>
            </div>
          </div>
      </div>
  </div>
</div>

</div>
