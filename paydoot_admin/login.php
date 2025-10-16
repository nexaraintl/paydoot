<!doctype html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" />
    <link rel="stylesheet" href="./assets/css/line-awesome/css/line-awesome.min.css" />
    <meta name="description" content="PAYDOOT" />
    <title>Paydoot Banking Dashboard</title>
  <link href="assets/css/index.css" rel="stylesheet"></head>

  <body class="vertical hidden bg-secondary/5 dark:bg-bg3">
    <!-- Loader -->
    <div class="loader min-w-screen fixed inset-0 !z-50 flex min-h-screen items-center justify-center bg-n0 dark:bg-bg4">
      <svg viewBox="25 25 50 50">
        <circle r="20" cy="50" cx="50"></circle>
      </svg>
    </div>
    <div class="relative min-h-screen bg-secondary/5 dark:bg-bg3">
      <img src="./assets/images/ellipse1.png" class="absolute top-16 md:top-5 ltr:right-10 rtl:left-10" alt="ellipse" />
      <img src="./assets/images/ellipse2.png" class="absolute bottom-6 ltr:left-0 ltr:sm:left-32 rtl:right-0 rtl:sm:right-32" alt="ellipse" />
      <a href="index.php">
        <img src="./assets/images/logo-with-text.png" alt="logo" class="logo-full2 relative z-[2] p-6 lg:block lg:p-8" />
      </a>
      <div class="mt-7 flex items-center justify-center">
        <div class="relative z-[2] mx-auto max-w-[1416px] px-3 pb-10">
          <div class="box grid grid-cols-12 items-center gap-6 p-3 md:p-4 xl:p-6">
            <?php
                include("conn.php");
                
                session_start();
                $message="";
                if(count($_POST)>0) 
                {
                    $email=$_POST["email"] ;
                    $password=$_POST["password"];
                    $data = "SELECT * FROM `admin` WHERE `email`='$email' and `password` = '$password'";
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
                }
            
                if(isset($_SESSION["id"])) {
                    header("Location:home.php");
                }
            ?>
            <form id="loginForm" action="#" method="POST" class="col-span-12 lg:col-span-7">
              <div class="box border border-n30 bg-primary/5 dark:border-n500 dark:bg-bg3 lg:p-6 xl:p-8">
                <h3 class="h3 mb-4">Welcome Back!</h3>
                <p class="bb-dashed mb-4 pb-4 text-sm md:mb-6 md:pb-6 md:text-base">Sign in to your account and join us</p>
                <label for="email" class="mb-4 block font-medium md:text-lg"> Enter Your Email ID </label>
                <div class="mb-4">
                  <input type="text" class="w-full rounded-3xl border border-n30 bg-n0 px-3 py-2 text-sm dark:border-n500 dark:bg-bg4 md:px-6 md:py-3" placeholder="Enter Your Email" id="email"  name="email" />
                </div>
                <label for="password" class="mb-4 block font-medium md:text-lg"> Enter Your Password </label>
                <div class="col-span-2 md:col-span-1">
                  <div id="passwordfield" class="relative rounded-3xl border border-n30 bg-n0 px-3 py-2 dark:border-n500 dark:bg-bg4 md:px-6 md:py-2.5">
                    <input type="password" class="w-11/12 border-none bg-transparent p-0 text-sm" placeholder="Enter Password" id="password2" name="password"/>
                    <span class="eye-icon absolute top-1/2 -translate-y-1/2 cursor-pointer ltr:right-5 rtl:left-5" onclick="togglePassword('password2',this)">
                      <i class="las la-eye" style="display: none"></i>
                      <i class="las la-eye-slash"></i>
                    </span>
                  </div>
                </div>

                <!-- <a href="#" class="mt-4 flex justify-end text-primary"> Forgot Password? </a> -->
                <!-- <p class="mt-3">
                  Don&apos;t have an account?
                  <a class="text-primary" href="sign-up.php"> Signup </a>
                </p> -->
                <div class="mt-8 flex gap-6">
                  <input type="submit" class="btn-primary px-5" value="Login">
                </div>
              </div>
            </form>
            <div class="col-span-12 lg:col-span-5">
              <img src="./assets/images/auth.png" alt="img" width="533" height="560" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="./assets/js/main.js"></script>
  <script defer src="assets/js/app.js"></script></body>
</html>
