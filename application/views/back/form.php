                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Regular Form
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Input -->
                        <div class="intro-y box">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Input
                                </h2>
                                <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                    <div class="mr-3">Show code</div>
                                    <input data-target="#input" class="show-code input input--switch border" type="checkbox">
                                </div>
                            </div>
                            <div class="p-5" id="input">
                                <div class="preview">
                                    <div>
                                        <label>Input Text</label>
                                        <input type="text" class="input w-full border mt-2" placeholder="Input text">
                                    </div>
                                    <div class="mt-3">
                                        <label>Rounded</label>
                                        <input type="text" class="input w-full rounded-full border mt-2" placeholder="Rounded">
                                    </div>
                                    <div class="mt-3">
                                        <label>With Help</label>
                                        <input type="text" class="input w-full border mt-2" placeholder="With help">
                                        <div class="text-xs text-gray-600 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                    </div>
                                    <div class="mt-3">
                                        <label>Password</label>
                                        <input type="password" class="input w-full border mt-2" placeholder="Password">
                                    </div>
                                    <div class="mt-3">
                                        <label>Disabled</label>
                                        <input type="text" class="input w-full border mt-2 bg-gray-100 cursor-not-allowed" placeholder="Disabled" disabled>
                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-input" class="copy-code button button--sm border flex items-center text-gray-700 dark:border-dark-5 dark:text-gray-300"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                    <div class="overflow-y-auto h-64 mt-3">
                                        <pre class="source-preview" id="copy-input"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabelHTMLCloseTagInput TextHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagRoundedHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full rounded-full border mt-2&quot; placeholder=&quot;Rounded&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagWith HelpHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;With help&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;text-xs text-gray-600 mt-2&quot;HTMLCloseTagLorem Ipsum is simply dummy text of the printing and typesetting industry.HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;password&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Password&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagDisabledHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2 bg-gray-100 cursor-not-allowed&quot; placeholder=&quot;Disabled&quot; disabledHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Input -->
                        <!-- BEGIN: Input Sizing -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Input Sizing
                                </h2>
                                <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                    <div class="mr-3">Show code</div>
                                    <input data-target="#input-sizing" class="show-code input input--switch border" type="checkbox">
                                </div>
                            </div>
                            <div class="p-5" id="input-sizing">
                                <div class="preview">
                                    <input type="text" class="input input--sm w-full border" placeholder="Input small">
                                    <input type="text" class="input w-full border mt-2" placeholder="Input normal">
                                    <input type="text" class="input input--lg w-full border mt-2" placeholder="Input large">
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-input-sizing" class="copy-code button button--sm border flex items-center text-gray-700 dark:border-dark-5 dark:text-gray-300"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                    <div class="overflow-y-auto h-64 mt-3">
                                        <pre class="source-preview" id="copy-input-sizing"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTaginput type=&quot;text&quot; class=&quot;input input--sm w-full border&quot; placeholder=&quot;Input small&quot;HTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Input normal&quot;HTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input input--lg w-full border mt-2&quot; placeholder=&quot;Input large&quot;HTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Input Sizing -->
                        <!-- BEGIN: Input Groups -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Input Groups
                                </h2>
                                <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                    <div class="mr-3">Show code</div>
                                    <input data-target="#input-groups" class="show-code input input--switch border" type="checkbox">
                                </div>
                            </div>
                            <div class="p-5" id="input-groups">
                                <div class="preview">
                                    <div class="relative">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">@</div>
                                        <input type="text" class="input pl-12 w-full border col-span-4" placeholder="Email">
                                    </div>
                                    <div class="relative mt-2">
                                        <input type="text" class="input pr-12 w-full border col-span-4" placeholder="Price">
                                        <div class="absolute top-0 right-0 rounded-r w-10 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">.00</div>
                                    </div>
                                    <div class="relative mt-2">
                                        <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">@</div>
                                        <input type="text" class="input px-12 w-full border col-span-4" placeholder="Price">
                                        <div class="absolute top-0 right-0 rounded-r w-10 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600">.00</div>
                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-input-groups" class="copy-code button button--sm border flex items-center text-gray-700 dark:border-dark-5 dark:text-gray-300"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                    <div class="overflow-y-auto h-64 mt-3">
                                        <pre class="source-preview" id="copy-input-groups"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;relative&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600&quot;HTMLCloseTag@HTMLOpenTag/divHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input pl-12 w-full border col-span-4&quot; placeholder=&quot;Email&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;relative mt-2&quot;HTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input pr-12 w-full border col-span-4&quot; placeholder=&quot;Price&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;absolute top-0 right-0 rounded-r w-10 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600&quot;HTMLCloseTag.00HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;relative mt-2&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600&quot;HTMLCloseTag@HTMLOpenTag/divHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input px-12 w-full border col-span-4&quot; placeholder=&quot;Price&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;absolute top-0 right-0 rounded-r w-10 h-full flex items-center justify-center bg-gray-100 dark:bg-dark-1 dark:border-dark-4 border text-gray-600&quot;HTMLCloseTag.00HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Input Groups -->
                        <!-- BEGIN: Input State -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Input State
                                </h2>
                                <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                    <div class="mr-3">Show code</div>
                                    <input data-target="#input-state" class="show-code input input--switch border" type="checkbox">
                                </div>
                            </div>
                            <div class="p-5" id="input-state">
                                <div class="preview">
                                    <div>
                                        <label>Input Success</label>
                                        <input type="text" class="input w-full border border-theme-9 mt-2" placeholder="Input text">
                                        <div class="w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                            <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                            <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                            <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                            <div class="col-span-3 h-full rounded bg-gray-200 dark:bg-dark-1"></div>
                                        </div>
                                        <div class="text-theme-9 mt-2">Strong password</div>
                                    </div>
                                    <div class="mt-3">
                                        <label>Input Warning</label>
                                        <input type="text" class="input w-full border border-theme-12 mt-2" placeholder="Input text">
                                        <div class="text-theme-12 mt-2">Attempting to reconnect to server...</div>
                                    </div>
                                    <div class="mt-3">
                                        <label>Input Error</label>
                                        <input type="text" class="input w-full border border-theme-6 mt-2" placeholder="Input text">
                                        <div class="text-theme-6 mt-2">This field is required</div>
                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-input-state" class="copy-code button button--sm border flex items-center text-gray-700 dark:border-dark-5 dark:text-gray-300"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                    <div class="overflow-y-auto h-64 mt-3">
                                        <pre class="source-preview" id="copy-input-state"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabelHTMLCloseTagInput SuccessHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border border-theme-9 mt-2&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;w-full grid grid-cols-12 gap-4 h-1 mt-3&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-3 h-full rounded bg-theme-9&quot;HTMLCloseTagHTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-3 h-full rounded bg-theme-9&quot;HTMLCloseTagHTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-3 h-full rounded bg-theme-9&quot;HTMLCloseTagHTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-3 h-full rounded bg-gray-200 dark:bg-dark-1&quot;HTMLCloseTagHTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-theme-9 mt-2&quot;HTMLCloseTagStrong passwordHTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagInput WarningHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border border-theme-12 mt-2&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;text-theme-12 mt-2&quot;HTMLCloseTagAttempting to reconnect to server...HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagInput ErrorHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border border-theme-6 mt-2&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;text-theme-6 mt-2&quot;HTMLCloseTagThis field is requiredHTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Input State -->
                        <!-- BEGIN: Select Options -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Select Options
                                </h2>
                                <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                    <div class="mr-3">Show code</div>
                                    <input data-target="#select-options" class="show-code input input--switch border" type="checkbox">
                                </div>
                            </div>
                            <div class="p-5" id="select-options">
                                <div class="preview">
                                    <div class="flex flex-col sm:flex-row items-center">
                                        <div class="sm:mt-2">
                                            <select class="input input--sm border mr-2">
                                                <option>Chris Evans</option>
                                                <option>Liam Neeson</option>
                                                <option>Daniel Craig</option>
                                            </select>
                                        </div>
                                        <div class="mt-2">
                                            <select class="input border mr-2">
                                                <option>Chris Evans</option>
                                                <option>Liam Neeson</option>
                                                <option>Daniel Craig</option>
                                            </select>
                                        </div>
                                        <div class="mt-2">
                                            <select class="input input--lg border mr-2">
                                                <option>Chris Evans</option>
                                                <option>Liam Neeson</option>
                                                <option>Daniel Craig</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-select-options" class="copy-code button button--sm border flex items-center text-gray-700 dark:border-dark-5 dark:text-gray-300"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                    <div class="overflow-y-auto h-64 mt-3">
                                        <pre class="source-preview" id="copy-select-options"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;flex flex-col sm:flex-row items-center&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;sm:mt-2&quot;HTMLCloseTag HTMLOpenTagselect class=&quot;input input--sm border mr-2&quot;HTMLCloseTag HTMLOpenTagoptionHTMLCloseTagChris EvansHTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTagLiam NeesonHTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTagDaniel CraigHTMLOpenTag/optionHTMLCloseTag HTMLOpenTag/selectHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-2&quot;HTMLCloseTag HTMLOpenTagselect class=&quot;input border mr-2&quot;HTMLCloseTag HTMLOpenTagoptionHTMLCloseTagChris EvansHTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTagLiam NeesonHTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTagDaniel CraigHTMLOpenTag/optionHTMLCloseTag HTMLOpenTag/selectHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-2&quot;HTMLCloseTag HTMLOpenTagselect class=&quot;input input--lg border mr-2&quot;HTMLCloseTag HTMLOpenTagoptionHTMLCloseTagChris EvansHTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTagLiam NeesonHTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTagDaniel CraigHTMLOpenTag/optionHTMLCloseTag HTMLOpenTag/selectHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Select Options -->
                    </div>




                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Vertical Form -->
                        <div class="intro-y box">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Vertical Form
                                </h2>
                                <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                                    <div class="mr-3">Show code</div>
                                    <input data-target="#vertical-form" class="show-code input input--switch border" type="checkbox">
                                </div>
                            </div>

                            <div class="p-5" id="vertical-form">
                                <div class="preview">
                                    <div>
                                        <label>Email</label>
                                        <input type="email" class="input w-full border mt-2" placeholder="example@gmail.com">
                                    </div>
                                    <div class="mt-3">
                                        <label>Password</label>
                                        <input type="password" class="input w-full border mt-2" placeholder="secret">
                                    </div>
                                    <div class="flex items-center text-gray-700 dark:text-gray-500 mt-5">
                                        <input type="checkbox" class="input border mr-2" id="vertical-remember-me">
                                        <label class="cursor-pointer select-none" for="vertical-remember-me">Remember me</label>
                                    </div>
                                    <button type="button" class="button bg-theme-1 text-white mt-5">Login</button>
                                </div>
                                
                            </div>
                        </div>
                        <!-- END: Vertical Form -->


                        
                            </div>
                        </div>
                        <!-- END: Radio Button -->
                    </div>
                </div>