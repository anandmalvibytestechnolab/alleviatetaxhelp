<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Alleviate</title>
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- owl carousel css -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- responsive -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <!-- awesome fontfamily -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous"></script>
    </head>
    <!-- body -->
    <body class="main-layout">
        <!-- header -->
        <header class="head-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d_flex justf">
                            <div class="logo">
                                <a href="{{ route('HOME') }}"><img src="{{ asset('assets/images/logo1.png') }}" alt="#"/></a>
                            </div>
                            <ul class="cantact">
                                <li class=""> <a href="Javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i>
                                        <span>Call Us 888-859-8291</span></a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        <!-- start slider section -->
        <div class="phone_sho">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Alleviate Tax Saves Tens of <br>
                            Millions for <span>Clients Annually</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="top_section" class="banner_main">
            <section class="multi_step_form">
                <div class="container">
                    <form id="msform" action="{{ route('LEAD_STORE') }}" method="post">
                        @csrf
                        <!-- Tittle -->
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active"><span>01</span></li>
                            <li><span>02</span></li>
                            <li><span>03</span></li>
                            <li><span>04</span></li>
                            <li><span>05</span></li>
                        </ul>
                        <!-- fieldsets -->
                        <div class="right-content">
                            <fieldset>
                                <div class="million tab1_maxiwdth">
                                    <h1>Alleviate Tax Saves Tens of <br>
                                        Millions for <span>Clients Annually</span>
                                    </h1>
                                    <a class="strat_btn" href="Javascript:void(0)"><span>start</span> <i class="fa fa-arrow-down" aria-hidden="true"></i> </a>
                                    <div class="setp">
                                        <!--<strong>STEP 1</strong>-->
                                        <p>Tell us a bit about your tax situation. Was one of the following part of <br>
                                            what caused your tax debt?
                                        </p>
                                        <!-- <div class="round">
                                           <label class="ratr">Unfiled Taxes
                                              <input type="radio" checked="checked" name="radio">
                                              <span class="checkmark"></span>
                                           </label>
                                           <label class="ratr">Owe More Than Expected
                                              <input type="radio" name="radio">
                                              <span class="checkmark"></span>
                                           </label>
                                           <label class="ratr">Penalties & Interest
                                              <input type="radio" name="radio">
                                              <span class="checkmark"></span>
                                           </label>
                                           <label class="ratr">1099 Taxes
                                              <input type="radio" name="radio">
                                              <span class="checkmark"></span>
                                           </label>
                                           <label class="ratr">Other
                                              <input type="radio" name="radio">
                                              <span class="checkmark"></span>
                                           </label>
                                           
                                           <input class="other_input" type="text" name="other"placeholder="Please describe">
                                           </div> -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <input type="hidden" name="current_situation" id="current_situation" value="">
                                                    <div class="col-sm-6 col-md-4">
                                                        <label class="question_1_checkbox btn btn-secondary d-flex button-label-radio icon_widht"><i><img src="{{ asset('assets/images/1.png') }}" alt="#"/></i> Unfiled Taxes
                                                            <input type="checkbox" name="current_situation[]" class="d-none" value="unf" id="trdb">
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <label class="question_1_checkbox btn btn-secondary d-flex button-label-radio icon_widht"><i><img src="{{ asset('assets/images/2.png') }}" alt="#"/></i> Owe More Than Expected
                                                            <input type="checkbox" name="current_situation[]" class="d-none" value="owe" id="trdb">
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <label class="question_1_checkbox btn btn-secondary d-flex button-label-radio icon_widht"><i><img src="{{ asset('assets/images/3.png') }}" alt="#"/></i> Penalties & Interest
                                                            <input type="checkbox" name="current_situation[]" class="d-none" value="biz" id="trdb">
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <label class="question_1_checkbox btn btn-secondary d-flex button-label-radio icon_widht"> <i><img src="{{ asset('assets/images/4.png') }}" alt="#"/></i> 1099 Taxes
                                                            <input type="checkbox" name="current_situation[]" class="d-none" value="1099" id="trdb">
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <label class="question_1_checkbox btn btn-secondary d-flex button-label-radio icon_widht"> <i><img src="{{ asset('assets/images/5.png') }}" alt="#"/></i> Other
                                                            <input type="checkbox" name="current_situation[]" class="d-none" value="oth" id="trdb" data-display-current-situation-text-field>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <input class="other_input d-none" type="text" name="other_current_situation" placeholder="Please describe">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="next action-button" data-curslide="first">Next Step <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                <p class="show_error_message" id="error_first"></p>
                            </fieldset>
                            <fieldset>
                                <div class="million tab2_maxiwdth">
                                    <h1>Alleviate Tax Saves Tens of <br>
                                        Millions for <span>Clients Annually</span>
                                    </h1>
                                    <div class="setp">
                                        <div class="progress" data-percentage="20">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    20%<br>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<strong>STEP 2</strong>-->
                                        <p>About How Much Does the IRS Claim You Owe?
                                        </p>
                                        <!--  <div class="range_slider_top">
                                           <div class="ngek">
                                              <h4>$20K</h4>
                                              <h4>$40K</h4>
                                              <h4>$60K</h4>
                                              <h4>$80K</h4>
                                              <h4>$100K</h4>
                                           </div>
                                           <input class="slider" value="20" min="0" max="100" name="rangeslider" type="range"/>
                                           </div> -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-3">
                                                        <label class="btn btn-secondary d-flex button-label-radio">Less than $3,000
                                                            <input type="radio" name="tax_debt" class="d-none" value="less-3000" id="tax_debt_radio">
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <label class="btn btn-secondary d-flex button-label-radio">$3,000 - $10,000
                                                            <input type="radio" name="tax_debt" class="d-none" value="3000-10000" id="tax_debt_radio">
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <label class="btn btn-secondary d-flex button-label-radio">10,000 - $20,000
                                                            <input type="radio" name="tax_debt" class="d-none" value="10000-20000" id="tax_debt_radio">
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <label class="btn btn-secondary d-flex button-label-radio">More than $20,000
                                                            <input type="radio" name="tax_debt" class="d-none" value="more-20000" id="tax_debt_radio">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button type="button" class="action-button previous previous_button">Back</button> -->
                                <button type="button" class="next action-button" data-curslide="second">Next Step <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>  
                                <p class="show_error_message" id="error_second"></p>
                            </fieldset>
                            <fieldset class="tab3">
                                <div class="million tab3_maxiwdth">
                                    <h1>Alleviate Tax Saves Tens of <br>
                                        Millions for <span>Clients Annually</span>
                                    </h1>
                                    <div class="setp">
                                        <div class="progress" data-percentage="40">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    40%<br>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<strong>STEP 3</strong>-->
                                        <p>Are You Already Enrolled in a Program with the IRS?
                                        </p>
                                        <div class="row">
                                            <div class="col-md-4 offset-md-4 col-sm-8 offset-sm-2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="btn btn-secondary d-flex button-label-radio">Yes
                                                            <input type="radio" name="enrolled_irs" class="d-none" value="Yes" id="irs_radio">
                                                        </label>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="btn btn-secondary d-flex button-label-radio">No
                                                            <input type="radio" name="enrolled_irs" class="d-none" value="No" id="irs_radio">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button type="button" class="action-button previous previous_button">Back</button> -->
                                <button type="button" class="next action-button" data-curslide="three">Next Step <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                <p class="show_error_message" id="error_three"></p>
                            </fieldset>
                            <fieldset>
                                <div class="million tab4_maxiwdth">
                                    <h1>Alleviate Tax Saves Tens of <br>
                                        Millions for <span>Clients Annually</span>
                                    </h1>
                                    <div class="setp">
                                        <div class="progress" data-percentage="60">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    60%<br>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<strong>STEP 4</strong>-->
                                        <p>Please enter your contact info
                                        </p>
                                        <div class="row">
                                            <div class="col-md-10 offset-md-1">
                                                <input placeholder="First Name" type="text" name="first_name" id="first_name">
                                            </div>
                                            <div class="col-md-10 offset-md-1 paddtop20">
                                                <input placeholder="Last Name" type="text" name="last_name" id="last_name">
                                            </div>
                                            <div class="col-md-10 offset-md-1 paddtop20">
                                                <input placeholder="E-mail Address" type="email" name="email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button type="button" class="action-button previous previous_button">Back</button> -->
                                <button type="button" class="next action-button" data-curslide="four">Next Step <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                <p class="show_error_message" id="error_four"></p>
                            </fieldset>
                            <fieldset>
                                <div class="million tab5_maxiwdth">
                                    <h1>Alleviate Tax Saves Tens of <br>
                                        Millions for <span>Clients Annually</span>
                                    </h1>
                                    <div class="setp">
                                        <div class="progress" data-percentage="80">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div>
                                                    80%<br>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<strong>STEP 5</strong>-->
                                        <p>What’s the best number to reach you at?
                                        </p>
                                        <div class="row ">
                                            <div class="col-md-4 offset-md-4">
                                                <input placeholder="Phone Number" type="tel" name="Phone" onKeyup="addDashes(this)" id="phone_number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button type="button" class="action-button previous previous_button">Back</button> --> 
                                <!--<a href="./thankyou.html" class="action-button" data-curslide="five">Next Step <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>-->
                                <button type="submit" class="next action-button" data-curslide="five">Next Step <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                                <p class="show_error_message" id="error_five"></p>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <!-- end slider section -->
        <!-- brand logo secton -->
        <section class="brand leyaout_padding_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="brand_logo">
                            <li><a href="javascript:void(0)"><img src="{{ asset('assets/images/brandlogo1.png') }}" alt="#"/></a></li>
                            <li class="flo_right"><a href="javascript:void(0)"><img src="{{ asset('assets/images/brandlogo2.png') }}" alt="#"/></a></li>
                            <li class="pad_leri"><a href="javascript:void(0)"><img src="{{ asset('assets/images/brandlogo3.png') }}" alt="#"/></a></li>
                            <li class="pad_leri"><a href="javascript:void(0)"><img src="{{ asset('assets/images/brandlogo4.png') }}" alt="#"/></a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 text-center text_free">
                        <i><img src="{{ asset('assets/images/top_img_phone.png') }}"></i>
                    </div>
                </div>
            </div>
        </section>
        <!-- end brand logo secton -->
        <!-- ignore section -->
        <section  class="ignore">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="titlepage text_align_left">
                            <h2>Why you shouldn't <br><span>ignore your tax debt</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row d_flex margin_top">
                    <div class="col-md-8">
                        <ul class="debt">
                            <li>
                                Ignoring problems will not make them go away. The same goes for the money that you owe the IRS. In fact, your tax problems only get worse if you ignore <a href="https://alleviatetax.com/blog/7-tips-on-what-to-do-if-the-irs-is-coming-after-you" class="blue_hyper_link" target="_blank">attempts by the IRS to collect</a>.
                            </li>
                            <li>When a tax debt goes unpaid, penalties and fees continue to accrue. This means that your balance will increase over time, making it even harder to pay off.</li>
                            <li>If the IRS feels that you are not addressing your <a href="https://alleviatetax.com/blog/what-to-do-if-you-cant-pay-the-irs-back/" class="blue_hyper_link" target="_blank">tax debt</a>, it will take steps to collect the money from your wages and assets. These methods can be both painful and embarrassing.</li>
                    </div>
                    <div class="col-md-4 order1">
                        <div class="debt_img">
                            <figure><img class="img_responsive" src="{{ asset('assets/images/debt.jpg') }}" alt="#" /></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end ignore section -->
        <!-- works section -->
        <div class="works">
            <div class="container_width">
                <div class="row">
                    <div class="col-lg-10 offset-lg-2 col-md-12">
                        <div class="titlepage text_align_center">
                            <h2>How Tax Relief <span>Works </span></h2>
                        </div>
                    </div>
                </div>
                <div class="row d_flex md_none">
                    <div class="col-lg-3 col-md-12 padd_ri0">
                        <a href="javascript:void(0)" class="control_next"><img src="{{ asset('assets/images/next-aerrow.png') }}"></a>
                        <a href="javascript:void(0)" class="control_prev"><img src="{{ asset('assets/images/prev-aerrow.png') }}"></a>
                        <div class="tab-slider" id="slider">
                            <ul class="nav nav-tabs md-tabs graf_tab" id="myTabMD" role="tablist">
                                <li>
                                    <a class="nav-link border_top active" id="home-tab-md" data-toggle="tab" href="#tab1" role="tab" aria-controls="home-md" aria-selected="true"><i><img class="ho_no" src="{{ asset('assets/images/wo_icon1.png') }}" alt="#"/> <img class="ho_sho" src="{{ asset('assets/images/wo_icon11.png') }}" alt="#"/></i>Free Consultation Today</a>
                                </li>
                                <li>
                                    <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#tab2" role="tab" aria-controls="profile-md" aria-selected="false"><i><img class="ho_no" src="{{ asset('assets/images/wo_icon2.png') }}" alt="#"/> <img class="ho_sho" src="{{ asset('assets/images/wo_icon21.png') }}" alt="#"/></i>Phase 1: Investigation <br><span class="cricu">(~7 Days)</span></a>
                                </li>
                                <li>
                                    <a class="nav-link" id="contact-tab-md" data-toggle="tab" href="#tab3" role="tab" aria-controls="contact-md" aria-selected="false"><i><img class="ho_no" src="{{ asset('assets/images/wo_icon3.png') }}" alt="#"/> <img class="ho_sho" src="{{ asset('assets/images/wo_icon31.png') }}" alt="#"/></i>Phase 2: Active Resolution <br><span class="cricu">(3-9 Months)</span></a>
                                </li>
                                <li>
                                    <a class="nav-link border_bottom" id="contact-tab-md" data-toggle="tab" href="#tab4" role="tab" aria-controls="contact-md" aria-selected="false"><i><img class="ho_no" src="{{ asset('assets/images/wo_icon4.png') }}" alt="#"/> <img class="ho_sho" src="{{ asset('assets/images/wo_icon41.png') }}" alt="#"/></i>Resolution</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 padd_le0">
                        <div class="tab-content card  consul_content" id="myTabContentMD">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab-md">
                                <div class="depend">
                                    <div class="row d_flex">
                                        <div class="col-md-5">
                                            <div class="guide text_align_center">
                                                <figure>
                                                    <img class="img_responsive" src="{{ asset('assets/images/work_img.png') }}" alt="#" />
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="guide text_align_left">
                                                <h3>Free Consultation Today</h3>
                                                <p>Telephone consultation with one of our tax professionals who will guide you through this process.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade padi" id="tab2" role="tabpanel" aria-labelledby="profile-tab-md">
                                <div class="depend">
                                    <div class="row d_flex">
                                        <div class="col-md-5">
                                            <div class="guide text_align_center">
                                                <figure>
                                                    <img class="img_responsive" src="{{ asset('assets/images/work_img.png') }}" alt="#" />
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="guide text_align_left">
                                                <h3>Phase 1: Investigation (~7 Days)</h3>
                                                <p>A dedicated tax professional investigates your status with the IRS, then presents you with a detailed report and analysis of your tax status with the IRS. We'll present options and suggest a plan to resolve your tax debt.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade padi" id="tab3" role="tabpanel" aria-labelledby="contact-tab-md">
                                <div class="depend">
                                    <div class="row d_flex">
                                        <div class="col-md-5">
                                            <div class="guide text_align_center">
                                                <figure>
                                                    <img class="img_responsive" src="{{ asset('assets/images/work_img.png') }}" alt="#" />
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="guide text_align_left">
                                                <h3>Phase 2: Active Resolution (3-9 Months)</h3>
                                                <p>Depending upon which programs you qualify for, we partner with you to get your taxes in compliance and achieve the lowest possible resolution for you.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade padi" id="tab4" role="tabpanel" aria-labelledby="contact-tab-md">
                                <div class="depend">
                                    <div class="row d_flex">
                                        <div class="col-md-5">
                                            <div class="guide text_align_center">
                                                <figure>
                                                    <img class="img_responsive" src="{{ asset('assets/images/work_img.png') }}" alt="#" />
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="guide text_align_left">
                                                <h3>Resolution</h3>
                                                <p>You are now in compliance with the IRS and your tax debt has been resolved.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="row md_show">
               <div class="get-to-know1">
                  <div class="owl-carousel tab_carosle work2 owl-theme off">
                     <div class="item">
                        <div class="through">
                           <div class=" professio text_align_center reso">
                              <a href="javascript:void(0)"> <i> <img class="ho_sho" src="{{ asset('assets/images/wo_icon1.png') }}" alt="#"/></i>Free Consultation Today</a>
                           </div>
                           <div class="consul text_align_left">
                              <h3>Free Consultation Today</h3>
                              <p>Telephone consultation with one of our tax professionals who will guide you through this process.</p>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="through">
                           <div class=" professio text_align_center">
                              <a href="javascript:void(0)"> <i> <img class="ho_sho" src="{{ asset('assets/images/wo_icon2.png') }}" alt="#"/></i>Phase 1: Investigation <br><span class="cricu">(~7 Days)</span></a>
                           </div>
                           <div class="consul text_align_left">
                              <h3>Phase 1: Investigation (~7 Days)</h3>
                              <p>A dedicated tax professional investigates your status with the IRS, then presents you with a detailed report and analysis of your tax status with the IRS. We'll present options and suggest a plan to resolve your tax debt.</p>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="through">
                           <div class=" professio text_align_center">
                              <a href="javascript:void(0)"> <i> <img class="ho_sho" src="{{ asset('assets/images/wo_icon3.png') }}" alt="#"/></i>Phase 2: Active Resolution <br><span class="cricu">(3-9 Months)</a>
                           </div>
                           <div class="consul text_align_left">
                              <h3>Phase 2: Active Resolution (3-9 Months)</h3>
                              <p>Depending upon which programs you qualify for, we partner with you to get your taxes in compliance and achieve the lowest possible resolution for you.</p>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="through">
                           <div class=" professio text_align_center resolu">
                              <a href="javascript:void(0)"> <i> <img class="ho_sho" src="{{ asset('assets/images/wo_icon4.png') }}" alt="#"/></i>Resolution</a>
                           </div>
                           <div class="consul text_align_left">
                              <h3>Resolution</h3>
                              <p>You are now in compliance with the IRS and your tax debt has been resolved.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </div>
        </div>
        <!-- end works section -->
        <!-- getknow -->
        <section class="getknow leyaout_padding_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage text_align_center">
                            <h2>Get to Know <span>Alleviate Tax</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="get-to-know">
                        <div class="owl-carousel owl-theme off">
                            <div class="item">
                                <div class="getknow-box">
                                    <div class="guarant text_align_center">
                                        <i><a href="javascript:void(0)"><img src="{{ asset('assets/images/gur_icon1.png') }}" alt="#"/></a></i>
                                        <h3>Money Back Guarantee</h3>
                                        <p>Enjoy peace of mind knowing that we offer a money-back guarantee to any unsatisfied client.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="getknow-box">
                                    <div class="guarant blu_light text_align_center">
                                        <i><a href="javascript:void(0)"><img src="{{ asset('assets/images/gur_icon2.png') }}" alt="#"/></a></i>
                                        <h3>Lowest Pricing</h3>
                                        <p>We Will beat any pricing another tax resolution firm gives you. Send us the transcript, and we will give you lower pricing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="getknow-box">
                                    <div class="guarant dark_light text_align_center">
                                        <i><a href="javascript:void(0)"><img src="{{ asset('assets/images/gur_icon3.png') }}" alt="#"/></a></i>
                                        <h3>Free 2020 Tax Prep</h3>
                                        <p>If you enroll with our tax resolution services by 3/15/2021, we’ll prepare and file your 2020 taxes for free!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="getknow-box">
                                    <div class="guarant  text_align_center">
                                        <i><a href="javascript:void(0)"><img src="{{ asset('assets/images/gur_icon4.png') }}" alt="#"/></a></i>
                                        <h3>Alleviate Cares</h3>
                                        <p>There’s a lot of concern that tax relief is a scam. It’s not. We care about our clients and the community. Through our foundation, Alleviate Cares, we make annual contributions to charities that help those who need it the most.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="getknow-box">
                                    <div class="guarant blu_light text_align_center">
                                        <i><a href="javascript:void(0)"><img src="{{ asset('assets/images/gur_icon5.png') }}" alt="#"/></a></i>
                                        <h3>Excellent Client Ratings and Reviews</h3>
                                        <p>Clients love our results and it shows in their reviews on <a href="https://www.google.com/search?rlz=1C1CHBF_enUS878US879&sxsrf=ALeKk03aI5gVV02FX1NZMbhXdNVarr9xKg%3A1606108752863&ei=UEa7X5aeNNOGwbkPy7m6uAI&q=google+reviews+alleviate+tax&oq=google+reviews+alleviate+tax&gs_lcp=CgZwc3ktYWIQAzoHCAAQRxCwA1CY6hdYmOoXYP3yF2gBcAB4AIABTIgBTJIBATGYAQCgAQGqAQdnd3Mtd2l6yAEIuAECwAEB&sclient=psy-ab&ved=0ahUKEwiWhr2t9ZftAhVTQzABHcucDicQ4dUDCA0&uact=5" class="blue_hyper_link" target="_blank">Google</a> (4.4*) and <a href="https://bestcompany.com/tax-relief/company/alleviate-tax" class="blue_hyper_link" target="_blank">Best Company</a> (4.9*).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="getknow-box">
                                    <div class="guarant dark_light text_align_center">
                                        <i><a href="javascript:void(0)"><img src="{{ asset('assets/images/gur_icon6.png') }}" alt="#"/></a></i>
                                        <h3>Our Results</h3>
                                        <p>Alleviate Tax helps clients save tens of millions in tax debt every year. Let us help you too. We helped one of our clients save 98% on his back owed taxes! We remove garnishments and levies daily!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end getknow -->
        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="rather text-center">
                            <h3>You can call us <a href="javascript:void(0)">888-859-8291</a><br> <span>Now if you’d rather talk to our team</span></h3>
                            <p>If you’d rather text us, text “TAXHELP” to 12345</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span><a href="#" class="back-top-to" style="">Get Help Now</a></span>
                    </div>
                </div>
            </div>
            <div class="copyright text_align_center ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <div class="reser">
                                <p>Copyright © 2020, <a href="javascript:void(0)"> Alleviatetax.com</a> All Rights Reserved.</p>
                                <p>Design & Development By<a href="javascript:void(0) "> MIND DIGITAL</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- Javascript files-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/custom_second.js') }}"></script>
    </body>
</html>