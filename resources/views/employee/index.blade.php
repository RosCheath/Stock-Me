@extends('home')

@section('content')
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="container" class="effect mainnav-full">
        <div class="boxed">
            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Employee </h3>
                    <div class="breadcrumb-wrapper">
                        <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li> <a href="#"> Home </a> </li>
                            <li class="active"> Employee </li>
                        </ol>
                    </div>
                </div>
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <div class="well">
                        <div class="row">
                            <div class="col-sm-9">
                                <a id="demo-dt-addrow-btn" href="{{route('employee.create')}}" class="btn btn-pink">Add New</a>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group nm">
                                    <select class="form-control" id="source">
                                        <option value="Name">Full Name</option>
                                        <option value="position">Position</option>
                                        <option value="company">Company</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($employee as $employees)
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body np">
                                    <img src="{{ '/imageEmployee/'.$employees->image }}" alt="Cover" class="img-responsive">
                                    <div class="text-center pad-btm">
                                        <!-- panel body -->
                                        <h3>{{$employees -> name}}</h3>
                                        <span>{{$employees -> position}}</span>
                                        <!--/ panel body -->
                                    </div>
                                    <ul class="menu-items">
                                        <li>
                                            <a href="{{ route('employee.edit', $employees->id) }}" class="clearfix">
                                                <i class="fa fa-user fa-lg"></i> Edit profile
                                                <span class="label label-success label-circle pull-right">13</span>
                                            </a>
                                        </li>
                                        <li>
                                            <form id="employeesDelete{{$employees->id}}" method="POST" action="{{ route('employee.destroy', $employees->id) }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" onclick="document.getElementById('employeesDelete{{$employees->id}}').submit()"><i class="fa fa-trash fa-lg">
                                                </i> Delete</a>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="clearfix">
                                                <i class="fa fa-envelope fa-lg"></i> New message
                                                <span class="label label-primary label-circle pull-right">44</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--===================================================-->
                <!--End page content-->
            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
        </div>
        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">
            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                <ul class="footer-list list-inline">
                    <li>
                        <p class="text-sm">SEO Proggres</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                        </div>
                    </li>
                    <li>
                        <p class="text-sm">Online Tutorial</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                    </li>
                </ul>
            </div>
            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <p class="pad-lft">&#0169; 2015 Your Company</p>
        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->
        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->


@endsection
