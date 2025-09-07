<?php include("header.php");?>
   <style>
   .bank_details-hide
   {
      display:none;
   }
   .button-group
   {
      display:none !important;
   }
   .personal_info {
      margin-top: 15%;
   }
   .account-profile #remove_pro_pic {
      position: absolute;
      bottom: -110px;
      right: ;
      left: 17%;
   }
   .account-profile__title {
      position: absolute;
      left: 36%;
      top: 33%;
   }
   .profile-pic {
      width: 200px;
      max-height: 200px;
      display: inline-block;
   }

   .file-upload {
      display: none;
   }
   .circle {
      border-radius: 100% !important;
      overflow: hidden;
      width: 128px;
      height: 128px;
      border: 2px solid rgba(255, 255, 255, 0.2);
      position: absolute;
      /* top: 72px; */
   }
   img {
      max-width: 100%;
      height: auto;
   }
   .p-image {
   position: absolute;
   /* top: 167px;
   right: 30px; */
   color: #666666;
   transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
   }
   .p-image:hover {
   transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
   }
   .upload-button {
   font-size: 1.2em;
   }

   .upload-button:hover {
   transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
   color: #999;
   }

   .aadhar .dm-upload-avatar {
      margin: 10% 14%;
   }
   </style>
      <div class="contents">

         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="d-flex align-items-center user-member__title mb-30 mt-30">
                     <h4 class="text-capitalize">add user</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="user-info-tab w-100 bg-white global-shadow radius-xl mb-50">
                     <form id="user_form" method="POST" enctype="multipart/form-data">
                     <div class="ap-tab-wrapper border-bottom ">
                        <ul class="nav px-30 ap-tab-main text-capitalize" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                           <li class="nav-item">
                              <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-selected="true">
                                 <img src="img/svg/user.svg" alt="user" class="svg">personal info</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-selected="false">
                                 <img src="img/svg/briefcase.svg" alt="briefcase" class="svg">KYC info</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-selected="false">
                                 <img src="img/svg/share-2.svg" alt="share-2" class="svg">Bank Details</a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content" id="v-pills-tabContent">
                        
                           <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                              <div class="row justify-content-center">
                                 <div class="col-xxl-4 col-10">
                                    <div class="mt-sm-40 mb-sm-50 mt-20 mb-20">
                                       <div class="user-tab-info-title mb-sm-40 mb-20 text-capitalize">
                                          <h5 class="fw-500">Personal Information</h5>
                                       </div>
                                       <fieldset>
                                          <div class="account-profile d-flex align-items-center mb-4 ">
                                             <div class="row">
                                                <div class="small-12 medium-2 large-2 columns">
                                                <div class="circle">
                                                   <img class="profile-pic" src="img/author/profile.png">

                                                </div>
                                                <div class="p-image">
                                                   <span class="cross" id="remove_pro_pic">
                                                      <img src="img/svg/camera.svg" alt="camera" class="svg upload-button">
                                                   </span>
                                                   <input class="file-upload" type="file" name="profile_img" id="profile_img" accept=".jpg,.jpeg,.png">
                                                </div>
                                                <div class="account-profile__title">
                                                   <h6 class="fs-15 ms-20 fw-500 text-capitalize">profile photo</h6>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- <div class="ap-img pro_img_wrapper">
                                                <input  type="file" id="file-upload" name="fileUpload" class="d-none">
                                             Profile picture image
                                                <label for="file-upload">
                                                   <img class="ap-img__main rounded-circle wh-120 bg-lighter d-flex" src="img/author/profile.png" alt="profile">
                                                   <span class="cross" id="remove_pro_pic">
                                                      <img src="img/svg/camera.svg" alt="camera" class="svg">
                                                   </span>
                                                </label>
                                             </div>-->
                                          
                                          </div>
                                          <div class="edit-profile__body personal_info">
                                          
                                                <div class="form-group mb-25">
                                                   <label for="fname">name</label>
                                                   <input type="text" class="form-control" id="fname" name="fname" placeholder="Duran Clayton" required>
                                                </div>
                                                <!-- <div class="form-group mb-25">
                                                   <label for="datepicker8">Date of Birth</label>
                                                   <input type="date" class="form-control ih-medium ip-light radius-xs b-light px-15 hasDatepicker" id="datepicker8" placeholder="DD/MM/YYYY">
                                                </div> -->

                                                <div class="dm-date-picker">
                                                   <div class="form-group mb-0 form-group-calender">
                                                      <label for="datepicker" class=" col-form-label color-dark fs-14 fw-500 align-center">Date of Birth</label>
                                                      <div class="position-relative">
                                                         <input type="text" class="form-control form-control-default" id="datepicker" name="dob" placeholder="January 20, 2018" required>
                                                         <a href="#"><img class="svg" src="img/svg/calendar.svg" alt="calendar"></a>
                                                      </div>
                                                   </div>

                                                </div>

                                                <div class="form-group mb-25">
                                                   <label for="email">Email</label>
                                                   <input type="email" class="form-control" name="email" id="email" placeholder="sample@email.com" required>
                                                </div>
                                                <div class="form-group mb-25">
                                                   <label for="phoneNumber5">phone number</label>
                                                   <input type="tel" class="form-control" id="phoneNumber5" name="mobile" placeholder="+440 2546 5236" required>
                                                </div>
                                                <div class="button-group d-flex pt-sm-25 justify-content-md-end justify-content-start ">


                                                   <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md btn-sm">cancel
                                                   </button>

                                                   <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm next">Save &amp; Next
                                                   </button>
                                                </div>
                                             </form>
                                          </div>
                                       </fieldset>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                              <div class="row justify-content-center">
                                 <div class="col-xxl-4 col-10">
                                    <div class="mt-40 mb-50">
                                       <div class="user-tab-info-title mb-35 text-capitalize">
                                          <h5 class="fw-500">KYC Information</h5>
                                       </div>
                                       <div class="edit-profile__body">
                                          <fieldset>
                                             <div class="form-group mb-25">
                                                <label for="pan_num">PAN Number</label>
                                                <input type="text" class="form-control" id="pan_num" name="pan_num" placeholder="Eg:HAPR4789M" required>
                                             </div>
                                             <div class="card card-default card-md mb-4">
                                                <div class="card-body">
                                                   <div class="dm-tag-wrap">
                                                      <div class="dm-upload">
                                                         <div class="dm-upload-avatar">
                                                            <img class="avatrSrc" class="pan_img" src="img/upload.png" alt="Avatar Upload1" required>
                                                         </div>
                                                         <div class="avatar-up">
                                                            <input type="file" id="pan_img" name="pan_img" class="upload-avatar-input">
                                                         </div>
                                                      </div>

                                                   </div>
                                                </div>
                                             </div>
                                             <div class="form-group mb-25">
                                                <label for="paadhar_num">AADHAR Number</label>
                                                <input type="text" class="form-control" id="aadhar_num" name="aadhar_num" placeholder="Eg, 123456789012345" required>
                                             </div>
                                             <div class="card card-default card-md mb-4 aadhar">
                                                <div class="card-body">
                                                   <div class="dm-tag-wrap1 row">
                                                      <div class="dm-upload1 col">
                                                         <label">Upload front-side of aadhar card</label>
                                                         <div class="dm-upload-avatar1">
                                                            <img class="avatrSrc1" src="img/upload.png" alt="Avatar Upload">
                                                         </div>
                                                         <div class="avatar-up">
                                                            <input type="file" name="upload_aadhar_front" class="upload-avatar-input1" required>
                                                         </div>
                                                      </div>
                                                      <div class="dm-upload2 col">
                                                         <label">Upload back-side of aadhar card </label>
                                                         <div class="dm-upload-avatar2">
                                                            <img class="avatrSrc2" src="img/upload.png" alt="Avatar Upload">
                                                         </div>
                                                         <div class="avatar-up">
                                                            <input type="file" name="upload_aadhar_back" class="upload-avatar-input2" required>
                                                         </div>
                                                      </div>

                                                   </div>
                                                </div>
                                             </div>
                                             <div class="button-group d-flex pt-20 justify-content-md-end justify-content-start">


                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md ">cancel
                                                </button>







                                                <button class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 next">Save &amp; Next
                                                </button>





                                             </div>
                                          </fieldset>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                              <div class="row justify-content-center">
                                 <div class="col-xxl-4 col-10">
                                    <div class="user-social-profile mt-40 mb-50">
                                       <div class="user-tab-info-title mb-40 text-capitalize">
                                          <h5>Bank Details</h5>
                                       </div>
                                       <div class="edit-profile__body">
                                          <fieldset>
                                             <div class="form-group mb-25">
                                                   <label for="account_number">Account Number</label>
                                                   <input type="text" class="form-control" id="account_number" name="account_number" placeholder="Account Number" required>
                                             </div>
                                             <div class="form-group mb-25">
                                                   <label for="ifsc_code">IFSC Code</label>
                                                   <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder="IFSC Code" required>
                                             </div>
                                             <div class="bank_details-hide">
                                                <div class="form-group mb-25 ba">
                                                      <label for="bank_name">bank name</label>
                                                      <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Bank Name" disabled>
                                                </div>
                                                <div class="form-group mb-25">
                                                      <label for="bank_address">bank address</label>
                                                      <input type="text" class="form-control" id="bank_address" name="bank_address" placeholder="Bank Address" disabled>
                                                </div>
                                                <div class="row">
                                                   <div class="form-group mb-25 col">
                                                         <label for="branch_name">Branch name</label>
                                                         <input type="text" class="form-control" id="branch_name" name="branch_name" placeholder="Bank Name" disabled>
                                                   </div>
                                                   <div class="form-group mb-25 col">
                                                         <label for="branch_center">Branch center</label>
                                                         <input type="text" class="form-control" id="branch_center" name="branch_center" placeholder="Branch Center" disabled>
                                                   </div>
                                                   <div class="form-group mb-25 col">
                                                         <label for="branch_district">Branch District</label>
                                                         <input type="text" class="form-control" id="branch_district" name="branch_district" placeholder="Branch District" disabled>
                                                   </div>
                                                   <div class="form-group mb-25 col">
                                                         <label for="branch_state">Branch State</label>
                                                         <input type="text" class="form-control" id="branch_state" name="branch_state" placeholder="Branch State" disabled>
                                                   </div>
                                                </div>
                                             </div>
                                            
                                             <div class="button-group d-flex pt-20 justify-content-md-end justify-content-start">


                                                <button class="btn btn-light btn-default btn-squared fw-400 text-capitalize radius-md">back
                                                </button>







                                                <button   class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2">Save
                                                </button>





                                             </div>
                                             <input type="submit" name="submit" id="submit" class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2" Placeholder="Save">


                                          </fieldset>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>

      </div>
<?php include("footer.php");?>