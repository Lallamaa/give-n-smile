<?php   
  session_start();
  include("../app/lib/path.php"); 
  include(ROOT_PATH . "app/includes/header.php");
  include(ROOT_PATH . "app/lib/function.php");

					$var=session_value("org_id");
					$sql="SELECT  *  FROM  organization  where  org_id=$var";
					$result=mysqli_query($conn,$sql);
					$rows=mysqli_fetch_array($result);
?>

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">Organization</a></li>
              <li class="breadcrumb-item active" aria-current="page">Organization Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
          <div class="container">
      <div class="main-body">  
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <!-- <img src="<?php echo 'images/' . $organization['profile_image'] ?>" class="rounded-circle" width="150" alt=""> -->
                    <div class="mt-3">
                      <a href="org_edit.php"></br>Click to Update Profile</a>
                      <h6><?php  echo  $rows['org_name'];  ?></h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <a href="<?php  echo$rows['org_weblink']; ?>"><?php  echo$rows['org_weblink']; ?> </a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <a href="<?php  echo$rows['org_fblink']; ?>"><?php  echo$rows['org_fblink']; ?> </a>
                  </li>
                </ul>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h6 class="mb-5">Mission</h6>
                    <div class="align-left"><?php  echo$rows['org_bio'];  ?></div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                  <div class="col-sm-3">
                <h6 class="mb-0">Organization Name</h6>
              </div>
              <div class="col-sm-6 text-secondary">
              <?php  echo  $rows['org_name'];  ?>
              </div>
                  </div>
                </div>
              </div>
              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                    <form method="POST" action="muser/us_editprofile.php">
                      <h6 class="d-flex align-items-center mb-3">
                        <i class="material-icons text-info mr-2">Organization Category</i><?php  echo  $rows['org_category'];  ?></h6>
                        <h6 class="d-flex align-items-center mb-3">
                        <i class="material-icons text-info mr-2">Extra weblink</i><a href="<?php  echo$rows['org_xtralink']; ?>"><?php  echo$rows['org_xtralink']; ?> </a></h6> 
                        <h6 class="d-flex align-items-center mb-3">
                        <i class="material-icons text-info mr-2">Contact No.</i><?php  echo  $rows['org_contact'];  ?></h6> 
                        <h6 class="d-flex align-items-center mb-3">
                        <i class="material-icons text-info mr-2">Location</i><?php  echo  $rows['org_address'];  ?> <?php  echo  $rows['org_zipcode'];  ?> <?php  echo  $rows['org_city'];  ?>, <?php  echo  $rows['org_state'];  ?></h6> 
                    </form>
                    </div>
                  </div>
                </div>                  
              </div>
              <div class="row gutters-sm">
          <div class="col-sm-12 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Event Fundraise</i>Sample Campaign Title</h6>
                <small>Event Fundraise</small>
                <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Event #1</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-outline-info">Event</a>
                      <a href="#" class="btn btn-outline-warning" name="delete_event">Delete</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Campaign #2</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-outline-info">Campaign</a>
                      <a href="#" class="btn btn-outline-warning" name="delete_event">Delete</a>
                    </div>
                  </div>
                </div>                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<?php include(ROOT_PATH . "app/includes/footer.php"); ?>