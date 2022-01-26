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
                    <li class="active"> Stock History </li>
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
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th class="min-tablet">Quantity</th>
                            <th class="min-tablet">Stock Type</th>
                            <th class="min-desktop">Date</th>
                            <th class="min-desktop">Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if ($stock)
                            @foreach ($stock as $key => $stock)
                                <tr>
                                    <td>{{$stock->product->name ?? ''}}</td>
                                    <td>{{$stock->product->category->name ?? ''}}</td>
                                    <td>{{$stock->quantity ?? ''}}</td>
                                    <td>{{$stock->status ?? ''}}</td>
                                    <td>{{$stock->created_at->format('d-m-y') ?? ''}}</td>
                                    <td>{{$stock->product->created_at->format('H:i:s')  ?? ''}}</td>
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
