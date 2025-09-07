<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paydoot</title>

    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
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
    <header class="header-section">
        <div class="overlay">
          <div class="container">
            <div class="row d-flex header-area">
              <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                  <img src="assets/images/logo.png" class="logo" alt="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbar-content">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                  <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown main-navbar">
                      <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">Services</a>
                      <ul class="dropdown-menu main-menu shadow">
                        <li><a class="nav-link" href="#">Business</a></li>
                        <li><a class="nav-link" href="#">Individual</a></li>
                        <li><a class="nav-link" href="#">Partner</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="career-single.php">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog-single.php">News & Media</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                  </ul>
                  <div class="right-area header-action d-flex align-items-center">
                    <a href="register.php" class="cmn-btn">Open Account</a>
                  </div>
                  <div class="right-area header-action d-flex align-items-center">
                    <a href="login.php" class="cmn-btn">Login</a>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
    </header>
    <!-- header-section end -->