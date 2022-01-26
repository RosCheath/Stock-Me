@extends('home')

@section('content')
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Datatable Table </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> datatable Table </li>
                </ol>
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">

            <!-- Add Row -->
            <!--===================================================-->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Stock</h3>
                </div>
                <div id="demo-custom-toolbar2" class="table-toolbar-left">
                    <a id="demo-dt-addrow-btn" href="{{route('stock.create')}}" class="btn btn-pink">Add New</a>
                </div>
                <div class="panel-body">
                    <table id="demo-dt-addrow" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Selling Price</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stock as $stock)
                        <tr>
                            <td>{{ $stock->product->name }}</td>
                            <td>{{ $stock->product->category->name }}</td>
                            <td>{{ $stock->quantity }}</td>
                            <td>{{ $stock->product->unit_price }}</td>
                            <td>{{ $stock->product->selling_price }}</td>
                            <td>{{ $stock->product->created_at }}</td>

                        <td>
                            <a class="btn btn-xs btn-primary" href="{{ route('stock.edit', $stock->id) }}"><i class="fa fa-edit"></i>
                            <br>
                            <form id="stockDelete{{$stock->id}}" method="POST" action="{{ route('stock.destroy', $stock->id) }}">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a class="btn btn-xs btn-danger" href="#" onclick="document.getElementById('stockDelete{{$stock->id}}').submit()"><i class="fa fa-trash"></i></a>
                            </a>
                        </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--===================================================-->
            <!-- End Add Row -->
        </div>
        <!--===================================================-->
        <!--End page content-->
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->


@endsection
