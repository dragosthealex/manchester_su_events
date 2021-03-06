<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">Manchester SU Events Admin</a>
    </div>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{ url('') }}"><i class="fa fa-backward"></i> Go to frontend</a>
                </li>
                <li>
                    <a href="{{url('admin/users')}}">
                        <i class="glyphicon glyphicon-user"></i> Users
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/events') }}">
                        <i class="glyphicon glyphicon-bullhorn"></i> Events
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-list"></i> Categories
                    </a>
                </li>

                <li>
                    <a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>