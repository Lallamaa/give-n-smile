<?php
    include('../app/database/connect.php');
    include('../lib/function.php');
    include('../path.php');
?>

<!DOCTYPE html>
<html>
<head>
  <!------ Include the above in your HEAD tag ---------->

  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title> Give & Sm:)e | Dashboard </title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css"> -->  
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- <link rel="stylesheet" href="../css/query.css">     -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>  
  <script src="script.js"></script> 

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> Give & Sm:)e </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  

      <form class="navbar-form navbar-left" method="GET" role="search">
        <div class="form-group">
          <input type="text" name="search" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-outline-success"><i class="glyphicon glyphicon-search"></i></button>
      </form>  <!--End form//-->

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo BASE_URL ?>/index.php" target="_blank">Visit Site</a></li>
        <li class="dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Account
          <ul class="user-menu dropdown-menu" role="menu">
            <li class="dropdown-header">SETTINGS</li>
            <li><a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>   <!--End li//-->
      </ul>   <!--End ul//-->
    </div>  <!-- .navbar-collapse// -->
  </div>  <!-- .container-fluid// -->
</nav>  <!-- nav//-->  
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
            <li><a class="glyphicon glyphicon-dashboard" href="ad_camp.php"> Manage Campaign </a></li>
            <li><a class="glyphicon glyphicon-dashboard" href="ad_fund.php"> Manage Fundraise </a></li>
            <li><a class="glyphicon glyphicon-dashboard" href="ad_donation.php"> Manage Donation </a></li>
            <li><a class="glyphicon glyphicon-dashboard" href="ad_user.php"> User Management </a></li>
            <li><a class="glyphicon glyphicon-dashboard" href="ad_org.php"> Organization Managemnet </a></li>
            <li><a class="glyphicon glyphicon-dashboard" href="ad_emergency.php"> Emergency Event </a></li>
            <li><a class="glyphicon glyphicon-dashboard" href="ad_feedback.php"> Feedbacks </a></li>
            <!-- <li><a href="ad_fb.php">Settings</a></li> -->
            <li><a class="glyphicon glyphicon-dashboard" href="logout.php"> Logout </a></li>
          </ul>
        </div><!-- .navbar-collapse// -->
      </nav>
    </div>
  </div>  		
  </div>
