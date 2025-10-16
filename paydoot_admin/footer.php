<footer class="footer bg-n0 dark:bg-bg4">
   <div class="flex flex-col items-center justify-center gap-3 px-4 py-5 lg:flex-row lg:justify-between xxl:px-8">
      <p class="text-sm max-md:w-full max-md:text-center lg:text-base">
         Copyright @<span id="current-year"></span>
         <a class="text-primary" href="/"> Paydoot </a>
         . Designed By
         <a href="#" class="text-secondary">Nexara International Private Limited </a>
      </p>
      <div class="justify-center max-md:flex max-md:w-full"></div>
      <ul class="flex gap-2 xxxl:gap-3">
         <!-- <li>
            <a
               href="#"
               aria-label="social link"
               class="inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2">
            <i class="lab la-facebook-f"></i>
            </a>
         </li>
         <li>
            <a
               href="#"
               aria-label="social link"
               class="inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2">
            <i class="lab la-twitter"></i>
            </a>
         </li>
         <li>
            <a
               href="#"
               aria-label="social link"
               class="inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2">
            <i class="lab la-skype"></i>
            </a>
         </li> -->
         <li>
            <a
               href="https://www.instagram.com/paydoot/"
               target="_blank"
               aria-label="social link"
               class="inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2">
            <i class="lab la-instagram"></i>
            </a>
         </li>
         <li>
            <a
               href="https://www.linkedin.com/company/paydoot"
               target="_blank"
               aria-label="social link"
               class="inline-flex rounded-full border border-primary p-1 text-primary duration-300 hover:bg-primary hover:text-n0 md:p-1.5 xxxl:p-2">
            <i class="lab la-linkedin-in"></i>
            </a>
         </li>
      </ul>
      <ul class="flex gap-3 text-sm max-lg:w-full max-lg:justify-center lg:gap-4 lg:text-base">
         <li>
            <a href="policy.php">Privacy Policy</a>
         </li>
         <li>
            <a href="terms.php">Terms of condition</a>
         </li>
      </ul>
   </div>
</footer>
<!-- add user account modal -->
<div class="ac-modal-overlay modalhide fixed inset-0 z-[99] overflow-y-auto bg-n900/80 duration-500">
   <div class="overflow-y-auto">
      <div class="modal box modal-inner absolute left-1/2 my-10 max-h-[90vh] w-[95%] max-w-[710px] -translate-x-1/2 overflow-y-auto duration-300 xl:p-8">
         <!-- { "translate-y-0 scale-100 opacity-100 my-10": open } -->
         <div class="relative">
            <button class="ac-modal-close-btn absolute top-0 ltr:right-0 rtl:left-0">
            <i class="las la-times"></i>
            </button>
            <div class="bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6">
               <h4 class="h4">Create Account</h4>
            </div>
            <form id="user_form" method="POST" enctype="multipart/form-data">
               <p class="mb-4 text-lg font-medium">Profile Photo</p>
               <div class="mb-6 flex flex-wrap items-center gap-5 xl:gap-10">
                  <img src="./assets/images/placeholder.png" class="h-20 w-20 lg:h-auto lg:w-auto profile-pic" width="120" height="120" alt="placeholder" />
                  <canvas id="canvas" width="120" height="120" style="display:none;"></canvas>
                  <div class="flex gap-4">
                     <input type="file" class="hidden file-upload" name="profile_img" id="profile_img" />
                     <label class="upload-button btn-primary"> Upload Photo </label>
                     <button class="btn-outline" id="cancelBtn">Cancel</button>
                  </div>
               </div>
               <div class="mt-6 grid grid-cols-2 gap-4 xl:mt-8 xxxl:gap-6">
                  <div class="col-span-2 md:col-span-1">
                     <label for="name" class="mb-4 block font-medium md:text-lg"> Account Holder Name </label>
                     <input type="text" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" placeholder="Enter Name" id="fname" name="fname" required />
                  </div>
                  <div class="col-span-2 md:col-span-1">
                     <label for="dob" class="mb-4 block font-medium md:text-lg"> Date of birth</label>     
                     <input type="date" id="dob" name="dob" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" placeholder="Enter Date of birth" required />
                  </div>
                  <div class="col-span-2  md:col-span-1">
                     <label for="mobile" class="mb-4 block font-medium md:text-lg"> Phone Number </label>
                     <input type="number" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" placeholder="Enter Number" id="mobile" name="mobile" required />
                      <label class="mb-4 block font-medium md:text-lg verify_num" > </label>
                  </div>
                  <div class="col-span-2  md:col-span-1">
                     <button class="btn-warning" id="sendOtpBtn">Send OTP</button>
                     <div class="verify_mobile flex gap-6" >
                        <input type="number" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3 number_otp"  placeholder="6-digit OTP Mobile" id="number_otp" required />
                        
                        <button class="btn-warning" id="verifyOtpBtn">Verify</button>
                     </div>
                     <span id="timerDisplay"></span>
                  </div>

                  <div class="col-span-2  md:col-span-1">
                     <label for="email" class="mb-4 block font-medium md:text-lg"> Email ID </label>
                     <input type="email" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" placeholder="Enter email address" name="email" id="email" required />
                     <label for="email_otp" class="mb-4 block font-medium md:text-lg verify_email"> </label>
                  </div>
                  <div class="col-span-2  md:col-span-1" style="display:none">
                     <button class="btn-warning" id="sendOtpemailBtn">Send OTP</button>
                     <div class="verify_email flex gap-6" >
                        <input type="number" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" placeholder="6-digit OTP Email" id="email_otp"/>
                        <button class="btn-warning" id="verifyOtpBtnEmail">Verify</button>
                     </div>
                  </div>
                  <div class="col-span-2 md:col-span-1">
                     <label for="pan_num" class="mb-4 block font-medium md:text-lg"> PAN Number </label>
                     <input type="text" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" id="pan_num" name="pan_num" placeholder="Eg:HAPR4789M" required />
                  </div>
                  <div class="col-span-2 md:col-span-1">
                     <label for="aadhar_num" class="mb-4 block font-medium md:text-lg"> AADHAR Number</label>
                     <input type="text" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" id="aadhar_num" name="aadhar_num" placeholder="Eg, 123456789012345" required />
                  </div>
                     
                  <div class="col-span-2  md:col-span-1">
                     <label for="account_number" class="mb-4 block font-medium md:text-lg"> Account Number </label>
                     <input type="number" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" id="account_number" name="account_number" placeholder="Account Number" required />
                  </div>

                  <div class="col-span-2  md:col-span-1">
                     <label for="ifsc_code" class="mb-4 block font-medium md:text-lg">IFSC Code</label>
                     <input type="text" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" id="ifsc_code" name="ifsc_code" placeholder="IFSC Code" required />
                  </div>
                  <div class="col-span-2  md:col-span-1">
                     <label for="bank_name" class="mb-4 block font-medium md:text-lg">Bank Name</label>
                     <input type="text" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" id="bank_name" name="bank_name" placeholder="Bank Name" required />
                  </div>
                  <div class="col-span-2  md:col-span-1">
                     <label for="branch_center" class="mb-4 block font-medium md:text-lg">Bank City</label>
                     <input type="text" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" id="branch_center" name="branch_center" placeholder="Bank City" required />
                  </div>
                   <div class="col-span-2  md:col-span-1">
                     <label for="branch_state" class="mb-4 block font-medium md:text-lg">Bank State</label>
                     <input type="text" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" id="branch_state" name="branch_state" placeholder="Bank State" required />
                  </div>
                  <div class="col-span-2 hide">
                     <label for="status" class="mb-4 block font-medium md:text-lg"> Select Status </label>
                     <select name="currency" class="nc-select full dark:!border-n500">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                     </select>
                  </div>
                  <div class="col-span-2 mt-4">
                     <button class="btn-primary flex w-full justify-center" type="submit">Create Account</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>


<!-- add deposit modal -->
<div class="modal-two-overlay fixed inset-0 z-[99] modalhide overflow-y-auto bg-n900/80 duration-500">
   <div class="overflow-y-auto">
      <div class="modal box modal-inner absolute left-1/2 my-10 max-h-[90vh] w-[95%] max-w-[710px] -translate-x-1/2 overflow-y-auto duration-300 xl:p-8">
         <!-- { "translate-y-0 scale-100 opacity-100 my-10": open } -->
         <div class="relative">
            <button class="modal-two-close-btn absolute top-0 ltr:right-0 rtl:left-0">
            <i class="las la-times"></i>
            </button>
            <div class="bb-dashed mb-4 flex items-center justify-between pb-4 lg:mb-6 lg:pb-6">
               <h4 class="h4">Add New Deposit</h4>
            </div>
            <form>
               <div class="mt-6 grid grid-cols-2 gap-4 xl:mt-8 xxxl:gap-6">
                  <div class="col-span-2">
                     <label for="name" class="mb-4 block font-medium md:text-lg"> Account Holder Name </label>
                     <input type="text" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" placeholder="Enter Name" id="name" required />
                  </div>
                  <div class="col-span-2">
                     <label for="number" class="mb-4 block font-medium md:text-lg"> Phone Number </label>
                     <input type="number" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" placeholder="Enter Number" id="number" required />
                  </div>
                  <div class="col-span-2">
                     <label for="currency" class="mb-4 block font-medium md:text-lg"> Select Currency </label>
                     <select name="currency" class="nc-select full dark:!border-n500">
                        <option value="usd">USD</option>
                        <option value="gbp">GBP</option>
                        <option value="yen">YEN</option>
                        <option value="jpn">JPN</option>
                     </select>
                  </div>
                  <div class="col-span-2 md:col-span-1">
                     <label for="rate" class="mb-4 block font-medium md:text-lg"> Interest Rate </label>
                     <input type="number" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" placeholder="Interest Rate %" id="rate" required />
                  </div>
                  <div class="col-span-2 md:col-span-1">
                     <label for="expire" class="mb-4 block font-medium md:text-lg"> Expiry Date </label>
                     <div class="relative bg-secondary/5 py-3 dark:bg-bg3 border border-n30 dark:border-n500 rounded-3xl">
                        <input id="date2" class="border-none" placeholder="Select Date" autocomplete="off" />
                        <i class="las la-calendar absolute ltr:right-4 rtl:left-4 top-1/2 -translate-y-1/2 cursor-pointer"></i>
                     </div>
                  </div>
                  <div class="col-span-2">
                     <label for="amount" class="mb-4 block font-medium md:text-lg"> Amount </label>
                     <input type="number" class="w-full rounded-3xl border border-n30 bg-secondary/5 px-6 py-2.5 dark:border-n500 dark:bg-bg3 md:py-3" placeholder="Enter Amount" id="amount" required />
                  </div>
                  <div class="col-span-2">
                     <label for="status" class="mb-4 block font-medium md:text-lg"> Select Status </label>
                     <select name="currency" class="nc-select full dark:!border-n500">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                     </select>
                  </div>
                  <div class="col-span-2 mt-4">
                     <button class="btn-primary flex w-full justify-center" type="submit">Create Account</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
<script src="./assets/js/libs/apexcharts.min.js"></script>
<script src="./assets/js/libs/nice-select2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/js-datepicker"></script>
<script src="./assets/js/charts.js"></script>
<script src="./assets/js/main.js"></script>
<script src="./assets/js/script.js"></script>
<script defer src="assets/js/app.js"></script></body>
<!-- jQuery UI Datepicker fallback -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<!-- Sweet-alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
   //alert("jquery");
  
   $('#dob').datepicker({ 
      dateFormat: 'yy-mm-dd', // Format: 2025-10-14
      changeMonth: true,
      changeYear: true,
      yearRange: '2000:2030'
  });
  
  let timeLeft = 60;
  let countdown = 30;
  let timer;


  $('#sendOtpBtn').click(function () {
   //alert("hetrrre");
   let countdown = 60;
   let timer;
    const mobile = $('#mobile').val();
    if (mobile.length === 10 && /^\d+$/.test(mobile)) {
      $(".verify_num").html("");
       $('#sendOtpBtn').css("display","none");
       $('#timerDisplay').html("<h6 style='margin-left: 15px;font-size: 0.8rem'class='text-error'>OTP expires in: "+countdown+"s</h6>");

         timer = setInterval(() => {
            countdown--;
            $('#timerDisplay').html("<h6 style='margin-left: 15px;font-size: 0.8rem'class='text-error'>OTP expires in "+countdown+"s</h6>");

            if (countdown <= 0) {
               clearInterval(timer);
               $('#sendOtpBtn').prop('disabled', false);
               $('#timerDisplay').html("<h6 style='margin-left: 15px;font-size: 0.8rem'class='text-error'>OTP expired. Please resend.</h6>");
               countdown = 60; // Reset for next click
               $('#sendOtpBtn').css("display","block");
                $(".verify_mobile").css("display","none");
               $("#timerDisplay").css("display","none");
               $(".text-error").css("display","none");
            }
         }, 1000);
        $(".verify_num").css("display","block");
        $(".verify_num").html("<h6 style='font-size: 0.8rem'class='text-error'>One time password has been sent to "+mobile+"</h6>");
        $(".verify_mobile").css("display","inline-flex");
      // Send OTP via AJAX
      $.post('send_otp.php', { mobile: mobile }, function (response) {
        //alert(response.message || "OTP sent successfully.");
        
       
      //   $('#step1').addClass('hidden');
      //   $('#step2').removeClass('hidden');
        //startTimer();
      }, 'json');
    } else {
      $(".verify_num").html("<h6 style='font-size: 0.8rem'class='text-error'>Please enter a valid 10-digit mobile number.</h6>");
      // alert("Please enter a valid 10-digit mobile number.");
    }
  });

  $('#verifyOtpBtn').click(function () {
    const otp = $('#number_otp').val();
    //alert(otp);
    if (timeLeft <= 0) {
      $(".verify_num").html("<h6 style='font-size: 0.8rem'class='text-error'>OTP has expired. Please request a new one.</h6>");
      return;
    }
   if (typeof otp === 'string' && otp.length === 6 && /^\d+$/.test(otp)){
      // Verify OTP via AJAX
      $.post('verify_otp.php', { otp: otp }, function (response) {
        //alert(response.message || "OTP verified successfully.");
         
        $("#verifyOtpBtn").html("Verified");
        $('#mobile').attr('disabled', 'disabled');
        $('#verifyOtpBtn').removeClass('btn-warning').addClass('btn-primary');
        $("#timerDisplay").css("display","none");
        $(".text-error").css("display","none");
        $("#number_otp").css("display","none");

        clearInterval(countdown);
      }, 'json');
    } else {
      $(".verify_num").html("<h6 style='font-size: 0.8rem'class='text-primary'>Mobile number verified successfully</h6>");
      $("#number_otp").prop('disabled', true);
      $("#verifyOtpBtn").prop('disabled', true);

    }
  });

  //Change profile photo
   let resizedBlob = null;

   function readURL(input) {
   if (input.files && input.files[0]) {
      const reader = new FileReader();

      reader.onload = function(e) {
         const img = new Image();
         img.src = e.target.result;

         img.onload = function() {
         const canvas = document.getElementById("canvas");
         const ctx = canvas.getContext("2d");

         const minSide = Math.min(img.width, img.height);
         const sx = (img.width - minSide) / 2;
         const sy = (img.height - minSide) / 2;

         ctx.clearRect(0, 0, canvas.width, canvas.height);
         ctx.drawImage(img, sx, sy, minSide, minSide, 0, 0, canvas.width, canvas.height);

         // Preview cropped image
         $(".profile-pic").attr("src", canvas.toDataURL("image/jpeg"));

         // Convert to blob for upload
         canvas.toBlob(function(blob) {
            resizedBlob = blob;
            console.log("Blob ready:", resizedBlob);
         }, "image/jpeg", 0.95);
         };
      };

      reader.readAsDataURL(input.files[0]);
   }
   }

// Bind to file input
$("#upload").on("change", function() {
  readURL(this);
});

   

   $(".file-upload").on('change', function(){
      readURL(this);
   });
   
   $(".upload-button").on('click', function() {
      $(".file-upload").click();
   });

   $('#cancelBtn').click(function () {
      // Clear file input
      $('#profile_img').val('');

      // Clear preview image
      $('.profile-pic').attr('src', './assets/images/placeholder.png');
   });


   //User Bank details api
   $("#ifsc_code").change(function() {
      //get the selected value
      var selectedValue = this.value;
      //alert(selectedValue);

      //make the ajax call
      $.ajax({
         url: 'bank_api.php',
         type: 'POST',
         data: {ifsc : selectedValue},
         success: function(data) {
               //console.log(data);
               data = JSON.parse(data);
               
               if(data)
               {
                  $(".bank_details-hide").css("display","block");
                  $("#bank_name").val(data.bank_name);
                  $("#bank_address").val(data.branch_address);
                  $("#branch_name").val(data.branch_name);
                  $("#branch_center").val(data.branch_center);
                  $("#branch_district").val(data.branch_district);
                  $("#branch_state").val(data.branch_state);
               }

               
         }
      });
   });
   
   //Add User Details
   $("#user_form").on("submit", function(e) {
      e.preventDefault();

      const formData = new FormData(this);
      if (resizedBlob) {
         formData.append("profile_image", resizedBlob, "profile.jpg");
      }

      $.ajax({
         type: "POST",
         url: "add_user_data.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                  Swal.fire({
                  title: "User added successfully!",
                  icon: "success",
                  draggable: true,
               }).then(() => {
                  window.location.href = window.location.href; // reloads current page
               });
            },
            error: function(xhr, status, error) {
               Swal.fire({
               title: "Upload failed!",
               text: "Please check your form or server response.",
               icon: "error"
               });
            }
         });
   });


   //Add card Details
   $("#card_form").on("submit", function(e) {
      
      e.preventDefault(); // prevent default form submission

      // Optional: collect form data
      const formData = $(this).serialize();
      // alert(formData);

      $.ajax({
         url: "add_card_data.php", // 
         type: "POST",
         data: formData,
         success: function(response) {
            console.log("Success:", response);
            $("#successMessage").css("dispaly","block");
            Swal.fire({
               title: "Card added successfully!",
               icon: "success",
               draggable: true,
            }).then(() => {
               window.location.href = window.location.href; // reloads current page
            });
         },
         error: function(xhr, status, error) {
            console.error("AJAX error:", error);
         }
      });
   });
});
</script>

</html>