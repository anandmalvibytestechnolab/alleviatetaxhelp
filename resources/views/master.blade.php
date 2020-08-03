<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/favicon.ico"/>
    <title>@yield('window_title')</title>
    @yield('head')
</head>
<body>
@yield('content')
@if(config('app.env') == 'local')
    {{--Live Reload--}}
    <script src="http://localhost:35729/livereload.js"></script>
@endif
@yield('page_js')
</body>
</html>