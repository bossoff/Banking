

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
                                        <a class="nav-link" href="<?=nav_url('funds_','withdraw');?>">Confirm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="<?=nav_url('funds_c','withdraw');?>">Success</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="bg-offwhite  success form">
                                            <div class="text-center">
                                                <h1 class=""><i class="far fa-check-circle text-success"></i></h1>
                                                <h3 class=" text-success">Success!</h3>
                                                <p class="">Transactions Complete</p>
                                                <p class=""><b>Hi, <?=$firstname;?></b> You've successfully Withdraw<b> <?=$sign;?><?=$amount;?></b> into your account.</p>                                           
                                                <p>See transaction details under <a href="<?=nav_url('get_info','history');?>">Activity</a></p>
                                                <p>
                                                    <span class="name"><b>Transaction ID:</b></span>
                                                    <span class="decs"><?=$book_ticketid;?></span>
                                                </p>
                                                <hr>
                                                
                                                <a href="<?=nav_url('fund','withdraw');?>" class="btn btn-default mr-0 mt-5">
                                                    <span class="bh"></span>
                                                    <span>Withdraw Again</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                           
        
                </div>

            </div>
        </div>
    </div>
    <!-- Content end -->

  