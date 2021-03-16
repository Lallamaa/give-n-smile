<?php
session_start();
include('../../app/database/connect.php');

if (isset($_POST['update']))
{
  $user_id=$_SESSION['loggedIn']->user_id;
  $user_name=$_POST['user_name'];
  $user_email=$_POST['user_email'];
  $user_phone=$_POST['user_phone'];
  
  $fileName = $_FILES['user_img']['name'];
  $fileTmpName = $_FILES['user_img']['tmp_name'];
  $fileSize = $_FILES['user_img']['size'];
  $fileType = $_FILES['user_img']['type'];
  $fileError = $_FILES['user_img']['error'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array('jpg', 'jpeg', 'png', 'svg');

  if(in_array($fileActualExt, $allowed)){
      if($fileError === 0){
          $fileNameNew = uniqid('', true).".".$fileActualExt;
          /* $fileDestination = "upload/".$fileNameNew; */
          echo $fileTmpName;
          /* move_uploaded_file($fileTmpName, $fileDestination); */
          echo "File uploaded";
      }else{
          echo "There was an error uploading your file";
      }
    }else{
        echo "You cannot upload files of this type!";
  }

  if (is_file('../../vendor/autoload.php') && is_readable(__DIR__ . '../../vendor/autoload.php')) {
      require_once '../../vendor/autoload.php';
      echo 'not here';
  } else {
      // Fallback to legacy autoloader
      require_once '../../vendor/autoload.php';
      require_once '../../vendor/cloudinary/cloudinary_php/src/Cloudinary.php';
      echo 'here';
  }


  $default_upload_options = array('tags' => 'basic_sample');
  $eager_params = array('width' => 200, 'height' => 150, 'crop' => 'scale');
  $files = array();


    global $files, $sample_paths, $default_upload_options, $eager_params;

  echo "uploading";

  Cloudinary::config(array(
    'cloud_name' => 'lallama-a',
    'api_key' => '446819694666293',
    'api_secret' => 'LU8PzPt541g8shBJAGyuJ155ZVI'
  ));
  // if (file_exists('../../app/includes/setting.php')) {
  //   include '../../app/includes/setting.php';
  // }

  # In the two following examples, the file is fetched from a remote URL and stored in Cloudinary.
  # This allows you to apply the same transformations, and serve those using Cloudinary's CDN layer.
  $files['remote'] = \Cloudinary\Uploader::upload(
      $sample_paths['couple'],
      $default_upload_options
  );

  
  $image =  cloudinary_url($files['remote']['public_id']);
  
  if (empty($user_name) || empty($user_email) || empty($user_phone) || empty($image)) {

    $_SESSION['ERRORS']['error'] = 'Required fields cannot be empty, try again';
    header("Location: ../../us_edit.inc.php?require");
    exit();

  } else {
    $sql = "UPDATE users SET `user_name`='$user_name', `user_email`='$user_email', `user_phone`='$user_phone', `user_img`='$image'
     WHERE user_id='$user_id'";
    $query = mysqli_query($conn, $sql);
    
    header("Location: ../us_profile?updateSuccess");
    exit();

  } 

}
        
