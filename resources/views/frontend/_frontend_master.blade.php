<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alleviate Tax</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{!! get_stylesheet('home') !!}">
    <meta name="robots" content="noindex">
    <link rel="icon" href="/img/favicon.png" type="image/x-icon">
</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1><a href="/"><span><img src="/img/logo.png"></span></a></h1>
        </div>

        <div class="nav-menu d-lg-block">
            <ul class="couter">
                <li class="calltitle text-uppercase d-none d-md-block">
                    <span>Ready for your free phone consultation now?</span><br>
                    <span><i class="fa fa-phone text-success"></i> <span class="myphonenumber">1-833-904-2888</span></span>
                </li>
                <li class="text-uppercase d-block d-md-none mobile-call-cta">
                    <a class="ringpoolteltag" href="tel:18339042888">
                        <span>Click to call to speak to a <br>tax expert now <i class="fa fa-phone text-success"></i></span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
@yield('wrap')
@yield('main')

@include('frontend._footer')

@include('partials.live_reload')
@yield('javascript')
</body>
</html>
