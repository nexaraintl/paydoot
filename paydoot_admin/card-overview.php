<?php include("header.php");?>
      <!-- Main Content -->
      <main class="main-content has-sidebar">
         <div class="main-inner">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-4 lg:mb-8">
               <h2 class="h2">Card Overview</h2>
               <button class="btn-primary ac-modal-btn">
               <i class="las la-plus-circle text-base md:text-lg"></i>
               Open an Account
               </button>
            </div>
            <div class="flex flex-col gap-4 xxl:gap-6">
               <!-- popular cards -->
               <div class="box">
                  <div class="bb-dashed mb-6 flex items-center justify-between border-secondary/20 pb-6">
                     <h4 class="h4">Popular Cards</h4>
                     <div class="relative" style="display:none">
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
                  <div class="grid grid-cols-12 gap-4 xxl:gap-6">
                     <?php
                        include("conn.php");       
                        $sql="SELECT * FROM `card`"; 
                        $result=mysqli_query($conn,$sql);
                        
                        while($row=mysqli_fetch_assoc($result))
                        {
                     ?>
                     <a
                        href="card-details.php"
                        class="relative col-span-12 overflow-hidden rounded-xl bg-secondary p-5 text-n0 after:absolute after:top-[45%] after:h-[300px] after:w-[300px] after:rounded-full after:bg-[#FFC861] sm:col-span-6 lg:col-span-4 4xl:col-span-3 after:ltr:left-[60%] after:rtl:right-[60%]"
                        >
                        <div class="mb-3 flex items-center justify-between sm:mb-6">
                           <div>
                              <p class="mb-1 text-xs">Deposits Balance</p>
                              <h4 class="h4">80,700</h4>
                           </div>
                           <img src="./assets/images/visa-sm.png" width="36" height="13" class="mb-1" alt="visa" />
                        </div>
                        <div>
                           <img src="./assets/images/mastercard.png" width="45" height="45" class="mb-1" alt="visa" />
                           <div class="flex items-center justify-between">
                              <div>
                                 <p class="mb-1 text-sm font-semibold"><?php echo $row["card_holder_name"];?></p>
                                 <p class="text-xs">•••• •••• •••• <?php $card_number = $row["card_number"];echo $last_four = substr($card_number, -4);?></p>
                              </div>
                              <span class="relative z-[1] text-n700"><?php echo $row["month"];?>/<?php echo $row["year"];?></span>
                           </div>
                        </div>
                     </a>
                     <?php }?>
                     <!-- <a
                        href="../cards/card-details.html"
                        class="relative col-span-12 overflow-hidden rounded-xl bg-primary p-5 text-n0 after:absolute after:top-[45%] after:h-[300px] after:w-[300px] after:rounded-full after:bg-[#FFC861] sm:col-span-6 lg:col-span-4 4xl:col-span-3 after:ltr:left-[60%] after:rtl:right-[60%]"
                        >
                        <div class="mb-3 flex items-center justify-between sm:mb-6">
                           <div>
                              <p class="mb-1 text-xs">Deposits Balance</p>
                              <h4 class="h4">80,700</h4>
                           </div>
                           <img src="./assets/images/visa-sm.png" width="36" height="13" class="mb-1" alt="visa" />
                        </div>
                        <div>
                           <img src="./assets/images/mastercard.png" width="45" height="45" class="mb-1" alt="visa" />
                           <div class="flex items-center justify-between">
                              <div>
                                 <p class="mb-1 text-sm font-semibold">Felicia Brown</p>
                                 <p class="text-xs">•••• •••• •••• 8854</p>
                              </div>
                              <span class="relative z-[1] text-n700">12/27</span>
                           </div>
                        </div>
                     </a>
                     <a
                        href="../cards/card-details.html"
                        class="relative col-span-12 overflow-hidden rounded-xl bg-[#47264C] p-5 text-n0 after:absolute after:top-[45%] after:h-[300px] after:w-[300px] after:rounded-full after:bg-[#FFC861] sm:col-span-6 lg:col-span-4 4xl:col-span-3 after:ltr:left-[60%] after:rtl:right-[60%]"
                        >
                        <div class="mb-3 flex items-center justify-between sm:mb-6">
                           <div>
                              <p class="mb-1 text-xs">Deposits Balance</p>
                              <h4 class="h4">80,700</h4>
                           </div>
                           <img src="./assets/images/visa-sm.png" width="36" height="13" class="mb-1" alt="visa" />
                        </div>
                        <div>
                           <img src="./assets/images/mastercard.png" width="45" height="45" class="mb-1" alt="visa" />
                           <div class="flex items-center justify-between">
                              <div>
                                 <p class="mb-1 text-sm font-semibold">Felicia Brown</p>
                                 <p class="text-xs">•••• •••• •••• 8854</p>
                              </div>
                              <span class="relative z-[1] text-n700">12/27</span>
                           </div>
                        </div>
                     </a>
                     <a
                        href="../cards/card-details.html"
                        class="relative col-span-12 overflow-hidden rounded-xl bg-[#0E777E] p-5 text-n0 after:absolute after:top-[45%] after:h-[300px] after:w-[300px] after:rounded-full after:bg-[#FFC861] sm:col-span-6 lg:col-span-4 4xl:col-span-3 after:ltr:left-[60%] after:rtl:right-[60%]"
                        >
                        <div class="mb-3 flex items-center justify-between sm:mb-6">
                           <div>
                              <p class="mb-1 text-xs">Deposits Balance</p>
                              <h4 class="h4">80,700</h4>
                           </div>
                           <img src="./assets/images/visa-sm.png" width="36" height="13" class="mb-1" alt="visa" />
                        </div>
                        <div>
                           <img src="./assets/images/mastercard.png" width="45" height="45" class="mb-1" alt="visa" />
                           <div class="flex items-center justify-between">
                              <div>
                                 <p class="mb-1 text-sm font-semibold">Felicia Brown</p>
                                 <p class="text-xs">•••• •••• •••• 8854</p>
                              </div>
                              <span class="relative z-[1] text-n700">12/27</span>
                           </div>
                        </div>
                     </a>
                     <a
                        href="../cards/card-details.html"
                        class="relative col-span-12 overflow-hidden rounded-xl bg-[#5F4607] p-5 text-n0 after:absolute after:top-[45%] after:h-[300px] after:w-[300px] after:rounded-full after:bg-[#FFC861] sm:col-span-6 lg:col-span-4 4xl:col-span-3 after:ltr:left-[60%] after:rtl:right-[60%]"
                        >
                        <div class="mb-3 flex items-center justify-between sm:mb-6">
                           <div>
                              <p class="mb-1 text-xs">Deposits Balance</p>
                              <h4 class="h4">80,700</h4>
                           </div>
                           <img src="./assets/images/visa-sm.png" width="36" height="13" class="mb-1" alt="visa" />
                        </div>
                        <div>
                           <img src="./assets/images/mastercard.png" width="45" height="45" class="mb-1" alt="visa" />
                           <div class="flex items-center justify-between">
                              <div>
                                 <p class="mb-1 text-sm font-semibold">Felicia Brown</p>
                                 <p class="text-xs">•••• •••• •••• 8854</p>
                              </div>
                              <span class="relative z-[1] text-n700">12/27</span>
                           </div>
                        </div>
                     </a>
                     <a
                        href="../cards/card-details.html"
                        class="relative col-span-12 overflow-hidden rounded-xl bg-[#205CB7] p-5 text-n0 after:absolute after:top-[45%] after:h-[300px] after:w-[300px] after:rounded-full after:bg-[#FFC861] sm:col-span-6 lg:col-span-4 4xl:col-span-3 after:ltr:left-[60%] after:rtl:right-[60%]"
                        >
                        <div class="mb-3 flex items-center justify-between sm:mb-6">
                           <div>
                              <p class="mb-1 text-xs">Deposits Balance</p>
                              <h4 class="h4">80,700</h4>
                           </div>
                           <img src="./assets/images/visa-sm.png" width="36" height="13" class="mb-1" alt="visa" />
                        </div>
                        <div>
                           <img src="./assets/images/mastercard.png" width="45" height="45" class="mb-1" alt="visa" />
                           <div class="flex items-center justify-between">
                              <div>
                                 <p class="mb-1 text-sm font-semibold">Felicia Brown</p>
                                 <p class="text-xs">•••• •••• •••• 8854</p>
                              </div>
                              <span class="relative z-[1] text-n700">12/27</span>
                           </div>
                        </div>
                     </a>
                     <a
                        href="../cards/card-details.html"
                        class="relative col-span-12 overflow-hidden rounded-xl bg-[#343436] p-5 text-n0 after:absolute after:top-[45%] after:h-[300px] after:w-[300px] after:rounded-full after:bg-[#FFC861] sm:col-span-6 lg:col-span-4 4xl:col-span-3 after:ltr:left-[60%] after:rtl:right-[60%]"
                        >
                        <div class="mb-3 flex items-center justify-between sm:mb-6">
                           <div>
                              <p class="mb-1 text-xs">Deposits Balance</p>
                              <h4 class="h4">80,700</h4>
                           </div>
                           <img src="./assets/images/visa-sm.png" width="36" height="13" class="mb-1" alt="visa" />
                        </div>
                        <div>
                           <img src="./assets/images/mastercard.png" width="45" height="45" class="mb-1" alt="visa" />
                           <div class="flex items-center justify-between">
                              <div>
                                 <p class="mb-1 text-sm font-semibold">Felicia Brown</p>
                                 <p class="text-xs">•••• •••• •••• 8854</p>
                              </div>
                              <span class="relative z-[1] text-n700">12/27</span>
                           </div>
                        </div>
                     </a> -->
                     <div class="col-span-12 flex h-full w-full flex-col items-center justify-center self-stretch rounded-2xl border border-dashed border-primary bg-primary/10 text-center max-xxxl:py-14 sm:col-span-6 lg:col-span-4 4xl:col-span-3">
                        <button class="mb-3 rounded-full bg-primary p-2 text-n0">
                        <i class="las la-plus"></i>
                        </button>
                        <p class="mb-2 font-medium">Add New Credit Card</p>
                        <button class="add-card-btn text-sm text-primary">Add Now</button>
                     </div>
                  </div>
               </div>
               <!-- Your Credits -->
               <div class="box col-span-12 lg:col-span-6" style="display:none">
                  <div class="bb-dashed mb-4 flex flex-wrap items-center justify-between gap-4 pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Your Credits</h4>
                     <div class="flex grow flex-wrap items-center gap-4 sm:justify-end">
                        <form class="datatable-search flex w-full min-w-[200px] items-center justify-between gap-3 rounded-[30px] border border-n30 bg-primary/5 p-1 focus-within:border-primary dark:border-n500 dark:bg-bg3 xxl:max-w-[319px]">
                           <input type="text" placeholder="Search" class="w-full border-none bg-transparent py-1 text-sm ltr:pl-4 rtl:pr-4" id="credit-search" />
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
                     <table class="select-all-table w-full whitespace-nowrap" id="transactionTable">
                        <thead>
                           <tr class="bg-secondary/5 dark:bg-bg3">
                              <th class="w-16 !py-5 px-6 text-start" data-sortable="false">
                                 <input name="select-all" type="checkbox" id="selectAllCheckbox" class="accent-secondary focus:border-none focus:shadow-none focus:outline-none" />
                              </th>
                              <th class="min-w-[330px] cursor-pointer !py-5 px-6 text-start">
                                 <div class="flex items-center gap-1">Title</div>
                              </th>
                              <th class="min-w-[80px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Rate</div>
                              </th>
                              <th class="min-w-[200px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Account Balance</div>
                              </th>
                              <th class="min-w-[200px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Account Interest</div>
                              </th>
                              <th class="min-w-[100px] cursor-pointer !py-5 text-start">
                                 <div class="flex items-center gap-1">Status</div>
                              </th>
                              <th class="!py-5 text-center" data-sortable="false">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="border-b border-t border-n30 dark:border-n500">
                              <td class="px-6 text-start">
                                 <input type="checkbox" class="accent-secondary" />
                              </td>
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-4.png" width="60" height="40" class="rounded-sm" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">Daniel Trate - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">19%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$234,234,232</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$4,231</p>
                                    <span class="text-xs">Account Interest</span>
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
                           <tr class="border-b border-n30 dark:border-n500">
                              <td class="px-6 text-start">
                                 <input type="checkbox" class="accent-secondary" />
                              </td>
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-1.png" width="60" height="40" class="rounded-sm" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">Babul Beg - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">19%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$234,234,232</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$4,231</p>
                                    <span class="text-xs">Account Interest</span>
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
                           <tr class="border-b border-n30 dark:border-n500">
                              <td class="px-6 text-start">
                                 <input type="checkbox" class="accent-secondary" />
                              </td>
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-2.png" width="60" height="40" class="rounded-sm" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">Daniel Trate - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">14%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$234,234,232</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$4,231</p>
                                    <span class="text-xs">Account Interest</span>
                                 </div>
                              </td>
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
                           <tr class="border-b border-n30 dark:border-n500">
                              <td class="px-6 text-start">
                                 <input type="checkbox" class="accent-secondary" />
                              </td>
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-4.png" width="60" height="40" class="rounded-sm" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">Daniel Trate - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">12%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$234,234,232</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$4,231</p>
                                    <span class="text-xs">Account Interest</span>
                                 </div>
                              </td>
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
                           <tr class="border-b border-n30 dark:border-n500">
                              <td class="px-6 text-start">
                                 <input type="checkbox" class="accent-secondary" />
                              </td>
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-5.png" width="60" height="40" class="rounded-sm" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">Daniel Trate - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">39%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$234,234,232</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$4,231</p>
                                    <span class="text-xs">Account Interest</span>
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
                           <tr class="border-b border-n30 dark:border-n500">
                              <td class="px-6 text-start">
                                 <input type="checkbox" class="accent-secondary" />
                              </td>
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-6.png" width="60" height="40" class="rounded-sm" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">Daniel Trate - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">24%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$234,234,232</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$4,231</p>
                                    <span class="text-xs">Account Interest</span>
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
                           <tr class="border-b border-n30 dark:border-n500">
                              <td class="px-6 text-start">
                                 <input type="checkbox" class="accent-secondary" />
                              </td>
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-8.png" width="60" height="40" class="rounded-sm" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">Daniel Trate - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">49%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$234,234,232</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$4,231</p>
                                    <span class="text-xs">Account Interest</span>
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
                           <tr class="border-b border-n30 dark:border-n500">
                              <td class="px-6 text-start">
                                 <input type="checkbox" class="accent-secondary" />
                              </td>
                              <td class="px-6 py-2">
                                 <div class="flex items-center gap-3">
                                    <img src="./assets/images/card-sm-7.png" width="60" height="40" class="rounded-sm" alt="payment medium icon" />
                                    <div>
                                       <p class="mb-1 font-medium">Daniel Trate - Metal</p>
                                       <span class="text-xs">**4291 - Exp: 12/26</span>
                                    </div>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">19%</p>
                                    <span class="text-xs">Rate</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$234,234,232</p>
                                    <span class="text-xs">Account Balance</span>
                                 </div>
                              </td>
                              <td>
                                 <div>
                                    <p class="mb-1 font-medium">$4,231</p>
                                    <span class="text-xs">Account Interest</span>
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
      <!-- Add New card modal -->
      <div class="add-card-modal modalhide fixed inset-0 z-[99] overflow-y-auto bg-n900/80 duration-500" id="cardModal">
         <div class="overflow-y-auto">
            <div class="modal box modal-inner absolute left-1/2 top-1/2 max-h-[90vh] w-[95%] max-w-[496px] -translate-x-1/2 -translate-y-1/2 overflow-y-auto duration-300 xl:p-8">
               <!-- { "translate-y-0 scale-100 opacity-100 my-10": open } -->
               <div class="relative">
                  <button class="add-card-modal-close-btn absolute top-0 ltr:right-0 rtl:left-0">
                  <i class="las la-times"></i>
                  </button>

                  
                  <div class="bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6">
                     <h4 class="h4">Add Credit card</h4>
                  </div>
                  <div class="py-3 px-4 md:px-6 lg:px-8 rounded-xl bg-primary/20 flex justify-between items-center" id="successMessage">
                     <div class="flex gap-5 items-center">
                        <i class="las la-info-circle text-3xl text-primary"></i>
                        <span class="l-text font-medium text-primary">Card added successfully!</span>
                     </div>
                  </div>

                  <form method="POST" id="card_form">
                     <div class="mt-6 grid grid-cols-2 gap-4 xl:mt-8 xxxl:gap-6">
                        <div class="col-span-2">
                           <label for="card-number" class="mb-4 block font-medium md:text-lg"> Card Number </label>
                           <div class="relative rounded-3xl border border-n30 bg-secondary/5 dark:border-n500 dark:bg-bg3">
                              <input type="number" class="w-full rounded-3xl bg-transparent px-6 py-2.5 text-sm md:py-3" placeholder="5890 - 6858 - 6332 - 9843" id="card-number" name="card-number" required />
                              <img src="./assets/images/mastercard.png" class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4" width="20" height="20" alt="mastercard" />
                           </div>
                        </div>
                        <div class="col-span-2">
                           <label for="holder" class="mb-4 block font-medium md:text-lg"> Card Holder </label>
                           <input type="text" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 text-sm dark:border-n500 dark:bg-bg3 md:py-3" placeholder="Enter Name" id="holder" name="holder" required />
                        </div>
                        <div class="card_detail">
                           <div class="col-span-2 md:col-span-1">
                              <label for="month" class="mb-4 block font-medium md:text-lg"> Month </label>
                              <input type="number" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 text-sm dark:border-n500 dark:bg-bg3 md:py-3" placeholder="12" id="month" name="month"  min="1" max="12" required />
                           </div>
                           <div class="col-span-2 md:col-span-1">
                              <label for="year" class="mb-4 block font-medium md:text-lg"> Year </label>
                              <input type="number" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 text-sm dark:border-n500 dark:bg-bg3 md:py-3" placeholder="2027" id="year" name="year" min="2025" max="2035" required />
                           </div>
                           <div class="col-span-2 md:col-span-1">
                              <label for="cvv" class="mb-4 block font-medium md:text-lg"> CVV</label>
                              <input type="number"  maxlength="3" pattern="\d{3}" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 text-sm dark:border-n500 dark:bg-bg3 md:py-3" placeholder="CVV" id="cvv" name="cvv" required />
                           </div>
                        </div>
                        <div class="col-span-2 mt-4">
                           <button class="btn-primary flex w-full justify-center" type="submit" id="card_submit">Add Card</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
<?php include("footer.php");?>