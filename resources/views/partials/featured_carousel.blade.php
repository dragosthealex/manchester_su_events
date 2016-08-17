<!-- carousel for medium & large devices -->
<div id="featured-carousel-xl" class="featured-carousel carousel slide visible-xl"> 
  
  @if(count($featured_events)>4)
    <!-- Indicators -->  
    <ol class="carousel-indicators">
        <li data-target="#featured-carousel-xl" data-slide-to="0" class="active"></li>
        @for($i=1; $i<=(count($featured_events)-1)/4; $i++)
          <li data-target="#featured-carousel-xl" data-slide-to="<?=$i?>"></li>
        @endfor
    </ol>
  @endif

  <!-- Wrapper for slides -->
  <div class="carousel-inner"> 
    <!-- Slide -->
    <div class="item active">
      <div class="row">
        <?php $key=1;?>
        @foreach($featured_events as $event)
          @if($key>4 && !(($key-1)%4))
              </div>
            </div>
            <div class="item">
              <div class="row">
          @endif
          <div class="col-xs-3">
            @include('partials.event_card', ['event'=>$event])
            <?php $key++;?>
          </div>
        @endforeach 
      </div>
    </div>
  </div>
</div>

<!-- carousel for medium & large devices -->
<div id="featured-carousel-lg" class="featured-carousel carousel slide visible-lg hidden-xl"> 
  @if(count($featured_events)>3)
  <!-- Indicators -->
  <ol class="carousel-indicators">
      <li data-target="#featured-carousel-lg" data-slide-to="0" class="active"></li>
    @for($i=1; $i<=(count($featured_events)-1)/3; $i++)
      <li data-target="#featured-carousel-lg" data-slide-to="<?=$i?>"></li>
    @endfor
  </ol>
  @endif

  <!-- Wrapper for slides -->
  <div class="carousel-inner"> 
    <!-- Slide -->
    <div class="item active">
      <div class="row">
        <?php $key=1;?>
        @foreach($featured_events as $event)
          @if($key>3 && !(($key-1)%3))
              </div>
            </div>
            <div class="item">
              <div class="row">
          @endif
          <div class="col-xs-4">
            @include('partials.event_card', ['event'=>$event])
            <?php $key++;?>
          </div>
        @endforeach 
      </div>
    </div>
  </div>
</div>

<!-- carousel for small devices -->
<div id="featured-carousel-sm" class="featured-carousel carousel slide visible-sm visible-md"> 
  @if(count($featured_events)>2)
  <!-- Indicators -->
  <ol class="carousel-indicators">
      <li data-target="#featured-carousel-sm" data-slide-to="0" class="active"></li>
    @for($i=1; $i<=(count($featured_events)-1)/2; $i++)
      <li data-target="#featured-carousel-sm" data-slide-to="<?=$i?>"></li>
    @endfor
  </ol>
  @endif

  <!-- Wrapper for slides -->
  <div class="carousel-inner"> 
    <!-- Slide -->
    <div class="item active">
      <div class="row">
        <?php $key=1;?>
        @foreach($featured_events as $event)
          @if($key>2 && !(($key-1)%2))
              </div>
            </div>
            <div class="item">
              <div class="row">
          @endif
          <div class="col-xs-6">
            @include('partials.event_card', ['event'=>$event])
            <?php $key++;?>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<!-- carousel for extra-small devices -->
<div id="featured-carousel-xs" class="featured-carousel carousel slide visible-xs"> 
  <!-- Wrapper for slides -->
  <div class="carousel-inner"> 
    <!-- Slide -->
    <div class="item active">
      <div class="row">
        <?php $key=1;?>
        @foreach($featured_events as $event)
          @if($key > 1)
              </div>
            </div>
            <div class="item">
              <div class="row">
          @endif
          <div class="col-xs-12">
            @include('partials.event_card', ['event'=>$event])
            <?php $key++;?>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>