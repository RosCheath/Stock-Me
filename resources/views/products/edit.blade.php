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
                <h3><i class="fa fa-home"></i> Edit Product </h3>
                <div class="breadcrumb-wrapper">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> Edit Product </li>
                    </ol>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">
                <form id="demo-tooltip-validation" action="{{ route('products.update', $product->id) }}" method="POST" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel">
                                <!-- Panel heading -->
                                <div class="panel-heading">
                                    <h3 class="panel-title">Form</h3>
                                </div>
                                <div class="panel-body">
                                    <!--SHOWING ERRORS IN TOOLTIP-->
                                    <!--===================================================-->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Name</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required value="{{$product->name}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"> Category </label>
                                        <div class="col-lg-5">
                                            <!-- Bootstrap Select with Search Input -->
                                            <!--===================================================-->
                                            <select class="form-control selectpicker" data-live-search="true" id="category_id" name="category_id">
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}" @if($product->category_id === $category->id) selected @endif>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <!--===================================================-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Unit Price</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="unit_price" placeholder="Unit Price" required value="{{$product->unit_price}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Year</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="year" placeholder="year" required value="{{$product->year}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Selling Price</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="selling_price" placeholder="Selling Price" required value="{{$product->selling_price}}">
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


                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Image</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="center">
                                        <div class="form-input">
                                            <div class="preview">
                                                <img id="file-ip-1-preview">
                                            </div>
                                            <img src="{{ '/image/'.$product->image }}" alt="Cover" width="50%" height="50%">
                                            <input type="file" name="image" class="form-control" id="file-ip-1" value="{{$product->image}}" onchange="showPreview(event);">
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        function showPreview(event){
                                            if(event.target.files.length > 0){
                                                var src = URL.createObjectURL(event.target.files[0]);
                                                var preview = document.getElementById("file-ip-1-preview");
                                                preview.src = src;
                                                preview.style.display = "block";
                                            }
                                        }
                                    </script>
                                    </body>
                                    </html>



                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
