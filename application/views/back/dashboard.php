                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Welcome!, <?=ucfirst($firstname);?>
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Input -->
                        

                        <div class="intro-y box">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Create Users
                                </h2>                                
                            </div>


                            <div class="p-5" id="input">
                                <div class="preview">
                                        <?php
                                        if($this->session->flashdata('er')){?>
                                            <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-6 text-white">
                                                <?=$this->session->flashdata('er');?> 
                                            </div>
                                        <?php } ;?>

                                        <?php
                                        if($this->session->flashdata('success')){?>
                                            <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-9 text-white">
                                                <?=$this->session->flashdata('success');?> 
                                            </div>
                                        <?php } ;?>


                                    <form action="<?=base_url();?>admin/control/create" method="post" autocomplete="on" class="form-vertical form-groups-bordered validate" enctype="multipart/form-data">


                                            <div class="col-span-12 xl:col-span-4">
                                                <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                                    <div class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                                        <img class="rounded-md" alt="" src="<?=base_url();?>assets/bank/images/profile.jpg">
                                                        <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                    </div>
                                                    <div class="w-40 mx-auto cursor-pointer relative mt-5">
                                                        <button type="button" class="button w-full bg-theme-1 text-white">Change Photo</button>
                                                        <input type="file" name="file_images" required="" class="w-full h-full top-0 left-0 absolute opacity-0">
                                                    </div>
                                                </div>
                                            </div>
                                        <div>
                                            <label>Firstname</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="firstname" placeholder="Firstname">
                                        </div>

                                        <div>
                                            <label>Lastname</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="lastname" placeholder="Lastname">
                                        </div>

                                        <div>
                                            <label>Phone Number</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="phone" placeholder="Phone Number">
                                        </div>

                                        <div>
                                            <label>Email</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="email" placeholder="Email">
                                        </div>

                                        <div>
                                            <label>Gender </label>
                                            <select name="gender" class="input w-full border mt-2">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label>Date of Birth</label>
                                            <input type="date" class="input w-full border mt-2" required="" name="dob" placeholder="Date of Birth">
                                        </div>
                                        
                                        <div>
                                            <label>Mother </label>
                                            <input type="text" class="input w-full border mt-2" required="" name="mother" placeholder="Mother ">
                                        </div>


                                        <div>
                                            <label>City</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="city" placeholder="City">
                                        </div>


                                        <div>
                                            <label>Address</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="address" placeholder="Address">
                                        </div>

                                        <div>
                                            <label>SSN</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="ssn" placeholder="SSN">
                                        </div>

                                        <div>
                                            <label>Routine Number</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="rootine" placeholder="Routine Number">
                                        </div>


                                        <div>
                                            <label>Zip Code</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="zip" placeholder="Zip Code">
                                        </div>


                                        <div>
                                            <label>Country</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="country" placeholder="Country">
                                        </div>

                                        <div>
                                            <label>State</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="state" placeholder="State">
                                        </div>

                                        <div>
                                            <label>State</label>
                                            <input type="text" class="input w-full border mt-2" required="" name="state" placeholder="State">
                                        </div>                                          
                                        
                                        <div class="mt-3">
                                            <label>Password</label>
                                            <input type="password" name="password" required="" class="input w-full border mt-2" placeholder="Password">
                                        </div>
                                        
                                        
                                        <button type="submit" class="button bg-theme-1 text-white mt-5">Register User</button>                                
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END: Input -->                       
                       
                    </div>









                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Vertical Form -->
                        <div class="intro-y box">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Load Money into the user account 
                                </h2>                                
                            </div>
                            <div class="p-5" id="vertical-form">
                                <div class="preview">
                                   
                                        <?php
                                        if($this->session->flashdata('l_success')){?>
                                            <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-9 text-white">
                                                <?=$this->session->flashdata('l_success');?> 
                                            </div>
                                        <?php } ;?>


                                    <form action="<?=base_url();?>admin/control/set_load" method="post" autocomplete="on">
                                            <div>
                                                <label>Select User Name </label>
                                                <select name="l_users"  required="" class="input w-full border mt-2">

                                                    <option  required="" value="">- Select - </option>
                                                    <?php 

                                                        $user = $this->db->get_where('users',['user_level' => 1])->result_array();

                                                        foreach ($user as $users) {?>
                                                             <option value="<?=$users['uid'];?>"><?=$users['firstname'].' '.$users['lastname'];?></option>
                                                        
                                                        <?php };?>
                                                     
                                                   
                                                </select>
                                            </div>

                                            <div>
                                                <label>Currency Sign</label>
                                                <input type="text" name="sign" class="input w-full border mt-2"  required="" placeholder="Currency Sign e.g($)">
                                            </div>

                                            <div>
                                                <label>Total Ballance</label>
                                                <input type="number" name="ballance" class="input w-full border mt-2"  required="" placeholder="Total Ballance">
                                            </div>

                                            <div>
                                                <label>Book Ballance</label>
                                                <input type="number" name="book_ballance" class="input w-full border mt-2"  required="" placeholder="Book Ballance">
                                            </div>

                                            <div>
                                                <label>Credit Limit</label>
                                                <input type="number" name="credit_limit" class="input w-full border mt-2"  required="" placeholder="Credit Limit">
                                            </div>

                                            <div>
                                                <label>Withdraw Limit</label>
                                                <input type="number" name="withdraw_limit" class="input w-full border mt-2"  required="" placeholder="Withdraw Limit">
                                            </div>

                                            <div>
                                                <label>Savings</label>
                                                <input type="number" name="savings" class="input w-full border mt-2"  required="" placeholder="Savings">
                                            </div>                                          

                                            
                                            <button type="submit" class="button bg-theme-1 text-white mt-5">Load Account</button>

                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        <!-- END: Vertical Form -->
                        
                        
                    </div>
                </div>