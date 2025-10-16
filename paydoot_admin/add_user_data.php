<?php
   
  
    include("conn.php");
    //Personal Info
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    // Handle uploaded profile image
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'assets/images/users/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $tmpName = $_FILES['profile_image']['tmp_name'];
        $originalName = basename($_FILES['profile_image']['name']);
        $ext = pathinfo($originalName, PATHINFO_EXTENSION);
        $safeName = uniqid('profile_', true) . '.' . $ext;
        $destination = $uploadDir . $safeName;

        if (move_uploaded_file($tmpName, $destination)) {
            // File uploaded successfully
            $imagePath = $destination;
        } else {
            http_response_code(500);
            echo "Failed to move uploaded file.";
            exit;
        }
    } else {
        $imagePath = null; // Optional: handle default image
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
    
    $aadhar_num=$_POST["aadhar_num"];
    
    //Bank Details
    $account_num=$_POST["account_number"];
    $ifsc_code=$_POST["ifsc_code"];
    $bank_name=$_POST["bank_name"];
    $bank_address=$_POST["bank_address"];
    $branch_name=$_POST["branch_name"];
    $branch_center=$_POST["branch_center"];
    $branch_district=$_POST["branch_district"];
    $branch_state=$_POST["branch_state"];

    $insert="INSERT INTO `user`(`profile_img`, `name`, `dob`,`email`, `mobile`,`pan_num`, `aadhar_num`, `account_num`, `ifsc_code`, `bank_name`, `branch_center`, `branch_state`, `user_status`) VALUES ('$imagePath','$name','$dob','$email','$mobile','$pan_num','$aadhar_num','$account_num','$ifsc_code','$bank_name','$branch_center','$branch_state','Active')";
    $insert_query=mysqli_query($conn,$insert);
    
    if($insert_query)
    {
        echo "New User added Successfully!!!";
    }
    else
    {
        echo $insert;
    }
    
?>