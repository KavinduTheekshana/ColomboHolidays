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
                            <li class="breadcrumb-item active">Edit Testimonials</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Testimonials</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body bootstrap-select-1">
                        <h5 class="mt-10">Edit Testimonials</h5>
                        <br>

                        <div class="table-responsive">
                            <table id="datatable" class="table border-0">
                                <thead>
                                    <tr class="">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Stars</th>
                                        <th>Rating</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($testimonials as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td><img src="{{$item->image}}" alt="profile-user" class="rounded-circle"
                                                style="height: 32px; width: 32px" />
                                        </td>
                                        <td>
                                            <div class="rate">
                                                @for ($i=0; $i<$item->stars; $i++)
                                                    <span class="fa fa-star color-yellow"></span>
                                                    @endfor
                                            </div>
                                        </td>
                                        <td>{!! substr(strip_tags($item->ratings), 0, 50) !!}
                                            @if (strlen(strip_tags($item->ratings)) > 50)
                                            ...
                                            @endif</td>
                                        <td>@if($item->status===1)
                                            <span style="padding: 5px 15px" class="badge badge-success">Active</span>
                                            @elseif($item->status===0)
                                            <span style="padding: 5px 15px" class="badge badge-warning">Disabled</span>
                                            @endif</td>
                                        <td>@if($item->status===1)
                                            <a href="MarkAsDisableTestimonials/{{$item->id}}" type="button"
                                                class="btn btn-warning">
                                                <i class="mdi mdi-block-helper"></i>
                                            </a>
                                            @elseif($item->status===0)
                                            <a href="MarkAsActiveTestimonials/{{$item->id}}" type="button"
                                                class="btn btn-success">
                                                <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                            </a>
                                            @endif

                                            <a href="DeleteTestimonials/{{$item->id}}" type="button"
                                                class="btn btn-danger">
                                                <i class="mdi mdi-delete"></i>
                                            </a>

                                            <a type="button" class="btn btn-primary">
                                                <i class="mdi mdi-pen"></i>
                                            </a>

                                            <a type="button" class="btn btn-purple">
                                                <i class="mdi mdi-eye"></i>
                                            </a>



                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            <script>
                                $(document).ready( function () {
                                $('#datatable').DataTable();
                                } );
                            </script>


                        </div>


                    </div>


                </div>
            </div>
        </div>

    </div><!-- container -->






    @endsection