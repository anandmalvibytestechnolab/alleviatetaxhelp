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
    <div class='progre_s' style='text-align:left'>
        <span style='margin-left:17%'>20%</span>
        <div class="progress" id='progress_tab'>
            <div class="progress-bar_new" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
        </div>
    </div>
    <!---div class="progress">

        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
<p id='progress_show'>20%</p>
    </div-----> <br> <!-- fieldsets -->

    <fieldset id="first_slide" class='field_set'>
        <div class="form-card">
            <div class="row">
                <div class="col-12 steps-outer">
                    <h3 class="steps">Step 1:</h3>
                    <h3 class="fs-title">Which of the following caused your tax debt?</h3>
                    <span class="apply">( select all that apply )</span>
                </div>
            </div>
            <div class="box">
                <div class="row">
                    <label class="chkbox col-sm-4">Business Tax Issues
                        <input type="checkbox" name='current_sit' value="Business Tax Issues">
                        <span class="checkmark"></span>
                    </label>
                    <label class="chkbox col-sm-4">Owe More Than Expected
                        <input type="checkbox" name='current_sit' value="Owe More Than Expected">
                        <span class="checkmark"></span>
                    </label>
                    <label class="chkbox col-sm-4">Divorce
                        <input type="checkbox" name='current_sit' value="Divorce">
                        <span class="checkmark"></span>
                    </label>
                    <label class="chkbox col-sm-4">Unfiled Taxes
                        <input type="checkbox" name='current_sit' value="Unfiled Taxes">
                        <span class="checkmark"></span>
                    </label>
                    <label class="chkbox col-sm-4">Self-Employed
                        <input type="checkbox" name='current_sit' value="self Employed">
                        <span class="checkmark"></span>
                    </label>
                    <label class="chkbox col-sm-4">
                        <input type="checkbox" name='current_sit' value='Others' id="other">
                        <span class="checkmark"></span>
                        <input type="text" name="other_current_situation" id='others' placeholder="Others"/>
                    </label>
                </div>
            </div>
        </div>
        <input type="button" id='btn_first' name="next" class="next_s action-button" data-id="40" data-value='second_slide' data-last='first_slide' value="Next"/>
    </fieldset>
    <fieldset id='second_slide' class='field_set'>
        <div class="form-card">
            <div class="row">

                <div class="col-12 steps-outer">
                    <h3 class="steps">Step 2:</h3>

                    <h3 class="fs-title">How Much In Unpaid Taxes Do You Owe?</h3>

                </div>
            </div>

            <p class="price-picker">$10,000 - $19,999</p>


            <input type="hidden" name='tax_debt' id="price-picker_s" value="10000">
            <div class="range-slider">
                <input type="range" class="custom-range" min="0" max="5" id="customRange2" value="2">
                <!-------div id="slider"></div>
                <input type="hidden" class="taxval"------>
                <div class="range-value">
                    <span class="left-val"><i class="fa fa-long-arrow-down" aria-hidden="true"></i> $10,000</span>
                    <span class="right-val">$100,000 <i class="fa fa-long-arrow-up" aria-hidden="true"></i></span>
                </div>
            </div>


        </div>
        <input type="button" id='btn' name="next" class="next_s action-button" data-id="60" data-value='third_slide' data-last='second_slide' value="Next"/>
    </fieldset>
    <fieldset id='third_slide' class='field_set'>
        <div class="form-card">
            <div class="row">

                <div class="col-12 steps-outer">
                    <h3 class="steps">Step 3:</h3>

                    <h3 class="fs-title">Are you enrolled in any IRS debt forgiveness program?</h3>

                </div>
            </div>
            <div class="box2">
                <div class="row">
                    <label class="chkbox col-sm-2">Yes
                        <input type="checkbox" name='enrolled_irs' value='Yes' id="trda" onclick="document.getElementById('trdb').checked = false;">
                        <span class="checkmark"></span>
                    </label>
                    <label class="chkbox col-sm-2">No
                        <input type="checkbox" name='enrolled_irs' value='No' id="trdb" onclick="document.getElementById('trda').checked = false;">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
        <input type="button" id='btn' name="next" class="next_s action-button" data-id="80" data-value='forth_slide' data-last='third_slide' value="Submit"/>
    </fieldset>
    <fieldset id='forth_slide' class='field_set'>
        <div class="form-card">
            <div class="row">

                <div class="col-12 steps-outer">
                    <h3 class="steps">Step 4:</h3>

                    <h3 class="fs-title">Is your current monthly income more than $1,000?</h3>

                </div>
            </div>
            <div class="box2">
                <div class="row">
                    <label class="chkbox col-sm-2">Yes
                        <input type="checkbox" name="Employment_status" value="yes" id="frta" onclick="document.getElementById('frtb').checked = false;">
                        <span class="checkmark"></span>
                    </label>
                    <label class="chkbox col-sm-2">No
                        <input type="checkbox" name="Employment_status" value="No" id="frtb" onclick="document.getElementById('frta').checked = false;">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
        <input type="button" id='btn' name="next" class="next_s action-button" data-id="100" data-value='fifth_slide' data-last='forth_slide' value="Submit"/>
    </fieldset>
    <fieldset id='fifth_slide' class='field_set'>
        <div class="form-card">
            <div class="row">

                <div class="col-12 steps-outer">
                    <h3 class="steps">Step 5:</h3>

                    <h4 class="fs-title">Please enter your <strong style="color:#00ae17;">name</strong>, <strong style="color:#00ae17;">email address</strong>,
                        <strong style="color:#00ae17;">phone number</strong>, <strong style="color:#00ae17;">state</strong> and
                        <strong style="color:#00ae17;">zip code</strong> so we may contact you to discuss your tax debt relief options:</h4>

                </div>
            </div>
            <div class="box">
                <div class="row">
                    <label class="col-sm-6"><input type="text" name="first_name" id='first_name' placeholder="First Name*"/></label>

                    <label class="col-sm-6"><input type="text" name="last_name" id='last_name' placeholder="Last Name*"/></label>

                    <label class="col-sm-6"><input type="email" name="email_address" id='email' placeholder="Email Address*"/></label>

                    <label class="col-sm-6"><input type="tel" name="primary_phone" onKeyup="addDashes(this)" id='phone' placeholder="Phone Number*"/></label>

                    <label class="col-sm-6">


                        <select name="state" id="states">
                            <option value="">Select State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </label>


                    <label class="col-sm-6"><input type="text" name="zip_code" id='Zip' placeholder="Zip Code*"/></label>

                    <label class="col-sm-12 secure"> <i class="fa fa-lock"></i> Your email is safe and secure</label>
                    <label class="chkbox col-sm-12 offer"><p>Please send special offers from <span>BENEFIT TAX SOLUTIONS</span></p>
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>

        </div>
        <input type="button" id='btn' name="next" class="next_s action-button" data-id="" data-value='sixth_slide' data-last='fifth_slide' value="Submit"/>
        <p id='messag_validate'></p>
        <p class="terms">TERMS: By clicking the "SUBMIT" button, you agree to BENEFIT TAX SOLUTION's Terms and Conditions and Privacy Policy and agree to have your information shared with BENEFIT TAX and for them or their authorized 3rd party to contact you (including through automated means; e.g., autodialing, text and pre-recorded messaging) with offers and surveys via telephone, mobile device (including SMS and MMS) and/or email, even if your telephone number is currently listed on any state, federal or corporate Do Not Call list. Message and data rates apply. You understand that consent is not a condition of purchase.</p>
    </fieldset>


    <fieldset id='sixth_slide' class='field_set'>
        <div class="form-card success">
            <h2 class="text-center"><strong>Loading...</strong></h2> <br>
            <br><br>

        </div>
    </fieldset>
    <p id='message_validate'></p>

</form>