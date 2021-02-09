<?php 
  include('../app/lib/path.php');
  include(ROOT_PATH . 'app/includes/header.php');

?> 
<div class="container">
  <div class="main-body">
    <div class="row gutters-sm">
      <div class="col-lg-12">
        <div class="card mb-5">
          <div class="card-body">
            <div class="row">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="row g-2">
                  <div class="col-md col-lg-12 col-sm-12" >
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGrid" required value="mdo@example.com">
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