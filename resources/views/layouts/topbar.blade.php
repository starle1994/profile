<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav custom_nav">
        
        @foreach($categories as $cate)
         <?php $route = route('categories.'.$cate->id.'');?>
        <li><a href="{{ $route }}">{{trans($cate->name)}}</a></li>
        @endforeach
        <li class=""><a href="{{ route('index') }}">{{trans('user.home')}}</a></li>
      </ul>
    </div>
  </div>
</nav>