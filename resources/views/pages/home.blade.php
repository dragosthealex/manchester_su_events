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
@media(max-width: 768px) {
  .intro .intro-body .brand-heading {
    font-size: 3pc;
  }
  .navbar-custom {
    background: transparent;
    border: none;
    opacity: 0;
    visibility: hidden;
  }
}
</style>
@endsection

@section('content')

<!-- Intro Header -->
<header class="intro parallax-window">
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1 class="brand-heading">Welcome</h1>
          <p class="intro-text">Find out the hottest freshers' events.
            <br>Limited edition
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
      <h1 class="section-title">Featured</h1>
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
  <div class="row">
    <div class="span-12">
      @foreach($events as $event)
        @include('partials.event_card', ['event' => $event, 'mix' => true])
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
