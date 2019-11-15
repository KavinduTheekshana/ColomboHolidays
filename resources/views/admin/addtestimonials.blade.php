@extends('layouts.dashboard_header')
@section('content')


<!-- Page Content-->
<div class="page-content">

    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Colombo Holidays</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Testimonials</a></li>
                            <li class="breadcrumb-item active">Add Testimonials</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Testimonials</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body bootstrap-select-1">
                        <h5 class="mt-10">Add Testimonials</h5>
                        <br>

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        <br>
                        @endif

                        @if (count($errors) > 0)
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Whoops!</strong> There were some problems with your input.<br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif


                        <form action="{{url('SaveTestimonials')}}" method="post" accept-charset="utf-8"
                            enctype="multipart/form-data">
                            @csrf


                            <div class="row mt-10">
                                <div class="col-md-12 col-xl-6">
                                    <label class="">Name</label>
                                    <input name="name" type="text" class="form-control" required />
                                </div>
                            </div>
                            <br>

                            <div class="row mt-10">
                                <div class="col-md-12 col-xl-2">
                                    <label class="">Stars</label>
                                    <select name="stars" class="select2 form-control mb-3 custom-select"
                                        style="width: 100%; height:36px;" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <br>


                            <div class="row mt-10">
                                <div class="col-md-12 col-xl-12">
                                    <label class="">Image</label>
                                    <input required name="image" type="file" id="input-file-now" class="dropify" />
                                </div>
                            </div>
                            <br>


                            <div class="row mt-10">
                                <div class="col-md-12 col-xl-12">
                                    <label class="">Ratings</label>
                                    <textarea name="ratings" id="elm1" name="area" required></textarea>
                                </div>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>





                    </div>


                </div>
            </div>
        </div>
    </div><!-- container -->


    @endsection