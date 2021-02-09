<?php 
  include('../app/lib/path.php');
  include(ROOT_PATH . 'app/includes/header.php');

  $queryy = "SELECT `cat_name` FROM category ORDER BY `cat_name` ASC";
	$category = mysqli_query($conn, $queryy);
?> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!--<div class="container">
  <div class="row">

	 <form method="post">
		<legend class="title text-center"> Create New Fundraise </legend>
		<fieldset class="form-box card card-box shadow p-3 mb-5 bg-white rounded">
			<div class="card-body ">					
				<label for="inUsername"> Username </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="user_name"
								required 
								maxlength="50" 
								placeholder="(Max 20 characters)"
								value="<?php //$username; ?>">
				<br>
				<label for="inEmail"> Email </label>
				<input  class="form-control" 
								class="form-text"
								type="email" 
								name="user_email"
								required 
								placeholder="Enter your email"
								value="<?php //$email; ?>">
				<br>
				<label for="inContact"> Phone No. </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="user_phone"
								required 
								maxlength="11" 
								placeholder="Enter your phone no."
								value="<?php //$phone; ?>">
				<br>
				<label for="inputPassword1" class="form-label">Password</label>
				<input  type="password" 
								name="password" 
								class="form-control" 
								aria-describedby="passwordHelpBlock" 
								required
								maxlength="20"
								minlength="8"
								placeholder="********"
								value="<?php //$prepassword; ?>">				
				<small id="passwordHelpBlock" class="form-text">
				*Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
				</small>
				<br>
				<label for="inputPassword2" class="form-label">Re-enter Password</label>
				<input  type="password" 
								name="confirmpassword" 
								class="form-control" 
								aria-describedby="passwordHelpBlock" 
								required
								maxlength="20"
								minlength="8"
								placeholder="********"
								value="<?php //$conpassword; ?>">				
				<br>
				<input type="hidden" name="usertype" value="user">
				<input type="hidden" name="image" value="avatar.png">

				<button type="submit" class="btn btn-primary" name="registerbtn"> Sign Up </button>
			</div>
		</fieldset>
  </form> -->


  <div class="container">
           
   
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="payment-details">
        <div class="payment-title">
          Donate to Sample Campaign Title
        </div>

        <div class="stepwizard col-md-offset-3">
          <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
              <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
              <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
              <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
              <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
              <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
              <p>Step 3</p>
            </div>
          </div>
        </div>
          
        <form role="form" action="" method="post">
          <div class="row setup-content" id="step-1">
            <div class="col-xs-6 col-md-offset-3">
              <div class="col-md-12">
                <h3> Step 1</h3>
                <div class="form-group">
                  <label class="control-label">Campaign Name</label>
                  <input  maxlength="255" type="text" class="form-control" placeholder="Enter Campaign Name"  />
                </div>
                <div class="dropdown">
                <label class="control-label">Select Category</label>
                <select class="form-control search-slt dropdown-toggle">
                    <option>Category</option>
                    <?php while($row = mysqli_fetch_array($category)) 
                      {
                        echo '<option value="'.$row['cat_name'].'">'.$row['cat_name'].'</option>';
                      } 
                    ?>
                </select>
						  </div><br>
                <div class="form-group">
                  <div>Campaign Date</div>
                  <label class="control-label">Start</label>
                  <input type="date" required="required" id="dateIn" placeholder="yyyy-mm-dd"/><br>
                  <label class="control-label">End</label>
                  <input type="date" required="required" id="dateOut" placeholder="yyyy-mm-dd" />
                </div>
                <div class="form-group">
                  <label class="control-label">Description</label>
                  <textarea required="required" class="form-control" placeholder="Describe your campsign details here.." ></textarea>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
              </div>
            </div>
          </div>
          <div class="row setup-content" id="step-2">
            <div class="col-xs-6 col-md-offset-3">
              <div class="col-md-12">
                <h3> Step 2</h3>
                <div class="form-group">
                  <label class="control-label">Total Amount Expected to Raise</label><br>
                  <input type="number" required="required" class="form-control" placeholder="Enter Total Amount (RM)" value="25" />
                </div>
                <div class="form-group">
                  <label class="control-label">Area of Campaign (optional)</label>
                  <input maxlength="200" type="text" class="form-control" placeholder="Enter Area of Campaign"  />
                </div>
                <div class="form-group">
                  <label class="control-label">Description Images</label>
                  <input type="file" class="form-control" require/>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
              </div>
            </div>
          </div>
          <div class="row setup-content" id="step-3">
            <div class="col-xs-6 col-md-offset-3">
              <div class="col-md-12">
                <h3> Step 3</h3>
                <button class="btn btn-success btn-lg pull-right" type="create">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div> <!--End of .payment-details-->
    </div>
  </div>
</div>    


</div>

<?php include(ROOT_PATH . 'app/includes/footer.html'); ?>

<script>
  $("#dateIn").flatpickr();
  $("#dateOut").flatpickr();


  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>
