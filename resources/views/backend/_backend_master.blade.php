<!doctype html>
<html lang="es">
<head>
    <link rel="shortcut icon" href="/img/favicon.ico?ver=1.0"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!! $page_title ?? 'Alleviate Tax' !!} | Alleviate Tax</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! get_stylesheet('platform') !!}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head_js')
</head>
<body>
{{--@include('frontend.svg_icons.svg_imports_tag')--}}
{{--@include('indexable.partials.svg.brand_svg_logo')--}}


<main id="wrapper">

    @include('backend.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content pb-5">

            <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

                @if(!empty($page_title))
                    <h1 class="d-flex justify-content-center w-100"><span>{!! $page_title !!}</span></h1>
                @endif

                @hasSection('modal_buttons')
                    @yield('modal_buttons')
                @endif

                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <ul class="navbar-nav ml-auto">


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{!! auth()->user()->name ?? 'John Doe'!!}</span>
                            <i class="fas fa-fw fa-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                            <div class="dropdown-divider"></div>
                            {{--<a class="dropdown-item" href="{!! route('BE_LOGOUT') !!}">--}}
                            {{--<a class="dropdown-item" href="{!! route('BE_USER_PROFILE_SHOW', [auth()->user()->id]) !!}">--}}
                            {{--<i class="fas fa-user mr-2 text-gray-400"></i>--}}
                            {{--Profile--}}
                            {{--</a>--}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{!! route('BE_LOGOUT') !!}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Sign out
                            </a>
                            @if(!empty(session('admin_session_logged_as_user')))
                                {!! Form::open(['route' => 'BE_IMPERSONATE_USER']) !!}
                                {!! Form::hidden('log_in_as_id', session('admin_session_logged_as_user')->id) !!}
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Go back to admin session
                                </button>
                                {!! Form::close() !!}
                            @endif
                        </div>
                    </li>

                </ul>


            </nav>

            <div class="container-fluid">

                <div class="row">
                    {{--@include('backend.system_errors')--}}
                    @include('backend.backend_errors')
                    @include('backend.backend_messages')
                </div>
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</main>
{{--<script>--}}
{{--window.additionalQueryFields = {!! collect(session('additional_query_fields') ?? [])->toJson() !!};--}}
{{--window.updateSortingEndPoint = '{!! route('BE_TABLE_SORTING_UPDATE') !!}';--}}
{{--window.sortOptions = {!! collect(session('sort_options') ?? [])->toJson() !!};--}}
{{--</script>--}}
@hasSection('local_javascript')

    @yield('local_javascript')

@else

    <script src="{!! get_javascript_file('backend.home') !!}"></script>
@endif

@if(config('app.env') == 'local')
    {{--Live Reload--}}
    <script src="http://localhost:35729/livereload.js"></script>
@endif
<script>
    document.querySelectorAll('a').forEach(link => link.setAttribute('rel', 'noreferrer noopener'))
</script>
</body>
</html>
