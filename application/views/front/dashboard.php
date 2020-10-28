
                    <div class="col-lg-9 profile-area">
                        <div class="profile-content">
                           <h3 class="admin-heading bg-offwhite">
                                <p>Dashboard </p>
                                <b><span><?=$firstname;?> Activity</span></b>
                            </h3>
                                <!-- <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link" href="withdraw-money.html">Withdraw from</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="withdraw-money-balance.html">Balance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="withdraw-money-confirm.html">Confirm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="withdraw-money-success.html">Success</a>
                                    </li>
                                </ul> -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <form id="send-money" method="post" class="form bg-offwhite py-5">

                                        <div class="form-group">
                                            <!-- <label for="youSend">Amount</label> -->
                                            <div class="input-group">
                                               <!--  <div class="input-group-prepend"><span class="input-group-text currency-icon">$</span>
                                                </div> -->
                                                <div class="amaount-area">
                                                    <input type="text" class="form-control" data-withdraw="youSend" id="youSend" value="<?=number_format($ballance);?>" readonly="" placeholder="">
                                                    <b><a  class="full-amnt" style="font-size: 13px;">Ballance</a></b>
                                                </div>
                                                
                                                <div class="input-group-append">
                                                    <span class="input-group-text p-0">
                                                        <select id="withdraw-Currency" data-style="custom-select" data-container="body" data-live-search="true" class="selectpicker" required="">
                                                            <optgroup label="Popular Currency">
                                                                <option data-icon="currency-flag currency-flag-usd mr-1" data-subtext="United States dollar" selected="selected" value="">USD</option>
                                                                <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="">AUD</option>
                                                                <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                                                            </optgroup>
                                                            <option value="" data-divider="true">divider</option>
                                                            <optgroup label="Other Currency">
                                                                <option data-icon="currency-flag currency-flag-aed mr-1" data-subtext="United Arab Emirates dirham" value="">AED</option>
                                                                <option data-icon="currency-flag currency-flag-ars mr-1" data-subtext="Argentine peso" value="">ARS</option>
                                                                <option data-icon="currency-flag currency-flag-aud mr-1" data-subtext="Australian dollar" value="">AUD</option>
                                                                <option data-icon="currency-flag currency-flag-bdt mr-1" data-subtext="Bangladeshi taka" value="">BDT</option>
                                                                <option data-icon="currency-flag currency-flag-bgn mr-1" data-subtext="Bulgarian lev" value="">BGN</option>
                                                                <option data-icon="currency-flag currency-flag-brl mr-1" data-subtext="Brazilian real" value="">BRL</option>
                                                                <option data-icon="currency-flag currency-flag-cad mr-1" data-subtext="Canadian dollar" value="">CAD</option>
                                                                <option data-icon="currency-flag currency-flag-chf mr-1" data-subtext="Swiss franc" value="">CHF</option>
                                                                <option data-icon="currency-flag currency-flag-clp mr-1" data-subtext="Chilean peso" value="">CLP</option>
                                                                <option data-icon="currency-flag currency-flag-cny mr-1" data-subtext="Chinese yuan" value="">CNY</option>
                                                                <option data-icon="currency-flag currency-flag-czk mr-1" data-subtext="Czech koruna" value="">CZK</option>
                                                                <option data-icon="currency-flag currency-flag-dkk mr-1" data-subtext="Danish krone" value="">DKK</option>
                                                                <option data-icon="currency-flag currency-flag-egp mr-1" data-subtext="Egyptian pound" value="">EGP</option>
                                                                <option data-icon="currency-flag currency-flag-eur mr-1" data-subtext="Euro" value="">EUR</option>
                                                                <option data-icon="currency-flag currency-flag-gbp mr-1" data-subtext="British pound" value="">GBP</option>
                                                                <option data-icon="currency-flag currency-flag-gel mr-1" data-subtext="Georgian lari" value="">GEL</option>
                                                                <option data-icon="currency-flag currency-flag-ghs mr-1" data-subtext="Ghanaian cedi" value="">GHS</option>
                                                                <option data-icon="currency-flag currency-flag-hkd mr-1" data-subtext="Hong Kong dollar" value="">HKD</option>
                                                                <option data-icon="currency-flag currency-flag-hrk mr-1" data-subtext="Croatian kuna" value="">HRK</option>
                                                                <option data-icon="currency-flag currency-flag-huf mr-1" data-subtext="Hungarian forint" value="">HUF</option>
                                                                <option data-icon="currency-flag currency-flag-idr mr-1" data-subtext="Indonesian rupiah" value="">IDR</option>
                                                                <option data-icon="currency-flag currency-flag-ils mr-1" data-subtext="Israeli shekel" value="">ILS</option>
                                                                <option data-icon="currency-flag currency-flag-inr mr-1" data-subtext="Indian rupee" value="">INR</option>
                                                                <option data-icon="currency-flag currency-flag-jpy mr-1" data-subtext="Japanese yen" value="">JPY</option>
                                                                <option data-icon="currency-flag currency-flag-kes mr-1" data-subtext="Kenyan shilling" value="">KES</option>
                                                                <option data-icon="currency-flag currency-flag-krw mr-1" data-subtext="South Korean won" value="">KRW</option>
                                                                <option data-icon="currency-flag currency-flag-lkr mr-1" data-subtext="Sri Lankan rupee" value="">LKR</option>
                                                                <option data-icon="currency-flag currency-flag-mad mr-1" data-subtext="Moroccan dirham" value="">MAD</option>
                                                                <option data-icon="currency-flag currency-flag-mxn mr-1" data-subtext="Mexican peso" value="">MXN</option>
                                                                <option data-icon="currency-flag currency-flag-myr mr-1" data-subtext="Malaysian ringgit" value="">MYR</option>
                                                                <option data-icon="currency-flag currency-flag-ngn mr-1" data-subtext="Nigerian naira" value="">NGN</option>
                                                                <option data-icon="currency-flag currency-flag-nok mr-1" data-subtext="Norwegian krone" value="">NOK</option>
                                                                <option data-icon="currency-flag currency-flag-npr mr-1" data-subtext="Nepalese rupee" value="">NPR</option>
                                                                <option data-icon="currency-flag currency-flag-nzd mr-1" data-subtext="New Zealand dollar" value="">NZD</option>
                                                                <option data-icon="currency-flag currency-flag-pen mr-1" data-subtext="Peruvian nuevo sol" value="">PEN</option>
                                                                <option data-icon="currency-flag currency-flag-php mr-1" data-subtext="Philippine peso" value="">PHP</option>
                                                                <option data-icon="currency-flag currency-flag-pkr mr-1" data-subtext="Pakistani rupee" value="">PKR</option>
                                                                <option data-icon="currency-flag currency-flag-pln mr-1" data-subtext="Polish złoty" value="">PLN</option>
                                                                <option data-icon="currency-flag currency-flag-ron mr-1" data-subtext="Romanian leu" value="">RON</option>
                                                                <option data-icon="currency-flag currency-flag-rub mr-1" data-subtext="Russian rouble" value="">RUB</option>
                                                                <option data-icon="currency-flag currency-flag-sek mr-1" data-subtext="Swedish krona" value="">SEK</option>
                                                                <option data-icon="currency-flag currency-flag-sgd mr-1" data-subtext="Singapore dollar" value="">SGD</option>
                                                                <option data-icon="currency-flag currency-flag-thb mr-1" data-subtext="Thai baht" value="">THB</option>
                                                                <option data-icon="currency-flag currency-flag-try mr-1" data-subtext="Turkish lira" value="">TRY</option>
                                                                <option data-icon="currency-flag currency-flag-uah mr-1" data-subtext="Ukrainian hryvnia" value="">UAH</option>
                                                                <option data-icon="currency-flag currency-flag-ugx mr-1" data-subtext="Ugandan shilling" value="">UGX</option>
                                                                <option data-icon="currency-flag currency-flag-vnd mr-1" data-subtext="Vietnamese dong" value="">VND</option>
                                                                <option data-icon="currency-flag currency-flag-zar mr-1" data-subtext="South African rand" value="">ZAR</option>
                                                            </optgroup>
                                                        </select>
                                                    </span></div>
                                            </div>
                                        </div>

                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">

                                                    <div class="col-sm-4">
                                                        <div class="Withdarw-heade">
                                                            <p class="text-whit" style="color:#000;"><b>Available Balance</b></p>
                                                            <h3 class="av-balance"> <?=$sign;?><?=number_format($ballance);?>.00</h3>
                                                            <p><b><?=$system_name;?>-XXXXXXXXXXXX-<?=$lastpin;?></b></p>
                                                        </div>
                                                        <hr>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="Withdarw-heade">
                                                            <p class="text-whit" style="color:#000;"><b>Credit Card</b></p>
                                                            <h3 class="av-balance"> <?=$sign;?><?=number_format($withdraw_limit);?>.00</h3>
                                                            <p><b><?=$system_name;?>-XXXXXXXXXXXX-<?=$lastpin;?></b></p>
                                                        </div>
                                                         <hr>
                                                    </div>


                                                    <div class="col-sm-4">
                                                        <div class="Withdarw-heade">
                                                            <p class="text-whit" style="color:#000;"><b>Book Ballance</b></p>
                                                            <h3 class="av-balance"> <?=$sign;?><?=number_format($book_ballance);?>.00</h3>
                                                            <p><b><?=$system_name;?>-XXXXXXXXXXXX-<?=$lastpin;?></b></p>
                                                        </div>
                                                         <hr>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="Withdarw-heade">
                                                            <p class="text-whit" style="color:#000;"><b>Withdraw Limit</b></p>
                                                            <h3 class="av-balance"> <?=$sign;?><?=number_format($withdraw_limit);?>.00</h3>
                                                            <p><p>We set withrawal limit to every account to avoid conspiracy.</p><b><?=$system_name;?>-XXXXXXXXXXXX-<?=$lastpin;?></b></p>
                                                        </div>
                                                         <hr>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="Withdarw-heade">
                                                            <p class="text-whit" style="color:#000;"><b>Savings</b></p>
                                                            <h3 class="av-balance"> <?=$sign;?><?=number_format($book_ballance);?>.00</h3>
                                                            <p><b><?=$system_name;?>-XXXXXXXXXXXX-<?=$lastpin;?></b></p>
                                                        </div>
                                                         <hr>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="Withdarw-heade">
                                                            <p class="text-whit" style="color:#000;"><b>Credit limit</b></p>
                                                            <h3 class="av-balance"> <?=$sign;?><?=number_format($credit_limit);?>.00</h3>
                                                            <p><b><?=$system_name;?>-XXXXXXXXXXXX-<?=$lastpin;?></b></p>
                                                        </div>
                                                         <hr>
                                                    </div>






                                                </div>                                                
                                            </div>
                                            
                                        </div>
                                                                               
                                       
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Content end -->

