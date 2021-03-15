<?php
include('../../app/database/connect.php');
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
      mysqli_query($conn,"update category set category='$categories' where cat_id='$id'");
    }else{
      mysqli_query($conn,"insert into category(cat_name) values('$categories')");
    }
    header('location: ad_category.php');
    die();
  }
}
