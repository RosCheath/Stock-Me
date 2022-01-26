@extends('home')

@section('content')

    <div id="container" class="effect mainnav-full">
        <div class="boxed">
            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="pageheader">
                    <h3><i class="fa fa-home"></i> Forms Validation </h3>
                    <div class="breadcrumb-wrapper">
                        <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li> <a href="#"> Home </a> </li>
                            <li class="active"> Forms Validation </li>
                        </ol>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <div class="row">
                        <div class="col-lg">
                            <div class="panel">
                                <!-- Panel heading -->
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tooltip Validation</h3>
                                </div>
                                <form id="demo-tooltip-validation" action="{{ route('stock.update', $product_stocks->id) }}" method="POST" class="form-horizontal">
                                    @csrf
                                    @method('PUT')
                                    <div class="panel-body">
                                        <!--SHOWING ERRORS IN TOOLTIP-->
                                        <!--===================================================-->
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Unit Price</label>
                                            <div class="col-lg-5">
                                                <input type="text" class="form-control" name="quantity" placeholder="Quantity" required value="{{$product_stocks->quantity}}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Selling Price</label>
                                            <div class="col-lg-5">
                                                <input type="text" class="form-control" name="location" placeholder="location" required value="{{$product_stocks->location}}">
                                            </div>
                                        </div>

                                        <!--===================================================-->
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-7 col-sm-offset-3">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!--===================================================-->
                <!--End page content-->
            </div>
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
@endsection
