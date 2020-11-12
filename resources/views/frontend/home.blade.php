@extends('frontend._layout_with_wrap')

@section('hero_content')
    <div class="col-lg-12 pt-4 pt-md-5 pt-lg-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <!---  <img src="/img/b-icon.png" class="topicon" alt=""> --->
        <h1 data-aos="fade-up"><span>Alleviate</span> Saves Clients Tens Of Millions <br>Annually in Tax Debt</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Do you need help with <span>your tax problems?</span> Let our tax professionals help you.</h2>
        <div data-aos="fade-up" data-aos-delay="800">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-12 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
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
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container-fluid">
                <div class="section-title" data-aos="fade-up">
                    <h2>What clients say <br/>about Alleviate Tax?</h2>
                </div>


                <div class="owl-carousel" data-aos="fade-up" data-aos-delay="200">

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <div class="cimage">
                                <img src="/img/c3.gif" class="testimonial-img" alt="">
                            </div>
                            <h3>Timmy M.</h3>
                            <h4>Manager</h4>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <p>
                                I was struggling to pay money back to the IRS because a tax firm told me I wasn't supposed to file when I retired. Alleviate Tax saw fit to solve the problem. May God forever continue to bless you and your firm.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <div class="cimage">
                                <img src="/img/c1.gif" class="testimonial-img" alt="">
                            </div>
                            <h3>Mark W.</h3>
                            <h4>Sales Manager</h4>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <p>
                                I never had to deal with this until last year. I found Alleviate Tax online and with only a min 15 min call they were able to collect my information and within weeks my tax problem was fixed. Great staff, very affordable.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <div class="cimage">
                                <img src="/img/c2.gif" class="testimonial-img" alt="">
                            </div>
                            <h3>Amanda E.</h3>
                            <h4>Teacher</h4>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <i class="fa fa-star checkedstar" aria-hidden="true"></i>
                            <p>
                                I was devastated when my wages were getting garnished. I had no idea it could be stopped. Called BTS and within a week they put a stop to it. Thank you for saving me.
                            </p>
                        </div>
                    </div>



                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="section-title" data-aos="fade-up">
                            <h2>Why Alleviate Tax is unique?</h2>
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
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <img src="/img/man.png">
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
    </main><!-- End #main -->
@endsection

@section('counts_section')
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">

        <div class="desktop">
            <div class="container">

                <div class="row">

                    <div class="col-xl-12 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <img src="/img/icon01.gif" class="" alt="">
                                        <span>Tax Debt Relief</span>
                                        <p>Get professional help with your back taxes.</p><p>Talk to one our tax specialist and find out how we can help.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <img src="/img/icon02.gif" class="" alt="">
                                        <span>Stop Wage Gargnishment</span>
                                        <p>If your wages are garnished, you can put a stop to it today. Call us today and find out about your rights!</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <img src="/img/icon03.gif" class="" alt="">
                                        <span>Stop Bank Levy</span>
                                        <p>Find out how bank levies work and how to stop them.  We can stop your bank levies by filing a claim of exemptions.</p>
                                    </div>
                                </div>

                                <div class="col-md-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <img src="/img/icon04.gif" class="" alt="">
                                        <span>Settle For Less</span>
                                        <p>You don't have to pay in full and there are ways you can settle for less than what you owe.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile Slider Visible -->

        <div class="mob">
            <div id="testimonials" class="testimonials">
                <div class="container">
                    <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">

                        <div class="counts">
                            <div class="content">
                                <div class="count-box">
                                    <img src="/img/icon01.gif" class="" alt="">
                                    <span>Tax Debt Relief</span>
                                    <p>Get professional help with your back taxes.</p><p>Talk to one our tax specialist and find out how we can help.</p>
                                </div>
                            </div>
                        </div>

                        <div class="counts">
                            <div class="content">
                                <div class="count-box">
                                    <img src="/img/icon02.gif" class="" alt="">
                                    <span>Stop Wage Gargnishment</span>
                                    <p>If your wages are garnished, you can put a stop to it today. Call us today and find out about your rights!</p>
                                </div>
                            </div>
                        </div>

                        <div class="counts">
                            <div class="content">
                                <div class="count-box">
                                    <img src="/img/icon03.gif" class="" alt="">
                                    <span>Stop Bank Levy</span>
                                    <p>Find out how bank levies work and how to stop them.  We can stop your bank levies by filing a claim of exemptions.</p>
                                </div>
                            </div>
                        </div>

                        <div class="counts">
                            <div class="content">
                                <div class="count-box">
                                    <img src="/img/icon04.gif" class="" alt="">
                                    <span>Settle For Less</span>
                                    <p>You don't have to pay in full and there are ways you can settle for less than what you owe.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script src="{!! get_javascript_file('home') !!}"></script>
@endsection
