
                <!-- Middle Panel  -->


                <?php

                    if($is_request == 1){


                        echo '


                            <div class="col-lg-9">
                                <h2 class="admin-heading"><?=$firstname;?> cards account(for payments) <a href="'.nav_url('acounts','add_card').'" class="order-card"> <i class="fas fa-plus"></i> Add Card</a></h2>

                                <div class="alert alert-primary">
                                    <p><b>NB:</b> If the card processing is taking too long, make use of add bank account to perform withdrawal transaction. Thanks</p>
                                </div>
                                <!-- Credit or Debit Cards  -->
                                <div class="infoItems bg-offwhite  shadow">
                                    <div class="row">
                                        <div class="col-12">
                                                <h3>Current cards</h3>
                                        </div>

                        ';

                        if($is_card==1){
                            echo '

                                <div class="col-12 col-sm-12 col-lg-12 cardBox">
                                    <div class="account-card account-card-primary">
                                            <p class="pirotry text-right bg-warning">Pending</p>  
                                        <div class="row">
                                            <p class="card-number col-12">XXXX-XXXX-XXXX-'.$lastpin.'</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="valid-card">Valid true</p>
                                                <p class="expare ">'.$expery_date.'</p>  
                                            </div>
                                            <div class="col-6">
                                                
                                            </div>                                        
                                        </div>      
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="card-holder-name">'.$firstname.' '.$lastname.'</p> 
                                                <p class="text-warning ">Processing</p>
                                            </div>
                                            <div class="col-6">
                                                <img class="ml-auto" src="'.base_url().'assets/bank/images/mastercard.png" alt="mastercard" title="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div> 
                            ';
                        }

                        if($is_card==2){

                            echo '

                                <div class="col-12 col-sm-12 col-lg-12 cardBox">
                                    <div class="account-card account-card-primary">
                                            <p class="pirotry text-right bg-warning">Upcoming</p>  
                                        <div class="row">
                                            <p class="card-number col-12">XXXX-XXXX-XXXX-'.$lastpin.'</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="valid-card">Valid true</p>
                                                <p class="expare ">'.$expery_date.'</p>  
                                            </div>
                                            <div class="col-6">
                                                
                                            </div>                                        
                                        </div>      
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="card-holder-name">'.$firstname.' '.$lastname.'</p> 
                                                <p class="text-warning ">Waiting</p>
                                            </div>
                                            <div class="col-6">
                                                <img class="ml-auto" src="'.base_url().'assets/bank/images/mastercard.png" alt="mastercard" title="">
                                            </div>
                                        </div>
                                        <div class="account-card-overlay">                                        
                                            <a href="#">
                                                Active your Card
                                            </a>
                                        </div>
                                    </div>
                                </div> 
                            ';

                        }

                        if($is_card==3){

                            echo '

                                <div class="col-12 col-sm-12 col-lg-12 cardBox">
                                    <div class="account-card account-card-primary">
                                            <p class="pirotry text-right">Primary</p>  
                                        <div class="row">
                                            <p class="card-number col-12">XXXX-XXXX-XXXX-'.$lastpin.'</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="valid-card">Valid true</p>
                                                <p class="expare ">'.$expery_date.'</p>  
                                            </div>
                                            <div class="col-6">
                                                
                                            </div>                                        
                                        </div>      
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="card-holder-name">'.$firstname.' '.$lastname.'</p> 
                                                <p class="text-success ">Approved</p>
                                            </div>
                                            <div class="col-6">
                                                <img class="ml-auto" src="'.base_url().'assets/bank/images/mastercard.png" alt="mastercard" title="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            ';

                        }


                        if($is_new_card){

                            if($card_provider == 'MasterCard'){
                                $card_image = base_url().'assets/bank/images/mastercard.png';
                            }

                            elseif($card_provider == 'Visa'){
                                $card_image = base_url().'assets/bank/images/visa.png';
                            }

                            elseif($card_provider == 'American Express'){
                                $card_image = base_url().'assets/bank/images/america.jpg';

                            }else{
                                $card_image =  base_url().'assets/bank/images/discover.jpg';
                            }

                            echo '


                                    <div class="col-12">
                                         <h3>New added cards</h3>
                                    </div>


                                    <div class="col-12 col-sm-12 col-lg-12 cardBox">
                                    <div class="account-card account-card-primary">
                                            <p class="pirotry text-right bg-info">Secondary</p>  
                                        <div class="row">
                                            <p class="card-number col-12">'.last_four_digit_credit_card($card_number).'</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="valid-card">Valid true</p>
                                                <p class="expare ">'.$expiry_date.'</p>  
                                            </div>
                                            <div class="col-6">
                                                
                                            </div>                                        
                                        </div>      
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="card-holder-name">'.$card_name.'</p> 
                                                <p class="text-success ">Approved</p>
                                            </div>
                                            <div class="col-6">

                                                <img class="ml-auto" src="'.$card_image.'" alt="mastercard" title="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>



                            ';
                        }

                     
                                    echo '   

                                        <div class="col-12">
                                                <h3>Past cards </h3>
                                        </div>
                                        
                                        <div class="col-12 col-sm-12 col-lg-12">
                                            <div class="alert alert-info">
                                               You have know past card yet!. Thanks
                                            </div>  
                                        </div>  
                                    </div>
                                </div>              

                            </div>


                        ';
                    }else{

                            echo '
                                <div class="col-lg-9">
                                <div class="infoItems bg-offwhite  shadow row">
                                    <div class="col-6 col-sm-8 col-lg-6">
                                        <div class="alert alert-danger">
                                           You have to make a request for your <b>'.$system_name.'</b> ATM card 
                                        </div>  
                                    </div>

                                     <div class="col-6 col-sm-6 col-lg-6">
                                         <a href="'.nav_url('req','card_request').'" style="clear: both; float: left;">
                                            <button type="submit" class="btn btn-default">Send Request</button>
                                        </a> 
                                    </div>

                                                                          

                                </div>
                                </div>



                            ';
                    }

                    ?>



                <!-- Middle Panel End -->

            </div >
        </div>
    </div>
    <!-- Content end -->

    


  