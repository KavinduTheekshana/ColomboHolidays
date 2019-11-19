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


                        <form action="{{url('UpdateTestimonials')}}" method="post" accept-charset="utf-8"
                            enctype="multipart/form-data">
                            @csrf

                            @foreach ($testimonials as $item)



                            <div class="form-group col-md-12 col-xl-2">
                                <label for="example-email-input1" class="col-form-label">Id</label>
                                <input class="form-control" name="id" type="text" value="{{$item->id}}"
                                    id="example-text-input1" readonly>
                            </div>

                            <div class="form-group col-md-12 col-xl-6">
                                <label for="example-email-input1" class="col-form-label">Name</label>
                                <input class="form-control" type="text" name="name" value="{{$item->name}}"
                                    id="example-text-input1" required>
                            </div>

                            <div class="form-group col-md-12 col-xl-2">
                                <label for="example-email-input1" class="col-form-label">Stars</label>
                                <select name="stars" class="select2 form-control mb-3 custom-select"
                                    style="width: 100%; height:36px;" required>
                                    <option value="{{$item->stars}}" selected>{{$item->stars}}</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12 col-xl-12">
                                <label class="">Image</label>
                                <br>
                                <img src="{{asset($item->image)}}" class="rounded-circle"
                                    style="height: 100px; width: 100px">
                                <br>

                            </div>


                            <div class="form-group col-md-12 col-xl-12">
                                <label class="">Ratings</label>
                                <textarea name="ratings" id="elm1" required>{{$item->ratings}}</textarea>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>

                            @endforeach
                        </form>





                    </div>


                </div>
            </div>
        </div>
    </div><!-- container -->


    @endsection