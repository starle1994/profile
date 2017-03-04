

<div class="Modern-Slider">
  <!-- Item -->
  @foreach($baners as $baner)
      <div class="item">
        <div class="img-fill">
          <img src="{{ asset('uploads/'.$baner->image) }}" alt="" class="img-reponsive">
          
        </div>
      </div>
  @endforeach
      
  </div>