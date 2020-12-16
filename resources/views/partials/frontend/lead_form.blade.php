<form id="msform" action="{!! route('FE_LEAD_STORE', $_GET) !!}" method="post">
@csrf
    <div class="text-primary spinner-border" id="final_form_loader" style="width: 3rem; height: 3rem; display: none" role="status">
        <span class="sr-only">Loading...</span>
    </div>
<!-- <input type="hidden" name="ckm_offer_id" value="4"> -->
    <input type="hidden" name="current_situation" id="current_situation" value="">
    <input type="hidden" id="ref_url" name="ref_url" value="<?php echo request()->headers->get('referer'); ?>"/>
    {{--<input type="hidden" name="page_url" value="<?= $_SERVER['REQUEST_URI'] ?>" />--}}
    <input type="hidden" name="query_parameters" value="{{ request()->server('QUERY_STRING') }}" />
    <input type="hidden" name="ip_address" value="{{ request()->ip() }}" />
    <input type="hidden" name="user_agent" value="{{ request()->server('HTTP_USER_AGENT') }}" />
    <input type="hidden" name="page_url" value="{{ request()->getPathInfo() }}" />
    {{--<input type="hidden" id="UrlRefer5" name="UrlRefer5" value="<?php echo URL::previous(); ?>"/>--}}
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
    <div class='progre_s mb-0 mb-md-5 custom_progress' style='text-align:left; display: none;'>

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
                <div class="row btn_bgw_bb">
                    <div class="col-12 col-md-6 col-lg-4 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label py-3 py-md-5">Unfiled Taxes
                            <input type="checkbox" name='current_sit[]' value="unf" class="d-none">
                        </label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label py-3 py-md-5">Owe More Than Expected
                            <input type="checkbox" name='current_sit[]' value="owe" class="d-none">
                        </label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label py-3 py-md-5">Business Tax Issues
                            <input type="checkbox" name='current_sit[]' value="biz" class="d-none">
                        </label>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label py-3 py-md-5">Self-Employed
                            <input type="checkbox" name='current_sit[]' value="1099" class="d-none">
                        </label>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label py-3 py-md-5">Others
                            <input type="checkbox" name='current_sit[]' value="oth" class="d-none" data-display-current-situation-text-field>
                        </label>
                        <!--<input type="checkbox" name='current_sit[]' value='Others' id="other" class="d-none">-->
                        <input type="text" name="other_current_situation" id='others' placeholder="Please describe" class="d-none"/>
                    </div>
                </div>
            </div>
        </div>
        <input type="button" id='btn_first' name="next" class="next_s action-button padd-big" data-id="25" data-value='second_slide' data-last='first_slide' value=">> Next <<"/>
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
                <div class="range-value">
                    <span class="left-val">$0</span>
                    <span class="right-val">$100,000</i></span>
                </div>
            </div>
            <!--<div class="range-slider">
                <div id="slider" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 7.53769%;"></span></div>
                <input type="hidden" class="taxval" class="custom-range">
                <div class="range-value">
                    <span class="left-val">$0</span>
                    <span class="right-val">>$100,000</span>
                </div>
            </div>-->

        </div>
        <input type="button" id='btn' name="next" class="next_s action-button padd-big" data-id="50" data-value='third_slide' data-last='second_slide' value=">> Next <<"/>
    </fieldset>
    <fieldset id='third_slide' class='field_set'>
        <div class="form-card">
            <div class="row">

                <div class="col-12 steps-outer">
                    {{--                    <h3 class="steps">Step 3:</h3>--}}
                    <h3 class="fs-title">Are you already enrolled in a payment program with the IRS?</h3>
                </div>
            </div>
            <div class="box2">
                <div class="row d-flex justify-content-center">
                    <div class="col-6 col-md-6 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label-radio py-3 py-md-2 d_ju_cen">Yes
                            <input type="radio" name='enrolled_irs' class="d-none" value='Yes' id="trda">
                        </label>
                    </div>
                    <div class="col-6 col-md-6 p-lg-3">
                        <label class="btn btn-secondary d-flex button-label-radio py-3 py-md-2 d_ju_cen">No
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
        <input type="button" id='btn' name="next" class="next_s action-button padd-big" data-id="75" data-value='forth_slide' data-last='third_slide' value=">> Next <<"/>
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
                        {!! Form::select('state', config('states'), $user_state, ['id' => 'states']) !!}
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
        <input type="button" id='btn' name="next" class="next_s action-button padd-big" data-id="" data-value='sixth_slide' data-last='fifth_slide' value=">> Submit <<"/>
        <p id='messag_validate'></p>
        <p class="terms">
            TERMS: By clicking 'Submit', I hereby agree to the receipt of future calls or emails on behalf of
            <span class="text-uppercase">Alleviate Tax</span>,
            LLC at the number provided above. I expressly consent and request to receive phone calls,
            autodialer (and/or pre-recorded) calls and text/SMS messages from the company and waive any prior
            No Call registrations for the purposes of these calls. Standard text message rates will apply.
            I also understand that my consent is not a condition of purchase.
        </p>
    </fieldset>


    <fieldset id='fifth_slide' class='field_set'>
        <div class="form-card success">
            <h2 class="text-center"><strong>Loading...</strong></h2> <br>
            <br><br>

        </div>
    </fieldset>
    <p id='message_validate'></p>

</form>
<script type="text/javascript">
  (function() {
      var field = 'xxTrustedFormCertUrl';
      var provideReferrer = false;
      var invertFieldSensitivity = false;
      var tf = document.createElement('script');
      tf.type = 'text/javascript'; tf.async = true;
      tf.src = 'http' + ('https:' == document.location.protocol ? 's' : '') +
        '://api.trustedform.com/trustedform.js?provide_referrer=' + escape(provideReferrer) + '&field=' + escape(field) + '&l='+new Date().getTime()+Math.random() + '&invert_field_sensitivity=' + invertFieldSensitivity;
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(tf, s); }
  )();
</script>
<noscript>
    <img src="http://api.trustedform.com/ns.gif" />
</noscript
