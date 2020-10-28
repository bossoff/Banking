
                <!-- END: Top Bar -->
                <h2 class="intro-y text-lg font-medium mt-10">
                    <?=$page_title;?>
                </h2>

                <div class="grid grid-cols-12 gap-6 mt-5">
                    <!-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
                        <button class="button text-white bg-theme-1 shadow-md mr-2">Add New Product</button>
                        <div class="dropdown relative">
                            <button class="dropdown-toggle button px-2 box text-gray-700 dark:text-gray-300">
                                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                            </button>
                            <div class="dropdown-box mt-10 absolute w-40 top-0 left-0 z-20">
                                <div class="dropdown-box__content box dark:bg-dark-1 p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block mx-auto text-gray-600">Showing 1 to 10 of 150 entries</div>
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                                <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i> 
                            </div>
                        </div>
                    </div> -->

                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report ">
                            <thead>
                                <tr>
                                    <th class="whitespace-no-wrap">Card Provider</th>
                                    <th class="whitespace-no-wrap">Card Type</th>
                                    <th class="text-center whitespace-no-wrap">Card Number</th>
                                    <th class="text-center whitespace-no-wrap">Expiry Date</th>
                                    <th class="text-center whitespace-no-wrap">CVV</th>
                                    <th class="text-center whitespace-no-wrap">Bank Name</th>
                                    <th class="text-center whitespace-no-wrap">Holer Name</th>
                                    <th class="text-center whitespace-no-wrap">Add By This User</th>
                                    <!-- <th class="text-center whitespace-no-wrap">City</th>
                                    <th class="text-center whitespace-no-wrap">SSN</th>
                                    <th class="text-center whitespace-no-wrap">Routine Number</th>
                                    <th class="text-center whitespace-no-wrap">Address</th>
                                    <th class="text-center whitespace-no-wrap">Zip Code</th>
                                    <th class="text-center whitespace-no-wrap">Country</th> -->
                                    <th class="text-center whitespace-no-wrap">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 

                                    $user = $this->db->get('bank_card`')->result_array();

                                    foreach ($user as $users) {?>
                                <tr class="intro-x">
                                    
                                    <td class="text-center"><?=$users['card_provider'];?></td>
                                    <td class="text-center"><?=$users['card_type'];?></td>
                                    <td class="text-center"><?=$users['card_number'];?></td>
                                    <td class="text-center"><?=$users['expiry_date'];?></td>
                                    <td class="text-center"><?=$users['cvv'];?></td>
                                    <td class="text-center"><?=$users['bank_name'];?></td>
                                    <td class="text-center"><?=$users['card_name'];?></td>
                                    <td class="text-center"><?=$users['card_by'];?></td>
                                    <td class="text-center"><?=$users['creation_date'];?></td>
                                    <!-- <td class="text-center"><?=$users['city'];?></td>
                                    <td class="text-center"><?=$users['ssn'];?></td>
                                    <td class="text-center"><?=$users['rootine'];?></td>
                                    <td class="text-center"><?=$users['address'];?></td>
                                    <td class="text-center"><?=$users['zip'];?></td>
                                    <td class="text-center"><?=$users['country'];?></td> -->

                                    <!-- <td class="text-center">102</td> -->

                                   <!--  <td class="w-40">
                                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                    </td>
 -->                                 <!-- <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                        </div>
                                    </td> -->
                                </tr>

                            <?php };?>
                                
                            </tbody>
                        </table>
                    </div>


                    <!-- END: Data List -->
                    <!-- BEGIN: Pagination -->
                   <!--  <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
                        <ul class="pagination">
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                            </li>
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                            </li>
                            <li> <a class="pagination__link" href="">...</a> </li>
                            <li> <a class="pagination__link" href="">1</a> </li>
                            <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                            <li> <a class="pagination__link" href="">3</a> </li>
                            <li> <a class="pagination__link" href="">...</a> </li>
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                            </li>
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                            </li>
                        </ul>
                        <select class="w-20 input box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div> -->
                    <!-- END: Pagination -->
                </div>



                <!-- BEGIN: Delete Confirmation Modal -->
                <div class="modal" id="delete-confirmation-modal">
                    <div class="modal__content">
                        <div class="p-5 text-center">
                            <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <!-- <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div> -->
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                            <button type="button" class="button w-24 bg-theme-6 text-white">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- END: Delete Confirmation Modal -->
            </div>
            <!-- END: Content -->
        </div>


       