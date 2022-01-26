@extends('home')

@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<div id="container" class="effect mainnav-full">
    <div class="boxed">
        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">
            <!--Page Title-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="pageheader">
                <h3><i class="fa fa-home"></i> Add Stock </h3>
                <div class="breadcrumb-wrapper">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> Add Stock </li>
                    </ol>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
            <!--Page content-->
            <!--===================================================-->
            <form method="post" action="{{ route('stock.store')}}">
            @csrf
            <div id="page-content">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="panel">
                            <!-- Panel heading -->
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                        In and Out
                                </h3>
                            </div>
                            <div id="demo-tooltip-validation" class="form-horizontal">

                                <div class="panel-body">
                                    <!--SHOWING ERRORS IN TOOLTIP-->
                                    <!--===================================================-->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"> Name </label>
                                        <div class="col-lg-5">
                                            <!-- Bootstrap Select with Search Input -->
                                            <!--===================================================-->
                                            <select class="form-control selectpicker" data-live-search="true" id="product_id" name="product_id">
                                                @foreach($product as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }} ({{$product->stock->quantity}}) </option>
                                                @endforeach
                                            </select>
                                            <!--===================================================-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"> Stock Type </label>
                                        <div class="col-lg-5">
                                            <!-- Bootstrap Select with Search Input -->
                                            <!--===================================================-->
                                            <select class="form-control selectpicker" id="status" name="status_type">
                                                    <option value="in">IN</option>
                                                     <option value="out">OUT</option>
                                            </select>
                                            <!--===================================================-->
                                        </div>
                                    </div>


                                    <!--===================================================-->
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel">
                            <!-- Panel heading -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Add Quantity</h3>
                            </div>
                            <div id="demo-tooltip-validation" class="form-horizontal">
                                <div class="panel-body">
                                    <!--SHOWING ERRORS IN TOOLTIP-->
                                    <!--===================================================-->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">quantity</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="quantity" placeholder="quantity" required value="{{old('quantity')}}">
                                        </div>
                                    </div>

                                    <!--===================================================-->
                                </div>
                                <div id="demo-panel-w-alert" class="panel">
                                    <!--Panel heading-->
                                    <div class="panel-heading">
                                        <div class="panel-control">
                                            <div class="btn-group">
                                                <button id="demo-panel-alert" class="btn btn-sm btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Panel body-->
{{--                                    <div class="panel-body">--}}
{{--                                        <p>Lorem ipsum dolor sit amet.</p>--}}
{{--                                    </div>--}}
                                </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--===================================================-->
            <!--End page content-->
        </div>
            </form>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->
    </div>

    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
<!--Form validation [ SAMPLE ]-->
    <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('message') }}");
        @endif

            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.error("{{ session('error') }}");
        @endif

            @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.info("{{ session('info') }}");
        @endif

            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.warning("{{ session('warning') }}");
        @endif
    </script>
@endsection
