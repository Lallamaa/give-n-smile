<?php 
  session_start();
  include('app/lib/path.php');
  include(ROOT_PATH . 'app/includes/header.php');


// <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
// <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
// <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
// <!------ Include the above in your HEAD tag ---------->
?>
<script>
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



<div class="container">
  <div class="row">
    <div class="col-lg-5 col-md-5 col-sm-12">
      <div class="card">
        <div class="card-body">

          <div class="col-lg-12 col-md-12 col-sm-12 cart-items">
            <div class="card">
              <div class="card-body">
                <div>
                  <div class="col-md-5 col-sm-12">
                    <img src="app/image/pic_4.png" alt="" width="50" height="50" >
                  </div>
                  <div class="col-md-7 col-sm-12">
                    <div>Sample Campaign Title From Give & Smile Official</div>
                    <div class="input-amount">
                      <div>Donate:</div>
                      <span>RM </span>
                      <input type="number" name="amount" value="25">
                    </div>                             
                  </div>
                </div>     
                                
              </div>
            </div>
          </div>
        
          <div class="col-lg-12 col-md-12 col-sm-12">
            TOTAL: 
            <div class="display-total">
              RM <span>1000.00</span>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <div class="col-lg-7 col-md-7 col-sm-12">
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
                  <label class="control-label">First Name</label>
                  <input  maxlength="100" type="text" class="form-control" placeholder="Enter First Name"  />
                </div>
                <div class="form-group">
                  <label class="control-label">Last Name</label>
                  <input maxlength="100" type="text" class="form-control" placeholder="Enter Last Name" />
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email" />
                </div>
                <div class="form-group">
                  <label class="control-label">Address</label>
                  <textarea required="required" class="form-control" placeholder="Enter your address" ></textarea>
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
                  <label class="control-label">Company Name</label>
                  <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                </div>
                <div class="form-group">
                  <label class="control-label">Company Address</label>
                  <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
              </div>
            </div>
          </div>
          <div class="row setup-content" id="step-3">
            <div class="col-xs-6 col-md-offset-3">
              <div class="col-md-12">
                <h3> Step 3</h3>
                <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div> <!--End of .payment-details-->
    </div>
  </div>
</div>    

<?php include(ROOT_PATH . 'app/includes/footer.html'); ?>


