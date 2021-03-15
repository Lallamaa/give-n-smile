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

  if(isset($_POST['update']))
    {
        $org_name=$_POST['org_name'];
        $org_email=$_POST['org_email'];
        $org_contact=$_POST['org_contact'];
        //$org_category=$_POST['org_category'];
        $org_weblink=$_POST['org_weblink'];
        $org_fblink=$_POST['org_fblink'];
        $org_xtralink=$_POST['org_xtralink'];
        $org_address=$_POST['org_address'];
        $org_state=$_POST['org_state'];
        $org_city=$_POST['org_city'];
        $org_zipcode=$_POST['org_zipcode'];
        $org_bio=$_POST['org_bio'];
        //$org_img=$_POST['org_img'];

        $query = mysqli_query($conn,"update organization SET org_name='$org_name',org_bio='$org_bio',org_email='$org_email',org_address='$org_address',org_zipcode='$org_zipcode',org_contact='$org_contact', org_weblink='$org_weblink', org_fblink='$org_fblink', org_xtralink='$org_xtralink' where org_id='$org_id'");
        
        //  org_state='$org_state', org_city='$org_city',   
                        if($query){
                            echo "<script>alert('Your profile has been update successfully!');</script>";
                        }
                        else{
                            echo "<script>alert('Your profile failed to update. Please try again');</script>";
                        }
        
    }

    $sql = mysqli_query($conn,"SELECT * FROM organization WHERE org_id='$org_id'");
    $result = mysqli_fetch_assoc($sql);
    // $_SESSION['org_name'] = $org_name;
?>

<div align="center">
    <h2>Your Profile</h2>
  </form>
</div>

<div class="container">
  <div class="main-body">
    <div class="row gutters-sm">
      <div class="col-md-12 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <label for="floatingInputGrid"><?php echo $result['org_name'];?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <form action="org_edit.php" method="POST" enctype="multipart/form-data">
                <div class="row g-2">
                  <div class="col-md col-sm-12" >
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGrid" name="org_name" value="<?php echo $result['org_name'];?>">
                      <label for="floatingInputGrid">Organization Name</label>
                    </div>
                    <div class="form-floating">
                      <textarea class="form-control" id="floatingInputGrid" name="org_bio" placeholder="description"><?php echo $result['org_bio'];?>
                      </textarea>
                      <label for="floatingInputGrid">Bio</label>
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
                      <input type="text" class="form-control" name="org_address" id="floatingInputGrid"  value="<?php echo $result['org_address'];?>">
                      <label for="floatingInputGrid">Address</label>
                    </div>
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelectGrid" name="org_state" aria-label="Floating label select example">
                        <option selected>State</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>            
                      <label for="floatingInputGrid">State</label>
                    </div>
                    <div class="form-floating">
                      <select class="form-select" id="floatingSelectGrid" name="org_city"aria-label="Floating label select example">
                        <option selected>City</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>            
                      <label for="floatingInputGrid">City</label>
                    </div>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGrid" name="org_zipcode" maxlength="5" value="<?php echo $result['org_zipcode'];?>"> 
                      <label for="floatingInputGrid">Zipcode</label>
                    </div>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGrid" name="org_contact" maxlength="11" value="<?php echo $result['org_contact'];?>">
                      <label for="floatingInputGrid">Contact(+60)</label>
                    </div>
                    <div class="form-floating">
                      <input type="url" class="form-control" id="floatingInputGrid" placeholder="ex. www.give-n-smile.com" name="org_weblink" value="<?php echo $result['org_weblink'];?>">
                      <label for="floatingInputGrid">Website Link</label>
                    </div>
                    <div class="form-floating">
                      <input type="url" class="form-control" id="floatingInputGrid" name="org_fblink" value="<?php echo $result['org_fblink'];?>" placeholder="facebook.com">
                      <label for="floatingInputGrid">Facebook Link</label>
                    </div>
                    <div class="form-floating">
                      <input type="url" class="form-control" id="floatingInputGrid" name="org_xtralink" value="<?php echo $result['org_xtralink'];?>" placeholder="www.company.com">
                      <label for="floatingInputGrid">Extra Website Link</label>
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
                   
                </div><br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-primary me-md-2" type="submit" name="update" id="update">Update</button>
                </div>
              </form>
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