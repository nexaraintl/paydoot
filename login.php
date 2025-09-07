<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PayDoot</title>

    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <link rel="stylesheet" href="assets/css/arafat-font.css">
    <link rel="stylesheet" href="assets/css/plugin/animate.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/style-rtl.min.css" id="rtl-stylesheet" disabled>
</head>

<body>

    <!-- start LTR to RTL -->
    <div class="position-fixed d-flex flex-column text-center" id="draggableDiv" style="display:none !important;">
        <button id="btn-ltr" class="cmn-btn rounded-2 py-2 px-3">LTR</button>
        <span class="draggable py-2"><i class="fas fa-arrows-alt xxlr m-0"></i></span>
        <button id="btn-rtl" class="cmn-btn rounded-2 py-2 px-3">RTL</button>
    </div>
    <!-- end LTR to RTL -->

    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section register login">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar d-flex justify-content-between navbar-expand-lg navbar-dark">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logo.png" class="logo" alt="logo">
                        </a>
                        <div class="d-flex align-items-center justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    Don't have an account
                                </li>
                            </ul>
                            <div class="right-area header-action d-flex align-items-center">
                                <a href="register.php" class="cmn-btn">Register</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <!-- Login In start -->
    <section class="sign-in-up login">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-content">
                            <div class="section-header">
                                <h5 class="sub-title">The Power of Financial Freedom</h5>
                                <h2 class="title">Set Up Your Password</h2>
                                <p>Your security is our top priority. You'll need this to log into your PayDoot account</p>
                            </div>
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
                                    exit();
                                }
                            
                                if(isset($_SESSION["id"])) {
                                    header("Location:paydoot/home.php");
                                }
                            ?>
                            <form method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="email">Enter Your Email ID</label>
                                            <input type="text" id="email" name="email" placeholder="Your email ID here">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input ">
                                            <label for="confirmPass">Password</label>
                                            <div class="password-show d-flex align-items-center">
                                                <input type="text" class="passInput" name="password" id="confirmPass" autocomplete="off" placeholder="Enter Your Password">
                                                <img class="showPass" src="assets/images/icon/show-hide.png" alt="icon">
                                            </div>
                                            <div class="forgot-area text-end">
                                                <a href="javascript:void(0)" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <button class="cmn-btn">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login In end -->

    <!--==================================================================-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome.js"></script>
    <script src="assets/js/plugin/slick.js"></script>
    <script src="assets/js/plugin/apexcharts.min.js"></script>
    <script src="assets/js/plugin/waypoint.min.js"></script>
    <script src="assets/js/plugin/counter.js"></script>
    <script src="assets/js/plugin/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugin/wow.min.js"></script>
    <script src="assets/js/plugin/plugin.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>