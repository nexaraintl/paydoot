<?php include("header.php");?>
      <!-- Main Content -->
      <main class="main-content has-sidebar">
         <div class="main-inner">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
               <h2 class="h2">Account Overview</h2>
               <button class="btn-primary ac-modal-btn">
               <i class="las la-plus-circle text-base md:text-lg"></i>
               Open an Account
               </button>
            </div>
            <div class="grid grid-cols-12 gap-4 overflow-x-hidden xxl:gap-6">
               <!-- Payment Overview chart -->
               <div class="box col-span-12 overflow-x-hidden md:col-span-7 xxl:col-span-8">
                  <div class="bb-dashed mb-4 flex flex-wrap items-center justify-between gap-3 pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Payment Overview</h4>
                     <div class="flex items-center gap-2">
                        <p class="text-xs sm:text-sm md:text-base">Sort By :</p>
                        <select name="sort" class="nc-select green !min-w-[150px]">
                           <option value="day">Last Week</option>
                           <option value="week">Last Month</option>
                           <option value="year">Last Year</option>
                        </select>
                     </div>
                  </div>
                  <div class="account-payment-overview"></div>
               </div>
               <!-- account Balance -->
               <div class="box col-span-12 md:col-span-5 xxl:col-span-4">
                  <div class="bb-dashed mb-4 flex flex-wrap items-center justify-between gap-3 pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Account Balance</h4>
                     <div class="relative">
                        <i class="las la-ellipsis-h horiz-option-btn cursor-pointer popover-button"></i>
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
                  <div class="account-balance-chart"></div>
               </div>
               <!-- Deposites account -->
               <div class="box col-span-12 overflow-x-hidden md:col-span-7 xxl:col-span-8">
                  <div class="bb-dashed mb-4 flex flex-wrap items-center justify-between gap-3 pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Deposits Account</h4>
                     <div class="flex items-center gap-2">
                        <p class="text-xs sm:text-sm md:text-base">Sort By :</p>
                        <select name="sort" class="nc-select green !min-w-[160px]">
                           <option value="day">Last 15 Days</option>
                           <option value="week">Last 1 Month</option>
                           <option value="year">Last 6 Month</option>
                        </select>
                     </div>
                  </div>
                  <div class="deposits-account"></div>
               </div>
               <!-- Deposits balance -->
               <div class="box col-span-12 md:col-span-5 xxl:col-span-4">
                  <div class="bb-dashed mb-4 flex flex-wrap items-center justify-between gap-3 pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Deposits Balance</h4>
                     <div class="relative">
                        <i class="las la-ellipsis-h horiz-option-btn cursor-pointer popover-button"></i>
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
                  <div class="deposit-balance mx-auto max-w-[450px]">
                     <div class="deposits-balance-chart"></div>
                  </div>
               </div>
               <!-- Payment Accounts -->
               <div class="box col-span-12 md:col-span-7 xxl:col-span-8">
                  <div class="bb-dashed mb-4 flex flex-wrap items-center justify-between gap-4 pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Payment Account</h4>
                     <div class="flex grow flex-wrap items-center gap-4 sm:justify-end">
                        <form class="datatable-search flex w-full min-w-[200px] items-center justify-between gap-3 rounded-[30px] border border-n30 bg-primary/5 p-1 focus-within:border-primary dark:border-n500 dark:bg-bg3 xxl:max-w-[319px]">
                           <input type="text" placeholder="Search" class="w-full border-none bg-transparent py-1 text-sm ltr:pl-4 rtl:pr-4" id="payment-account-search" />
                           <button class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-primary text-n0 lg:h-8 lg:w-8">
                           <i class="las la-search text-lg"></i>
                           </button>
                        </form>
                        <div class="flex items-center gap-3 whitespace-nowrap">
                           <span>Sort By : </span>
                           <select name="sort" class="nc-select green !min-w-[160px]">
                              <option value="day">Last 15 Days</option>
                              <option value="week">Last 1 Month</option>
                              <option value="year">Last 6 Month</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="overflow-x-auto pb-4 lg:pb-6">
                     <table class="w-full whitespace-nowrap" id="payment-account">
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
               <!-- Your Accounts -->
               <div class="box col-span-12 md:col-span-5 xxl:col-span-4">
                  <div class="bb-dashed mb-4 flex flex-wrap items-center justify-between gap-4 pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Your Accounts</h4>
                     <div class="relative">
                        <i class="las la-ellipsis-h horiz-option-btn cursor-pointer popover-button"></i>
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
                  <div class="overflow-x-auto">
                     <table class="w-full whitespace-nowrap">
                        <thead>
                           <tr class="bg-secondary/5 dark:bg-bg3">
                              <th class="min-w-[300px] cursor-pointer px-6 py-5 text-start">
                                 <div class="flex items-center gap-1">Title</div>
                              </th>
                              <th class="min-w-[120px] cursor-pointer py-5 text-start">
                                 <div class="flex items-center gap-1">Amount</div>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="border-b border-n40 duration-500 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-1.png" width="60" height="40" class="rounded" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">John Snow - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$95,000.00</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                           </tr>
                           <tr class="border-b border-n40 duration-500 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-2.png" width="60" height="40" class="rounded" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">John Snow - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$95,000.00</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                           </tr>
                           <tr class="border-b border-n40 duration-500 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-3.png" width="60" height="40" class="rounded" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">John Snow - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$95,000.00</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                           </tr>
                           <tr class="border-b border-n40 duration-500 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-4.png" width="60" height="40" class="rounded" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">Jane Alam - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$95,000.00</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                           </tr>
                           <tr class="border-b border-n40 duration-500 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-5.png" width="60" height="40" class="rounded" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">John Snow - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$95,000.00</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                           </tr>
                           <tr class="border-b border-n40 duration-500 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-6.png" width="60" height="40" class="rounded" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">John Cina - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$95,000.00</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                           </tr>
                           <tr class="border-b border-n40 duration-500 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-7.png" width="60" height="40" class="rounded" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">John Snow - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$95,000.00</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                           </tr>
                           <tr class="border-b border-n40 duration-500 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-8.png" width="60" height="40" class="rounded" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">Ben Abramov - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$95,000.00</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <a class="group mt-6 inline-flex items-center gap-1 font-semibold text-primary" href="#">
                  See More
                  <i class="las la-arrow-right duration-300 group-hover:pl-2"></i>
                  </a>
               </div>
            </div>
         </div>
      </main>
<?php include("footer.php");?>