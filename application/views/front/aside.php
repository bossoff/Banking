
                    <!-- Left sidebar -->
                    <aside class="col-lg-3 sidebar">
                        <div class="widget admin-widget p-0">
                            <div class="Profile-menu">
                                <ul class="nav secondary-nav">
                                    <li class="nav-item <?=is_active('dashboard');?>"><a class="nav-link" href="<?=nav_url('api','dashboard');?>"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>

                                    <li class="nav-item <?=is_active('profile');?>"><a class="nav-link" href="<?=nav_url('account','profile');?>"><i class="fab fa-autoprefixer"></i>Account</a></li>

                                    <!-- <li class="nav-item"><a class="nav-link" href="profile-bank.html"><i class="fas fa-university"></i>Bank Accounts</a></li> -->

                                    <li class="nav-item <?=is_active('bank_cards');?>"><a class="nav-link" href="<?=nav_url('get','bank_cards');?>"><i class="fas fa-building"></i>Bank Cards</a></li>

                                   <!-- <li class="nav-item"><a class="nav-link" href="pay-contact.html"><i class="far fa-list-alt"></i>Contacts List</a></li>
                                    <li class="nav-item"><a class="nav-link" href="deposit-money.html"><i class="fas fa-plus"></i>Deposit Money</a></li>
                                    <li class="nav-item"><a class="nav-link" href="send-money.html"><i class="far fa-paper-plane"></i>Send Money</a></li> -->

                                    <li class="nav-item <?=is_active('card_request');?>"><a class="nav-link" href="<?=nav_url('req','card_request');?>"><i class="fas fa-piggy-bank"></i>Card Request</a></li>

                                    <li class="nav-item <?=is_active('withdraw');?>"><a class="nav-link" href="<?=nav_url('fund','withdraw');?>"><i class="fas fa-wallet"></i>Withdraw Section</a></li>

                                    <li class="nav-item <?=is_active('transaction');?>"><a class="nav-link" href="<?=nav_url('get_info','transaction');?>"><i class="fas fa-list-ul"></i>Transaction</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?=nav_url('site','settings');?>"><i class="fas fa-cog"></i>Setting</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?=base_url();?>auth/checkout"><i class="fas fa-paper-plane"></i>Logout</a></li>
                                    <!-- <li class="nav-item"><a class="nav-link" href="<?=base_url();?>auth/checkout"><i class="icon icon-user"></i>Logout</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </aside>  


                    <!-- <?//=base_url();?>bank/in/account/<?=$firstname;?>/profile/ -->

  

        
                    <!-- Left Panel End -->
