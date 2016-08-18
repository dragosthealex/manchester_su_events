@extends('layouts.home')

@section('title') @parent @endsection

@section('styles')
<style>
.main-content {
  margin-top: 100px;
}
header.intro {
  height: 100%;
}
section.home-section {
  padding-top: 70px;
  padding-bottom: 50px;
}
.navbar-custom {
  background-color: transparent; 
  padding: 20px 0; 
}
.navbar-custom .navbar-brand img {
  height: 60px;
}
.vegas-wrapper {
  display: table;
  width: 100%;
  height: 100%!important;
  background-color: rgba(0, 0, 0, 0.50);
}
.vegas-slide-inner {
  height: 100%;
  width: 100%;
}
.intro .intro-body .brand-heading {
  /*color: rgb(243, 243, 5);*/
  font-size: 100px;
  /*text-shadow: 0 5px 10px #41535D;*/
  font-family: 'gotham';
  margin-bottom: 60px;
  transition: 0.6s;
  color: #fefefe;
  text-transform: uppercase;
  text-shadow: 0 0 50px #000;
}
.intro .intro-body .intro-text {
  /*color: #e6e68a;*/
  color: #fefefe;
  font-size: 30px;
  text-transform: uppercase;
  font-family: 'gotham';
  text-shadow: 0 0 40px #000;
}
.featured-carousel .carousel-indicators {
  bottom: -50px;
}
section.content-section .section-text.text-featured {
  text-align: center;
  font-size: 23px;
}
#featured-wide {
  min-height: auto;
}
#featured-slider {
  width: 100%;
}
.card-cover-div {
  -webkit-box-shadow: inset 0 -50px 200px -50px #000;
  -moz-box-shadow: inset 0 -50px 200px -50px #000;
  box-shadow: inset 0 -50px 200px -50px #000;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  background-origin: 0;
  height: 300px;
  width: 100%;
}
@media(max-width: 768px) {
  .intro .intro-body .brand-heading {
    font-size: 3pc;
  }
  .intro .intro-body .intro-text {
    font-size: 25px;
  }
  .navbar-custom {
    background: transparent;
    border: none;
    opacity: 0;
    visibility: hidden;
    padding: 0;
  }
}
</style>
@endsection

@section('content')

<!-- Intro Header -->
<header class="intro parallax-window noselect">
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="brand-heading">Welcome</h1>
          <p class="intro-text">To the official University of
            <br>Manchester Students' Union
            <br>Welcome Week 2016
            <br>#MADEITTOMCR
          </p>
          <a href="#featured-wide" class="btn btn-circle page-scroll">
            <i class="fa fa-angle-double-down animated"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>
<section id="featured-wide" class="container-fluid text-center scrollable-section">
  <div class="row">
    <a target="_blank" href="https://www.ticketline.co.uk/order/tickets/13319083" title="Buy the Welcome Week Wristband now!">
      <img class="img-responsive" src="{{ asset('img/bg/wristband_slider.jpg') }}" id="featured-slider">
    </a>
  </div>
</section>
<!-- Featured Events Section -->
<section id="featured" class="container-fluid home-section content-section text-center scrollable-section">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <h1 class="section-title">Wristbands</h1>
      <p class="section-subtitle">
        Congratulations! You’ve made it to Manchester!
      <p>
      <p class="section-text text-center">
        Explore Manchester and start making new friends with an Official Welcome
        Week wristband. For only £55 (inc. booking fee) you will gain entry into all of
        the events below.<br>
        <div class="text-center">
          <a class="btn btn-primary" target="_blank" href="https://www.ticketline.co.uk/order/tickets/13319083">Buy Welcome Week Wristband</a>
        </div>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <?php $featured_events = $events->filter(function($event){return $event->featured; }); ?>
      @if(count($featured_events))
        @include('partials.featured_carousel', ['featured_events'=>$featured_events])
      @else
        <p>
          Currently there are no featured events / wristband events.
        </p>
      @endif
    </div>
  </div>
</section>

<!-- All Events Section -->
<section id="events" class="container-fluid home-section content-section text-center scrollable-section">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <h1 class="section-title">All Events</h1>
    </div>
  </div>
  <div class="row inside-bar">
    <div class="col-xs-12">
      @if(false)
        @if(count($categories = App\Category::all()))
          <a class="btn btn-primary filter" data-filter="all">Show All</a>
          @foreach($categories as $category)
            <a class="btn btn-primary filter" data-filter=".category-<?=$category->id?>"><?=$category->name?></a>
          @endforeach
        @endif
      @endif
      <div style="display:inline-block;margin-left:20px;">
        <a class="btn btn-primary sort" data-sort="date:asc">Sort by Date</a>
        <a class="btn btn-primary sort" data-sort="title:asc">Sort by Name</a>
        <a class="btn btn-primary" href="{{ url('events') }}">Calendar View</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="span-12 events-container">
      @foreach($events as $event)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 event-wrapper mix featured-<?=$event->featured?'yes':'no'?> short @if(false)<?=$event->category ? 'category-' . $event->category->id : 'category-null'?>@endif"
             data-date="<?=strtotime($event->date_start . ' ' . $event->time_start)?>" 
             data-title="<?=$event->title?>">
          <div class="card has-cover event-card <?=$event->cover?'flip':''?>">
            @if($event->cover)
            <div class="front">
              <div class="card-cover" style="background-image:url('{{ asset('img/'.$event->cover) }}');"></div>
              @if(false)
              <h2 class="card-title"><a href="{{ url('events/' . $event->slug) }}"><?=$event->title?></a></h2>
              @endif
              <h2 class="card-date"><a href="#"><?=date('l, j F Y', strtotime($event->date_start))?></a></h2>
            </div>
            @endif
            <div class="back">
              <div class="card-content">
                <div class="card-body">
                  <h2 class="card-title"><a href="{{ url('events/' . $event->slug) }}"><?=$event->title?></a></h2>
                  <h4 class="card-date"><?=date('l, j F Y', strtotime($event->date_start))?></h4>
                  <h4 class="card-time"><?=$event->time_start?> - <?=$event->time_end?></h4>
                  <p class="card-description">
                    @if(strlen($event->description) > 100)
                      <?=substr($event->description, 0, 100)?>... <a href="{{ url('events/' . $event->slug) }}">More</a>
                    @else
                      <?=$event->description?>
                    @endif
                  </p>
                  <p class="card-details">
                    <?=$event->price?>, <?=$event->location_name?>
                  </p>
                </div>
                <hr>
                <div class="card-footer">
                  @if($event->getOriginal('price') || $event->price != 'Free')
                    <a class="card-action" href="<?=$event->tickets_link?>">Wristband&nbsp;<i class="fa fa-ticket" aria-hidden="true"></i></a>
                  @endif
                  <a class="card-action" target="_blank" href="http://www.google.com/maps/place/<?=$event->lat?>,<?=$event->lng?>">Directions&nbsp;<i class="fa fa-location-arrow" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script>

$(document).ready(function() {
  var init = function() {
    $("header.intro").vegas({
      slides: [
          { src: "{{ asset('img/bg/home1.jpg') }}" },
          { src: "{{ asset('img/bg/home2.jpg') }}" },
          { src: "{{ asset('img/bg/home3.jpg') }}" }
      ],
      overlay: "{{ asset('lib/vegas/overlays/02.png') }}"
    });
    // Fix issues with Firefox.
    if($(window).width() > 768) {
      $("header.intro .vegas-wrapper").attr("style", "height:" + $("header.intro").height() + "px!important;");
    }
    $('.carousel.slide').carousel();
     $(".carousel.slide").swiperight(function() {  
      $(this).carousel('prev');  
        });  
     $(".carousel.slide").swipeleft(function() {  
        $(this).carousel('next');  
     });
     $("#events .events-container").mixItUp();
     $("#events .events-container").mixItUp('sort', 'date:asc');
     $("#events .card.flip").flip();
  }

  init();

  $(window).resize(function() {
    init();
  });
  
  $(window).bind('scroll', function(e){
    var scrolledY = $(window).scrollTop();
    $('.vegas-slide-inner').css('top','+' + ((scrolledY / 1.8)) + 'px');
  });
});
</script>
@endsection
