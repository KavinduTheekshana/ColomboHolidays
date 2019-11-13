@extends('layouts.app')
@section('content')

<body class="bg-white">

    <!-- Recover Password page -->
    <div class="row">
        <div class="col-lg-3 pr-0">
            <div class="card mb-0 shadow-none">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="/" class="logo logo-admin"><img
                                src="{{URL::asset('admin/images/logo-sm-dark-login.png')}}" height=" 100" alt="logo"
                                class="my-3"></a>
                    </h3>

                    <div class="px-3">
                        <h4 class="text-muted font-18 mb-2 text-center">Reset Password</h4>
                        <p class="text-muted text-center">Enter your Email and instructions will be sent to you!</p>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Email Address</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="far fa-envelope"></i></span>
                                    </div>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Email Address">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                        type="submit">Reset <i class="fas fa-sign-in-alt ml-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mt-4 text-center">
                        <p class="mb-0">© 2019-2020 Colombo Holidays <br> Developed by
                            <a href="www.inovora.uk">Inovora Technologies</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 p-0 h-100vh d-flex justify-content-center">
            <div class="accountbg d-flex align-items-center">
                <div class="account-title text-center text-white">
                    <h4 class="mt-3">Welcome To <span class="text-primary">Colombo Holidays</span> </h4>
                    <h1 class="">Let's Get Started</h1>
                    <p class="font-14 mt-3">Sri Lanka Tourism makes no representations whatsoever about any other
                        websites which you may access through this
                        website.</p>
                    <div class="border w-25 mx-auto border-primary"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Recover Password page -->

    @endsection