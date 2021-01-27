<?php
  include('./includes/top.inc.php');
  //include('add.inc.php');

  $categories='';
  $msg='';

  function get_safe_value($con,$str){
    if($str!=''){
      $str=trim($str);
      return mysqli_real_escape_string($con,$str);
    }
  }

  if (isset($_GET['id']) && $_GET['id']!='') {
    $id=get_safe_value($conn, $_GET['id']);
    $res=mysqli_query($conn, "SELECT * from category where id='$id'");
    $check=mysqli_num_rows($res);
    if ($check>0) {
      $row=mysqli_fetch_assoc($res);
      $categories=$row['name'];
    } else {
      //header('Location: localhost/fyp/admin/ad_category.php');
      die();
    }
  }

  if (isset($_POST['submit'])) {
    $categories=get_safe_value($conn, $_POST['catName']);
    $res=mysqli_query($conn, "SELECT * from category ORDER BY cat_id;");
    $check=mysqli_num_rows($res);
    if ($check>0) {
      if (isset($_GET['id']) && $_GET['id']!='') {
        $getData=mysqli_fetch_assoc($res);
        if ($id==$getData['id']) {

        } else {
          $msg="Category already exist";
        }
      } else {
        $msg="Category already exist";
      }
    }
    
    if ($msg=='') {
      if (isset($_GET['id']) && $_GET['id']!='') {
        mysqli_query($conn, "UPDATE category set `name`='$categories' where id='$id'");
      } else {
        mysqli_query($conn, "INSERT into category (name, status) values ('$categories', '1')");
      }
    }
    header('Location: ad_category.php');
    // ob_end_flush();

    die();
  } 
  
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