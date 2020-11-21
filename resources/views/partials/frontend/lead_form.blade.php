<form id="msform" action="{!! route('FE_LEAD_STORE') !!}" method="post">
@csrf
<!-- <input type="hidden" name="ckm_offer_id" value="4"> -->
    <input type="hidden" name="current_situation" id="current_situation" value="">
    {{--<input type="hidden" name="page" id="page" value="http://benefittaxrelief.com/">--}}
    {{--<input type="hidden" name="affid" value="" id="affid" />--}}
    {{--<input type="hidden" name="ckm_offer_id" value="4" id="ckm_offer_id" />--}}
    {{--<input type="hidden" name="oc" value="" id="oc" />--}}
    {{--<input type="hidden" name="ckm_request_id" value="" id="ckm_request_id" />--}}
    {{--<input type="hidden" name="reqid" value="" id="reqid" />--}}
    {{--<input type="hidden" name="s1" value="" id="s1" />--}}
    {{--<input type="hidden" name="s2" value="" id="s2" />--}}
    {{--<input type="hidden" name="s3" value="" id="s3" />--}}
    {{--<input type="hidden" name="subid" value="" id="subid" />--}}
    {{--<input type="hidden" name="neustar" value="" id="neustar" />--}}
    {{--<input type="hidden" name="referrer" value="" id="referrer" />--}}
    <div class='progre_s mb-0 mb-md-5' style='text-align:left; display: none'>

        <span style='margin-left:17%'>20%</span>
        <div class="progress" id='progress_tab'>
            <div class="progress-bar_new" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
        </div>
    </div>
    <!---div class="progress">

        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
<p id='progress_show'>20%</p>
    </div-----> <!-- fieldsets -->

    <fieldset id="first_slide" class='field_set'>
        <div class="form-card">
            <div class="row">
                <div class="col-12 steps-outer">
                    {{--                    <h3 class="steps">Step 1:</h3>--}}
                    {{--                    <h3 class="fs-title">Which of the following caused your tax debt?</h3>--}}
                    <h3 class="fs-title">Was one of the following part of what caused your tax debt?</h3>
                    <span class="apply">( select all that apply )</span>
                </div>
            </div>
            {{--            <div class="box">--}}
            {{--                <div class="row">--}}
            {{--                    <label class="chkbox col-sm-4">Business Tax Issues--}}
            {{--                        <input type="checkbox" name='current_sit' value="Business Tax Issues">--}}
            {{--                        <span class="checkmark"></span>--}}
            {{--                    </label>--}}
            {{--                    <label class="chkbox col-sm-4">Owe More Than Expected--}}
            {{--                        <input type="checkbox" name='current_sit' value="Owe More Than Expected">--}}
            {{--                        <span class="checkmark"></span>--}}
            {{--                    </label>--}}
            {{--                    <label class="chkbox col-sm-4">Divorce--}}
            {{--                        <input type="checkbox" name='current_sit' value="Divorce">--}}
            {{--                        <span class="checkmark"></span>--}}
            {{--                    </label>--}}
            {{--                    <label class="chkbox col-sm-4">Unfiled Taxes--}}
            {{--                        <input type="checkbox" name='current_sit' value="Unfiled Taxes">--}}
            {{--                        <span class="checkmark"></span>--}}
            {{--                    </label>--}}
            {{--                    <label class="chkbox col-sm-4">Self-Employed--}}
            {{--                        <input type="checkbox" name='current_sit' value="self Employed">--}}
            {{--                        <span class="checkmark"></span>--}}
            {{--                    </label>--}}
            {{--                    <label class="chkbox col-sm-4">--}}
            {{--                        <input type="checkbox" name='current_sit' value='Others' id="other">--}}
            {{--                        <span class="checkmark"></span>--}}
            {{--                        <input type="text" name="other_current_situation" id='others' placeholder="Others"/>--}}
            {{--                    </label>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="box">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label py-3 py-md-5">Unfiled Taxes
                            <input type="checkbox" name='current_sit' value="Unfiled Taxes" class="d-none">
                        </label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label py-3 py-md-5">Owe More Than Expected
                            <input type="checkbox" name='current_sit' value="Owe More Than Expected" class="d-none">
                        </label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label py-3 py-md-5">Business Tax Issues
                            <input type="checkbox" name='current_sit' value="Business Tax Issues" class="d-none">
                        </label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label py-3 py-md-5">Self-Employed
                            <input type="checkbox" name='current_sit' value="self Employed" class="d-none">
                        </label>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label py-3 py-md-5">Others
                            <input type="checkbox" name='current_sit' value="self Employed" class="d-none" data-display-current-situation-text-field>
                        </label>
                        <input type="checkbox" name='current_sit' value='Others' id="other" class="d-none">
                        <input type="text" name="other_current_situation" id='others' placeholder="Please describe" class="d-none"/>
                    </div>
                </div>
            </div>
        </div>
        <input type="button" id='btn_first' name="next" class="next_s action-button" data-id="25" data-value='second_slide' data-last='first_slide' value="Next"/>
    </fieldset>
    <fieldset id='second_slide' class='field_set'>
        <div class="form-card">
            <div class="row">

                <div class="col-12 steps-outer">
                    {{--                    <h3 class="steps">Step 2:</h3>--}}

                    {{--                    <h3 class="fs-title">How Much In Unpaid Taxes Do You Owe?</h3>--}}
                    <h3 class="fs-title">Approximately, how much does the IRS claim you owe?</h3>

                </div>
            </div>

            <p class="price-picker">$10,000</p>


            <input type="hidden" name='tax_debt' id="price-picker_s" value="10000">
            <div class="range-slider">
                <input type="range" class="custom-range" min="0" max="100000" step="500" id="customRange2" value="10000">
                <!-------div id="slider"></div>
                <input type="hidden" class="taxval"------>
                <div class="range-value">
                    <span class="left-val">$0</span>
                    <span class="right-val">$100,000</i></span>
                </div>
            </div>


        </div>
        <input type="button" id='btn' name="next" class="next_s action-button" data-id="50" data-value='third_slide' data-last='second_slide' value="Next"/>
    </fieldset>
    <fieldset id='third_slide' class='field_set'>
        <div class="form-card">
            <div class="row">

                <div class="col-12 steps-outer">
                    {{--                    <h3 class="steps">Step 3:</h3>--}}
                    <h3 class="fs-title">Are you enrolled in any IRS debt forgiveness program?</h3>
                </div>
            </div>
            <div class="box2">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-6 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label-radio py-3 py-md-2">Yes
                            <input type="radio" name='enrolled_irs' class="d-none" value='Yes' id="trda">
                        </label>
                    </div>
                    <div class="col-12 col-md-6 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label-radio py-3 py-md-2">No
                            <input type="radio" name='enrolled_irs' class="d-none" value='No' id="trdb">
                        </label>
                    </div>
                    {{--                    <label class="chkbox col-sm-2">Yes--}}
                    {{--                        <input type="checkbox" name='enrolled_irs' value='Yes' id="trda" onclick="document.getElementById('trdb').checked = false;">--}}
                    {{--                        <span class="checkmark"></span>--}}
                    {{--                    </label>--}}
                    {{--                    <label class="chkbox col-sm-2">No--}}
                    {{--                        <input type="checkbox" name='enrolled_irs' value='No' id="trdb" onclick="document.getElementById('trda').checked = false;">--}}
                    {{--                        <span class="checkmark"></span>--}}
                    {{--                    </label>--}}
                </div>
            </div>
        </div>
        <input type="button" id='btn' name="next" class="next_s action-button" data-id="75" data-value='forth_slide' data-last='third_slide' value="Next"/>
    </fieldset>
    {{--    <fieldset id='forth_slide' class='field_set'>--}}
    {{--        <div class="form-card">--}}
    {{--            <div class="row">--}}

    {{--                <div class="col-12 steps-outer">--}}
    {{--                    <h3 class="steps">Step 4:</h3>--}}

    {{--                    <h3 class="fs-title">Is your current monthly income more than $1,000?</h3>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="box2">--}}
    {{--                <div class="row">--}}
    {{--                    <label class="chkbox col-sm-2">Yes--}}
    {{--                        <input type="checkbox" name="current_monthly_income" value="Over 1000" id="frta" onclick="document.getElementById('frtb').checked = false;">--}}
    {{--                        <span class="checkmark"></span>--}}
    {{--                    </label>--}}
    {{--                    <label class="chkbox col-sm-2">No--}}
    {{--                        <input type="checkbox" name="current_monthly_income" value="Under 1000" id="frtb" onclick="document.getElementById('frta').checked = false;">--}}
    {{--                        <span class="checkmark"></span>--}}
    {{--                    </label>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <input type="button" id='btn' name="next" class="next_s action-button" data-id="100" data-value='fifth_slide' data-last='forth_slide' value="Submit"/>--}}
    {{--    </fieldset>--}}
    <fieldset id='forth_slide' class='field_set'>
        <div class="form-card">
            <div class="row">

                <div class="col-12 steps-outer">
                    {{--                    <h3 class="steps">Step 5:</h3>--}}

                    <h4 class="fs-title">Please enter your contact information to get started on your <strong class="text-brand-primary">free consultation</strong>.</h4>

                </div>
            </div>
            <div class="box">
                <div class="row">
                    <label class="col-sm-6"><input type="text" name="first_name" id='first_name' placeholder="First Name*"/></label>

                    <label class="col-sm-6"><input type="text" name="last_name" id='last_name' placeholder="Last Name*"/></label>

                    <label class="col-sm-6"><input type="email" name="email_address" id='email' placeholder="Email Address*"/></label>

                    <label class="col-sm-6"><input type="tel" name="primary_phone" onKeyup="addDashes(this)" id='phone' placeholder="Phone Number*"/></label>

                    <label class="col-sm-6">
                        {!! Form::select('states', config('states'), $user_state, ['id' => 'states']) !!}
                    </label>


                    {{--                    <label class="col-sm-6"><input type="text" name="zip_code" id='Zip' placeholder="Zip Code*"/></label>--}}

                    <label class="col-sm-12 secure"> <i class="fa fa-lock"></i> Your email is safe and secure</label>
                    <label class="chkbox col-sm-12 offer"><p>Please send special offers from <span class="text-uppercase">Alleviate Tax</span></p>
                        <input type="checkbox" checked="checked" name="wants_special_offers">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>

        </div>
        <input type="button" id='btn' name="next" class="next_s action-button" data-id="" data-value='sixth_slide' data-last='fifth_slide' value="Submit"/>
        <p id='messag_validate'></p>
        <p class="terms">TERMS: By clicking the "SUBMIT" button, you agree to <span class="text-uppercase">Alleviate Tax</span>'s Terms and Conditions and Privacy Policy
            and agree to have your information shared with ALLEVIATE TAX and for them or their authorized 3rd party to contact you (including through automated means;
            e.g.,
            autodialing, text and pre-recorded messaging) with offers and surveys via telephone, mobile device (including SMS and MMS) and/or email, even if your telephone
            number is currently listed on any state, federal or corporate Do Not Call list. Message and data rates apply. You understand that consent is not a condition of
            purchase.</p>
    </fieldset>


    <fieldset id='fifth_slide' class='field_set'>
        <div class="form-card success">
            <h2 class="text-center"><strong>Loading...</strong></h2> <br>
            <br><br>

        </div>
    </fieldset>
    <p id='message_validate'></p>

</form>
