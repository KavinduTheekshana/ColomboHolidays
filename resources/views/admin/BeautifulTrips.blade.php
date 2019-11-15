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
                            <li class="breadcrumb-item active">Beautiful Trips</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Beautiful Trips</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body bootstrap-select-1">
                        <h5 class="mt-10">Add Beautiful Trips</h5>
                        <br>

                        <form action="">


                            <div class="row mt-10">
                                <div class="col-md-12 col-xl-6">
                                    <label class="">Location</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <br>

                            <div class="row mt-10">
                                <div class="col-md-12 col-xl-8">
                                    <label class="">Tagline</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <br>

                            <div class="row mt-10">
                                <div class="col-md-12 col-xl-3">
                                    <label class="">Price</label>
                                    <div class="input-group">
                                        <input type="number" min="0.01" step="0.01" class="form-control" />
                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i
                                                    class="mdi mdi-currency-usd"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row mt-10">
                                <div class="col-md-12 col-xl-2">
                                    <label class="">Stars</label>
                                    <select class="select2 form-control mb-3 custom-select"
                                        style="width: 100%; height:36px;">
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
                                    <label class="">Description</label>
                                    <textarea id="elm1" name="area"></textarea>
                                </div>
                            </div>
                            <br>

                            <button type="button" class="btn btn-primary">Submit</button>
                        </form>





                    </div>


                </div>
            </div>
        </div>





    </div><!-- container -->
    @endsection