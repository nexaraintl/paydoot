<?php
    include("header.php");
        $id=$_GET["id"];
        // $status = "Block";
        $view="select * from `user` WHERE `id`='$id'";
        
        $view_query=mysqli_query($conn,$view);
        $row=mysqli_fetch_assoc($view_query);
        
    
?>

      <div class="contents">

         <div class="profile-setting ">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">

                     <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">User profile</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                           <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">uset profile</li>
                              </ol>
                           </nav>
                        </div>
                     </div>

                  </div>
                  <div class="col-xxl-3 col-lg-4 col-sm-5">
                     <!-- Profile Acoount -->
                     <div class="card mb-25">
                        <div class="card-body text-center p-0">

                           <div class="account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center ">
                              <div class="ap-img mb-20 pro_img_wrapper">
                            
                                 <label for="file-upload">
                                    <!-- Profile picture image-->
                                     <?php 
                                     if($row["profile_img"])
                                     {
                                        ?>
                                        <img class="ap-img__main rounded-circle wh-120" src="<?php echo $row["profile_img"];?>" alt="profile">
                                    <?php }else{
                                        ?>
                                    
                                        <img class="ap-img__main rounded-circle wh-120" src="img/author/profile.png" alt="profile">
                                    <?php } ?>

                                 </label>
                              </div>
                              <div class="ap-nameAddress pb-3">
                                 <h5 class="ap-nameAddress__title"><?php echo $row["name"];?></h5>
                                 <!-- <p class="ap-nameAddress__subTitle fs-14 m-0">UI/UX Designer</p> -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Profile Acoount End -->
                  </div>
                  <div class="col-xxl-9 col-lg-8 col-sm-7">
                     <div class="user-info-tab w-100 bg-white global-shadow radius-xl mb-50">
                     <form id="user_edit_form" method="POST" enctype="multipart/form-data">
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
        
                
                                          <div class="edit-profile__body personal_info">
                                          
                                                <div class="form-group mb-25">
                                                   <label for="fname">name : <?php echo $row["name"];?></label>
                                                   
                                                </div>
                                                <div class="form-group mb-25">
                                                   <label for="datepicker8">Date of Birth : <?php echo $row["dob"];?></label>
                                                </div>

                                    
                                                <div class="form-group mb-25">
                                                   <label for="email">Email : <?php echo $row["email"];?></label>
                                                </div>
                                                <div class="form-group mb-25">
                                                   <label for="phoneNumber5">phone number : <?php echo $row["mobile"];?></label>

                                                </div>
                                                <div class="form-group mb-25 status-radio">
                                                    <label class="mb-15" for="phoneNumber2">status :  <?php echo ($row["user_status"]);?></label>
                                                </div>
                                          </div>
                                       
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
                                                <label for="pan_num">PAN Number : <?php echo $row["pan_num"];?></label>
                                                
                                             </div>
                                             <div class="card card-default card-md mb-4">
                                                <div class="card-body">
                                                   <div class="dm-tag-wrap">
                                                      <div class="dm-upload">
                                                         <div class="dm-upload-avatar">
                                                            <img class="avatrSrc" class="pan_img" src="<?php echo $row["pan_img"];?>" alt="Avatar Upload1" required>
                                                         </div>
                                                         
                                                      </div>

                                                   </div>
                                                </div>
                                             </div>
                                             <div class="form-group mb-25">
                                                <label for="paadhar_num">AADHAR Number : <?php echo $row["aadhar_num"];?></label>
                                             </div>
                                             <div class="card card-default card-md mb-4 aadhar">
                                                <div class="card-body">
                                                   <div class="dm-tag-wrap1 row">
                                                      <div class="dm-upload1 col">
                                                         <label">front-side of aadhar card</label>
                                                         <div class="dm-upload-avatar1">
                                                            <img class="avatrSrc1" src="<?php echo $row["aadhar_front_img"];?>" alt="Avatar Upload">
                                                         </div>
                                                         
                                                      </div>
                                                      <div class="dm-upload2 col">
                                                         <label"> Back-side of aadhar card </label>
                                                         <div class="dm-upload-avatar2">
                                                            <img class="avatrSrc2" src="<?php echo $row["aadhar_back_img"];?>" alt="Avatar Upload">
                                                         </div>
                                                      </div>

                                                   </div>
                                                </div>
                                             </div>
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
                                                   <label for="account_number">Account Number : <?php echo $row["account_num"];?></label> 
                                             </div>
                                             <div class="form-group mb-25">
                                                <label for="ifsc_code">IFSC Code : <?php echo $row["ifsc_code"];?></label>
                                             </div>
                                             <div>
                                                <div class="form-group mb-25 ba">
                                                    <label for="bank_name">bank name : <?php echo $row["bank_name"];?></label>        
                                                </div>
                                                <div class="form-group mb-25">
                                                    <label for="bank_address">bank address : <?php echo $row["bank_address"];?></label>
                                                </div>
                                                <div class="row">
                                                   <div class="form-group mb-25 col">
                                                         <label for="branch_name">Branch name : <?php echo $row["branch_name"];?></label>
                                                   </div>
                                                   <div class="form-group mb-25 col">
                                                         <label for="branch_center">Branch center : <?php echo $row["branch_center"];?></label>
                                                
                                                   </div>
                                                   <div class="form-group mb-25 col">
                                                         <label for="branch_district">Branch District : <?php echo $row["branch_district"];?></label>
                                                         
                                                   </div>
                                                   <div class="form-group mb-25 col">
                                                         <label for="branch_state">Branch State : <?php echo $row["branch_state"];?></label>
                                                         
                                                   </div>
                                                </div>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                     </div>
                     
                  </div>
                  </div>
               </div>
            </div>
         </div>


      </div>
<?php
    include("footer.php");
?>