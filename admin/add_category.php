<?php 
  include('../app/lib/path.php');
  include(ROOT_PATH . 'admin/includes/add.inc.php');
  include(ROOT_PATH . 'admin/includes/top.inc.php'); 

?>
<div class="col-md-10 content">
    <div class="panel panel-default">
      <div class="panel-heading">
        Categories (ADD)
      </div>
      <div class="panel-body">

        <form method="post">
          <div class="form-group">  
            <label for="category" class="form-control-label" >INSERT CATEGORY </label>
            <input type="text" name="catName" placeholder="Enter category name" class="form-control" required /> <br>
          </div>    
            <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
              <span id="payment-button-amount">Submit</span>
            </button>
          <div class="field_error">
            <?php //echo $msg?>
          </div>        
        </form>

      </div>
    </div>
  </div>
</body>    
</html>