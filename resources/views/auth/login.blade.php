@extends('layouts.app')
@section('content')

<body class="bg-white">

    <!-- Log In page -->
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
                        <h4 class="text-muted font-18 mb-2 text-center">Welcome !</h4>
                        <p class="text-muted text-center">Sign in to continue to Colombo Holidays.</p>

                        <form class="form-horizontal my-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="far fa-user"></i></span>
                                    </div>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter username">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i
                                                class="fa fa-key"></i></span>
                                    </div>

                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Enter password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customControlInline">Remember
                                            me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('password.request') }}" class="text-muted font-13"><i
                                            class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>

                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log
                                        In <i class="fas fa-sign-in-alt ml-1"></i></button>
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
    <!-- End Log In page -->

    @endsection