
<div class="row baner">
  <div class="col-lg-12 col-md-12 col-sm-12" style="    margin-top: 5px;">
    <div class="latest_slider">
      <div class="slick_slider">
      @foreach($baners as $baner)
        <div class="single_iteam">
        <a href="{{route('show.app.detail',$baner->alias)}}">
        <img src="{{ asset('uploads/'.$baner->image) }}" alt="" >
        </a>
        </div>
      @endforeach
      </div>
    </div>
  </div>
</div>