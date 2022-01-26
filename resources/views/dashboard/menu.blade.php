<div id="defaultmenu" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <!-- standard drop down -->
        <li class="{{ (request()->is('home/dashboard')) ? 'active' : '' }}">
            <a href="{{route('home_dashboard')}}" >
                Home</a>
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="{{ (request()->is('products*')) ? 'active' : '' }}">
            <a href="{{route('products.index')}}" > Products</a>
            <!-- end dropdown-menu -->
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="{{ (request()->is('category*')) ? 'active' : '' }}">
            <a href="{{route('category.index')}}" > Category</a>
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="{{ (request()->is('employee*')) ? 'active' : '' }}">
            <a href="{{route('employee.index')}}" > Employee</a>
            <!-- end dropdown-menu -->
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="{{ (request()->is('stock*')) ? 'active' : '' }}">
            <a href="{{route('stock.create')}}" > Stock </a>
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
{{--        <li class="dropdown">--}}
{{--            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Charts <b class="caret"></b></a>--}}
{{--            <ul class="dropdown-menu" role="menu">--}}
{{--                <li><a href="charts-flot.html"> Flot Chart </a></li>--}}
{{--                <li><a href="charts-morris.html"> Morris Chart </a></li>--}}
{{--            </ul>--}}
{{--            <!-- end dropdown-menu -->--}}
{{--        </li>--}}
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="{{ (request()->is('calender')) ? 'active' : '' }}">
            <a href="{{route('calender')}}" > Calendar </a>
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
{{--        <li>--}}
{{--            <a href="ui-widgets.html"> Widgets </a>--}}
{{--        </li>--}}
        <!-- end standard drop down -->
        <!-- standard drop down -->
        <li class="{{ (request()->is('show/history')) ? 'active' : '' }}">
            <a href="{{route('stock_show')}}" > History </a>
        </li>
        <!-- end standard drop down -->
        <!-- standard drop down -->
        @can('super-admin-feature')
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> User Manager <b class="caret"></b></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">All User</a></li>
                <li><a href="#">Second Level</a></li>
                <li class="dropdown-submenu">
                    <a href="#">Second Level</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#">Third Level</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Fourth Level</a></li>
                                <li><a href="#">Fourth Level</a></li>
                            </ul>
                        </li>
                        <!-- end dropdown-submenu -->
                        <li><a href="#">Third Level</a></li>
                        <li><a href="#">Third level</a></li>
                    </ul>
                    <!-- end dropdown-menu -->
                </li>
                <li><a href="#">Creattica</a></li>
            </ul>
        @endcan
            <!-- end dropdown-menu -->
        </li>
        <!-- end standard drop down -->
    </ul>
{!! Toastr::message() !!}
    <!-- end nav navbar-nav -->
</div>
