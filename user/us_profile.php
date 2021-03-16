<?php 
  SESSION_START();
	include("../app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
  
  $_SESSION['loggedIn']->user_id;
  $_SESSION['loggedIn']->user_name; 
  $user_id=$_SESSION['user_id'];

  $sql = mysqli_query($conn,"SELECT * FROM users WHERE user_id='$user_id'");
  $result = mysqli_fetch_assoc($sql);

  $donateQuery = mysqli_query($conn, "SELECT * FROM donation INNER JOIN users ON donation.do_user_id=users.user_id 
                                WHERE users.user_id='$user_id';");

  $joinEventQuery = mysqli_query($conn, "SELECT * FROM donation INNER JOIN events ON donation.do_event_id=events.event_id 
  WHERE donation.do_user_id='$user_id';");

  $fundraiseQuery = mysqli_query($conn, "SELECT * FROM `events` WHERE `organizer_id`='$user_id' AND `event_status`=1");

?>
<div class="container">
  <div class="main-body">
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center"><br>
              <img src="<?php echo $result['user_img']; ?>" alt="Admin" class="rounded-circle" width="150"><br>
              <div class="mt-3">
                <h4><?php echo $result['user_name'];?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4">
                <h6 class="mb-0">Welcome Back!</h6>
              </div>
              <div class="col-sm-6 text-secondary">
              <?php echo $result['user_name'];?>
              </div>
            </div>       
          </div>
        </div>
        <div class="row gutters-sm">
          <div class="col-sm-12 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Donation History</i></h6>
                <small>Donation History</small>
                <div class="row">
                <?php while($row = mysqli_fetch_assoc($donateQuery)) { ?>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                    <?php
                      if ($result = mysqli_fetch_assoc($joinEventQuery)) { ?>
                      <h5 class="card-title"><?php echo $result['event_name']; ?></h5>
                      <p class="card-text"><?php echo substr($result['event_desc'], 0, 150); ?>.....</p>
                      <a href="details.php?eventID=<?php echo $row['do_event_id']; ?>" class="btn btn-outline-warning">View</a>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <?php } ?>
          <br>
          <div class="col-sm-12 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Organized Fundraise</i></h6>
                <small>Organized Fundraise</small>
                <div class="row">
                  <?php while($result = mysqli_fetch_assoc($fundraiseQuery)) { ?>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $result['event_name']; ?></h5>
                        <p class="card-text"><?php echo substr($result['event_desc'], 0, 150); ?>....</p>
                        <a href="details.php?eventID=<?php echo $result['event_id']; ?>" class="btn btn-outline-warning">View</a>
                        <a href="../app/lib/eventAction.php?action=edit?id=<?php echo $user_id; ?>" class="btn btn-outline-warning">Edit</a>
                        <a href="../app/lib/eventAction.php?action=delete?id=<?php echo $user_id; ?>" class="btn btn-outline-warning">Delete</a>
                      </div>
                    </div>
                  </div>
                  <?php } ?>               
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