<?php
   
        // print_r($_POST);
        // echo "</br>Uploaded Files</br>";
        // print_r($_FILES);
       
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
            $profile_img="assets/images/users/ellipse15.png";
        }
        // echo "Profile Image : ";
        // print_r($profile_img);
        // if (is_array($_FILES)) 
        // {
        //     print_r($_FILES);
        //     if (is_uploaded_file($_FILES['profile_img']['tmp_name'])) 
        //     {
        //         $sourcePath = $_FILES['profile_img']['tmp_name'];
        //         $targetPath = "assets/images/users/" . $_FILES['profile_img']['name'];
        //         if (move_uploaded_file($sourcePath, $targetPath)) {
        //             echo $targetPath;
        //         }
        //         else
        //         {
        //             echo "not moving";
        //         }
        //     }
        //     else{
        //         echo "uploaded file failed";
        //     }
        // }
        // else
        // {
        //     echo "not in file";
        // }
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

        $insert="INSERT INTO `user`(`profile_img`, `name`, `dob`,`email`, `mobile`,`pan_num`, `pan_img`, `aadhar_num`, `aadhar_front_img`, `aadhar_back_img`,`account_num`, `ifsc_code`, `bank_name`, `bank_address`, `branch_name`, `branch_center`, `branch_district`, `branch_state`, `user_status`) VALUES ('$profile_img','$name','$dob','$email','$mobile','$pan_num','$pan_img','$aadhar_num','$upload_aadhar_front','$upload_aadhar_back','$account_num','$ifsc_code','$bank_name','$bank_address','$branch_name','$branch_center','$branch_district','$branch_state','Active')";
        $insert_query=mysqli_query($conn,$insert);
        
        if($insert_query)
        {
            echo "New User added Successfully!!!";
        }
        else
        {
            echo $insert;
        }
                   
    
    }
    else
    {
        echo "In else";
    }
    
?>