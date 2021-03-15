<?php
session_start();
require '../database/connect.php';



define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);
// Then you can simply do your condition like
ini_set('upload_max_filesize', 5*MB);

if (isset($_POST['create-btn'])) {
  if (isset($_SESSION['loggedIn'])) {

    $name = $_POST['name'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $amount = $_POST['amount'];
    $desc = $_POST['desc'];
    $area = $_POST['area'];
    $ecategory = $_POST['category'];
    $user = $_POST['user'];
    $userID = $_POST['userID'];
    $status = '-1';
    $type = 'fundraise';
        
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];
    $fileError = $_FILES['image']['error'];

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

  $sample_paths = array(
      'pizza' => getcwd() . DIRECTORY_SEPARATOR . 'pizza.jpg',
      'lake' => getcwd() . DIRECTORY_SEPARATOR . 'lake.jpg',
      'couple' => $fileTmpName,
  );


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

    # In the two following examples, the file is fetched from a remote URL and stored in Cloudinary.
    # This allows you to apply the same transformations, and serve those using Cloudinary's CDN layer.
    $files['remote'] = \Cloudinary\Uploader::upload(
        $sample_paths['couple'],
        $default_upload_options
    );

    
    $image =  cloudinary_url($files['remote']['public_id']);
  

  if (empty($name) || empty($start) || empty($end) || empty($amount) || empty($ecategory)) {

    $_SESSION['ERRORS']['error'] = 'Required fields cannot be empty, try again';
    header("Location: ../../create_event.php?require");
    exit();

  } else {
    $sql = "INSERT INTO events (event_name, event_start, event_end, event_amount, event_desc, event_img, event_status, event_type, category, organizer_name, organizer_id, event_area)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../../create_event.php?SQLerror");
        exit();
    } 
    else {
      mysqli_stmt_bind_param($stmt, "ssssssssssss", $name, $start, $end, $amount, $desc, $image, $status, $type, $ecategory, $user, $userID, $area);
      mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        
        $_SESSION['STATUS']['eventstatus'] = 'Campaign Created';
        header('Location: ../../index.php?createsuccess');
        exit();
    }     
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn); 

      
      // else {
      //   header('Location: ../../fundraise.php?errorlogin');
      //   exit();
      // }

    }
  }



      // if(mysqli_query($conn, $query)){ //if success, file less than 1MB
      //     echo '<div class="container style=background-color: ;">
      //             <div class="alert alert-success words" role="alert">
      //                 Your Resume has successfully been uploaded into our system. 
      //             </div>
      //         </div>';
      //     die();
      // }else{ //if some other error in system
      //     echo '<div class="container style=background-color: ;">
      //             <div class="alert alert-danger words" role="alert">
      //                 Sorry, your Resume was unsuccessfully failed to be uploaded into our system. Chat with us to find out why.
      //             </div>
      //         </div>';
      //     die();
      // }
  
  
    
    // $fileCount = count($_FILES['image']['name']);
    // for ($i=0; $i<$fileCount; $i++) {

    //   $file = $_FILES['image']['name'][$i];

    // }
    // $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
    
    // if(isset($_FILES['image'])){
    // // $file = $_FILES['image'];
    // $fileName = $_FILES['image']['name'];
    // $fileTmpName = $_FILES['image']['tmp_name'];
    // $fileSize = $_FILES['image']['size'];
    // $fileError = $_FILES['image']['error'];
    // $fileType = $_FILES['image']['type'];

    // $fileExt = explode('.', $fileName);
    // $fileActualExt = strtolower(end($fileExt));

    // $allowed = array('jpg', 'jpeg', 'png', 'gif');

    // if (in_array($fileActualExt, $allowed)) {
    //   if ($fileError === 0) {
    //     if ($fileSize < 1000000) {
    //       $fileNameNew = uniqid('', true).".".$fileActualExt;
    //       $fileDestination = 'app/image/event'.$fileNameNew;
    //       move_uploaded_file($fileTmpName, $fileDestination);

  

    //     } else {
    //       echo "Your image file is too big!";
    //     }
    //   } else {
    //     echo "There was an erro uploading your image!";
    //   }
    // } else {
    //   echo "File Type Error! Please upload a valid file type.";
    // }
    // else if (isset($_SESSION['organization'])) {
    // }

  //   if(isset($_FILES['image'])){
  //     $errors= array();
  //     $file_name = $_FILES['image']['name'];
  //     $file_size =$_FILES['image']['size'];
  //     $file_tmp =$_FILES['image']['tmp_name'];
  //     $file_type=$_FILES['image']['type'];
  //     $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
  //     $extensions= array("jpeg","jpg","png");
      
  //     if(in_array($file_ext,$extensions)=== false){
  //        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
  //     }
      
  //     if($file_size > 2097152){
  //        $errors[]='File size must be excately 2 MB';
  //     }
      
  //     if(empty($errors)==true){
  //        move_uploaded_file($file_tmp,"images/".$file_name);
  //        echo "Success";
  //     }else{
  //        print_r($errors);
  //     }
  //  }