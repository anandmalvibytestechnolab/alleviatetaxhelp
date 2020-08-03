<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{!! get_stylesheet('login') !!}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="bg-gradient-secondary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>
                                @include('backend.backend_messages')
                                {!! Form::open(['url' => route('BE_LOGIN'), 'class' => 'user']) !!}
                                @csrf
                                    <div class="form-group">
                                        {!! Form::email('email', null, ['class' => 'form-control form-control-user', 'placeholder' => 'email']) !!}
                                        {!! html_error('email') !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::password('password', ['class' => 'form-control form-control-user', 'placeholder' => 'password']) !!}
                                        {!! html_error('password') !!}
                                    </div>
                                    {{--<div class="form-group">--}}
                                        {{--<div class="custom-control custom-checkbox small">--}}
                                            {{--<input type="checkbox" class="custom-control-input" id="customCheck">--}}
                                            {{--<label class="custom-control-label" for="customCheck">Remember Me</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                <button type="submit" class="btn btn-primary btn-user btn-block">Sign In</button>
                                    {{--<hr>--}}
                                {!! Form::close() !!}
                                {{--<hr>--}}
                                {{--<div class="text-center">--}}
                                    {{--<a class="small" href="forgot-password.html">Forgot Password?</a>--}}
                                {{--</div>--}}
                                {{--<div class="text-center">--}}
                                    {{--<a class="small" href="register.html">Create an Account!</a>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
