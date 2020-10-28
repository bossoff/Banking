
                    <!-- Middle Panel -->
                    <div class="col-lg-9 profile-area">
                        <h3 class="admin-heading bg-offwhite">
                            <a href="#edit-personal-details" class="btn-link pbtn" data-id="edit-personal-details"><i class="fas fa-edit mr-1"></i>Update</a>
                            <p>Personal Profile</p>
                            <span>Your Personal information</span>
                        </h3>
                        <!-- Edit personal info  -->
                        <div id="edit-personal-details" class="accord bg-offwhite shadow">
                            <div class="content-edit-area">
                                <div class="edit-header">
                                    <h5 class="title">Personal Information</h5>
                                    <button type="button" class="close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="edit-content">
                                    <form id="personaldetails" method="post">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="firstName"><b>First Name</b></label>
                                                    <input type="text" value="<?=$firstname;?>" class="form-control" data-pr-form="firstName" id="firstName" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="fullName"><b>Last Name</b></label>
                                                    <input type="text" value="<?=$lastname;?>" class="form-control" data-pr-form="fullName" id="fullName" placeholder="Full Name" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="birthDate"><b>Date of Birth</b></label>
                                                    <div class="position-relative">
                                                        <input id="birthDate" value="<?=$dob;?>" type="text" class="form-control" required placeholder="Date of Birth">
                                                        <span class="icon-inside">
                                                            <i class="fas fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="emailID">Email ID <span class="text-muted font-weight-500">(Primary)</span></label>
                                                            <input type="text" value="<?=$email;?>" readonly class="form-control" data-pr-form="emailid" id="emailID" required placeholder="Email ID">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="emailID">Email ID <span class="text-muted font-weight-500">(Personal)</span></label>
                                                            <input type="text" value="<?=$email;?>" readonly class="form-control" data-pr-form="emailid" id="emailID" required placeholder="Email ID">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <a class="btn-link float-right mb-3" href="#"><span class="text-3 mr-1"><i class="fas fa-plus-circle"></i></span>Add another email</a> -->
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="mobile-number">Mobile <span class="text-muted font-weight-500">(Primary)</span></label>
                                                            <input type="text" value="<?=$phone;?>" readonly class="form-control" data-pr-form="mobile-number" id="mobile-number" required placeholder="Mobile Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mobile-number">Mobile <span class="text-muted font-weight-500">(Home)</span></label>
                                                            <input type="text" value="<?=$phone;?>" readonly class="form-control" data-pr-form="mobile-number" id="mobile-number" required placeholder="Mobile Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <a class="btn-link float-right mb-3" href="#"><span class="text-3 mr-1"><i class="fas fa-plus-circle"></i></span>Add another Phone</a> -->
                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="content-edit-area">
                                <div class="edit-header">
                                    <h5 class="modal-title">Personal Address</h5>
                                </div>
                                <div class="edit-content">
                                    <form id="personaldetails" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" value="<?=$address;?>" class="form-control" data-pr-form="address" id="address" required placeholder="Address 1">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="city">City</label>
                                                    <input id="city" value="San Ditego" type="text" class="form-control" required placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="input-zone">State</label>
                                                    <select class="custom-select" id="input-zon" name="zone_id">
                                                        <option value=""> --- Please Select ---</option>
                                                        <option value="3613">Alabama</option>
                                                        <option value="3614">Alaska</option>
                                                        <option value="3615">American Samoa</option>
                                                        <option value="3616">Arizona</option>
                                                        <option value="3617">Arkansas</option>
                                                        <option value="3618">Armed Forces Africa</option>
                                                        <option value="3619">Armed Forces Americas</option>
                                                        <option value="3620">Armed Forces Canada</option>
                                                        <option value="3621">Armed Forces Europe</option>
                                                        <option value="3622">Armed Forces Middle East</option>
                                                        <option value="3623">Armed Forces Pacific</option>
                                                        <option selected="selected" value="3624">California</option>
                                                        <option value="3625">Colorado</option>
                                                        <option value="3626">Connecticut</option>
                                                        <option value="3627">Delaware</option>
                                                        <option value="3628">District of Columbia</option>
                                                        <option value="3629">Federated States Of Micronesia</option>
                                                        <option value="3630">Florida</option>
                                                        <option value="3631">Georgia</option>
                                                        <option value="3632">Guam</option>
                                                        <option value="3633">Hawaii</option>
                                                        <option value="3634">Idaho</option>
                                                        <option value="3635">Illinois</option>
                                                        <option value="3636">Indiana</option>
                                                        <option value="3637">Iowa</option>
                                                        <option value="3638">Kansas</option>
                                                        <option value="3639">Kentucky</option>
                                                        <option value="3640">Louisiana</option>
                                                        <option value="3641">Maine</option>
                                                        <option value="3642">Marshall Islands</option>
                                                        <option value="3643">Maryland</option>
                                                        <option value="3644">Massachusetts</option>
                                                        <option value="3645">Michigan</option>
                                                        <option value="3646">Minnesota</option>
                                                        <option value="3647">Mississippi</option>
                                                        <option value="3648">Missouri</option>
                                                        <option value="3649">Montana</option>
                                                        <option value="3650">Nebraska</option>
                                                        <option value="3651">Nevada</option>
                                                        <option value="3652">New Hampshire</option>
                                                        <option value="3653">New Jersey</option>
                                                        <option value="3654">New Mexico</option>
                                                        <option value="3655">New York</option>
                                                        <option value="3656">North Carolina</option>
                                                        <option value="3657">North Dakota</option>
                                                        <option value="3658">Northern Mariana Islands</option>
                                                        <option value="3659">Ohio</option>
                                                        <option value="3660">Oklahoma</option>
                                                        <option value="3661">Oregon</option>
                                                        <option value="3662">Palau</option>
                                                        <option value="3663">Pennsylvania</option>
                                                        <option value="3664">Puerto Rico</option>
                                                        <option value="3665">Rhode Island</option>
                                                        <option value="3666">South Carolina</option>
                                                        <option value="3667">South Dakota</option>
                                                        <option value="3668">Tennessee</option>
                                                        <option value="3669">Texas</option>
                                                        <option value="3670">Utah</option>
                                                        <option value="3671">Vermont</option>
                                                        <option value="3672">Virgin Islands</option>
                                                        <option value="3673">Virginia</option>
                                                        <option value="3674">Washington</option>
                                                        <option value="3675">West Virginia</option>
                                                        <option value="3676">Wisconsin</option>
                                                        <option value="3677">Wyoming</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="zipCode">Zip Code</label>
                                                    <input id="zipCode" value="22434" type="text" class="form-control" required placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputCountry">Country</label>
                                                    <select class="custom-select" id="inputCountry" name="country_id">
                                                        <option value=""> --- Please Select ---</option>
                                                        <option value="244">Aaland Islands</option>
                                                        <option value="1">Afghanistan</option>
                                                        <option value="2">Albania</option>
                                                        <option value="3">Algeria</option>
                                                        <option value="4">American Samoa</option>
                                                        <option value="5">Andorra</option>
                                                        <option value="6">Angola</option>
                                                        <option value="7">Anguilla</option>
                                                        <option value="8">Antarctica</option>
                                                        <option value="9">Antigua and Barbuda</option>
                                                        <option value="10">Argentina</option>
                                                        <option value="11">Armenia</option>
                                                        <option value="12">Aruba</option>
                                                        <option value="252">Ascension Island (British)</option>
                                                        <option value="13">Australia</option>
                                                        <option value="14">Austria</option>
                                                        <option value="15">Azerbaijan</option>
                                                        <option value="16">Bahamas</option>
                                                        <option value="17">Bahrain</option>
                                                        <option value="18">Bangladesh</option>
                                                        <option value="19">Barbados</option>
                                                        <option value="20">Belarus</option>
                                                        <option value="21">Belgium</option>
                                                        <option value="22">Belize</option>
                                                        <option value="23">Benin</option>
                                                        <option value="24">Bermuda</option>
                                                        <option value="25">Bhutan</option>
                                                        <option value="26">Bolivia</option>
                                                        <option value="245">Bonaire, Sint Eustatius and Saba
                                                        </option>
                                                        <option value="27">Bosnia and Herzegovina</option>
                                                        <option value="28">Botswana</option>
                                                        <option value="29">Bouvet Island</option>
                                                        <option value="30">Brazil</option>
                                                        <option value="31">British Indian Ocean Territory</option>
                                                        <option value="32">Brunei Darussalam</option>
                                                        <option value="33">Bulgaria</option>
                                                        <option value="34">Burkina Faso</option>
                                                        <option value="35">Burundi</option>
                                                        <option value="36">Cambodia</option>
                                                        <option value="37">Cameroon</option>
                                                        <option value="38">Canada</option>
                                                        <option value="251">Canary Islands</option>
                                                        <option value="39">Cape Verde</option>
                                                        <option value="40">Cayman Islands</option>
                                                        <option value="41">Central African Republic</option>
                                                        <option value="42">Chad</option>
                                                        <option value="43">Chile</option>
                                                        <option value="44">China</option>
                                                        <option value="45">Christmas Island</option>
                                                        <option value="46">Cocos (Keeling) Islands</option>
                                                        <option value="47">Colombia</option>
                                                        <option value="48">Comoros</option>
                                                        <option value="49">Congo</option>
                                                        <option value="50">Cook Islands</option>
                                                        <option value="51">Costa Rica</option>
                                                        <option value="52">Cote D'Ivoire</option>
                                                        <option value="53">Croatia</option>
                                                        <option value="54">Cuba</option>
                                                        <option value="246">Curacao</option>
                                                        <option value="55">Cyprus</option>
                                                        <option value="56">Czech Republic</option>
                                                        <option value="237">Democratic Republic of Congo</option>
                                                        <option value="57">Denmark</option>
                                                        <option value="58">Djibouti</option>
                                                        <option value="59">Dominica</option>
                                                        <option value="60">Dominican Republic</option>
                                                        <option value="61">East Timor</option>
                                                        <option value="62">Ecuador</option>
                                                        <option value="63">Egypt</option>
                                                        <option value="64">El Salvador</option>
                                                        <option value="65">Equatorial Guinea</option>
                                                        <option value="66">Eritrea</option>
                                                        <option value="67">Estonia</option>
                                                        <option value="68">Ethiopia</option>
                                                        <option value="69">Falkland Islands (Malvinas)</option>
                                                        <option value="70">Faroe Islands</option>
                                                        <option value="71">Fiji</option>
                                                        <option value="72">Finland</option>
                                                        <option value="74">France, Metropolitan</option>
                                                        <option value="75">French Guiana</option>
                                                        <option value="76">French Polynesia</option>
                                                        <option value="77">French Southern Territories</option>
                                                        <option value="126">FYROM</option>
                                                        <option value="78">Gabon</option>
                                                        <option value="79">Gambia</option>
                                                        <option value="80">Georgia</option>
                                                        <option value="81">Germany</option>
                                                        <option value="82">Ghana</option>
                                                        <option value="83">Gibraltar</option>
                                                        <option value="84">Greece</option>
                                                        <option value="85">Greenland</option>
                                                        <option value="86">Grenada</option>
                                                        <option value="87">Guadeloupe</option>
                                                        <option value="88">Guam</option>
                                                        <option value="89">Guatemala</option>
                                                        <option value="256">Guernsey</option>
                                                        <option value="90">Guinea</option>
                                                        <option value="91">Guinea-Bissau</option>
                                                        <option value="92">Guyana</option>
                                                        <option value="93">Haiti</option>
                                                        <option value="94">Heard and Mc Donald Islands</option>
                                                        <option value="95">Honduras</option>
                                                        <option value="96">Hong Kong</option>
                                                        <option value="97">Hungary</option>
                                                        <option value="98">Iceland</option>
                                                        <option value="99">India</option>
                                                        <option value="100">Indonesia</option>
                                                        <option value="101">Iran (Islamic Republic of)</option>
                                                        <option value="102">Iraq</option>
                                                        <option value="103">Ireland</option>
                                                        <option value="254">Isle of Man</option>
                                                        <option value="104">Israel</option>
                                                        <option value="105">Italy</option>
                                                        <option value="106">Jamaica</option>
                                                        <option value="107">Japan</option>
                                                        <option value="257">Jersey</option>
                                                        <option value="108">Jordan</option>
                                                        <option value="109">Kazakhstan</option>
                                                        <option value="110">Kenya</option>
                                                        <option value="111">Kiribati</option>
                                                        <option value="113">Korea, Republic of</option>
                                                        <option value="253">Kosovo, Republic of</option>
                                                        <option value="114">Kuwait</option>
                                                        <option value="115">Kyrgyzstan</option>
                                                        <option value="116">Lao People's Democratic Republic
                                                        </option>
                                                        <option value="117">Latvia</option>
                                                        <option value="118">Lebanon</option>
                                                        <option value="119">Lesotho</option>
                                                        <option value="120">Liberia</option>
                                                        <option value="121">Libyan Arab Jamahiriya</option>
                                                        <option value="122">Liechtenstein</option>
                                                        <option value="123">Lithuania</option>
                                                        <option value="124">Luxembourg</option>
                                                        <option value="125">Macau</option>
                                                        <option value="127">Madagascar</option>
                                                        <option value="128">Malawi</option>
                                                        <option value="129">Malaysia</option>
                                                        <option value="130">Maldives</option>
                                                        <option value="131">Mali</option>
                                                        <option value="132">Malta</option>
                                                        <option value="133">Marshall Islands</option>
                                                        <option value="134">Martinique</option>
                                                        <option value="135">Mauritania</option>
                                                        <option value="136">Mauritius</option>
                                                        <option value="137">Mayotte</option>
                                                        <option value="138">Mexico</option>
                                                        <option value="139">Micronesia, Federated States of</option>
                                                        <option value="140">Moldova, Republic of</option>
                                                        <option value="141">Monaco</option>
                                                        <option value="142">Mongolia</option>
                                                        <option value="242">Montenegro</option>
                                                        <option value="143">Montserrat</option>
                                                        <option value="144">Morocco</option>
                                                        <option value="145">Mozambique</option>
                                                        <option value="146">Myanmar</option>
                                                        <option value="147">Namibia</option>
                                                        <option value="148">Nauru</option>
                                                        <option value="149">Nepal</option>
                                                        <option value="150">Netherlands</option>
                                                        <option value="151">Netherlands Antilles</option>
                                                        <option value="152">New Caledonia</option>
                                                        <option value="153">New Zealand</option>
                                                        <option value="154">Nicaragua</option>
                                                        <option value="155">Niger</option>
                                                        <option value="156">Nigeria</option>
                                                        <option value="157">Niue</option>
                                                        <option value="158">Norfolk Island</option>
                                                        <option value="112">North Korea</option>
                                                        <option value="159">Northern Mariana Islands</option>
                                                        <option value="160">Norway</option>
                                                        <option value="161">Oman</option>
                                                        <option value="162">Pakistan</option>
                                                        <option value="163">Palau</option>
                                                        <option value="247">Palestinian Territory, Occupied</option>
                                                        <option value="164">Panama</option>
                                                        <option value="165">Papua New Guinea</option>
                                                        <option value="166">Paraguay</option>
                                                        <option value="167">Peru</option>
                                                        <option value="168">Philippines</option>
                                                        <option value="169">Pitcairn</option>
                                                        <option value="170">Poland</option>
                                                        <option value="171">Portugal</option>
                                                        <option value="172">Puerto Rico</option>
                                                        <option value="173">Qatar</option>
                                                        <option value="174">Reunion</option>
                                                        <option value="175">Romania</option>
                                                        <option value="176">Russian Federation</option>
                                                        <option value="177">Rwanda</option>
                                                        <option value="178">Saint Kitts and Nevis</option>
                                                        <option value="179">Saint Lucia</option>
                                                        <option value="180">Saint Vincent and the Grenadines
                                                        </option>
                                                        <option value="181">Samoa</option>
                                                        <option value="182">San Marino</option>
                                                        <option value="183">Sao Tome and Principe</option>
                                                        <option value="184">Saudi Arabia</option>
                                                        <option value="185">Senegal</option>
                                                        <option value="243">Serbia</option>
                                                        <option value="186">Seychelles</option>
                                                        <option value="187">Sierra Leone</option>
                                                        <option value="188">Singapore</option>
                                                        <option value="189">Slovak Republic</option>
                                                        <option value="190">Slovenia</option>
                                                        <option value="191">Solomon Islands</option>
                                                        <option value="192">Somalia</option>
                                                        <option value="193">South Africa</option>
                                                        <option value="194">South Georgia &amp; South Sandwich
                                                            Islands
                                                        </option>
                                                        <option value="248">South Sudan</option>
                                                        <option value="195">Spain</option>
                                                        <option value="196">Sri Lanka</option>
                                                        <option value="249">St. Barthelemy</option>
                                                        <option value="197">St. Helena</option>
                                                        <option value="250">St. Martin (French part)</option>
                                                        <option value="198">St. Pierre and Miquelon</option>
                                                        <option value="199">Sudan</option>
                                                        <option value="200">Suriname</option>
                                                        <option value="201">Svalbard and Jan Mayen Islands</option>
                                                        <option value="202">Swaziland</option>
                                                        <option value="203">Sweden</option>
                                                        <option value="204">Switzerland</option>
                                                        <option value="205">Syrian Arab Republic</option>
                                                        <option value="206">Taiwan</option>
                                                        <option value="207">Tajikistan</option>
                                                        <option value="208">Tanzania, United Republic of</option>
                                                        <option value="209">Thailand</option>
                                                        <option value="210">Togo</option>
                                                        <option value="211">Tokelau</option>
                                                        <option value="212">Tonga</option>
                                                        <option value="213">Trinidad and Tobago</option>
                                                        <option value="255">Tristan da Cunha</option>
                                                        <option value="214">Tunisia</option>
                                                        <option value="215">Turkey</option>
                                                        <option value="216">Turkmenistan</option>
                                                        <option value="217">Turks and Caicos Islands</option>
                                                        <option value="218">Tuvalu</option>
                                                        <option value="219">Uganda</option>
                                                        <option value="220">Ukraine</option>
                                                        <option value="221">United Arab Emirates</option>
                                                        <option value="222">United Kingdom</option>
                                                        <option selected="selected" value="223">United States
                                                        </option>
                                                        <option value="224">United States Minor Outlying Islands
                                                        </option>
                                                        <option value="225">Uruguay</option>
                                                        <option value="226">Uzbekistan</option>
                                                        <option value="227">Vanuatu</option>
                                                        <option value="228">Vatican City State (Holy See)</option>
                                                        <option value="229">Venezuela</option>
                                                        <option value="230">Viet Nam</option>
                                                        <option value="231">Virgin Islands (British)</option>
                                                        <option value="232">Virgin Islands (U.S.)</option>
                                                        <option value="233">Wallis and Futuna Islands</option>
                                                        <option value="234">Western Sahara</option>
                                                        <option value="235">Yemen</option>
                                                        <option value="238">Zambia</option>
                                                        <option value="239">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="content-edit-area">
                                <div class="edit-header">
                                    <h5 class="title">Account Settings</h5>
                                </div>
                                <div class="edit-content">
                                    <form id="account-settings" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="language">Language</label>
                                                    <select class="lang-select custom-select" id="country-language" name="language">
                                                        <option value="1">English (United States)</option>
                                                        <option value="2">Arabic</option>
                                                        <option value="2">Bangla</option>
                                                        <option value="2">Hindi</option>
                                                        <option value="3">Chinese</option>
                                                        <option value="4">Russian</option>
                                                        <option value="4">Dutch</option>
                                                        <option value="4">French</option>
                                                        <option value="4">French</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="timezone">Time Zone</label>
                                                    <select class="custom-select" id="timezone" name="timezone_id">
                                                        <option value="-12">(GMT-12:00) International Date Line West
                                                        </option>
                                                        <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                                        <option value="-10">(GMT-10:00) Hawaii</option>
                                                        <option value="-9">(GMT-09:00) Alaska</option>
                                                        <option value="-8">(GMT-08:00) Pacific Time (US & Canada)
                                                        </option>
                                                        <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                                        <option value="-7">(GMT-07:00) Arizona</option>
                                                        <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan
                                                        </option>
                                                        <option value="-7">(GMT-07:00) Mountain Time (US & Canada)
                                                        </option>
                                                        <option selected="selected" value="-6">(GMT-06:00) Central
                                                            America
                                                        </option>
                                                        <option value="-6">(GMT-06:00) Central Time (US & Canada)
                                                        </option>
                                                        <option value="-6">(GMT-06:00) Guadalajara, Mexico City,
                                                            Monterrey
                                                        </option>
                                                        <option value="-6">(GMT-06:00) Saskatchewan</option>
                                                        <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco
                                                        </option>
                                                        <option value="-5">(GMT-05:00) Eastern Time (US & Canada)
                                                        </option>
                                                        <option value="-5">(GMT-05:00) Indiana (East)</option>
                                                        <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                                        <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                                        <option value="-4">(GMT-04:00) Manaus</option>
                                                        <option value="-4">(GMT-04:00) Santiago</option>
                                                        <option value="-3.5">(GMT-03:30) Newfoundland</option>
                                                        <option value="-3">(GMT-03:00) Brasilia</option>
                                                        <option value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
                                                        <option value="-3">(GMT-03:00) Greenland</option>
                                                        <option value="-3">(GMT-03:00) Montevideo</option>
                                                        <option value="-2">(GMT-02:00) Mid-Atlantic</option>
                                                        <option value="-1">(GMT-01:00) Cape Verde Is.</option>
                                                        <option value="-1">(GMT-01:00) Azores</option>
                                                        <option value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik
                                                        </option>
                                                        <option value="0">(GMT+00:00) Greenwich Mean Time : Dublin,
                                                            Edinburgh, Lisbon, London
                                                        </option>
                                                        <option value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome,
                                                            Stockholm, Vienna
                                                        </option>
                                                        <option value="1">(GMT+01:00) Belgrade, Bratislava, Budapest,
                                                            Ljubljana, Prague
                                                        </option>
                                                        <option value="1">(GMT+01:00) Brussels, Copenhagen, Madrid,
                                                            Paris
                                                        </option>
                                                        <option value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb
                                                        </option>
                                                        <option value="1">(GMT+01:00) West Central Africa</option>
                                                        <option value="2">(GMT+02:00) Amman</option>
                                                        <option value="2">(GMT+02:00) Athens, Bucharest, Istanbul
                                                        </option>
                                                        <option value="2">(GMT+02:00) Beirut</option>
                                                        <option value="2">(GMT+02:00) Cairo</option>
                                                        <option value="2">(GMT+02:00) Harare, Pretoria</option>
                                                        <option value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia,
                                                            Tallinn, Vilnius
                                                        </option>
                                                        <option value="2">(GMT+02:00) Jerusalem</option>
                                                        <option value="2">(GMT+02:00) Minsk</option>
                                                        <option value="2">(GMT+02:00) Windhoek</option>
                                                        <option value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                                                        <option value="3">(GMT+03:00) Moscow, St. Petersburg,
                                                            Volgograd
                                                        </option>
                                                        <option value="3">(GMT+03:00) Nairobi</option>
                                                        <option value="3">(GMT+03:00) Tbilisi</option>
                                                        <option value="3.5">(GMT+03:30) Tehran</option>
                                                        <option value="4">(GMT+04:00) Abu Dhabi, Muscat</option>
                                                        <option value="4">(GMT+04:00) Baku</option>
                                                        <option value="4">(GMT+04:00) Yerevan</option>
                                                        <option value="4.5">(GMT+04:30) Kabul</option>
                                                        <option value="5">(GMT+05:00) Yekaterinburg</option>
                                                        <option value="5">(GMT+05:00) Islamabad, Karachi, Tashkent
                                                        </option>
                                                        <option value="5.5">(GMT+05:30) Sri Jayawardenapura</option>
                                                        <option value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New
                                                            Delhi
                                                        </option>
                                                        <option value="5.75">(GMT+05:45) Kathmandu</option>
                                                        <option value="6">(GMT+06:00) Almaty, Novosibirsk</option>
                                                        <option value="6">(GMT+06:00) Astana, Dhaka</option>
                                                        <option value="6.5">(GMT+06:30) Yangon (Rangoon)</option>
                                                        <option value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                                        <option value="7">(GMT+07:00) Krasnoyarsk</option>
                                                        <option value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong,
                                                            Urumqi
                                                        </option>
                                                        <option value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
                                                        <option value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                                        <option value="8">(GMT+08:00) Perth</option>
                                                        <option value="8">(GMT+08:00) Taipei</option>
                                                        <option value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                                        <option value="9">(GMT+09:00) Seoul</option>
                                                        <option value="9">(GMT+09:00) Yakutsk</option>
                                                        <option value="9.5">(GMT+09:30) Adelaide</option>
                                                        <option value="9.5">(GMT+09:30) Darwin</option>
                                                        <option value="10">(GMT+10:00) Brisbane</option>
                                                        <option value="10">(GMT+10:00) Canberra, Melbourne, Sydney
                                                        </option>
                                                        <option value="10">(GMT+10:00) Hobart</option>
                                                        <option value="10">(GMT+10:00) Guam, Port Moresby</option>
                                                        <option value="10">(GMT+10:00) Vladivostok</option>
                                                        <option value="11">(GMT+11:00) Magadan, Solomon Is., New
                                                            Caledonia
                                                        </option>
                                                        <option value="12">(GMT+12:00) Auckland, Wellington</option>
                                                        <option value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.
                                                        </option>
                                                        <option value="13">(GMT+13:00) Nuku'alofa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="accountStatus">Account Status</label>
                                                    <select class="custom-select" id="account-status" name="account-statis ">
                                                        <option value="1">Active</option>
                                                        <option value="2">In Active</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>



                            <div class="content-edit-area">
                                <div class="edit-header">
                                    <h5 class="title">Change Password</h5>
                                </div>
                                <div class="edit-content">
                                    <form id="change-password" method="post">
                                        <div class="form-group">
                                            <label for="Current-pass">Confirm Current Password</label>
                                            <input type="text" class="form-control" data-pr-form="Current-pass" id="Current-pass" required placeholder="Enter Current Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-password">New Password</label>
                                            <input type="text" class="form-control" data-pr-form="new-password" id="new-Password" required placeholder="Enter New Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirmPassword">Confirm New Password</label>
                                            <input type="text" class="form-control" data-pr-form="confirmg-password" id="confirm-Password" required placeholder="Enter Confirm New Password">
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-sm-8">
                                                <div class="form-group">
                                                    <label for="input-zone">Security question</label>
                                                    <select class="custom-select" id="input-zone" name="security">
                                                        <option value=""> --- Please Select ---</option>
                                                        <option value="3622">What county were you born?</option>
                                                        <option value="3623">What is your oldest cousin’s first name? </option>
                                                        <option selected="selected" value="3624">What is the title and artist of your favorite song? </option>
                                                        <option value="3625">What is your work address?</option>
                                                        <option value="3626">What is your oldest sibling’s middle name? </option>
                                                        <option value="3627">What is your car’s license plate number? </option>
                                                        <option value="3628">What was your favorite elementary school teacher’s name? </option>
                                                        <option value="3629">What was your favorite Color?</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <div class="form-group">
                                                    <label for="secqu">Security Name or Number</label>
                                                    <input id="secqu" value="22434" type="text" class="form-control" required placeholder="Enter Your Security">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button class="btn btn-default" type="submit"><i class="far fa-save"></i> Save Chnages</button> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Edit personal info End -->


                        <!-- Edit personal info End -->
                        <div class="infoItems shadow">
                            <ul class="nav nav-tabs">
                                <li><a data-toggle="tab" href="#menu1" class="active">Personal information</a></li>

                                <li><a data-toggle="tab" href="#menu2">Login and security</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="menu1" class="tab-pane fade in active">
                                    <div class="row">
                                        <p class="col-sm-3"><b>Name</b></p>
                                        <p class="col-sm-9"><?=$firstname.' '.$lastname;?></p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>Date of Birth</b></p>
                                        <p class="col-sm-9"><?=$dob;?></p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>Routing Number</b></p>
                                        <p class="col-sm-9"><?=$routing;?></p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>User ID</b></p>
                                        <p class="col-sm-9"><?=$userid;?></p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>Account Status</b></p>
                                        <p class="col-sm-9"><span class="text-success" data-toggle="tooltip" data-original-title="Active"><i class="fas fa-check-circle"></i></span></p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>Email</b> <span class="text-muted font-weight-500">(Primary)</span></p>
                                        <div class="col-sm-9">
                                            <p class="mb-0"><?=$email;?> </p>
                                            <p> Send and receive <a>mobile payments</a></p>
                                        </div>
                                        <p class="col-sm-3"><b>Email</b> <span class="text-muted font-weight-500">(Personal)</span></p>
                                        <p class="col-sm-9"><?=$email;?></p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>Mobile</b> <span class="text-muted font-weight-500">(Primary)</span></p>
                                        <p class="col-sm-9"><?=$phone;?></p>
                                        <p class="col-sm-3"><b>Landline</b> <span class="text-muted font-weight-500">(Home)</span></p>
                                        <p class="col-sm-9"><?=$phone;?></p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>Address</b></p>
                                        <p class="col-sm-9"><?=$address;?></p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>Customer Service ID</b></p>
                                        <p class="col-sm-9">When you call Customer Service, we’ll ask you to confirm your identity using this account information. <a href="#" data-toggle="modal" data-target="#supportpin">Update</a></p>
                                    </div>
                                     <!-- Modal -->
                                     <div class="modal fade step-secourity" id="supportpin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered " role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            <p>Add or change your Customer Service PIN</p></h5>
                                                            <p>With One Touch™, you’ll speed through checkout without having to log in every time.</p>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>                                                    
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="">
                                                            <label for="inputPassword5"><b>New Pin</b></label>
                                                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                                Enter you're 6 digit pin.
                                                            </small>
                                                            <label for="inputPassword5"><b>Confirm Pin</b></label>
                                                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                                Enter you're 6 digit Confirm pin.
                                                            </small>
                                                        </form>
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary">Add OR Chnage Pin</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- END First Tab -->
                                <div id="menu2" class="tab-pane fade">
                                    <div class="row">
                                        <p class="col-sm-3"><b>Language</b></p>
                                        <p class="col-sm-9">English (United States)</p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>Time Zone</b></p>
                                        <p class="col-sm-9">(GMT-06:00) America</p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>Password</b></p>
                                        <p class="col-sm-9"><input type="password" class="form-control-plaintext" id="password" value="EnterPassword"> </p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>2-step verification</b></p>
                                        <p class="col-sm-9">Add an extra layer of security to your account by using a one-time security code in addition to your password each time you log in. <a href="#" data-toggle="modal" data-target="#step"><i class="fas fa-wrench"></i> SETUP</a></p>
                                    </div>
                                    <hr>


                                    <div class="row">
                                        <p class="col-sm-3"><b>Stay logged in for faster purchases</b></p>
                                        <p class="col-sm-9">Add an extra layer of security to your account by using a one-time security code in addition to your password each time you log in. <a href="#" data-toggle="modal" data-target="#staylogin">Update</a></p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>Security question</b></p>
                                        <p class="col-sm-9"><input type="password" class="form-control-plaintext" id="security" value="EnterPassword"> </p>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <p class="col-sm-3"><b>Account type</b></p>
                                        <p class="col-sm-9">Premium <a href="#" class="close-account" data-toggle="modal" data-target="#closeaccount"><i class="fas fa-times"></i> Close Account</a></p>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade step-secourity" id="closeaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered " role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            <p>Are you sure??</p></h5>
                                                            <p>You want to close you account</p>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>                                                    
                                                    </div>
                                                    <div class="modal-body">
                                                            <form>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Password</label>
                                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Security question</label>
                                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Security question">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">I want to close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- Modal -->
                                    <div class="modal fade step-secourity" id="staylogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered " role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <p>Stay logged in for faster purchases</p></h5>
                                                        <p>With One Touch™, you’ll speed through checkout without having to log in every time.</p>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>                                                    
                                                </div>
                                                <div class="modal-body">
                                                    <p><b>You're logged in on these devices:</b></p>
                                                    <table class="table">
                                                            <thead>
                                                              <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Dvice Name</th>
                                                                <th scope="col">Action</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <th scope="row">1</th>
                                                                <td>Desktop Chrome Windows 10 NT 10.0</td>
                                                                <td><a href="#">Log out</a></td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">2</th>
                                                                <td>Desktop Chrome Windows 10 NT 10.0</td>
                                                                <td><a href="#">Log out</a></td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">3</th>
                                                                <td>Desktop Chrome Windows 10 NT 10.0</td>
                                                                <td><a href="#">Log out</a></td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">4</th>
                                                                <td>Desktop Chrome Windows 10 NT 10.0</td>
                                                                <td><a href="#">Log out</a></td>
                                                              </tr>
                                                           
                                                            </tbody>
                                                          </table>
                                                    <a href="#">Turn off One Touch™ on all devices</a>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade step-secourity" id="step" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog  modal-dialog-centered " role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            <p>Protect 2-step verification</p></h5>
    
                                                            <p>Each time you log in, you’ll use a one-time code in addition to your password. Choose how you’ll get your code.</p>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>                                                    
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                            <label class="custom-control-label" for="customSwitch1">Text me a code</label>
                                                        </div>
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                            <label class="custom-control-label" for="customSwitch2">Use an authenticator app</label>
                                                        </div>
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input" disabled id="customSwitch3">
                                                            <label class="custom-control-label" for="customSwitch3">Use a security key</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Set It up</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>


                        </div>



                    </div>
                    <!-- Middle Panel End -->
                </div>
            </div>
        </div>
        <!-- Content end -->

       