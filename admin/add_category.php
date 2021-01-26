<?php
  include('includes/top.inc.php');
  // include('add.inc.php');
  

  header("Location: ad_category.php")

  if(isset($_POST['submit']) {
    $name = mysqli_real_escape_string($conn, $_POST['catName']);
    $sql="INSERT INTO category (cat_name, cat_status) VALUES ('$name', '1');";
    mysqli_query($conn, $sql);
  } 

  
?>

<div class="col-md-10 content">
    <div class="panel panel-default">
      <div class="panel-heading">
        Categories (ADD)
      </div>
      <div class="panel-body">

        <form action="add.inc.php" method="post">
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