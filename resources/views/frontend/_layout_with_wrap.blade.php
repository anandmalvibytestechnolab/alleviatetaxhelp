@extends('frontend._frontend_master')

@section('wrap')
    <section class="wrap">
        <section id="hero" class="d-flex align-items-center padd_bo0">

            <div class="container form_custompad0">
                <div class="row">
                    @yield('hero_content')
                </div>
            </div>

        </section><!-- End Hero -->

        @yield('counts_section')
    </section>
@endsection