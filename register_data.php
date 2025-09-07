<?php
    if(isset($_POST))
    {
        include("conn.php");
        $name=$_POST["fname"];
        $email=$_POST["email"];
        $mobile=$_POST["mobile"];

        $insert="INSERT INTO `user`(`name`,`email`, `mobile`, `user_status`) VALUES ('$name','$email','$mobile','New')";
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
?>