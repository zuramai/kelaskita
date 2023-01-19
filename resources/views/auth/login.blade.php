
@extends('layouts.master-without-nav')

@section('content')
@section('title', 'Login')
        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index" class="logo logo-admin"><img src="{{Storage::url('/images/logo/'.config('web_config')['WEB_LOGO'])}}" height="40" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Selamat Datang !</h4>
                        <p class="text-muted text-center">Masuk untuk melanjutkan ke {{config('web_config')['WEB_TITLE']}}.</p>
                        @if($errors->any())
                        <div class="alert alert-danger">Username atau password salah!</div>
                        @endif
                        <form class="form-horizontal m-t-30" action="{{route('login')}}" method="POST">
                            @csrf 
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name='username' placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" name='password' placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="{{route('password.request')}}" class="text-muted"><i class="bi bi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>© {{date('Y')}} {{config('web_config')['WEB_TITLE']}}. Crafted with <i class="bi bi-heart text-danger"></i> by <a href="https://saugi.me">Ahmad Saugi</a></p>
            </div>

        </div>
        
@endsection

