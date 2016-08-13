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
  color: rgb(243, 243, 5);
  font-size: 100px;
  text-shadow: 0 5px 10px #710671;
  font-family: outrun_future;
  margin-bottom: 60px;
  transition: 0.6s;
}
.intro .intro-body .intro-text {
  /*font-family: 'baumans';*/
  /*color: #ffff86;*/
  font-family: 'snack_patrol';
  color: #e6e68a;
  letter-spacing: 4px;
  font-size: 30px;
}
.featured-carousel .carousel-indicators {
  bottom: -50px;
}
#events .event-wrapper {
  margin-bottom: 6px;
}
#events .event-wrapper .card {
  height: 300px;
}
#events .event-wrapper .card .card-body {
  height: 240px;
}
#events .event-wrapper .card .card-cover {
  background-repeat: no-repeat;
  background-position: center;
  background-origin: 0,0;
  background-size: cover;
  height: 100%;
  cursor: pointer;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
  -webkit-box-shadow: inset 0 -50px 200px -50px #000;
  -moz-box-shadow: inset 0 -50px 200px -50px #000;
  box-shadow: inset 0 -50px 200px -50px #000;
}
#events .event-wrapper .card .card-cover:hover {
  -webkit-box-shadow: inset 0 -50px 200px -10px #000;
  -moz-box-shadow: inset 0 -50px 200px -10px #000;
  box-shadow: inset 0 -50px 200px -10px #000;
}
#events .event-wrapper .card .front {
  z-index: 2!important;
  display: none;
}
#events .event-wrapper .card.flip .front {
  display: block;
}
#events .event-wrapper .card .front .card-title {

}
#events .event-wrapper .card .front .card-date {
  bottom: 0;
  position: absolute;
  font-size: 16px;
  margin-bottom: 10px;
  margin-left: 16px;
}#events .event-wrapper .card .front .card-date a {
  color: #fff;
  text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
}
#events .event-wrapper.mix {
  display: none;
  padding: 0 1px;
}
#events .event-card {
  background-color: transparent;
}
#events .card.event-card .card-description {
  height: 100px;
  margin-bottom: 20px;
}
#events .event-card .card-content {
  background-color: #fefefe;
}
#events .event-card .card-title {
  bottom: 0;
  top: auto;
  margin-left: 20px;
}
#events .event-card .card-details {
  font-size: 15px;
  font-weight: bold;
}
#events .event-card .card-subtitle {
  display: none;
}
@media(max-width: 768px) {
  .intro .intro-body .brand-heading {
    font-size: 3pc;
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
          <a href="#featured" class="btn btn-circle page-scroll">
            <i class="fa fa-angle-double-down animated"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Featured Events Section -->
<section id="featured" class="container-fluid content-section text-center scrollable-section">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <h1 class="section-title">Wristbands</h1>
      <p class="section-subtitle">
        Congratulations! You’ve made it to Manchester!
      <p>
      <p class="section-text">
        Explore Manchester and start making new friends with an Official Welcome
        Week wristband. For only £55 (inc. booking fee) you will gain entry into all of
        the events below.
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      @include('partials.featured_carousel')
    </div>
  </div>
</section>
<!-- All Events Section -->
<section id="events" class="container-fluid content-section text-center scrollable-section">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <h1 class="section-title">All Events</h1>
    </div>
  </div>
  <div class="row inside-bar">
    <div class="col-xs-12">
      <a class="btn btn-primary filter" data-filter="all">Show All</a>
      @foreach(App\Category::all() as $category)
        <a class="btn btn-primary filter" data-filter=".category-<?=$category->id?>"><?=$category->name?></a>
      @endforeach
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
        <div class="col-xl-2 col-lg-3 col-sm-4 col-xs-12 event-wrapper mix featured-<?=$event->featured?'yes':'no'?> short <?=$event->category ? 'category-' . $event->category->id : 'category-null'?>"
             data-date="<?=strtotime($event->date_start . ' ' . $event->time_start)?>" 
             data-title="<?=$event->title?>">
          <div class="card has-cover event-card <?=$event->getOriginal('cover')?'flip':''?>">
            <div class="front">
              <div class="card-cover" style="background-image:url('<?=$event->cover?>');"></div>
              <h2 class="card-title"><a href="#"><?=$event->title?></a></h2>
              <h2 class="card-date"><a href="#"><?=date('l, j F Y', strtotime($event->date_start))?></a></h2>
            </div>
            <div class="back">
              <div class="card-content">
                <div class="card-body">
                  <h4 class="card-date"><?=date('l, j F Y', strtotime($event->date_start))?></h4>
                  <p class="card-description">
                    @if(strlen($event->description) > 150)
                      <?=substr($event->description, 0, 150)?>... <a href="{{ url('events/' . $event->id) }}">More</a>
                    @else
                      <?=$event->description?>
                    @endif
                  </p>
                  <p class="card-details">
                    <?=$event->time_start?> - <?=$event->time_end?>, <?=$event->price?>, <?=$event->location_name?>
                  </p>
                </div>
                <hr>
                <div class="card-footer">
                  <a class="card-action" href="<?=$event->tickets_link?>">Tickets&nbsp;<i class="fa fa-ticket" aria-hidden="true"></i></a>
                  <a class="card-action" href="#">Directions&nbsp;<i class="fa fa-location-arrow" aria-hidden="true"></i></a>
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
          { src: "{{ asset('img/bg/home3.jpg') }}" },
          { src: "{{ asset('img/bg/home4.jpg') }}" },
          { src: "{{ asset('img/bg/home5.jpg') }}" }
      ],
      overlay: "{{ asset('lib/vegas/overlays/02.png') }}"
    });
    // Fix firefox shit
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
