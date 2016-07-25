@extends('layouts.home')
@section('title') Home :: @parent @endsection
@section('content')

    <!-- Intro Header -->
     <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Grayscale</h1>
                        <p class="intro-text">A free, responsive, one page Bootstrap theme.
                            <br>Created by Start Bootstrap.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center scrollable-section" data-section-title="About Us">
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

