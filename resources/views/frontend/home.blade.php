@extends('frontend._layout_with_wrap')

@section('hero_content')
    <div class="col-lg-12 pt-1 pt-md-5 pt-lg-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <!---  <img src="/img/b-icon.png" class="topicon" alt=""> --->
        <h1 data-aos="fade-up"><span>Alleviate</span> Saves Clients Tens Of Millions <br>Annually in Tax Debt</h1>
        <!-- Removed on 25 Nov 2020
        <h2 data-aos="fade-up" data-aos-delay="400" class="main-subtitle">Do you need help with <span>your tax problems?</span> Let our tax professionals help you.</h2>
        -->
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
                            Alleviate Tax is your <u>one-stop solution to resolving tax debt. </u>
                            Our tax experts will stop the IRS from coming after you and seizing your accounts. 
                            We will deal with the IRS so that you don't have to. 
                        </p>
                        <p>
                            <b><u>Call now for a free discovery call</u></b> to share the story of your tax debt situation. 
                            We will create a strategy based on your unique circumstances and <b>will beat the price of any tax resolution firm.</b> 
                            Plus, enjoy peace of mind knowing that we offer a <b>money-back guarantee to any unsatisfied client.</b> 
                        </p>
                        <p>
                            Some people choose to go directly to the IRS to address their tax debts. However, 
                            having a <u>professional firm</u> like Alleviate Tax in your corner <u>typically leads to a better outcome</u> 
                            because we understand the nuances of tax laws that most taxpayers do not. 
                        </p>
                        <p>
                            Our knowledge and experience give us the <b>tools to negotiate with the IRS</b> to reduce your tax debts, 
                            eliminate wage garnishments, and remove levies. 
                            Take the first step towards freedom from tax debt by booking an appointment today. 
                            The Alleviate Tax team is standing by to fight for you. 
                        </p>
                        <p class="speak_para">
                            If you’d like to speak with one of our tax analysts now, call us at (1800)789-8909. 
                            We’re open Monday – Friday 8:00AM – 4:30PM PST. Or text “taxhelp” to (949)444-5555. 
                        </p>
                        <!--
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
                        -->
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 man-bg" data-aos="fade-up" data-aos-delay="300">
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
    </main><!-- End #main -->
@endsection

@section('counts_section')
    <div class="money">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
                            <div class="guarant dark_light">
                                <i><a href="javascript:void(0)"><img src="img/gur_icon3.png" alt="#"/></a></i>
                                <h3>Free 2020 Tax Prep</h3>
                                <p>Alleviate Tax is experience with  licensed enrolled agentes and tax attorneys. </p>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="guarant">
                                <i><a href="javascript:void(0)"><img src="img/gur_icon1.png" alt="#"/></a></i>
                                <h3>Money Back Guarantee</h3>
                                <p>Alleviate Tax is committed to providing a safe and secure site that you can trust. We take your privacy seriously. We do not sell or share your information with third parties.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
{{--                            <img src="/img/c2.gif" class="testimonial-img" alt="">--}}
{{--                        </div>--}}
                        <div class="d-flex flex-column align-items-center w-100">
                            <h3>Moe M. (NY)</h3>
                            @include('partials.stars')
                        </div>
                        <p>
                            <i class="fa fa-quote-left"></i>
                            The folks at Alleviate tax relief were so awesome, I talked with John the guy was so patient and understanding he stayed with me on the phone 3 different times and spent more then 30 minutes each time explaining things to me ,calming me down reassuring me that he will do his very best for me and that he has alot of experience with the IRS...they were very comforting and polite...I would recommend Alleviate to anyone from any state…they are the best...
                            <i class="fa fa-quote-right"></i>
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
                        <i class="fa fa-quote-left"></i>
                            I started my experience last year with Matthew J from Alleviate tax. He is the real reason why I chose Alleviate Tax over 3 other companies to help me with this horrible problem. He is very professional, persistent and kept me informed each step of the way. Your company and those of us that get to work with him are so very fortunate.
                        <i class="fa fa-quote-right"></i>
                        </p>
                    </div>
                </div>

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
                        <i class="fa fa-quote-left"></i>
                            If you are trying to find the right tax help or advise this is the place to handle your tax problems or concerns. They are very up on current tax laws and regulations, and always professional. Plus the fee they charge is very fair!
                        <i class="fa fa-quote-right"></i>
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
                            <p class="mb-md-3 ignor_padding">
                                Ignoring problems will not make them go away. The same goes for the money that you owe the IRS.
                                In fact, your tax problems only get worse if you ignore attempts by the IRS to collect.
                            </p>
                            <p class="mb-md-3 ignor_padding">
                                When a tax debt goes unpaid, penalties and fees continue to accrue.
                                This means that your balance will increase over time, making it even harder to pay off.
                            </p>
                            <p class="mb-md-3 ignor_padding">
                                If the IRS feels that you are not addressing your tax debt,
                                it will take steps to collect the money from your wages and assets.
                                These methods can be both painful and embarrassing.
                            </p>
                            <div class="row">
                                <div class="col-md-4 d-md-flex align-items-md-stretch">
                                    <div class="count-box margin_left0 row">
                                        <div class="col-12 height51">
                                            <img src="/img/check.png" class="" alt="">
                                             <span>Garnished wages</span>
                                        </div>
                                        <div class="col-12">
                                           
                                            <p>The IRS can take up to 25% of every paycheck to pay down your debt.</p>
                                            <p>
                                                Although the law prevents an employer from firing you due to wage garnishment, 
                                                it can lead to some difficult conversations with your boss.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 d-md-flex align-items-md-stretch">
                                    <div class="count-box margin_left0 row">
                                        <div class="col-12">
                                            <img src="/img/wallet.png" class="" alt="">
                                            <span>Levies on accounts</span>
                                        </div>
                                        <div class="col-12">
                                            
                                            <p>
                                                When the IRS levies your bank account, 
                                                they can take all of the money you have in the account to pay towards your balance.
                                            </p>
                                            <p>
                                                The IRS does not care that you have bills to pay. 
                                                With a zero balance in your account, checks and electronic payments could bounce. 
                                                The creates even more fees and embarrassing conversations.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 d-md-flex align-items-md-stretch">
                                    <div class="count-box margin_left0 row">
                                        <div class="col-12 height45">
                                            <img src="/img/home.png" class="" alt="">
                                            <span>Liens on properties</span>
                                        </div>
                                        <div class="col-12">
                                            
                                            <p>
                                                Tax liens on your home or other property could make it harder to sell or refinance. 
                                                These tax liens are part of the public record and will show up whenever someone does 
                                                a background search on you. This could negatively affect your credit score and ability 
                                                to get approved for a loan. Even worse, it could disqualify you from certain jobs.
                                            </p>
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
    <script>
        $(document).ready( function() {
            $("#msform").submit(function(){
                $('#final_form_loader').css('display', 'inline-block');
            });
        });
    </script>
@endsection
