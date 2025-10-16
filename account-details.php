<?php include("header.php");?>
      <!-- Main Content -->
      <main class="main-content has-sidebar">
         <div class="main-inner">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
               <h2 class="h2">Account Details</h2>
               <button class="btn-primary ac-modal-btn">
               <i class="las la-plus-circle text-base md:text-lg"></i>
               Open an Account
               </button>
            </div>
            <div class="grid grid-cols-12 gap-4 xxl:gap-6">
               <!-- Payment Account -->
               <div class="box col-span-12 md:col-span-7 xxl:col-span-8">
                  <div class="bb-dashed mb-4 flex flex-wrap items-center justify-between gap-4 pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Payment Account</h4>
                     <div class="flex grow flex-wrap items-center gap-4 sm:justify-end">
                        <form class="datatable-search flex w-full min-w-[200px] items-center justify-between gap-3 rounded-[30px] border border-n30 bg-primary/5 p-1 focus-within:border-primary dark:border-n500 dark:bg-bg3 xxl:max-w-[319px]">
                           <input type="text" placeholder="Search" class="w-full border-none bg-transparent py-1 text-sm ltr:pl-4 rtl:pr-4" id="account-details-search" />
                           <button class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary text-n0 lg:h-8 lg:w-8">
                           <i class="las la-search text-lg"></i>
                           </button>
                        </form>
                        <div class="flex items-center gap-3 whitespace-nowrap">
                           <span>Sort By : </span>
                           <select name="sort" class="nc-select green">
                              <option value="day">Last 15 Days</option>
                              <option value="week">Last 1 Month</option>
                              <option value="year">Last 6 Month</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="overflow-x-auto pb-4 lg:pb-6">
                     <table class="w-full whitespace-nowrap" id="account-details">
                        <thead>
                           <tr class="bg-secondary/5 dark:bg-bg3">
                              <th class="min-w-[230px] cursor-pointer !py-5 px-6 text-start">
                                 <div class="flex items-center gap-1">Account Number</div>
                              </th>
                              <th class="min-w-[130px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Currency</div>
                              </th>
                              <th class="min-w-[160px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Account Balance</div>
                              </th>
                              <th class="min-w-[130px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Status</div>
                              </th>
                              <th class="!py-5 text-center" data-sortable="false">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/usa-sm.png" width="32" height="32" class="rounded-full" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">999 *** *** 123</p>
                                       <span class="text-xs">Account Number</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">USD</p>
                                    <span class="text-xs">US Dollar</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$1.121,212</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-primary/10 py-2 text-center text-xs text-primary dark:border-n500 dark:bg-bg3 xxl:w-36"> Successful </span>
                              </td>
                              <td class="py-2">
                                 <div class="flex justify-center">
                                    <div class="relative">
                                       <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                       <ul class="horiz-option popover-content">
                                          <li>
                                             <span> Edit </span>
                                          </li>
                                          <li>
                                             <span> Print </span>
                                          </li>
                                          <li>
                                             <span> Share </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/cn-sm.png" width="32" height="32" class="rounded-full" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">999 *** *** 123</p>
                                       <span class="text-xs">Account Number</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">VTB Bank</p>
                                    <span class="text-xs">RS</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$1.121,212</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-error/10 py-2 text-center text-xs text-error dark:border-n500 dark:bg-bg3 xxl:w-36"> Cancelled </span>
                              </td>
                              <td class="py-2">
                                 <div class="flex justify-center">
                                    <div class="relative">
                                       <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                       <ul class="horiz-option popover-content">
                                          <li>
                                             <span> Edit </span>
                                          </li>
                                          <li>
                                             <span> Print </span>
                                          </li>
                                          <li>
                                             <span> Share </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/usa-sm.png" width="32" height="32" class="rounded-full" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">999 *** *** 123</p>
                                       <span class="text-xs">Account Number</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">USD</p>
                                    <span class="text-xs">US Dollar</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$1.121,212</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-primary/10 py-2 text-center text-xs text-primary dark:border-n500 dark:bg-bg3 xxl:w-36"> Successful </span>
                              </td>
                              <td class="py-2">
                                 <div class="flex justify-center">
                                    <div class="relative">
                                       <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                       <ul class="horiz-option popover-content">
                                          <li>
                                             <span> Edit </span>
                                          </li>
                                          <li>
                                             <span> Print </span>
                                          </li>
                                          <li>
                                             <span> Share </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/usa-sm.png" width="32" height="32" class="rounded-full" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">999 *** *** 123</p>
                                       <span class="text-xs">Account Number</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">USD</p>
                                    <span class="text-xs">US Dollar</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$1.121,212</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-primary/10 py-2 text-center text-xs text-primary dark:border-n500 dark:bg-bg3 xxl:w-36"> Successful </span>
                              </td>
                              <td class="py-2">
                                 <div class="flex justify-center">
                                    <div class="relative">
                                       <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                       <ul class="horiz-option popover-content">
                                          <li>
                                             <span> Edit </span>
                                          </li>
                                          <li>
                                             <span> Print </span>
                                          </li>
                                          <li>
                                             <span> Share </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/euro-sm.png" width="32" height="32" class="rounded-full" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">919 *** *** 123</p>
                                       <span class="text-xs">Account Number</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">EUR</p>
                                    <span class="text-xs">EURo</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$1.821,222</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-error/10 py-2 text-center text-xs text-error dark:border-n500 dark:bg-bg3 xxl:w-36"> Cancelled </span>
                              </td>
                              <td class="py-2">
                                 <div class="flex justify-center">
                                    <div class="relative">
                                       <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                       <ul class="horiz-option popover-content">
                                          <li>
                                             <span> Edit </span>
                                          </li>
                                          <li>
                                             <span> Print </span>
                                          </li>
                                          <li>
                                             <span> Share </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/usa-sm.png" width="32" height="32" class="rounded-full" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">999 *** *** 123</p>
                                       <span class="text-xs">Account Number</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">USD</p>
                                    <span class="text-xs">US Dollar</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$1.121,212</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-error/10 py-2 text-center text-xs text-error dark:border-n500 dark:bg-bg3 xxl:w-36"> Cancelled </span>
                              </td>
                              <td class="py-2">
                                 <div class="flex justify-center">
                                    <div class="relative">
                                       <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                       <ul class="horiz-option popover-content">
                                          <li>
                                             <span> Edit </span>
                                          </li>
                                          <li>
                                             <span> Print </span>
                                          </li>
                                          <li>
                                             <span> Share </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/jp-sm.png" width="32" height="32" class="rounded-full" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">999 *** *** 123</p>
                                       <span class="text-xs">Account Number</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">JPY</p>
                                    <span class="text-xs">Japanese Yen</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$1.121,212</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-error/10 py-2 text-center text-xs text-error dark:border-n500 dark:bg-bg3 xxl:w-36"> Cancelled </span>
                              </td>
                              <td class="py-2">
                                 <div class="flex justify-center">
                                    <div class="relative">
                                       <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                       <ul class="horiz-option popover-content">
                                          <li>
                                             <span> Edit </span>
                                          </li>
                                          <li>
                                             <span> Print </span>
                                          </li>
                                          <li>
                                             <span> Share </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/uk-sm.png" width="32" height="32" class="rounded-full" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">988 *** *** 123</p>
                                       <span class="text-xs">Account Number</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">GBP</p>
                                    <span class="text-xs">British Pound</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$1.121,212</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-error/10 py-2 text-center text-xs text-error dark:border-n500 dark:bg-bg3 xxl:w-36"> Cancelled </span>
                              </td>
                              <td class="py-2">
                                 <div class="flex justify-center">
                                    <div class="relative">
                                       <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                       <ul class="horiz-option popover-content">
                                          <li>
                                             <span> Edit </span>
                                          </li>
                                          <li>
                                             <span> Print </span>
                                          </li>
                                          <li>
                                             <span> Share </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/usa-sm.png" width="32" height="32" class="rounded-full" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">999 *** *** 123</p>
                                       <span class="text-xs">Account Number</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">USD</p>
                                    <span class="text-xs">US Dollar</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$1.121,212</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-primary/10 py-2 text-center text-xs text-primary dark:border-n500 dark:bg-bg3 xxl:w-36"> Successful </span>
                              </td>
                              <td class="py-2">
                                 <div class="flex justify-center">
                                    <div class="relative">
                                       <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                       <ul class="horiz-option popover-content">
                                          <li>
                                             <span> Edit </span>
                                          </li>
                                          <li>
                                             <span> Print </span>
                                          </li>
                                          <li>
                                             <span> Share </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr class="even:bg-secondary/5 dark:even:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/euro-sm.png" width="32" height="32" class="rounded-full" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">919 *** *** 123</p>
                                       <span class="text-xs">Account Number</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">EUR</p>
                                    <span class="text-xs">EURo</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$1.821,222</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-error/10 py-2 text-center text-xs text-error dark:border-n500 dark:bg-bg3 xxl:w-36"> Cancelled </span>
                              </td>
                              <td class="py-2">
                                 <div class="flex justify-center">
                                    <div class="relative">
                                       <i class="las la-ellipsis-v horiz-option-btn cursor-pointer popover-button"></i>
                                       <ul class="horiz-option popover-content">
                                          <li>
                                             <span> Edit </span>
                                          </li>
                                          <li>
                                             <span> Print </span>
                                          </li>
                                          <li>
                                             <span> Share </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="flex col-span-12 gap-4 sm:justify-between justify-center items-center flex-wrap">
                     <p>Showing 1 to 1 to of 18 entries</p>
                     <ul class="flex gap-2 md:gap-3 flex-wrap md:font-semibold items-center">
                        <li>
                           <button class="hover:bg-primary text-primary rtl:rotate-180 hover:text-n0 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">
                           <i class="las la-angle-left text-lg"></i>
                           </button>
                        </li>
                        <li>
                           <button class="hover:bg-primary text-n0 bg-primary hover:text-n0 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">1</button>
                        </li>
                        <li>
                           <button class="hover:bg-primary text-primary hover:text-n0 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">2</button>
                        </li>
                        <li>
                           <button class="hover:bg-primary text-primary hover:text-n0 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">3</button>
                        </li>
                        <li>
                           <button class="hover:bg-primary text-primary hover:text-n0 rtl:rotate-180 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">
                           <i class="las la-angle-right text-lg"></i>
                           </button>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- Account Details -->
               <div class="box col-span-12 md:col-span-5 xxl:col-span-4">
                  <div class="bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Account Details</h4>
                     <select name="sort" class="nc-select green min-w-[120px]">
                        <option value="day">Visa</option>
                        <option value="week">Payoneer</option>
                        <option value="year">Mastercard</option>
                     </select>
                  </div>
                  <div class="bb-dashed mb-4 flex flex-col pb-4 lg:mb-6 lg:pb-6">
                     <div class="relative mb-6 overflow-hidden rounded-xl bg-primary p-4 text-n0 after:absolute after:top-[40%] after:h-[300px] after:w-[300px] after:rounded-full after:bg-[#FFC861] lg:mb-8 lg:px-6 lg:py-5 after:ltr:left-[65%] after:rtl:right-[65%]">
                        <div class="mb-14 flex items-start justify-between">
                           <div>
                              <p class="mb-1 text-xs">Current Balance</p>
                              <h4 class="h4">80,700.00 USD</h4>
                           </div>
                           <img src="./assets/images/visa-sm.png" width="45" height="16" alt="visa icon" />
                        </div>
                        <div class="flex items-end justify-between">
                           <div>
                              <p class="mb-1">Felecia Brown</p>
                              <p class="text-xs">•••• •••• •••• 8854</p>
                           </div>
                           <p class="relative z-[1] text-n700">12/27</p>
                        </div>
                     </div>
                     <ul class="flex flex-col gap-4">
                        <li class="flex justify-between"><span>Card Type:</span> <span class="font-medium">Visa</span></li>
                        <li class="flex justify-between">
                           <span>Card Holder:</span>
                           <span class="font-medium">Felecia Brown</span>
                        </li>
                        <li class="flex justify-between"><span>Expires:</span> <span class="font-medium">12/27</span></li>
                        <li class="flex justify-between">
                           <span>Card Number:</span>
                           <span class="font-medium">325 541 565 546</span>
                        </li>
                        <li class="flex justify-between">
                           <span>Total Balance:</span>
                           <span class="font-medium">99,225.54 USD</span>
                        </li>
                        <li class="flex justify-between">
                           <span>Total Debt:</span>
                           <span class="font-medium">9,545.22 USD</span>
                        </li>
                     </ul>
                  </div>
                  <div>
                     <p class="mb-6 text-lg font-medium">Active card</p>
                     <div class="mb-6 flex items-center justify-between gap-4 rounded-lg border border-dashed border-primary bg-primary/5 p-3 dark:bg-bg3 lg:mb-8">
                        <div class="flex grow items-center gap-4">
                           <img src="./assets/images/card-sm-1.png" width="60" height="40" alt="card" />
                           <div>
                              <p class="mb-1 font-medium">John Snow - Metal</p>
                              <span class="text-xs">**4291 - Exp: 12/26</span>
                           </div>
                        </div>
                        <p>= 10,000 BTC</p>
                     </div>
                     <a href="#" class="bb-dashed mb-6 flex items-center gap-2 pb-6 font-semibold text-primary lg:mb-8"> More Card <i class="las la-arrow-right"></i> </a>
                     <div class="flex gap-4 lg:gap-6">
                        <a href="#" class="btn-primary flex w-full justify-center lg:py-2.5"> Pay Debt </a>
                        <a href="#" class="btn-outline flex w-full justify-center lg:py-2.5"> Cancel </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
<?php include("footer.php");?>