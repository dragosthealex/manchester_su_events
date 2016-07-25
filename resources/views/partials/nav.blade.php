<!-- <nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laravel</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ (Request::is('/') ? 'active' : '') }}">
                    <a href="{{ url('') }}"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="{{ (Request::is('articles') ? 'active' : '') }}">
                    <a href="{{ url('articles') }}">Articles</a>
                </li>
                <li class="{{ (Request::is('about') ? 'active' : '') }}">
                    <a href="{{ url('about') }}">About</a>
                </li>
                <li class="{{ (Request::is('contact') ? 'active' : '') }}">
                    <a href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li class="{{ (Request::is('auth/login') ? 'active' : '') }}"><a href="{{ url('auth/login') }}"><i
                                    class="fa fa-sign-in"></i> Login</a></li>
                    <li class="{{ (Request::is('auth/register') ? 'active' : '') }}"><a
                                href="{{ url('auth/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i
                                    class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::check())
                                @if(Auth::user()->admin==1)
                                    <li>
                                        <a href="{{ url('admin/dashboard') }}"><i class="fa fa-tachometer"></i> Admin Dashboard</a>
                                    </li>
                                @endif
                                <li role="presentation" class="divider"></li>
                            @endif
                            <li>
                                <a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav> -->


<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
        Menu <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand page-scroll" href="{{ Request::url() == url('/') ? '' : url('/').'/' }}#page-top">
        <img class="img-responsive" src="{{ asset('img/logo.png') }}">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
        <li class="hidden">
          <a href="#page-top"></a>
        </li>
        <li>
          <a class="page-scroll" href="{{ Request::url() == url('/') ? '' : url('/').'/' }}#events">Events</a>
        </li>
        <li>
          <a class="page-scroll" href="{{ Request::url() == url('/') ? '' : url('/').'/' }}#contact">Contact Us</a>
        </li>
        @if (Auth::guest())
          <li class="{{ (Request::is('auth/login') ? 'active' : '') }}"><a href="{{ url('auth/login') }}"><i
            class="fa fa-sign-in"></i> Login</a>
          </li>
          <li class="{{ (Request::is('auth/register') ? 'active' : '') }}"><a
              href="{{ url('auth/register') }}">Register</a>
          </li>
        @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }} <i
                class="fa fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu" role="menu">
                @if(Auth::check())
                @if(Auth::user()->admin==1)
                <li>
                  <a href="{{ url('admin/dashboard') }}"><i class="fa fa-tachometer"></i> Admin Dashboard</a>
                </li>
                @endif
                <li role="presentation" class="divider"></li>
                @endif
                <li>
                  <a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
              </ul>
            </li>
        @endif
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>