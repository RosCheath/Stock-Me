@extends('home')

@section('content')

    <div id="content-container">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Dashboard </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Dashboard </li>
                </ol>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <!--Widget-4 -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9 col-sm-9 col-xs-10">
                                    <h3 class="mar-no"> <span class="counter">{{$productCount}} Products</span></h3>
                                    <p class="mar-ver-5"> New and Old Product </p>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-shopping-cart fa-3x text-info"></i> </div>
                            </div>
                            <div class="progress progress-striped progress-sm">
                                <div style="width: {{$productCount}}%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="{{$productCount}}" role="progressbar" class="progress-bar"> <span class="sr-only">60% Complete</span> </div>
                            </div>
                            <p> Total Products </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9 col-sm-9 col-xs-10">
                                    <h3 class="mar-no"> <span class="counter">{{$categoryCount}} Category</span></h3>
                                    <p class="mar-ver-5">New and old Category</p>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-list-alt fa-3x text-danger"></i> </div>
                            </div>
                            <div class="progress progress-striped progress-sm">
                                <div style="width: {{$categoryCount}}%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="{{$categoryCount}}" role="progressbar" class="progress-bar progress-bar-danger"> </div>
                            </div>
                            <p> Total Category </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="panel widget">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9 col-sm-9 col-xs-10">
                                    <h3 class="mar-no"> <span class="counter">{{$employeeCount}} Employees</span></h3>
                                    <p class="mar-ver-5"> New and old Employee </p>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-users fa-3x text-success"></i> </div>
                            </div>
                            <div class="progress progress-striped progress-sm">
                                <div style="width: {{$employeeCount}}%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="{{$employeeCount}}" role="progressbar" class="progress-bar progress-bar-success"> <span class="sr-only">60% Complete</span> </div>
                            </div>
                            <p> Total Employee </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="panel widget">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9 col-sm-9 col-xs-10">
                                    <h3 class="mar-no"> <span class="counter">{{$allstockCount}} History </span></h3>
                                    <p class="mar-ver-5"> In and Out Stock</p>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-2"><i class="fa fa-cubes fa-3x text-info"></i> </div>
                            </div>
                            <div class="progress progress-striped progress-sm">
                                <div style="width: {{$allstockCount}}%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="{{$allstockCount}}" role="progressbar" class="progress-bar progress-bar-warning"> </div>
                            </div>
                            <p> Total Traffic Stock </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <script type="text/javascript">
                        window.onload = function () {
                            var chart = new CanvasJS.Chart("chartContainer", {

                                title:{
                                    text: ""
                                },
                                data: [//array of dataSeries
                                    { //dataSeries object

                                        /*** Change type "column" to "bar", "area", "line" or "pie"***/
                                        type: "column",
                                        dataPoints: [
                                            { label: "Products", y: {{$productCount}} },
                                            { label: "Employee", y: {{$employeeCount}} },
                                            { label: "Category", y: {{$categoryCount}} },
                                            { label: "IN Stock", y: {{$stockCountIN}} },
                                            { label: "OUT Stock", y: {{$stockCountOUT}} },
                                        ]
                                    }
                                ]
                            });

                            chart.render();
                        }
                    </script>
                    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    <div id="chartContainer" style="height: 360px; width: 100%;"></div>
                </div>
                <div class="col-md-3">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Chart %</h3>
                        </div>
                        <div class="panel-body">
                            <!--Morris Area Chart placeholder-->
                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                            <div id="graph-chart" style="height:275px"></div>
                            <script type="text/javascript">
                                Morris.Donut({
                                    element: 'graph-chart',
                                    data: [
                                        {value: {{$productCount}}, label: 'Product'},
                                        {value: {{$employeeCount}}, label: 'Employee'},
                                        {value: {{$categoryCount}}, label: 'Category'},
                                        {value: {{$stockCountIN}}, label: 'IN Stock'},
                                        {value: {{$stockCountOUT}}, label: 'OUT Stock'}
                                    ],
                                    colors: ['#E9422E', '#FAC552', '#3eb489', '#29b7d3', '#8a42f5'],
                                    resize:true,
                                    formatter: function (x) { return x}
                                }).on('click', function(i, row){
                                    console.log(i, row);
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-md-8">--}}


{{--                </div>--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"> Order List </h3>
                        </div>
                        <div class="panel-body">
                            <!--Default Tabs (Left Aligned)-->
                            <!--===================================================-->
                            <div class="tab-base">
                                <!--Nav Tabs-->
                                <ul class="nav nav-tabs">
                                    <li class="active"> <a data-toggle="tab" href="#demo-lft-tab-1"> New Product </a> </li>
                                    <li> <a data-toggle="tab" href="#demo-lft-tab-2">New Employee</a> </li>
                                    <li> <a data-toggle="tab" href="#demo-lft-tab-3">New User</a> </li>
                                </ul>
                                <!--Tabs Content-->
                                <div class="tab-content">
                                    <div id="demo-lft-tab-1" class="tab-pane fade active in">
                                        <!--Hover Rows-->
                                        <!--===================================================-->
                                        <table class="table table-hover table-vcenter">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Product Date</th>
                                                <th>Year</th>
                                                <th class="hidden-xs">Quantity</th>
                                                <th class="hidden-xs">Progress Full 100</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $key => $product)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->created_at->format('d-m-y')}}</td>
                                                <td>{{$product->year}}</td>
                                                <td class="hidden-xs">{{$product->stock->quantity}}</td>
                                                <td class="hidden-xs">
                                                    <div class="progress progress-striped progress-sm">
                                                        <div class="progress-bar progress-bar-primary" style="width:{{$product->stock->quantity}}%;"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!--===================================================-->
                                        <!--End Hover Rows-->
                                    </div>
                                    <div id="demo-lft-tab-2" class="tab-pane fade">

                                        <!-- Foo Table - Filtering -->
                                        <!--===================================================-->
                                        <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                                            <thead>
                                            <tr>
                                                <th data-toggle="true">Full Name</th>
                                                <th class="hidden-xs">Job Title</th>
                                                <th data-hide="phone, tablet">Email</th>
                                                <th data-hide="phone, tablet" class="hidden-xs">Phone</th>
                                                <th data-hide="phone, tablet">DOB</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($employees as $employee)
                                            <tr>
                                                <td>{{$employee->name}}</td>
                                                <td class="hidden-xs">{{$employee->position}}</td>
                                                <td>{{$employee->email}}</td>
                                                <td class="hidden-xs">{{$employee->phone}}</td>
                                                <td class="hidden-xs">{{$employee->dob}}</td>
                                            </tr>
                                           @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="5">
                                                    <div class="text-right">
                                                        <ul class="pagination"></ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <!--===================================================-->
                                        <!-- End Foo Table - Filtering -->
                                    </div>
                                    <div id="demo-lft-tab-3" class="tab-pane fade">
                                        <!--Hover Rows-->
                                        <!--===================================================-->
                                        <table class="table table-hover table-vcenter">
                                            <thead>
                                            <tr>
                                                <th class="hidden-xs">&nbsp;</th>
                                                <th>Profile</th>
                                                <th>User Name</th>
                                                <th class="hidden-xs">Date</th>
                                                <th class="hidden-xs">Email Address</th>
                                                <th>Role</th>
                                                <th class="hidden-xs">Download</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($data) && $data->count())
                                                @foreach($data as $key => $userList)
                                            <tr>
                                                <td class="hidden-xs">
                                                    <div class="checkbox">
                                                        <label class="form-checkbox form-icon active">
                                                            <input type="checkbox">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media-object center"> <img src="{{Auth::user()->image}}" alt="" class="img-rounded img-sm"> </div>
                                                </td>
                                                <td> {{$userList->name}} </td>
                                                <td class="hidden-xs">{{$userList->created_at}}</td>
                                                <td class="hidden-xs">{{$userList->email}}</td>
                                                <td>
                                                    <div class="label label-table label-info">{{$userList->role}}</div>
                                                </td>
                                                <td class="hidden-xs">
                                                    <!--Split Buttons Dropdown-->
                                                    <!--===================================================-->
                                                    <div class="btn-group btn-group-xs">
                                                        <button class="btn btn-danger">Download</button>
                                                        <button class="btn btn-danger dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                                            <i class="dropdown-caret fa fa-caret-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a> </li>
                                                            <li><a href="#">Another action</a> </li>
                                                            <li><a href="#">Something else here</a> </li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a> </li>
                                                        </ul>
                                                    </div>
                                                    <!--===================================================-->
                                                </td>
                                            </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="10">There are no data.</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                        <!--===================================================-->
                                        <!--End Hover Rows-->
                                    </div>
                                </div>
                            </div>
                            <!--===================================================-->
                            <!--End Default Tabs (Left Aligned)-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->

    </div>

@endsection
