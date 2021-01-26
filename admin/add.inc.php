<?php
  include('../app/database/connect.php');

  $categories='';
  $msg='';

  if (isset($_GET['id']) && $_GET['id']!='') {
    $id=get_safe_value($conn, $_GET['id']);
    $res=mysqli_query($conn, "SELECT * from category where id='$id'");
    $check=mysqli_num_rows($res);
    if ($check>0) {
      $row=mysqli_fetch_assoc($res);
      $categories=$row['category'];
    } else {
      header('Location: localhost/fyp/admin/ad_category.php');
      die();
    }
  }

  if (isset($_POST['submit'])) {
    $categories=get_safe_value($conn, $_POST['category']);
    $res=mysqli_query($conn, "SELECT * from category where `name`='$categories'");
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
    header('Location: localhost/fyp/admin/ad_category.php');
    // ob_end_flush();

    die();
  } 
?>