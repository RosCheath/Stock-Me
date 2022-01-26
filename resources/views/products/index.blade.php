@extends('home')

@section('content')
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Products Table </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Products Table </li>
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
                    <h3 class="panel-title">Products</h3>
                </div>
                <div id="demo-custom-toolbar2" class="table-toolbar-left">
                    <a id="demo-dt-addrow-btn" href="{{route('products.create')}}" class="btn btn-pink">Add New</a>
                </div>
                <div class="panel-body">
                    <table id="demo-dt-addrow" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Year</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>
                                <img width="30px" height="30px" src="{{ '/image/'.$product->image }}">
                            </td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->stock->quantity }}</td>
                            <td>{{ $product->year }}</td>
                            <td>{{ $product->updated_at->format('d-m-y') }}</td>
                            <td>{{ $product->updated_at->format('H:i:s') }}</td>

                        <td>
                            <a class="btn btn-xs btn-primary" href="{{ route('products.edit', $product->id) }}"><i class="fa fa-edit"></i>
                            <br>
                            <form id="productDelete{{$product->id}}" method="POST" action="{{ route('products.destroy', $product->id) }}">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a class="btn btn-xs btn-danger" href="#" onclick="document.getElementById('productDelete{{$product->id}}').submit()"><i class="fa fa-trash"></i></a>
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
