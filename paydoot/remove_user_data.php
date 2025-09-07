<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        include("conn.php");
        $id=$_POST["id"];
        $status = "Blocked";
        $delete="UPDATE `user` SET `user_status`='$status' WHERE `id`='$id'";
        
        $delete_query=mysqli_query($conn,$delete);
        
        if($delete_query)
        {
            echo "User details deleted Successfully!!!";
        }
        else
        {
            echo $update;
        }
    }
?>