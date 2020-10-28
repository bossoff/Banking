                    <?php
                    if($is_request==0)user_url('get','bank_cards');
                ?>

                    <div class="col-lg-9 profile-area">
                        <div class="profile-content">
                            <h3 class="admin-heading">Withdraw</h3>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="<?=nav_url('fund','withdraw');?>">Withdraw from</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" >Balance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" >Confirm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Success</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                    <form id="send-money" action="<?=base_url();?>bank/in/check_card" method="post" class="form bg-offwhite py-5">
                                        <?php $this->load->view('auth/inc/alerts'); ?>
                                        <div class="row payment">
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <div class="single-payment">
                                                        <p>xxxx-<?=$lastpin;?></p>
                                                        <p><b><?=$sign;?><?=$ballance;?>.00</b></p>
                                                        <?php
                                                            if($is_card==1){
                                                                echo '<p class="text-warning">Pending</p>';
                                                            }elseif($is_card==2){
                                                                echo '<p class="text-warning">Upcoming</p>';                                   
                                                            }elseif($is_card==3){
                                                                echo '<p class="text-success">Card Approved</p>';                                   
                                                            }
                                                        ?>
                                                        
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div class="single-payment selected" >
                                                        <p>xxxx-<?=four_digit_pin($card_number);?></p>
                                                       <p><b><?=$sign;?><?=$ballance;?>.00</b></p>
                                                       <p class="text-success">Card Approved</p>
                                                    <input type="text" hidden="" value="approved" name="approved">

                                                </div>
                                            </div>
                                        </div>                                      
                                        <ul class="pager mt-4">
                                            <li>&nbsp;</li>
                                            <li>
                                                <!-- <a href="<?=nav_url('funds','withdraw');?>" class="btn btn-default mr-0">
                                                    <span class="bh"></span>
                                                    <span>Next</span>
                                                    <i class="fas fa-chevron-right"></i>
                                                </a> -->

                                                <button class="btn btn-default mr-0">
                                                    <span class="bh"></span>
                                                    <span>Next</span>
                                                    <i class="fas fa-chevron-right"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Content end -->

