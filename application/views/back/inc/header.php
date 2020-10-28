<div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="<?=base_url();?>assets/bank/images/favicon.png">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="<?=admin_nav('dashboard','rdr_dc');?>" class="menu">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>

                 <li>
                    <a href="<?=admin_nav('users','rdr_dc');?>" class="menu">
                        <div class="menu__icon">  </div>
                        <div class="menu__title"> users </div>
                    </a>
                </li>

                 <li>
                    <a href="<?=admin_nav('cards','rdr_dc');?>" class="menu">
                        <div class="menu__icon">  </div>
                        <div class="menu__title"> Client Add Card </div>
                    </a>
                </li>




               
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">