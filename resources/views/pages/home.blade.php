@extends('layouts.home')

@section('title') @parent @endsection

@section('styles')
<style>
.vegas-wrapper {
  display: table;
  width: 100%;
  height: 100%;
}
.intro .intro-body {
  background-color: rgba(0, 0, 0, 0.45);
}
.intro .intro-body .brand-heading {
  color: rgb(243, 243, 5);
  font-size: 100px;
  text-shadow: 0 5px 10px #710671;
  font-family: outrun_future;
  margin-bottom: 50px;
}
.intro .intro-body .intro-text {
  font-family: 'baumans';
  color: #ffff86;
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
          <a href="#events" class="btn btn-circle page-scroll">
            <i class="fa fa-angle-double-down animated"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Events Section -->
<section id="events" class="container content-section text-center scrollable-section">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <h2>About Us</h2>
      <p>orem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
      <p>m dolor sit amet, consectetur adipiscing elit. Aliquam risus ipsum, tristique et convallis nec, ornare eget nibh. Nullam posuere li</p>
      <p>r consequat varius. Duis dignissim facilisis turpis et tincidunt. Nullam eu urna id orci euismod aliquam eget ac ligula. Maecenas cursus urna</p>
    </div>
  </div>
</section>

@endsection

@section('scripts')
<script>
$(document).ready(function() {
  $("header.intro").vegas({
    slides: [
        { src: "{{ asset('img/bg/home1.jpg') }}" },
        { src: "{{ asset('img/bg/home2.jpg') }}" },
        { src: "{{ asset('img/bg/home3.jpg') }}" },
        { src: "{{ asset('img/bg/home4.jpg') }}" },
        { src: "{{ asset('img/bg/home5.jpg') }}" }
    ],
    overlay: "{{ asset('lib/vegas/overlays/06.png') }}"
  });

  $(window).bind('scroll', function(e){
    var scrolledY = $(window).scrollTop();
    $('.vegas-slide-inner').css('top','+' + ((scrolledY / 1.3)) + 'px');
  });
});
</script>
@endsection
