@extends('master')

@section('head')
    <link rel="stylesheet" href="{!! get_stylesheet('login') !!}">
@endsection

@section('window_title')
    Login
@endsection

@section('content')
    <div class="authentication">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <form class="card auth_form p-3" action="{!! route('BE_AUTHENTICATE') !!}" method="post">
                        @csrf
                        @include('backend.backend_messages')
                        <div class="header px-2">
                            <img class="logo" src="/img/logo.svg" alt="">
                            <h5 class="my-3">Log in</h5>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Username" name="email" required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                </div>
                                <div class="w-100">
                                    {!! html_error('email') !!}
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Password" required name="password">
                                <div class="input-group-append">
                                    <span class="input-group-text"><a href="forgot-password.html" class="forgot" title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                                </div>
                                <div class="w-100">
                                    {!! html_error('password') !!}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                                Sign In
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <img src="/img/signin.svg" alt="Sign In"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection