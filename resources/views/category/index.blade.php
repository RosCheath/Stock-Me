@extends('home')

@section('content')
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Category Table </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Category Table </li>
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
                    <h3 class="panel-title">Category</h3>
                </div>
                <div id="demo-custom-toolbar2" class="table-toolbar-left">
                    <a id="demo-dt-addrow-btn" href="{{route('category.create')}}" class="btn btn-pink">Add New</a>
                </div>
                <div class="panel-body">
                    <table id="demo-dt-addrow" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $category)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>

                                <td>
                                    <a class="btn btn-xs btn-primary" href="{{ route('category.edit', $category->id) }}"><i class="fa fa-edit"></i>
                                        <br>
                                        <form id="categoryDelete{{$category->id}}" method="POST" action="{{ route('category.destroy', $category->id) }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <a class="btn btn-xs btn-danger" href="#" onclick="document.getElementById('categoryDelete{{$category->id}}').submit()"><i class="fa fa-trash"></i></a>
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
