@extends('home')

@section('content')

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Products History </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> products History </li>
                </ol>
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">

            <!-- Basic Data Tables -->
            <!--===================================================-->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Products History</h3>
                </div>
                <div class="panel-body">
                    <table id="demo-dt-basic" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th class="min-tablet">Quantity</th>
                            <th class="min-tablet">Unit Price</th>
                            <th class="min-desktop">Selling Price</th>
                            <th class="min-desktop">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if ($history)
                        @foreach ($history as $key => $history)
                        <tr>
                            <td>{{$history->product_history->name ?? ''}}</td>
                            <td>{{$history->category->name ?? ''}}</td>
                            <td>{{$history->product_history->quanity ?? ''}}</td>
                            <td>{{$history->product_history->unit_price ?? ''}}</td>
                            <td>{{$history->product_history->selling_price ?? ''}}</td>
                            <td>{{$history->product_history->created_at ?? ''}}</td>
                        </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!--===================================================-->
            <!-- End Striped Table -->
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->



@endsection
