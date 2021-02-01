<?php
  $txt = "";
  $txt_class = "";
  include ("app/database/connect.php");
  
  if (isset($_POST['user-submit'])) {
    
    //database
    $user_name = stripslashes($_POST['user_name']);
    $password = stripslashes($_POST['password']);
    $user_email = stripslashes($_POST['user_email']);
    $user_phone = stripslashes($_POST['user_phone']);
    $userImgName = time() . '-' . $_FILES["userImage"]["name"];
    
    //image upload
    $target_dir = "image/";
    $target_file = $target_dir . basename($userImgName);
    
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['userImage']['size'] > 200000) {
      $txt = "Image size should not be greated than 200Kb";
      $txt_class = "alert-danger";
    }
    
    // check if file exists
    if(file_exists($target_file)) {
      $txt = "File already exists";
      $txt_class = "alert-danger";
    }
    
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["userImage"]["tmp_name"], $target_file)) {
        
        $sql = "INSERT INTO users SET user_name='$user_name', password='$password', user_email='$user_email', user_phone='$user_phone', userImage='$userImgName'";
        
        if(mysqli_query($conn, $sql)){
          $txt = "Image uploaded and saved in the Database";
          $txt_class = "alert-success";
        } else {
          $txt = "There was an error in the database";
          $txt_class = "alert-danger";
        }
      } else {
        $error = "There was an error uploading the file";
        $txt = "alert-danger";
      }
    }
  }
?>