<?php include("header.php");?>
      <!-- Main Content -->
      <main class="main-content has-sidebar">
         <div class="main-inner">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
               <h2 class="h2">Deposit Details</h2>
               <button class="btn-primary ac-modal-btn">
               <i class="las la-plus-circle text-base md:text-lg"></i>
               Open an Account
               </button>
            </div>
            <div class="flex flex-col gap-4 xxl:gap-6">
               <!-- Deposit Details -->
               <div class="box col-span-12 md:col-span-5 lg:col-span-4">
                  <div class="bb-dashed mb-4 flex items-center justify-between border-secondary/30 pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Account Details</h4>
                     <select name="sort" class="nc-select green min-w-[120px]">
                        <option value="day">Visa</option>
                        <option value="week">Payoneer</option>
                        <option value="year">Mastercard</option>
                     </select>
                  </div>
                  <div class="grid grid-cols-12 items-center gap-y-6 divide-dashed divide-secondary/30 xxl:divide-x rtl:divide-x-reverse">
                     <div class="col-span-12 md:col-span-6 xxl:col-span-4 md:ltr:pr-6 xxxl:ltr:pr-10 md:rtl:pl-6 xxxl:rtl:pl-10">
                        <div class="relative overflow-hidden rounded-xl bg-secondary p-4 text-n0 after:absolute after:top-[50%] after:h-[300px] after:w-[300px] after:rounded-full after:bg-[#FFC861] lg:px-6 lg:py-5 after:ltr:left-[55%] sm:ltr:after:left-[65%] after:rtl:right-[55%] sm:rtl:after:right-[65%]">
                           <div class="mb-4 flex items-start justify-between md:mb-8 lg:mb-10 xxxl:mb-14">
                              <div>
                                 <p class="mb-1 text-xs">Current Balance</p>
                                 <h4 class="h4">80,700.00 USD</h4>
                              </div>
                              <img src="./assets/images/visa-sm.png" width="45" height="16" alt="visa icon" />
                           </div>
                           <div class="flex items-end justify-between">
                              <div>
                                 <img width="45" height="45" src="./assets/images/mastercard.png" alt="card icon" />
                                 <p class="mb-1 mt-1 md:mt-3">Felecia Brown</p>
                                 <p class="text-xs">•••• •••• •••• 8854</p>
                              </div>
                              <p class="relative z-[1] text-n700">12/27</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-span-12 md:col-span-6 md:pl-6 xxl:col-span-4 xxl:px-6 xxxl:px-10">
                        <ul class="flex flex-col gap-4">
                           <li class="flex justify-between">
                              <span>Card Type:</span>
                              <span class="font-medium">Visa</span>
                           </li>
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
                     <div class="col-span-12 md:col-span-6 xxl:col-span-4 xxl:ltr:pl-6 xxxl:ltr:pl-10 xxl:rtl:pr-6 xxxl:rtl:pr-10">
                        <p class="mb-6 text-lg font-medium">Active card</p>
                        <div class="mb-6 flex items-center gap-4 rounded-lg border border-dashed border-primary bg-primary/5 p-3 lg:mb-8">
                           <img src="./assets/images/card-sm-1.png" width="60" height="40" alt="card" />
                           <div>
                              <p class="mb-1 font-medium">John Snow - Metal</p>
                              <span class="text-xs">**4291 - Exp: 12/26</span>
                           </div>
                        </div>
                        <a href="#" class="bb-dashed mb-6 flex items-center gap-2 pb-6 font-semibold text-primary lg:mb-8"> More Card <i class="las la-arrow-right"></i> </a>
                        <div class="flex gap-4 lg:gap-6">
                           <a href="#" class="btn-primary flex w-full justify-center lg:py-2.5"> Pay Debt </a>
                           <a href="#" class="btn-outline flex w-full justify-center lg:py-2.5"> Cancel </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Total Deposits -->
               <div class="box col-span-12 lg:col-span-6">
                  <div class="bb-dashed mb-4 flex flex-wrap items-center justify-between gap-4 pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Total Deposits</h4>
                     <div class="flex grow flex-wrap items-center gap-4 sm:justify-end">
                        <button class="btn-primary total-deposit-btn shrink-0">Add Deposit</button>
                        <form class="datatable-search flex w-full min-w-[200px] items-center justify-between gap-3 rounded-[30px] border border-n30 bg-primary/5 p-1 focus-within:border-primary dark:border-n500 dark:bg-bg3 xxl:max-w-[319px]">
                           <input type="text" placeholder="Search" class="w-full border-none bg-transparent py-1 text-sm ltr:pl-4 rtl:pr-4" id="deposit-search" />
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
                     <table class="w-full whitespace-nowrap" id="deposit-table">
                        <thead>
                           <tr class="bg-secondary/5 dark:bg-bg3">
                              <th class="min-w-[230px] cursor-pointer !py-5 px-6 text-start">
                                 <div class="flex items-center gap-1">Title</div>
                              </th>
                              <th class="min-w-[100px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Rate</div>
                              </th>
                              <th class="min-w-[200px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Account Balance</div>
                              </th>
                              <th class="min-w-[200px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Account Interest</div>
                              </th>
                              <th class="min-w-[130px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Expiry Date</div>
                              </th>
                              <th class="min-w-[100px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Status</div>
                              </th>
                              <th class="!py-5 text-center" data-sortable="false">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="border-b border-n30 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <i class="las la-wallet text-primary"></i>
                                    <span class="font-medium">Fixed Deposit</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">14%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$52,584,854</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$254.21</p>
                                    <span class="text-xs">Account Interest</span>
                                 </div>
                              </td>
                              <td>11/12/2028</td>
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
                           <tr class="border-b border-n30 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <i class="las la-wallet text-primary"></i>
                                    <span class="font-medium">Savings Deposit</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">14%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$52,584,854</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$254.21</p>
                                    <span class="text-xs">Account Interest</span>
                                 </div>
                              </td>
                              <td>11/12/2028</td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-warning/10 py-2 text-center text-xs text-warning dark:border-n500 dark:bg-bg3 xxl:w-36"> Pending </span>
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
                           <tr class="border-b border-n30 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <i class="las la-wallet text-primary"></i>
                                    <span class="font-medium">Fixed Deposit</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">14%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$52,584,854</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$254.21</p>
                                    <span class="text-xs">Account Interest</span>
                                 </div>
                              </td>
                              <td>11/12/2028</td>
                              <td class="py-2">
                                 <span class="block w-28 rounded-[30px] border border-n30 bg-warning/10 py-2 text-center text-xs text-warning dark:border-n500 dark:bg-bg3 xxl:w-36"> Pending </span>
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
                           <tr class="border-b border-n30 first:border-t hover:bg-primary/5 dark:border-n500 dark:hover:bg-bg3">
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <i class="las la-wallet text-primary"></i>
                                    <span class="font-medium">Savings Deposit</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">14%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$52,584,854</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td class="py-2">
                                 <div>
                                    <p class="font-medium">$254.21</p>
                                    <span class="text-xs">Account Interest</span>
                                 </div>
                              </td>
                              <td>11/12/2028</td>
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
            </div>
         </div>
      </main>
<?php include("footer.php");?>