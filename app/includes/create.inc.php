<?php
session_start();
require '../database/connect.php';

if (isset($_POST['create-btn'])) {
  if (isset($_SESSION['loggedIn'])) {

    $name = $_POST['name'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $amount = $_POST['amount'];
    $desc = $_POST['desc'];
    $area = $_POST['area'];
    $file = $_FILES['image'];
    // $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
    $ecategory = $_POST['category'];
    $user = $_POST['user'];
    $status = '-1';
    $type = 'fundraise';



    if (empty($name) || empty($start) || empty($end) || empty($amount) || empty($ecategory)) {

      $_SESSION['ERRORS']['error'] = 'Required fields cannot be empty, try again';
      header("Location: ../../create_event.php?require");
      exit();
      
    } else {

      $sql = "INSERT INTO events (event_name, event_start, event_end, event_amount, event_desc, event_img, event_status, event_type, category, event_organizer, event_area)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

      //'$name', '$start', '$end', '$amount', '$desc', '$image', '-1', 'fundraise', '$ecategory', '$user', '$area'
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../us_register.php?SQLerror");
          exit();
      } 
      else {
          mysqli_stmt_bind_param($stmt, "sssssssssss", $name, $start, $end, $amount, $desc, $file, $status, $type, $ecategory, $user, $area);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);

          $_SESSION['STATUS']['eventstatus'] = 'Campaign Created';
          header('Location: ../../index.php?createsuccess');
          exit();
      }     
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn); 
    // else if (isset($_SESSION['organization'])) {
    // }

  }
  else {
    header('Location: ../../fundraise.php?errorlogin');
    exit();
  }
}
  
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
    //       echo "Your file is too big!";
    //     }
    //   } else {
    //     echo "There was an erro uploading your file!";
    //   }
    // } else {
    //   echo "File Type Error! Please upload a valid file type.";
    // }