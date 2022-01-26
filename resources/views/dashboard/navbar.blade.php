<!--NAVBAR-->
<!--===================================================-->
<header id="navbar">
    <div id="navbar-container" class="boxed">
        <!--Brand logo & name-->
        <!--================================-->

        <div class="navbar-header">
            <a href="{{route('home_dashboard')}}" class="navbar-brand">
                <img id="logo" class="brand-icon" src="{{ asset('logo.png')}}">
                <div class="brand-title">
                    <span class="brand-text">Stock-M</span>
                </div>
            </a>
        </div>

        <!--================================-->
        <!--End brand logo & name-->
        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-right">
                <!--Profile toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="hidden-xs" id="toggleFullscreen">
                    <a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Profile toogle button-->
                <!--User dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                <li id="dropdown-user" class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                        <span class="pull-right"> <img class="img-circle img-user media-object" src="{{Auth::user()->image}}" alt=""> </span>
                        <div class="username hidden-xs">{{Auth::user()->name}}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right with-arrow">
                        <!-- User dropdown menu -->
                        <ul class="head-list">
                            <li>
                                <a href="#"> <i class="fa fa-user fa-fw"></i> Profile </a>
                            </li>
                            <li>
                                <a href="#">  <i class="fa fa-envelope fa-fw"></i> Messages </a>
                            </li>
                            <li>
                                <a href="#">  <i class="fa fa-gear fa-fw"></i> Settings </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->
            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->
        <nav class="navbar navbar-default megamenu">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <!-- end navbar-header -->
           @include('dashboard.menu')
            <!-- end #navbar-collapse-1 -->
        </nav>
        <!-- end navbar navbar-default megamenu -->
    </div>
</header>
<!--===================================================-->
<!--END NAVBAR-->

