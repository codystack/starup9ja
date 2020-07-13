<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login");
  }
?>
<?php
    include("../controllers/dbconnect.php");

    if (!isset($_SESSION['username'])){
        header("Location: login");
    }
?>
<?php
include('../controllers/dbconnect.php');
include('./components/modal.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contestants :: Webify Dashboard&trade;</title>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Webify Dashboard are creative user and admin dashboard that works like your wordpress, that help our clients easily manage their own website on the GO! even on their mobile devices." />
      <meta name="keywords" content="Website development, App development, Software development, Branding, Webify, Webifyng, Lagos, Nigeria, Port Harcourt, Github, Creative Agency in Lagos, Branding Agency in lagos, responsive website development company in Lagos" />
      <meta name="author" content="webifyng">
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
	  <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
      
  </head>

  <body>
  <body>
	  <div class="fixed-button">
		<a href="https://webify.com.ng/contact-us/" target="_blank" class="btn btn-md btn-primary">
			<i class="fa fa-support" aria-hidden="true"></i> Get Support
		</a>
	  </div>
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>
                       <div class="mobile-search">
                           <div class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control" placeholder="Enter Keyword">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <a href="\">
                           <img class="img-fluid" src="assets/images/logo.png" alt="Webify-logo" />
                       </a>
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                   </div>

                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                           </li>
                           <li>
                               <a href="#!" onclick="javascript:toggleFullScreen()">
                                   <i class="ti-fullscreen"></i>
                               </a>
                           </li>
                       </ul>
                       <ul class="nav-right">
                           <li class="user-profile header-notification">
                               <a href="#!">
                                   <img src="https://i.imgur.com/WKOInUn.png" class="img-radius" alt="User-Profile-Image">
                                   <span><?php echo $_SESSION['name'] ?></span>
                                   <i class="ti-angle-down"></i>
                               </a>
                               <ul class="show-notification profile-notification">
                                   <li>
                                       <a href="#!">
                                           <i class="ti-settings"></i> Settings
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#!">
                                           <i class="ti-user"></i> Profile
                                       </a>
                                   </li>
                                   
                                   <li>
                                       <a href="auth-lock-screen.html">
                                           <i class="ti-lock"></i> Lock Screen
                                       </a>
                                   </li>
                                   <li>
                                       <a href="index.php?logout='1'">
                                       <i class="ti-layout-sidebar-left"></i> Logout
                                   </a>
                                   </li>
                               </ul>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="dashboard">
                                        <span class="pcoded-micon"><i class="ti-dashboard"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="contestants">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Contestants</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#!">
                                        <span class="pcoded-micon"><i class="ti-folder"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Files</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#!">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Transactions</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#!">
                                        <span class="pcoded-micon"><i class="ti-lock"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Lock Screen</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="index.php?logout='1'">
                                        <span class="pcoded-micon"><i class="ti-power-off"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Logout</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">DO YOU NEED HELP?</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="https://webify.com.ng/contact-us/" target="_blank">
                                        <span class="pcoded-micon"><i class="ti-headphone-alt"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Get Support</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
									<!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <h5 class="m-b-10">Contestants</h5>
                                            <p class="text-muted m-b-10">View | Modify | Delete Contestants.</p>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    
                                <!-- Page-body start -->
                                <div class="page-body">
                                    <!-- Contestants table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="col-md-4 ">
                                            <div class="input-group">
                                                <span class="input-group-addon consearch" id="search"><i class="icofont icofont-ui-search"></i></span>
                                                <input type="text" autocomplete="on" class="form-control" placeholder="Search" title="Who are you looking for?" data-toggle="tooltip" aria-haspopup="true" aria-expanded="false" size="30" onkeyup="showResult(this.value)">
                                                <div id="livesearch"></div>
                                            </div>
                                            </div>

                                            <div class="card-header-right">
												<ul class="list-unstyled card-option">
													<li><i class="fa fa-chevron-left"></i></li>
													<li><i class="fa fa-window-maximize full-card"></i></li>
													<li><i class="fa fa-minus minimize-card"></i></li>
													<li><i class="fa fa-refresh reload-card"></i></li>
													<li><i class="fa fa-times close-card"></i></li>
												</ul>
                                            </div>

                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>SN</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Phone Number</th>
                                                        <th>Category</th>
                                                        <th>Age Category</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                    $sql = "SELECT * FROM users order by date ASC";
                                                    $result = mysqli_query($con, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>";
                                                    echo "<th>" .$row['id']. "</th>";
                                                    echo "<td>" .$row['first_name']. "</td>";
                                                    echo "<td>" .$row['last_name']. "</td>";
                                                    echo "<td>" .$row['phone_number']. "</td>";
                                                    echo "<td>" .$row['performance_category']."</td>";
                                                    echo "<td>" .$row['age_category']. "</td>";
                                                    echo "<td>" .'<button class="btn btn-primary" data-toggle="modal" data-target="#contview"><i class="icofont icofont-eye-alt"></i></button> <button class="btn btn-danger" href=\'contestants.php?delete={$id}\'"><i class="icofont icofont-bin"></i></a>'. "</td>";
                                                    "</tr>";
                                                        }
                                                    }else {
                                                        echo "<td><p>No Contestants Yet!</p></td>";
                                                    }
                                                    
                                                    if (isset($_GET['delete'])) {

                                                        $contid = $_GET['delete'];
                                                        $sql = "DELETE FROM users WHERE id = $contid";
                                                        $delete_query = mysqli_query($con, $sql);
                                                    }

                                                    ?>
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="styleSelector">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('./components/footer.php');?>
