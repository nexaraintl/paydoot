 <?php
    include("conn.php");
    
    session_start();
    $message="";
    if(count($_POST)>0) 
    {
        $uname=$_POST["username"] ;
        $password=$_POST["password"];
        $data = "SELECT * FROM `admin` WHERE `uname`='$uname' and `password` = '$password'";
        $result =  mysqli_query($conn,$data);
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            $_SESSION["id"] = $row['id'];
            $_SESSION["name"] = $row['name'];
            echo 1;
        
        } else {
            $message = "Invalid Username or Password!";
            echo 0;
        }
        exit();
    }
   
    // if(isset($_SESSION["id"])) {
    //     header("Location:home.php");
    // }
?>