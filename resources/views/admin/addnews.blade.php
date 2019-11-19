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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">News</a></li>
                            <li class="breadcrumb-item active">Add News</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add News</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body bootstrap-select-1">
                        <h5 class="mt-10">Add News</h5>
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


                        <form action="{{url('SaveGallery')}}" method="post" accept-charset="utf-8"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group col-md-12 col-xl-6">
                                <label for="example-email-input1" class="col-form-label">Title</label>
                                <input class="form-control" type="text" name="title" id="example-text-input1" required>
                            </div>


                            <div class="form-group col-md-12 col-xl-12">
                                <label class="">Image</label>
                                <br>
                                <input required name="image" type="file" id="input-file-now" class="dropify" />
                                <br>

                            </div>


                            <div class="form-group col-md-12 col-xl-12">
                                <label class="">Body</label>
                                <textarea name="ratings" id="elm1" required></textarea>
                            </div>


                            <div class="form-group col-md-12 col-xl-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->


    @endsection