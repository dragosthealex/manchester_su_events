<nav class="navbar navbar-custom navbar-fixed-top noselect" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
        Menu <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand page-scroll" href="http://manchesterstudentsunion.com/">
        <img class="img-responsive" src="{{ asset('img/logo.jpg') }}">
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
          <a class="page-scroll" href="{{ Request::url() == url('/') ? '' : url('/').'/' }}#featured">Wristbands</a>
        </li>
        <li>
          <a class="page-scroll" href="{{ Request::url() == url('/') ? '' : url('/').'/' }}#events">Events</a>
        </li>
        <li>
          <a class="page-scroll" href="http://manchesterstudentsunion.com/top-navigation/welcome-week-2016/welcome-week-faqs">FAQ</a>
        </li>
        @if(false)
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
                  @if(Auth::user()->admin)
                  <li>
                    <a href="{{ url('admin/dashboard') }}"><i class="fa fa-tachometer"></i> Admin Dashboard</a>
                  </li>
                  @endif
                  @if(Auth::user()->can_add_events || Auth::user()->admin)
                    <li>
                      <a href="{{ url('admin/dashboard') }}"><i class="fa fa-plus"></i> Post Event</a>
                    </li>
                  @endif
                @endif
                <li>
                  <a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
              </ul>
            </li>
        @endif
        @endif
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>
