@extends('frontend._master')

@section('wrap')
    <section class="wrap">
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row">
                    @yield('hero_content')
                </div>
            </div>

        </section><!-- End Hero -->

        @yield('counts_section')
    </section>
@endsection