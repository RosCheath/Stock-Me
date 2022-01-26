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
                <h3><i class="fa fa-home"></i> Create Product </h3>
                <div class="breadcrumb-wrapper">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li> <a href="#"> Home </a> </li>
                        <li class="active"> Create Product </li>
                    </ol>
                </div>
            </div>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
            <!--Page content-->
            <!--===================================================-->
            <form method="post" action="{{ route('products.store')}}" enctype="multipart/form-data">
            @csrf
            <div id="page-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel">
                            <!-- Panel heading -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Create Product</h3>
                            </div>
                            <div id="demo-tooltip-validation" class="form-horizontal">

                                <div class="panel-body">
                                    <!--SHOWING ERRORS IN TOOLTIP-->
                                    <!--===================================================-->
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Name</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="name" placeholder="Name" required value="{{old('name')}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"> Category </label>
                                        <div class="col-lg-7">
                                            <!-- Bootstrap Select with Search Input -->
                                            <!--===================================================-->
                                            <select class="form-control selectpicker" data-live-search="true" id="category_id" name="category_id">
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <!--===================================================-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Unit Price</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="unit_price" placeholder="Unit Price" required value="{{old('unit_price')}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Selling Price</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="selling_price" placeholder="Selling Price" required value="{{old('selling_price')}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Year</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="year" placeholder="year" required value="{{old('year')}}">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">quantity</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="quantity" placeholder="quantity" required value="{{old('quantity')}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">location</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" name="location" placeholder="location" required value="{{old('location')}}">
                                        </div>
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
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Image</h3>
                            </div>
                            <div class="panel-body">
                                <style>
                                    .center {
                                        height:100%;
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;

                                    }
                                    .form-input {
                                        width:350px;
                                        padding:20px;
                                        background:#fff;
                                        box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377),
                                        3px 3px 7px rgba(94, 104, 121, 0.377);
                                    }
                                    .form-input input {
                                        display:none;

                                    }
                                    .form-input label {
                                        display:block;
                                        width:45%;
                                        height:45px;
                                        margin-left: 25%;
                                        line-height:50px;
                                        text-align:center;
                                        background:#1172c2;

                                        color:#fff;
                                        font-size:15px;
                                        font-family:"Open Sans",sans-serif;
                                        text-transform:Uppercase;
                                        font-weight:600;
                                        border-radius:5px;
                                        cursor:pointer;
                                    }

                                    .form-input img {
                                        width:100%;
                                        display:none;

                                        margin-bottom:30px;
                                    }
                                </style>
                                </head>
                                <body>
                                <div class="center">
                                    <div class="form-input">
                                        <div class="preview">
                                            <img id="file-ip-1-preview">
                                        </div>
                                        <label for="file-ip-1">Upload Image</label>
                                        <input type="file" name="image" class="form-control" id="file-ip-1" value="{{old('image')}}" onchange="showPreview(event);">
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


@endsection
