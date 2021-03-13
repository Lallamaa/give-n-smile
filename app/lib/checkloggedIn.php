<?php


// if(isset($_SESSION['loggedIn'])) {
//   echo "You're logged in!";
//   if(isset($_SESSION['loggedIn'])) {
//     header('Location: users/create_fund.php');
//     exit();
//   } 
//   // else (isset($_SESSION['organization'])) {
//   //   header('Location');
//   // }
// } else {
//   echo '<script>alert("You have to log in before taking this action!");</script>';
//   header('Location: ../../login.php');
//   exit();
// }

function alertFunction($message) {

  // Display the alert box
  echo "<script>alert($message);</script>";
}

session_start();
require '../../app/lib/path.php';
require ROOT_PATH . 'app/database/connect.php';

if(isset($_POST["startFundraiseBtn"]))
{
  echo "no button infomation";
  if(isset($_SESSION['loggedIn'])) {
    $id = $_SESSION['loggedIn']->user_id; 
    echo "Youre Logged In!";
    echo $_SESSION['loggedIn']->user_name;
    echo $id;
    header('Location: ../../create_event.php');

  } else {
    echo "Please log in to your account";
    header('Location: ../../login.php?errorlogin');
    // alertFunction("Please login to your account");
    exit();
  }
}

?>