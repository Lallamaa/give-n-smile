<?php 
  session_start();

  // echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cloudinary-core/2.11.3/cloudinary-core.min.js">';
  include('app/lib/path.php');
  include(ROOT_PATH . 'app/includes/header.php');  

?> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<?php 


$queryy = "SELECT `cat_name` FROM category ORDER BY `cat_name` ASC";
$category = mysqli_query($conn, $queryy);

if (isset($_SESSION['loggedIn'])) {

  $id = $_SESSION['loggedIn']->user_id; 


} else if (isset($_SESSION['orgLoggedIn'])) {

  $id = $_SESSION['orgLoggedIn']->org_id; 

} else {
  echo "Please log in to your account";
  // header('Location: login.php?errorlogin');
  // exit();
}
?>

<div class="container">     
  <div class="create-campaign">
    <div class="campaign-title">
      <h1 class="text-centere">Create A New Campaign</h1>
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
    <!-- action="app/includes/create.inc.php" -->
    <form role="form" id="event-form" action="app/includes/create.inc.php" method="post" enctype="multipart/form-data">
      <div class="row setup-content" id="step-1">
        <div class="col-xs-6 col-md-offset-3">
          <div class="col-md-12">
            <h3> Step 1</h3>
            <div class="form-group">
              <label class="control-label">Campaign Name</label>
              <input  maxlength="255" type="text" class="form-control" placeholder="Enter Campaign Name" name="name"/>
            </div>
            <div class="dropdown">
            <label class="control-label">Select Category</label>
            <select name="category" class="form-control search-slt dropdown-toggle">
                <option>Category</option>
                <?php 
                while($row = mysqli_fetch_array($category)) 
                  {
                    echo '<option value="'.$row['cat_name'].'">'.$row['cat_name'].'</option>';
                  } 
                ?>
            </select>
          </div><br>
            <div class="form-group">
              <div>Campaign Date</div>
              <label class="control-label">Start</label>
              <input type="date" required="required" id="dateIn" placeholder="yyyy-mm-dd"  name="start"/><br>
              <label class="control-label">End</label>
              <input type="date" required="required" id="dateOut" placeholder="yyyy-mm-dd" name="end" />
            </div>
            <div class="form-group">
              <label class="control-label">Description</label>
              <textarea required="required" class="form-control event-textarea" placeholder="Describe your campsign details here.."  name="desc" style="height: 300px !important;"></textarea>
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
              <input type="number" required="required" class="form-control" placeholder="Enter Total Amount (RM)"  name="amount"/>
            </div>
            <div class="form-group">
              <label class="control-label">Area of Campaign (optional)</label>
              <input maxlength="200" type="text" class="form-control" placeholder="Enter Area of Campaign" name="area"/>
            </div>
            <div class="form-group">
              <label class="control-label">Description Images</label><br>
              <input type="file" id="file-upload" class="form-control" require  name="image" accept=".jpg, .jpeg, .png, .gif"/>

              <!-- <img src="app/image/default.jpg" id="img-preview" style="width:200px; height:200px;">

              <input type="button" class="btn btn-primary nextBtn btn-lg pull-right" name="add-image-btn" value="ADD"></input>

              <div id="image-list"></div> -->
            </div>
            <?php

            ?>
          </div>
          <div>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
          </div>
          <input type="hidden" class="form-control" name="user" value="<?php echo $_SESSION['loggedIn']->user_name; ?>"/>
          <input type="hidden" class="form-control" name="userID" value="<?php echo $_SESSION['loggedIn']->user_id; ?>"/>

        </div>
      </div>
      <div class="row setup-content" id="step-3">
        <div class="col-xs-6 col-md-offset-3">
          <div class="col-md-12">
            <h3> Step 3</h3>
            <button class="btn btn-success btn-lg pull-right" id="create" type="submit" name="create-btn">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div> <!--End of .payment-details-->
</div>    

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<?php include(ROOT_PATH . 'app/includes/footer.php'); ?>

<!-- <script src="app/jvs/app.js"></script> -->

<script>  
// flatpickr import
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

  // $('#event-form').on('submit', function(event){
  //     event.preventDefault();
  //     var image_name = $('#image').val();
  //     if(image_name == '')
  //     {
  //         alert("Please Select Image");
  //         return false;
  //     }
  //     else
  //     {
  //         $.ajax({
  //             url:"../lib/insert_images.php",
  //             method:"POST",
  //             data: new FormData(this),
  //             contentType:false,
  //             cache:false,
  //             processData:false,
  //             success:function(data)
  //             {
  //                 $('#image').val('');
  //                 load_images();
  //             }
  //         });
  //     }
  // });
  
});  


</script>
