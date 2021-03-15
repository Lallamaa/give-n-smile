<?php 
  SESSION_START();
	include("../app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php");
  include(ROOT_PATH . "app/database/connect.php");
  $org_id=$_SESSION['org_id'];

  if (isset($_POST['org_id'])) {
    $query = "SELECT * FROM organization WHERE org_id='$_POST[org_id]'";
    $execution = $conn->$query($query);
    $data = $execution->fetch_object();
  }

  // $_SESSION['org_name'] = $org_name;

?>

<div align="center">

    <h2>Your Profile</h2>
		<!---<a href="editprofile.php?user_name="<?php echo $_SESSION['organization']->org_id; ?> /> Edit Profile</a>
		--->
  </form>
</div>

<?php
    $sql = mysqli_query($conn,"SELECT * FROM organization WHERE org_id='$org_id'");
    $result = mysqli_fetch_assoc($sql);


    if(isset($_POST['update']))
    {
        $user_name=$_POST['user_name'];
    }

?>

<div class="container">
  <div class="main-body">
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <form method="POST" action="" enctype="multipart/form-data">
                  <div>
                    <label for="floatingInputGrid"><?php echo $result['org_name'];?>
                  </div>
                  <div>
                    <label for="floatingInputGrid">Bio</label>
                    <textarea class="form-control" value="<?php echo $result['org_bio'];?>" placeholder="Description">Hello there</textarea>
                  </div>        
                </form>      
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="row g-2">
                  <div class="col-md col-sm-3" >
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGrid" name="org_name" value="<?php echo $result['org_name'];?>">
                      <label for="floatingInputGrid">Organization Name</label>
                    </div>
                    <div class="form-floating">
                      <input type="email" name="org_email" class="form-control" id="floatingInputGrid" value="<?php echo $result['org_email'];?>">
                      <label for="floatingInputGrid">Email</label>
                    </div>
                    <div class="form-floating">
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                        <option selected>Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <label for="floatingSelectGrid">Works with selects</label>
                    </div>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGrid"  value="<?php echo $result['org_address'];?>">
                      <label for="floatingInputGrid">Address</label>
                    </div>
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                        <option selected>State</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>            
                      <label for="floatingInputGrid">State</label>
                    </div>
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                        <option selected>City</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>            
                      <label for="floatingInputGrid">City</label>
                    </div>
                    <div class="form-floating">
                      <input type="number" class="form-control" id="floatingInputGrid" maxlength="5" value="<?php echo $result['org_zipcode'];?>"> 
                      <label for="floatingInputGrid">Zipcode</label>
                    </div>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGrid" value="(+60)<?php echo $result['org_contact'];?>">
                      <label for="floatingInputGrid">Contact</label>
                    </div>
                    <div class="form-floating">
                      <input type="url" class="form-control" id="floatingInputGrid" placeholder="ex. www.give-n-smile.com" name="org_weblink" value="<?php echo $result['org_weblink'];?>">
                      <label for="floatingInputGrid">Website Link</label>
                    </div>
                    <div class="form-floating">
                      <input type="url" class="form-control" id="floatingInputGrid" placeholder="facebook.com">
                      <label for="floatingInputGrid">Facebook Link</label>
                    </div>
                    <!-- <div class="form-floating">
                      <select class="form-select" id="inputGroupSelect01">
                        <option selected>Option</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <label for="floatingInputGrid">Social Media Link</label>
                    </div> -->
                    <div class="form-floating">
                      <input type="password" class="form-control" id="floatingInputGrid" value="***********">
                      <label for="floatingInputGrid">Password</label>
                    </div>
                </div><br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-primary me-md-2" type="button" name="update" id="update">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </div>
</div>

<?php include(ROOT_PATH . "app/includes/footer.php"); ?>