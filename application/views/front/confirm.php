
       

                    <div class="col-lg-9">
                        <div class="profile-content">
                            <h3 class="admin-heading">Withdraw Money</h3>
                            <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?=nav_url('fund','withdraw');?>">Withdraw from</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="<?=nav_url('funds','withdraw');?>">Balance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?=nav_url('funds_','withdraw');?>">Confirm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">Success</a>
                                    </li>
                                </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <form id="withdraw-send-money" action="<?=base_url();?>bank/in/check_withdraw" method="post" class="form bg-offwhite py-4">
                                        <div class="Withdarw-header">
                                            <h3 class="text-5 msg-header">You are Withdraw money To </h3>
                                            <p class="text-4 text-center"><b><?=$bank_name;?> - <?=last_four_digit_credit_card($card_number);?></b></p>
                                            <hr>
                                            <p class="text-white"><b>Current Balance</b></p>
                                            <h3 class="av-balance"> <?=$sign;?><?=number_format($main_ballance);?></h3>
                                        </div> <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="text-left"><b>Withdraw Amount</b></p>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="float-right"><?=$sign.number_format($amount);?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="text-left"><b>Transactions fees </b></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-right">
                                                    <span class="bg-success free-charge">Fixed</span>
                                                    <de><?=$sign.number_format($charges);?></de>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="text-left"><b>Total</b></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-right">
                                                    <span class="float-right"><?=$sign.number_format($withdraw_amount);?></span>
                                                </div>
                                            </div>
                                        </div>



                                        <ul class="pager mt-4">
                                            <li>
                                                <a href="<?=nav_url('funds','withdraw');?>" class="btn btn-default mr-0">
                                                    <span class="bh"></span>
                                                    <i class="fas fa-chevron-left"></i>
                                                    <span>Back</span>
                                                </a>
                                            </li>
                                            <li>
                                                <button type="submit" class="btn btn-default mr-0">
                                                    <span class="bh"></span>
                                                    <span>Withdraw Money</span>
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

