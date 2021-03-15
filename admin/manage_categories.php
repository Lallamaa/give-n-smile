<?php 
include('../app/database/connect.php');
include('includes/function.php');

$categories='';
$msg='';

if(isset($_GET['id']) && $_GET['id']!=''){
  $id=get_safe_value($conn,$_GET['id']);
  $res=mysqli_query($conn,"select * from category where cat_id='$id'");
  $check=mysqli_num_rows($res);

  if($check>0){
    $row=mysqli_fetch_assoc($res);
    $categories=$row['cat_name'];
  }else{
    header('location: ad_category.php');
    die();
  }
}

if(isset($_POST['submit'])){

  $categories=get_safe_value($conn,$_POST['categories']);
  $res=mysqli_query($conn,"select * from category where cat_name='$categories'");
  $check=mysqli_num_rows($res);
  
  if($check>0){
    if(isset($_GET['id']) && $_GET['id']!=''){
      $getData=mysqli_fetch_assoc($res);
      if($id==$getData['cat_id']){
      
      }else{
        $msg="Categories already exist";
      }
    }else{
      $msg="Categories already exist";
    }
  }
  
  if($msg==''){
    if(isset($_GET['id']) && $_GET['id']!=''){
      mysqli_query($conn,"update category set cat_name='$categories' where cat_id='$id'");
    }else{
      mysqli_query($conn,"insert into category (cat_name) values('$categories')");
    }
    header('location: ad_category.php');
    die();
  }
}

  include('includes/top.inc.php'); 
  
?>
<div class="col-md-10 content">
    <div class="panel panel-default">
      <div class="panel-heading">
        Categories (ADD)
      </div>
      <div class="panel-body">

        <form method="post">
          <div class="form-group" action="includes/add.inc.php">  
            <label for="category" class="form-control-label" >INSERT CATEGORY </label>
            <input type="text" name="categories" placeholder="Enter category name" class="form-control" required value="<?php echo $categories?>"/> <br>

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