<?php 
  SESSION_START();
	include("../app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php");
?>

<div align="center">

    <h2>Your Profile</h2>
		<!---<a href="editprofile.php?user_name="<?php echo $_SESSION['organization']->org_id; ?> /> Edit Profile</a>
		--->
  </form>
</div>

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
                    <label for="floatingInputGrid"><?php echo $_SESSION['organization']->org_name; ?></label>
                    <input type="text" class="form-control" required value="">
                  </div>
                  <div>
                    <label for="floatingInputGrid">Bio</label>
                    <textarea class="form-control" required placeholder="Description">Hello there</textarea>
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
                      <input type="text" class="form-control" id="floatingInputGrid" required value=" ">
                      <label for="floatingInputGrid">Organization Name</label>
                    </div>
                    <div class="form-floating">
                      <input type="email" class="form-control" id="floatingInputGrid" value="mdo@example.com">
                      <label for="floatingInputGrid">Email address</label>
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
                      <input type="email" class="form-control" id="floatingInputGrid" value="mdo@example.com">
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
                      <input type="number" class="form-control" id="floatingInputGrid" maxlength="5" value="00000">
                      <label for="floatingInputGrid">Zipcode</label>
                    </div>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGrid" value="(+60)">
                      <label for="floatingInputGrid">Contact</label>
                    </div>
                    <div class="form-floating">
                      <input type="url" class="form-control" id="floatingInputGrid" placeholder="give-n-smile.com">
                      <label for="floatingInputGrid">Website Link</label>
                    </div>
                    <div class="form-floating">
                      <input type="url" class="form-control" id="floatingInputGrid" placeholder="facebook.com">
                      <label for="floatingInputGrid">Facebook Link</label>
                    </div>
                    <div class="form-floating">
                      <select class="form-select" id="inputGroupSelect01">
                        <option selected>Option</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <label for="floatingInputGrid">Social Media Link</label>
                    </div>
                    <div class="form-floating">
                      <input type="password" class="form-control" id="floatingInputGrid" value="***********">
                      <label for="floatingInputGrid">Password</label>
                    </div>
                </div><br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button class="btn btn-primary me-md-2" type="button">Update</button>
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
</body>
</html>