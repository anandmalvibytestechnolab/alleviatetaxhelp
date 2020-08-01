@extends('frontend._layout_no_wrap')

@section('main')
    <main id="main">
        <section class="breadcrumb-outer">
            <div class="newbread">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <section class="for-california">
            <div class="container">
                <div class="california-inner">
                    <div class="california-info-form-text">
                        <h3 align="center">FOR CALIFORNIA RESIDENTS ONLY </h3>
                        <div align="center"><strong>"Do Not Sell My Information" Request and Assertion of Privacy Rights</strong></div>
                        <p>If you are a California resident, you have rights under the California Consumer Privacy Act ("CCPA"), including the right to opt-out of us selling certain of your personal information by filing a CCPA "Do Not Sell My Information Request," and the rights to request what information is being collected about you, the sources of the information, what information is sold and to whom, the right to have your data deleted and the right to have a copy of the data about you. More information about what we collect and how we share your personal information is available in our
                            <u>
                                <a href="/privacy-policy.html" target="_blank">California Privacy Policy </a>
                            </u>.
                            There are other laws which may impact our ability to complete any requests under CCPA. If you would like to submit a request under CCPA, please complete and submit the form below:
                        </p>
                    </div>
                    <form id="msformx" action="{!! route('FE_CCPA_LEAD_STORE') !!}" method="post" data-parsley-focus="first">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <label for="requestor">The Requestor is a:</label><br>
                                <input name="requestor" id="requestor" type="radio" value="California Resident" data-parsley-required data-parsley-required-message="Please select the type of requestor"> California Resident<br>
                                <input name="requestor" id="requestor" type="radio" value="Duly authorized third-party representative of a California Resident" data-parsley-required data-parsley-reqiured-message="Please select the type of requestor"> Duly authorized third-party representative of a California Resident<br>
                                <label for="requestor" generated="true" class="error"></label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <label for="city">I would like to submit the following request(s):</label><br>
                                <input type="checkbox" class="request" name="requestoptions[]" value="What data is collected about me"> What data is collected about me <br>
                                <input type="checkbox" class="request" name="requestoptions[]" value="Who has received my data"> Who has received my data<br>
                                <input type="checkbox" class="request" name="requestoptions[]" value="Provide a portable version of my data"> Provide a portable version of my data<br>
                                <input type="checkbox" class="request" name="requestoptions[]" value="Delete my data"> Delete my data<br>
                                <input type="checkbox" class="request" name="requestoptions[]" value="Do not sell my data"> Do not sell my data<br>
                                <label for="request" generated="true" class="error"></label>
                            </div>

                        </div>

                        <div class="ccpa-form-inner">
                            <div class="row">
                                <div class="form-group col-lg-6 col-sm-6 col-xs-6">
                                    <label for="firstname">First Name</label>
                                    <input name="first_name" type="text" class="form-control" id="first_name" data-parsley-required>
                                </div>
                                <div class="form-group col-lg-6 col-sm-6 col-xs-6">
                                    <label for="lastname">Last Name</label>
                                    <input name="last_name" type="text" class="form-control" id="last_name" data-parsley-required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                    <label for="street">Street Number and Street Name</label>
                                    <input name="street" type="text" class="form-control" id="street">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-sm-6 col-xs-12">
                                    <label for="apt">Apartment, Floor, Suite Number</label>
                                    <input type="text" class="form-control" id="apt" name="apt">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                    <label for="city">City</label>
                                    <input name="city" type="text" class="form-control" id="city">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-sm-6 col-xs-6">
                                    <label for="state">State</label>
                                    <select name="state" class="form-control" id="state">

                                        <option value="">Select State</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District of Columbia</option>
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
                                </div>
                                <div class="form-group col-lg-6 col-sm-6 col-xs-6">
                                    <label for="zip">Zip Code</label>
                                    <input name="zip_code" type="number" class="form-control" id="zip_code" min="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                    <label for="email">Email Address </label>
                                    <input name="email_address" type="text" class="form-control" id="email_address" data-parsley-required data-parsley-email data-parsley-email-message="Please enter a valid email address">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-sm-6 col-xs-12">
                                    <label for="phoneno">Phone number:</label>
                                    <input name="primary_phone" type="tel" class="form-control" id="primary_phone">
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                    <!-- <input type="submit" value="Submit" name="submit" class="submit_btn" id="ccpa_submit"> -->
                                    <button type="submit" class="next_s action" data-id="40" data-value="second_slide" data-last="first_slide">
                                        Submit
                                    </button>
                                    {{--<input type="submit" id="btn_first" name="submit" class="next_s action-button" data-id="40" data-value="second_slide" data-last="first_slide" value="Submit">--}}
                                </div>
                            </div>
                        </div>

                    </form>


                    <div class="california-info-form-text">
                        <p>More information about what we collect and how we share your personal information is available in our
                            <u><a href="/privacy-policy.html" target="_blank">Privacy Policy</a></u>.<br>
                        </p>
                        <p>
                            <span><b>Certification</b></span><br>By submitting this form, you certify that you are a California Resident or are duly authorized to act as an agent for a California Resident, that the information provided above is correct.
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->
    </main>
@endsection

@section('javascript')
    <script src="{!! get_javascript_file('ccpa') !!}"></script>
@endsection