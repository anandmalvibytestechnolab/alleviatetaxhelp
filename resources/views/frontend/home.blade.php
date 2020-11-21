@extends('frontend._layout_with_wrap')

@section('hero_content')
    <div class="col-lg-12 pt-1 pt-md-5 pt-lg-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <!---  <img src="/img/b-icon.png" class="topicon" alt=""> --->
        <h1 data-aos="fade-up"><span>Alleviate</span> Saves Clients Tens Of Millions <br>Annually in Tax Debt</h1>
        <h2 data-aos="fade-up" data-aos-delay="400" class="main-subtitle">Do you need help with <span>your tax problems?</span> Let our tax professionals help you.</h2>
        <div data-aos="fade-up" data-aos-delay="800">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-12 text-center p-0 mt-0 mt-md-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-0 mt-md-3 mb-3">
                            @include('partials.frontend.lead_form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main')
    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="section-title" data-aos="fade-up">
                            <h2>Get to Know <br> Alleviate Tax</h2>
                        </div>
                        <p>
                            At Alleviate Tax Solutions we've been helping thousands of citizens with their tax problems. We have a solution for all your tax problems, from wage garnishment to bank levies and even completing your back taxes, we have tax professionals that can help you!</p>
                        <p>
                            Our core values are integrity and trust, the encouragement of innovation, teamwork and the continuing personal development of everyone at BTS.
                        </p>
                        <div class="demo">
                            <h1>Tax Debt Relief</h1>
                            <div class="progress2">
                                <div class="progress-bar2" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="width: 96%;">
                                    <span>96%</span>
                                </div>
                            </div>
                            <h1>Wage Garnishment</h1>
                            <div class="progress2">
                                <div class="progress-bar2" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100" style="width: 94%;">
                                    <span>94%</span>
                                </div>
                            </div>
                            <h1>Bank Levies</h1>
                            <div class="progress2">
                                <div class="progress-bar2" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;">
                                    <span>98%</span>
                                </div>
                            </div>
                            <h1>Back Taxes</h1>
                            <div class="progress2">
                                <div class="progress-bar2" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%;">
                                    <span>92%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 man-bg" data-aos="fade-up" data-aos-delay="300">
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
    </main><!-- End #main -->
@endsection

@section('counts_section')
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container-fluid">
            <div class="section-title" data-aos="fade-up">
                <h2>What clients say <br/>about Alleviate Tax?</h2>
            </div>


            <div class="owl-carousel" data-aos="fade-up" data-aos-delay="200">

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
{{--                        <div class="cimage">--}}
{{--                            <img src="/img/c3.gif" class="testimonial-img" alt="">--}}
{{--                        </div>--}}
                        <div class="d-flex flex-column align-items-center w-100">
                            <h3>Bill D (WA)</h3>
                            @include('partials.stars')
                        </div>
                        <p>
                            If you are trying to find the right tax help or advise this is the place to handle your tax problems or concerns. They are very up on current tax laws and regulations, and always professional. Plus the fee they charge is very fair!
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
{{--                        <div class="cimage">--}}
{{--                            <img src="/img/c1.gif" class="testimonial-img" alt="">--}}
{{--                        </div>--}}
                        <div class="d-flex flex-column align-items-center w-100">
                            <h3>Lloyd P (CA)</h3>
                            @include('partials.stars')
                        </div>
                        <p>
                            I started my experience last year with Matthew J from Alleviate tax. He is the real reason why I chose Alleviate Tax over 3 other companies to help me with this horrible problem. He is very professional, persistent and kept me informed each step of the way. Your company and those of us that get to work with him are so very fortunate.
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
{{--                        <div class="cimage">--}}
{{--                            <img src="/img/c2.gif" class="testimonial-img" alt="">--}}
{{--                        </div>--}}
                        <div class="d-flex flex-column align-items-center w-100">
                            <h3>Moe M. (NY)</h3>
                            @include('partials.stars')
                        </div>
                        <p>
                            The folks at Alleviate tax relief were so awesome, I talked with John the guy was so patient and understanding he stayed with me on the phone 3 different times and spent more then 30 minutes each time explaining things to me ,calming me down reassuring me that he will do his very best for me and that he has alot of experience with the IRS...they were very comforting and polite...I would recommend Alleviate to anyone from any state…they are the best...
                        </p>
                    </div>
                </div>



            </div>

        </div>
    </section><!-- End Testimonials Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">

        <div>
            <div class="container">

                <div class="row">
                    <div class="col-xl-12 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="section-title">
                                <h2>Why You Shouldn’t Ignore Your Tax Debt</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box row">
                                        <div class="col-2">
                                            <img src="/img/icon01.gif" class="" alt="">
                                        </div>
                                        <div class="col-10">
                                            <span>Tax Debt Relief</span>
                                            <p>Get professional help with your back taxes.</p><p>Talk to one our tax specialist and find out how we can help.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box row">
                                        <div class="col-2">
                                            <img src="/img/icon02.gif" class="" alt="">
                                        </div>
                                        <div class="col-10">
                                            <span>Stop Wage Gargnishment</span>
                                            <p>If your wages are garnished, you can put a stop to it today. Call us today and find out about your rights!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box row">
                                        <div class="col-2">
                                            <img src="/img/icon03.gif" class="" alt="">
                                        </div>
                                        <div class="col-10">
                                            <span>Stop Bank Levy</span>
                                            <p>Find out how bank levies work and how to stop them.  We can stop your bank levies by filing a claim of exemptions.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box row">
                                        <div class="col-2">
                                            <img src="/img/icon04.gif" class="" alt="">
                                        </div>
                                        <div class="col-10">
                                            <span>Settle For Less</span>
                                            <p>You don't have to pay in full and there are ways you can settle for less than what you owe.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile Slider Visible -->

{{--        <div class="mob">--}}
{{--            <div id="testimonials" class="testimonials">--}}
{{--                <div class="container">--}}
{{--                    <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">--}}

{{--                        <div class="counts">--}}
{{--                            <div class="content">--}}
{{--                                <div class="count-box">--}}
{{--                                    <img src="/img/icon01.gif" class="" alt="">--}}
{{--                                    <span>Tax Debt Relief</span>--}}
{{--                                    <p>Get professional help with your back taxes.</p><p>Talk to one our tax specialist and find out how we can help.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="counts">--}}
{{--                            <div class="content">--}}
{{--                                <div class="count-box">--}}
{{--                                    <img src="/img/icon02.gif" class="" alt="">--}}
{{--                                    <span>Stop Wage Gargnishment</span>--}}
{{--                                    <p>If your wages are garnished, you can put a stop to it today. Call us today and find out about your rights!</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="counts">--}}
{{--                            <div class="content">--}}
{{--                                <div class="count-box">--}}
{{--                                    <img src="/img/icon03.gif" class="" alt="">--}}
{{--                                    <span>Stop Bank Levy</span>--}}
{{--                                    <p>Find out how bank levies work and how to stop them.  We can stop your bank levies by filing a claim of exemptions.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="counts">--}}
{{--                            <div class="content">--}}
{{--                                <div class="count-box">--}}
{{--                                    <img src="/img/icon04.gif" class="" alt="">--}}
{{--                                    <span>Settle For Less</span>--}}
{{--                                    <p>You don't have to pay in full and there are ways you can settle for less than what you owe.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
@endsection

@section('javascript')
    <script src="{!! get_javascript_file('home') !!}"></script>
@endsection
