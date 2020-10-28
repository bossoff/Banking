                <?php
                    if($is_new_card==1)user_url('get','bank_cards');
                ?>
                <!-- Middle Panel  -->
                <div class="col-lg-9">
                    <h2 class="admin-heading"><?=$firstname;?> (Payment Card) <a href="<?=nav_url('acounts','add_card');?>" class="order-card"> <i class="fas fa-plus"></i> Add Card</a></h2>
                    <!-- Credit or Debit Cards  -->
                    
                    
                    <!-- Add New Card info  -->
                    <div  class="accor bg-offwhite mt-3 p-3  shadow">
                        <div class="content-edit-area">
                            <div class="edit-header">
                                <h5 class="title">Add a Card</h5>
                                <!-- <button type="button" class="close"><span aria-hidden="true">&times;</span></button> -->
                                <hr>
                            </div>

                            <div class="edit-content">
                                <form id="add-Card" action="<?=base_url();?>bank/in/add_request/set" method="post">       
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="your-card-provider">Your Card Provider</label>
                                                <select id="your-card-provider" name="card_provider" class="custom-select" required="">
                                                    <option required=""  value="">Your Card Provider</option>
                                                    <option value="Visa">Visa</option>
                                                    <option value="MasterCard">MasterCard</option>
                                                    <option value="American Express">American Express</option>
                                                    <option value="Discover">Discover</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="you-card-type">Card Type</label>
                                                <select id="you-card-type" name="card_type" class="custom-select" required="">
                                                    <option required="" value="">Card Type</option>
                                                    <option value="debit">Debit</option>
                                                    <option value="Credit">Credit</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <label for="cardNumber">Card Number</label>
                                        <input type="number" class="form-control" data-bv-field="cardnumber" id="cardNumber" maxlength="16"  name="card_number" required value="" placeholder="Card Number">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="expiryDate">Expiry Date</label>
                                                <input id="expiryDate" type="text" class="form-control" name="expiry_date" data-bv-field="expiryDate" required value="" placeholder="MM/YY">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="cvvNumber">CVV <span class="text-info ml-1" data-toggle="tooltip" data-original-title="For Visa/Mastercard, the three-digit CVV number is printed on the signature panel on the back of the card immediately after the card's account number. For American Express, the four-digit CVV number is printed on the front of the card above the card account number."><i class="fas fa-question-circle"></i></span></label>
                                                <input id="cvvNumber"  type="password" class="form-control" data-bv-field="cvvnumber" name="cvv" required value="" placeholder="CVV (3 digits)">
                                            </div>
                                        </div>

                                        
                                            
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="edit-card-holder-name">Bank Name</label>
                                                    <input type="text" class="form-control" data-card-form="edit-card-holder-name" name="bank_name" id="edit-card-holder-name" required placeholder="Card Holder Name">
                                                </div>
                                            </div>


                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="edit-card-holder-name">Card Holder Name</label>
                                                    <input type="text" class="form-control" data-card-form="edit-card-holder-name" name="card_name" id="edit-card-holder-name" required placeholder="Bank Name">
                                                </div>
                                            </div>

                                       
                                    </div>
                                    <button class="btn btn-default btn-center btn-block">
                                        <span class="bh"></span>
                                        <span>Add Card</span>
                                    </button>
                                </form>
                            </div>
                        </div>                        
                    </div>
                    <!-- Add New Card info End -->

                   

                </div>
                <!-- Middle Panel End -->

            </div>
        </div>
    </div>
    <!-- Content end -->


  