
                    <!-- Middle Panel  -->
                    <div class="col-lg-9">
                        <div class="profile-content">
                            <h3 class="admin-heading bg-offwhite">
                                <p>Recent Activity </p>
                                <span>Roysha Activity</span>
                            </h3>

                            <!-- Admin Heading Title  -->
                            <div class="transaction-title bg-offwhite">
                                <div class="items">
                                    <div class="row">
                                        <div class="col"><span class="">Date</span></div>
                                        <div class="col">Description</div>
                                        <div class="col text-center">Status</div>
                                        <div class="col text-center">Fee</div>
                                        <div class="col">Amount</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Admin Heading Title End -->

                            <!-- Transaction List -->
                            <div class="transaction-area">

                               <?php $users = $this->db->get_where('history',['uid'=>$this->session->userdata('user_id')])->result_array(); 
                               

                                    foreach ($users as $user) {?>                                      
                                   
                                
                                
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month"><?=$user['transaction_date'];?></span></div>
                                            <div class="col">
                                                <span class="name"><?=$user['transaction_type'];?> to <?=$bank_name;?>-<?=last_four_digit_credit_card($card_number);?></span></div>
                                            <div class="col text-center">
                                                <span class="payments-status text-success" ><i data-toggle="tooltip" data-original-title="Completed" class="fas fa-check-circle"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount"><?=$sign;?><?=$user['charges'];?></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount"><?=$sign;?><?=$user['amount'];?></span>
                                                <!-- <span class="currency">(USD)</span> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            <?php }?>


                                


                              
                                
                                <!-- <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span></div>
                                            <div class="col">
                                                <span class="name">Water Bill Payment</span></div>
                                            <div class="col text-center">
                                                <span class="payments-status" ><i class="fas fa-ellipsis-h" data-toggle="tooltip" data-original-title="In Progress"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $562</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="items">
                                    <a href="transactions-details.html">
                                        <div class="row">
                                            <div class="col pay-date">
                                                <span class="date">15</span>
                                                <span class="pay-month">APR</span></div>
                                            <div class="col">
                                                <span class="name">landline Bill Pay</span></div>
                                            <div class="col text-center">
                                                <span class="payments-status text-danger" ><i data-toggle="tooltip" data-original-title="Cancelled" class="fas fa-times-circle"></i></span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $0.2</span>
                                            </div>
                                            <div class="col">
                                                <span class="payment-amaount">- $562</span>
                                                <span class="currency">(USD)</span>
                                            </div>
                                        </div>
                                    </a>
                                </div> -->

                                <!-- <div class="trancstion-more">
                                    <div class="items">
                                            <a href="transactions-details.html">
                                                <div class="row">
                                                    <div class="col pay-date">
                                                        <span class="date">15</span>
                                                        <span class="pay-month">APR</span></div>
                                                    <div class="col">
                                                        <span class="name">Payment Received From Envato</span></div>
                                                    <div class="col text-center">
                                                        <span class="payments-status text-success" ><i data-toggle="tooltip" data-original-title="Completed" class="fas fa-check-circle"></i></span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">- $0.2</span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">+ $562</span>
                                                        <span class="currency">(USD)</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="items">
                                            <a href="transactions-details.html">
                                                <div class="row">
                                                    <div class="col pay-date">
                                                        <span class="date">15</span>
                                                        <span class="pay-month">APR</span></div>
                                                    <div class="col">
                                                        <span class="name">Gas Bill Pay</span></div>
                                                    <div class="col text-center">
                                                        <span class="payments-status text-success" ><i data-toggle="tooltip" data-original-title="Completed" class="fas fa-check-circle"></i></span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">- $0.2</span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">- $562</span>
                                                        <span class="currency">(USD)</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="items">
                                            <a href="transactions-details.html">
                                                <div class="row">
                                                    <div class="col pay-date">
                                                        <span class="date">15</span>
                                                        <span class="pay-month">APR</span></div>
                                                    <div class="col">
                                                        <span class="name">Water Bill Payment</span></div>
                                                    <div class="col text-center">
                                                        <span class="payments-status" ><i class="fas fa-ellipsis-h" data-toggle="tooltip" data-original-title="In Progress"></i></span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">- $0.2</span>
                                                    </div>
                                                    <div class="col">
                                                        <span class="payment-amaount">- $562</span>
                                                        <span class="currency">(USD)</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                      
                                </div> -->
                            </div>
                            <!-- Transaction List End -->

                            <!-- Transaction Details Modal  -->
                            <!-- <div id="transaction-detail" class="modal fade" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered details-area" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="modal_header">
                                                <span class="status bg-success">Paid</span>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="content-area">
                                                            <i class="fas fa-building"></i>
                                                            Desco Govt Water Ltd.
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="content-area text-right">
                                                            <div class="price">
                                                                $559
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-content-area">
                                                <h5 class="transcation-heading">Transaction Details</h5>
                                                <div class="transaction-area">
                                                    <div class="items">
                                                        <div class="row">
                                                            <div class="col">
                                                                <span class="name">Gas Bill Paid By:</span>
                                                            </div>
                                                            <div class="col">
                                                                <span class="decs">Jhon Due</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="items">
                                                        <div class="row">
                                                            <div class="col">
                                                                <span class="name">Transaction ID:</span>
                                                            </div>
                                                            <div class="col">
                                                                <span class="decs">8974HSDB32056KSDS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="items">
                                                        <div class="row">
                                                            <div class="col">
                                                                <span class="name">Transaction ID:</span>
                                                            </div>
                                                            <div class="col">
                                                                <span class="decs">8974HSDB32056KSDS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="items">
                                                        <div class="row">
                                                            <div class="col">
                                                                <span class="name">Description:</span>
                                                            </div>
                                                            <div class="col">
                                                                <span class="decs">This bill pay via Credit Card</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Transaction Modal End -->

                            <div class="row mt-3 py-4">
                                <div class="col text-left" >
                               <!--  <a href="history.html" class="btn btn-default">View All
                                        <i class="fas fa-chevron-right"></i>
                                    </a>  -->   
                                </div>
                                <div class="col text-right">
                                    <button class="btn btn-default mr-0 load-more-btn">
                                        <span>Show more</span>
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Recent Activity End -->
                    </div>
                    <!-- Middle Panel End -->
                </div>
            </div>
        </div>
        <!-- Content end -->

       


  