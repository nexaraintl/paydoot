<?php
   include("conn.php");
   error_reporting(E_ALL);
   ini_set('display_errors', '1');
   session_start();
   $id = $_SESSION['id'];
   $name = $_SESSION['name'];
   //Validation login Session
   // if(strlen($_SESSION['id'])==0)
   // { 
   //    header("Location:logout.php"); }
   // else{
?>
<!doctype html5>
<html lang="en" dir="ltr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>PayDoot</title>

   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- inject:css-->

   <link rel="stylesheet" href="assets/vendor_assets/css/bootstrap/bootstrap.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/daterangepicker.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/fontawesome.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/footable.standalone.min.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/fullcalendar@5.2.0.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/jquery-jvectormap-2.0.5.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/jquery.mCustomScrollbar.min.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/leaflet.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/line-awesome.min.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/magnific-popup.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/MarkerCluster.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/MarkerCluster.Default.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/select2.min.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/slick.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/star-rating-svg.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/trumbowyg.min.css">

   <link rel="stylesheet" href="assets/vendor_assets/css/wickedpicker.min.css">

   <link rel="stylesheet" href="style.css">

   <!-- endinject -->

   <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

   <!-- Fonts -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body class="layout-light side-menu">
   <div class="mobile-search">
      <form action="/" class="search-form">
         <img src="img/svg/search.svg" alt="search" class="svg">
         <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
      </form>
   </div>
   <div class="mobile-author-actions"></div>
   <header class="header-top">
      <nav class="navbar navbar-light">
         <div class="navbar-left">
            <div class="logo-area">
               <a class="navbar-brand" href="index.html">
                  <img class="dark" src="img/logo-dark.png" alt="logo">
                  <img class="light" src="img/logo-white.png" alt="logo">
               </a>
               <a href="#" class="sidebar-toggle">
                  <img class="svg" src="img/svg/align-center-alt.svg" alt="img"></a>
            </div>
            <div class="top-menu">

               <div class="hexadash-top-menu position-relative">
                  <ul class="d-flex align-items-center flex-wrap">
                     <li>
                        <a href="index.php" class="">Dashboard</a>
                     </li>
                     <li class="has-subMenu">
                        <a href="#" class="">Layouts</a>
                        <ul class="subMenu">
                           <li class="l_sidebar">
                              <a href="#" data-layout="light">Light Mode</a>
                           </li>
                           <li class="l_sidebar">
                              <a href="#" data-layout="dark">Dark Mode</a>
                           </li>
                           </li>
                        </ul>
                     </li>
                     <li class="has-subMenu">
                        <a href="#" class="">Apps</a>
                        <ul class="megaMenu-wrapper megaMenu-dropdown">
                           <li>
                              <ul>
                                 <li class="has-subMenu-left">
                                    <a href="#" class=" active">
                                       <span class="nav-icon uil uil-users-alt"></span>
                                       <span class="menu-text">Users</span>
                                    </a>
                                    <ul class="subMenu">
                                       <li>
                                          <a href="user_list.php" class="">Users
                                             List</a>
                                       </li>
                                       <li>
                                          <a href="add_user.php">Add
                                             User</a>
                                       </li>
                                       <!-- <li>
                                          <a href="user_add.php">Add
                                             User2</a>
                                       </li> -->
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>

            </div>
         </div>
         <!-- ends: navbar-left -->
         <div class="navbar-right">
            <ul class="navbar-right__menu">
               <li class="nav-search">
                  <a href="#" class="search-toggle">
                     <i class="uil uil-search"></i>
                     <i class="uil uil-times"></i>
                  </a>
                  <form action="/" class="search-form-topMenu">
                     <span class="search-icon uil uil-search"></span>
                     <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
                  </form>
               </li>
               <li class="nav-message" style="display:none">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle icon-active">
                        <img class="svg" src="img/svg/message.svg" alt="img">
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper">
                           <h2 class="dropdown-wrapper__title">Messages <span class="badge-circle badge-success ms-1">2</span></h2>
                           <ul>
                              <li class="author-online has-new-message">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                       <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-offline has-new-message">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                       <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-online has-new-message">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                       <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-offline">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="author-offline">
                                 <div class="user-avater">
                                    <img src="img/team-1.png" alt="">
                                 </div>
                                 <div class="user-message">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                       <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                       <span class="desc text-truncate" style="max-width: 215px;">Lorem
                                          ipsum
                                          dolor amet cosec Lorem ipsum</span>
                                    </p>
                                 </div>
                              </li>
                           </ul>
                           <a href="" class="dropdown-wrapper__more">See All Message</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- ends: nav-message -->
               <li class="nav-notification" style="display:none">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle icon-active">
                        <img class="svg" src="img/svg/alarm.svg" alt="img">
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper">
                           <h2 class="dropdown-wrapper__title">Notifications <span class="badge-circle badge-warning ms-1">4</span></h2>
                           <ul>
                              <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--primary">
                                    <img class="svg" src="img/svg/inbox.svg" alt="inbox">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--secondary">
                                    <img class="svg" src="img/svg/upload.svg" alt="upload">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--success">
                                    <img class="svg" src="img/svg/log-in.svg" alt="log-in">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--info">
                                    <img class="svg" src="img/svg/at-sign.svg" alt="at-sign">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                              <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                 <div class="nav-notification__type nav-notification__type--danger">
                                    <img src="img/svg/heart.svg" alt="heart" class="svg">
                                 </div>
                                 <div class="nav-notification__details">
                                    <p>
                                       <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                       <span>sent you a message</span>
                                    </p>
                                    <p>
                                       <span class="time-posted">5 hours ago</span>
                                    </p>
                                 </div>
                              </li>
                           </ul>
                           <a href="" class="dropdown-wrapper__more">See all incoming activity</a>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- ends: .nav-notification -->
               <li class="nav-settings" style="display:none">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle">
                        <img src="img/setting.png" alt="setting">
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper dropdown-wrapper--large">
                           <ul class="list-settings">
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/mail.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">All Features</a>
                                    </h6>
                                    <p>Introducing Increment subscriptions </p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/color-palette.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Themes</a>
                                    </h6>
                                    <p>Third party themes that are compatible</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/home.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Payments</a>
                                    </h6>
                                    <p>We handle billions of dollars</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/video-camera.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Design Mockups</a>
                                    </h6>
                                    <p>Share planning visuals with clients</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/document.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Content Planner</a>
                                    </h6>
                                    <p>Centralize content gethering and editing</p>
                                 </div>
                              </li>
                              <li class="d-flex">
                                 <div class="me-3"><img src="img/microphone.png" alt=""></div>
                                 <div class="flex-grow-1">
                                    <h6>
                                       <a href="" class="stretched-link">Diagram Maker</a>
                                    </h6>
                                    <p>Plan user flows & test scenarios</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- ends: .nav-support -->
               <li class="nav-flag-select"  style="display:none">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle"><img src="img/flag.png" alt="" class="rounded-circle"></a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper dropdown-wrapper--small">
                           <a href=""><img src="img/eng.png" alt=""> English</a>
                           <a href=""><img src="img/ger.png" alt=""> German</a>
                           <a href=""><img src="img/spa.png" alt=""> Spanish</a>
                           <a href=""><img src="img/tur.png" alt=""> Turkish</a>
                           <a href=""><img src="img/iraq.png" alt=""> Arabic</a>
                        </div>
                     </div>

                  </div>
               </li>
               <!-- ends: .nav-flag-select -->
               <li class="nav-author">
                  <div class="dropdown-custom">
                     <a href="javascript:;" class="nav-item-toggle"><img src="img/author-nav.jpg" alt="" class="rounded-circle">
                        <span class="nav-item__title"><?php echo $_SESSION["name"];?><i class="las la-angle-down nav-item__arrow"></i></span>
                     </a>
                     <div class="dropdown-parent-wrapper">
                        <div class="dropdown-wrapper">
                           <div class="nav-author__info" style="display:none">
                              <!-- <div class="author-img">
                                 <img src="img/author-nav.jpg" alt="" class="rounded-circle">
                              </div> -->
                              <div>
                                 <h6><?php echo $name;?></h6>
                                 <span><?php echo $name;?></span>
                              </div>
                           </div>
                           <div class="nav-author__options">
                              
                              <a href="logout.php" class="nav-author__signout">
                                 <i class="uil uil-sign-out-alt"></i> Sign Out</a>
                           </div>
                        </div>
                        <!-- ends: .dropdown-wrapper -->
                     </div>
                  </div>
               </li>
               <!-- ends: .nav-author -->
            </ul>
            <!-- ends: .navbar-right__menu -->
            <div class="navbar-right__mobileAction d-md-none">
               <a href="#" class="btn-search">
                  <img src="img/svg/search.svg" alt="search" class="svg feather-search">
                  <img src="img/svg/x.svg" alt="x" class="svg feather-x"></a>
               <a href="#" class="btn-author-action">
                  <img class="svg" src="img/svg/more-vertical.svg" alt="more-vertical"></a>
            </div>
         </div>
         <!-- ends: .navbar-right -->
      </nav>
   </header>
   <main class="main-content">

      <div class="sidebar-wrapper">
         <div class="sidebar sidebar-collapse" id="sidebar">
            <div class="sidebar__menu-group">
               <ul class="sidebar_nav">
                  <li>
                     <a href="index.php">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Dashboard</span>
                     </a>
                  </li>
                  <li class="has-child">
                     <a href="#" class="">
                        <span class="nav-icon uil uil-window-section"></span>
                        <span class="menu-text">Layouts</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="l_sidebar">
                           <a href="#" data-layout="light">Light Mode</a>
                        </li>
                        <li class="l_sidebar">
                           <a href="#" data-layout="dark">Dark Mode</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-child">
                     <a href="#">
                        <span class="nav-icon uil uil-users-alt"></span>
                        <span class="menu-text">Users</span>
                        <span class="toggle-icon"></span>
                     </a>
                     <ul>
                        <li class="">
                           <a href="user_list.php">Users
                              List</a>
                        </li>
                        <li>
                           <a href="add_user.php">Add User</a>
                        </li>
                        <!-- <li>
                           <a href="user_add.php">Add User2</a>
                        </li> -->
                     </ul>
                  </li>
                  <!-- <li class="">
                     <a href="login.html">
                        <span class="nav-icon uil uil-signin"></span>
                        <span class="menu-text">Log In</span>
                     </a>
                  </li>
                  <li class="">
                     <a href="sign-up.html">
                        <span class="nav-icon uil uil-sign-out-alt"></span>
                        <span class="menu-text">Sign Up</span>
                     </a>
                  </li> -->
               </ul>
            </div>
         </div>
      </div>