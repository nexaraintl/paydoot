<?php
// print_r($_POST);
// exit();
   
    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        include("conn.php");
        //Personal Info
        
        $folder="assets/images/users/";
        $profile_img=$_FILES["profile_img"];
        if(isset($profile_img))
        {
            $profile_img;
        }
        else
        {
            $profile_img="assets/images/users/IMG00775.jpg";
        }
       
        $id=$_POST["user_id"];
        $name=$_POST["fname"];
        $dob=$_POST["dob"];
        $email=$_POST["email"];
        $mobile=$_POST["mobile"];

        //KYC Info
        $pan_num=$_POST["pan_num"];
        $pan_img=$_FILES["pan_img"];
       if(isset($pan_img))
        {
            $pan_img;
        }
        else
        {
            $pan_img="assets/images/users/IMG00775.jpg";
        }
        $aadhar_num=$_POST["aadhar_num"];
        $upload_aadhar_front=$_FILES["upload_aadhar_front"];
        if(isset($upload_aadhar_front))
        {
            $upload_aadhar_front;
        }
        else
        {
            $upload_aadhar_front="assets/images/users/IMG00775.jpg";
        }
        $upload_aadhar_back=$_FILES["upload_aadhar_back"];
       if(isset($upload_aadhar_back))
        {
            $upload_aadhar_back;
        }
        else
        {
            $upload_aadhar_back="assets/images/users/IMG00775.jpg";
        }

        //Bank Details
        $account_num=$_POST["account_number"];
        $ifsc_code=$_POST["ifsc_code"];
        $bank_name=$_POST["bank_name"];
        $bank_address=$_POST["bank_address"];
        $branch_name=$_POST["branch_name"];
        $branch_center=$_POST["branch_center"];
        $branch_district=$_POST["branch_district"];
        $branch_state=$_POST["branch_state"];
        $status=$_POST["status"];

        
        $update="UPDATE `user` SET `profile_img`='$profile_img',`name`='$name',`dob`='$dob',`email`='$email',`mobile`='$mobile',`pan_num`='$pan_num',`pan_img`='$pan_img',`aadhar_num`='$aadhar_num',`aadhar_front_img`='$upload_aadhar_front',`aadhar_back_img`='$upload_aadhar_back',`account_num`='$account_num',`ifsc_code`='$ifsc_code',`bank_name`='$bank_name',`bank_address`='$bank_address',`branch_name`='$branch_name',`branch_center`='$branch_center',`branch_district`='$branch_district',`branch_state`='$branch_state',`user_status`='$status' WHERE `id`='$id'";
        
        $update_query=mysqli_query($conn,$update);
        
        if($update_query)
        {
            echo "User details updated Successfully!!!";
        }
        else
        {
            echo $update;
        }
                   
    
    }
    else
    {
        echo "In else";
    }
    
?>