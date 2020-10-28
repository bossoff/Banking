        <header class="header02">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <div class="d-inline-flex ml-auto">
                                <a href="mailto:<?=$system_email1;?>" class="top-text"><i class="fas fa-phone-alt"></i> <?=$system_email1;?></a>
                                <a href="tel:<?=$system_phone1;?>" class="top-text"><i class="fas fa-envelope"></i> <?=$system_phone1;?></a>
                            </div>
                        </div>
                        <div class="col-sm-4 text-sm-right">
                            <div class="social-icons">
                                <a href="<?=$fb;?>"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?=$tw;?>"><i class="fab fa-twitter"></i></a>
                                <!-- <a href="#"><i class="fab fa-google-plus-g"></i></a> -->
                                <!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                                <a href="<?=$ig;?>"><i class="fab fa-instagram"></i> </a>
                            </div>
                            <div class="header-language">
                                    <a href="" class="langbtn">
                                        <span>EN</span>
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <!-- <ul class="list-unstyled dropdown-menu" style="display: none;">
                                        <li class="active"><a href="#">EN</a></li>
                                        <li><a href="#">FR</a></li>
                                        <li><a href="#">PT</a></li>
                                        <li><a href="#">IT</a></li>
                                    </ul> -->
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--header -->
            <div class="header-main">
                <div class="container d-flex align-items-center">
                    <a class="logo d-inline-flex" href="../index.html">
                        <img src="<?=base_url();?>assets/bank/images/logo.png" alt="" style="width: 80px;">
                    </a>
                    <nav class="primary-menu ml-auto">
                        <a id="mobile-menu-toggler" href=""><i class="fas fa-bars"></i></a>
                        <ul>
                            
                            <li class="has-menu-child pro-menu-drop">
                                <a href="#">
                                    <div class="header-pro-thumb">
                                        <img class="rounded-circle" src="<?=base_url();?><?=$images;?>" alt="">
                                    </div> <?=$firstname.' '.$lastname;?> <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu-md sub-menu profile-drop">
                                    <li class="dropdown-header">
                                        <div>
                                            <h5 class="hidden-xs m-b-0 text-primary text-ellipsis"><?=$firstname.' '.$lastname;?></h5>
                                            <div class="small text-muted"><span>Membership ID <?=$userid;?></span></div>
                                        </div>
                                    </li>
                                    <li>
                                        <hr class="mx-n3 mt-0">
                                    </li>
                                    <li class="nav__create-new-profile-link">
                                        <a href="<?=nav_url('account','profile');?>">
                                            <span>View personal profile</span>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="nav__dropdown-menu-items">
                                        <a href="<?=nav_url('site','settings');?>">
                                            <i class="icon icon-setting"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li class="nav__dropdown-menu-items">
                                        <a href="<?=base_url();?>auth/checkout"><i class="icon icon-logout"></i><span>Logout</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end main header-->
        </header>







        <!-- Admin Hero section-->
        <div class="hero-section">
            <div class="container">
                <div class="row  profile-complete-area">
                    <div class="col">
                        <div class="progress" data-percentage="50">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">
                                <div class="profile-thumb mt-3 mb-4">
                                    <img class="rounded-circle" src="<?=base_url();?><?=$images;?>" alt="">
                                    <div class="profile-thumb-edit verify-icon" data-toggle="tooltip" title="Profile Verified">
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="profile-name"><?=$firstname.' '.$lastname;?></p>
                    </div>
                    <div class="col">
                        <div class="profile-item">
                            <i class="fas fa-mobile-alt bg-icon"></i>
                            <i class="fas fa-check-circle Verified-icon"></i>
                            <p class="title">Mobile Added</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="profile-item">
                            <i class="fas fa-envelope bg-icon"></i>
                            <i class="fas fa-check-circle Verified-icon"></i>
                            <p class="title">Email Added</p>
                        </div>
                    </div>

                    <div class="col">
                        <a href="<?=nav_url('get','bank_cards');?>">
                            <div class="profile-item">
                                <i class="fas fa-university bg-icon"></i>
                                <?php 

                                    if($is_request==1){
                                        echo '<i class="fas fa-check-circle Verified-icon"></i>';
                                    }else{
                                
                                        echo '<i class="far fa-circle  Verified-icon"></i>';
                                    }

                                ?>
                                <p class="title">Bank Card Added</p>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?=nav_url('acounts','add_card');?>">
                            <div class="profile-item">
                                 <i class="fas fa-credit-card bg-icon"></i>
                                <?php 

                                    if($is_new_card==1){
                                        echo '<i class="fas fa-check-circle Verified-icon"></i>';
                                    }else{
                                
                                        echo '<i class="far fa-circle  Verified-icon"></i>';
                                    }

                                ?>
                                <p class="title">Add Card</p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- Admin End of Hero section-->





        <!-- Profile bar -->
        <div class="profilebar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="balance-area">
                            <select name="ctl00$ddlAccounts" class="custom-select" style="width:200px;">
                                <option selected="selected" value="00">Balance</option>                               
                               <?php
                                    if($is_new_card==0){
                                        echo ' <option selected="" value="04" style="background-color:red; color: #fff;">Master Card - XXXX-'.$lastpin.'</option>
                                        ';
                                    }else{
                                        echo '<option selected="" value="04" style="background-color:green; color: #fff;"><?=$card_provider;?> - XXXX-'.four_digit_pin($card_number).'</option>';
                                    }

                               ?>

                            </select>
                            <p class="total-blance">
                               <b> <?=$sign;?><?=number_format($ballance);?></b>
                                <a href="" class="reload-btn"><i class="fas fa-sync"></i></a>
                            </p>

                        </div>
                    </div>
                    <div class="col">
                        <div class="local-time">
                            <p><b>Local Time:</b> <?=date('h:i:s A', time());?></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="local-time">
                            <p><b>Current IP Address: </b><?=ip();?></p>
                        </div>
                    </div>
                    <div class="col notify-col text-right">
                        <!-- <div class="notify-btn"><a href="profile-notifications.html"><i class="far fa-bell"></i></a></div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Profile bar -->

        <!-- Admin Content Section  -->
        <div id="content" class="py-4">
            <div class="container">
                <div class="row">