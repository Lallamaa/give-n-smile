<?php
  include('../app/lib/path.php');
  include(ROOT_PATH . 'app/database/connect.php');
  include(ROOT_PATH . 'app/lib/function.php');
?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <!------ Include the above in your HEAD tag ---------->

  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title> Give & Sm:)e | Admin </title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css"> -->  
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- <link rel="stylesheet" href="../css/query.css">     -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>app/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>  
  <script src="<?php echo BASE_URL;?>jvs/script.js"></script> 

</head>
<body>


<nav class="navbar sticky-top navbar-expand-lg navbar-light pr-5 pl-5" style="padding-left: 3rem!important; padding-right: 3rem!important;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php"><img src="<?php echo BASE_URL; ?>app/image/logo.png" alt="" width="100" height="50" class="d-inline-block align-top"></a>
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>index.php">Visit Site</a>
                </li>
              </ul>
            </div>
                <!-- Make this btn-group for dropdownMenuButton2 at header2.php By V-->
        <div class="btn-group"> 
            <button class="btn btn-primary-outline mr-5" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?php echo BASE_URL; ?>app/image/icon/account.png" width="30" height="30" class="d-inline-block align-top">
            </button>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
                <li><a class="nav-link" href="<?= BASE_URL; ?>user/us_profile.php">Account</a></li>
                <li><a class="nav-link" href="<?= BASE_URL; ?>muser/us_editprofile.php">Setting</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="nav-link" name="logout" href="'. BASE_URL .'index.php?logout=“1"><i class="fa fa-power-off"></i>Logout</a></li>
            </ul>
        </div>
      </div><!-- /.navbar-collapse -->
  </nav>
  <!--End of NavBar-->

<div class="container-fluid main-container">
  <div class="col-md-2 sidebar">
    <div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <div class="absolute-wrapper"> </div>
    <!-- Menu -->
    <div class="side-menu">
      <nav class="navbar navbar-default" role="navigation">
        <!-- Main Menu -->
        <div class="side-menu-container">
          <ul class="nav navbar-nav">
            <li class="active"><a class="glyphicon glyphicon-dashboard" href="dashboard.php"> Dashboard </a></li>
            <li><a class="glyphicon glyphicon-dashboard" href="ad_category.php"> Manage Category </a></li>
            <li><a class="glyphicon glyphicon-dashboard" href="ad_fund.php"> Manage Event </a></li>
            <!-- <li><a class="glyphicon glyphicon-dashboard" href="ad_donation.php"> Manage Donation </a></li> -->
            <li><a class="glyphicon glyphicon-dashboard" href="ad_user.php"> User Management </a></li>
            <li><a class="glyphicon glyphicon-dashboard" href="ad_org.php"> Organization Managemnet </a></li>
            <!-- <li><a class="glyphicon glyphicon-dashboard" href="ad_emergency.php"> Emergency Event </a></li> -->
            <li><a class="glyphicon glyphicon-dashboard" href="ad_feedback.php"> Feedbacks </a></li>
            <!-- <li><a href="ad_fb.php">Settings</a></li> -->
            <li><a class="glyphicon glyphicon-dashboard" href="logout.php"> Logout </a></li>
          </ul>
        </div><!-- .navbar-collapse// -->
      </nav>
    </div>
  </div>  		
  </div>
