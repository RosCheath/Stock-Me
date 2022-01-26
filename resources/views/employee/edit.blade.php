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
                    <h3><i class="fa fa-home"></i> Edit Employee </h3>
                    <div class="breadcrumb-wrapper">
                        <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li> <a href="#"> Home </a> </li>
                            <li class="active"> Edit Employee </li>
                        </ol>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->
                <!--Page content-->
                <!--===================================================-->
                <form method="post" action="{{ route('employee.update', $employee->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div id="page-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel">
                                    <!-- Panel heading -->
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Form</h3>
                                    </div>
                                    <div id="demo-tooltip-validation" class="form-horizontal">

                                        <div class="panel-body">
                                            <!--SHOWING ERRORS IN TOOLTIP-->
                                            <!--===================================================-->
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Name</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="name" placeholder="Name" required value="{{$employee->name}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Email</label>
                                                <div class="col-lg-5">
                                                    <input type="email" class="form-control" name="email" placeholder="email" required value="{{$employee->email}}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">position</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="position" placeholder="position" required value="{{$employee->position}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Phone</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="phone" placeholder="phone" required value="{{$employee->phone}}">
                                                </div>
                                            </div>

                                            <!--===================================================-->
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
                                                <img src="{{ '/imageEmployee/'.$employee->image }}" alt="Cover" width="50%" height="50%">
                                                <input type="file" name="image" class="form-control" id="file-ip-1" value="{{$employee->image}}" onchange="showPreview(event);">
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
