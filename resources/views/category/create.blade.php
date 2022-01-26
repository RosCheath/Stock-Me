@extends('home')

@section('content')
    <!-- Page Content  -->
    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
        <div class="pageheader">
            <h3><i class="fa fa-home"></i> Add Category </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Add Category </li>
                </ol>
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-control">
                        <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                        <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                        <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                    </div>
                    <h3 class="panel-title">Add New Category</h3>
                </div>
                <div class="panel-body">
                    <!-- Inline Form  -->
                    <!--===================================================-->
                    <form class="form-inline justify-content-center" action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="demo-inline-inputmail" class="sr-only">Name</label>
                            <input type="text" placeholder="Name Category" name="name" id="demo-inline-inputmail" required class="form-control">
                        </div>
                        <button class="btn btn-primary" value="create" type="submit">Create</button>
                    </form>
                    <!--===================================================-->
                    <!-- End Inline Form  -->
                </div>
            </div>

        <!--===================================================-->
        <!--End page content-->
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->
@endsection
