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

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        <br>
                        @endif

                        @if(session()->has('message'))
                        <div class="alert alert-warning">
                            {{ session()->get('message') }}
                        </div>
                        @endif


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
                                        <td>{!! substr(strip_tags($item->name), 0, 25) !!}
                                            @if (strlen(strip_tags($item->name)) > 25)
                                            ...
                                            @endif</td>
                                        <td><img src="{{$item->image}}" class="rounded-circle"
                                                style="height: 32px; width: 32px" />
                                        </td>
                                        <td>
                                            <div class="rate">
                                                @for ($i=0; $i<$item->stars; $i++)
                                                    <span class="fa fa-star color-yellow"></span>
                                                    @endfor
                                            </div>
                                        </td>
                                        <td>{!! substr(strip_tags($item->ratings), 0, 40) !!}
                                            @if (strlen(strip_tags($item->ratings)) > 40)
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

                                            <a href="UpdateTestimonialsView/{{$item->id}}" type="button"
                                                class="btn btn-primary">
                                                <i class="mdi mdi-pen"></i>
                                            </a>

                                            <a href="#" type="button" class="btn btn-purple"
                                                data-target="#exampleModalform" data-modelid="{{$item->id}}"
                                                data-toggle="modal">
                                                <i class="mdi mdi-eye"></i>
                                            </a>



                                        </td>
                                    </tr>
                                    @endforeach




                                </tbody>
                            </table>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalform" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title align-self-center mt-0" id="exampleModalform1">New
                                                message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">Name</label>
                                                        <input type="text" class="form-control" id="modelid2">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-2" class="control-label">Surname</label>
                                                        <input type="text" class="form-control" id="field-2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-3" class="control-label">Address</label>
                                                        <input type="text" class="form-control" id="field-3"
                                                            placeholder="Address">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group no-margin">
                                                        <label for="field-7" class="control-label">Personal Info</label>
                                                        <textarea class="form-control" id="field-7"
                                                            placeholder="Write something about yourself"
                                                            style="margin-top: 0px; margin-bottom: 0px; height: 137px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Send message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <script>
                                $(document).ready( function () {
                                $('#datatable').DataTable();
                                } );   
                            </script>

                            <script>
                                $('.view').on('click',function(e){
                 e.preventDefault();
             document.getElementById('modelid').value=$(this).data('modelid');
     
             });
			
      
   
   
                            </script>









                        </div>


                    </div>


                </div>
            </div>
        </div>

    </div><!-- container -->






    @endsection