<?php
if(isset($_SESSION['loggedIn'])) {
  echo "You're logged in!";
  if(isset($_SESSION['loggedIn'])) {
    header('Location: users/create_fund.php');
    exit();
  } 
  // else (isset($_SESSION['organization'])) {
  //   header('Location');
  // }
} else {
  echo '<script>alert("You have to log in before taking this action!");</script>';
  header('Location: ../../login.php');
  exit();
}
?>