@extends('frontend._layout_with_wrap')

@section('hero_content')
    <div class="col-lg-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <div data-aos="fade-up" data-aos-delay="800" class="aos-init aos-animate">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-12 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <form id="msform" action="#" method="post">
                                <div class="progre_s" style="text-align:left">
                                    <span style="margin-left:calc(100% - 40px);">100%</span>
                                    <div class="progress" id="progress_tab">
                                        <div class="progress-bar_new" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <fieldset id="first_slide" class="field_set">
                                    <div class="form-card success">
                                        <h2 class="text-center"><strong>Thank you for submitting your information to us.</strong></h2>
                                        <br>
                                        <div class="row justify-content-center">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-12 text-center">
                                                <h5 class="purple-text text-center">Please keep your phone nearby, an experienced tax debt specialist from Benefit Tax Solutions will be reaching out to you shortly, or once business hours resume.</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <p id="message_validate"></p>
                                <input type="hidden" name="debt" value="10000"><input type="hidden" name="leadid" value="5BC161D0"><input type="hidden" name="affid" value="#affid#"><input type="hidden" name="subid" value="#subid#"><input type="hidden" name="s1" value="#s1#"><input type="hidden" name="LPUrl" value="https%3A%2F%2Fwww.benefittaxrelief.com%2Fthankyou.php%3Fdebt%3D10000%26leadid%3D5BC161D0%26affid%3D%23affid%23%26subid%3D%23subid%23%26s1%3D%23s1%23"><input type="hidden" name="ClientGuid" value="00E75083-7003-4C4A-BCE5-91B21D0AEA7D"><input type="hidden" name="VendorGuid" value="01ef1cab-f62a-4067-92c3-cd6edece8bd2"><input type="hidden" name="LocationCode" value="CRSS2373-110"><input type="hidden" name="SubmitType" value="TALK"><input type="hidden" name="aff_sub" value="+18449950574">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{--Thank you for submitting your information to us.--}}

    {{--Thank you for submitting your information to us.' contains "Please keep your phone nearby, an experienced tax debt specialist from Benefit Tax Solutions will be reaching out to you shortly, or once business hours resume.--}}
@endsection