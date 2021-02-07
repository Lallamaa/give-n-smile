<?php 
include("../database/connect.php");
// variable declaration
// $username = "";
// $email = "";
// $phone = "";
// $prepassword = "";
// $conpassword = "";
// $errors = array();

// call the register() function if register button is clicked
// if (isset($_POST['registerbtn'])) {
//   register();
// } 

// function register() {
//   // call these variables with the global keyboard to make time available
//   global $conn, $errors, $usersname, $email;

  // receive all input values from the form. Call the e() function
  // defined below to escape from values
if (isset($_POST['registerbtn'])) {

  $username = $_POST['user_name'];
  $email = $_POST['user_email'];
  $phone = $_POST['user_phone'];
  $prepassword = $_POST['password'];
  $conpassword = $_POST['confirmpassword'];
  $usertype = $_POST['usertype'];

  if (empty($username) || empty($email) || empty($phone) || empty($prepassword) || empty($conpassword)) {
    header('Location: ../../user/us_register.php?error=emptyfields&uid='.$username.'$mail='.$email);
    exit();
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header('Location: ../../user/us_register.php?error=invalidemailuid');
    exit();
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../../user/us_register.php?error=invalidemail&uid='.$username);
    exit();
  } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header('Location: ../../user/us_register.php?error=invaliduid&mail='.$email);
    exit();
  } else if ($prepassword !== $conpassword) {
    header('Location: ../../user/us_register.php?error=passwordcheckuid='.$username.'$mail='.$email);
    exit();
  } else { //if no error occur
    $sql = "SELECT user_name FROM users WHERE user_name=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header('Location: ../../user/us_register.php?error=sqlerror"');    
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        //username taken
        header('Location: ../../user/us_register.php?error=usertaken&mail='.$email);
        exit()    ;
      } else {
        $sql = "INSERT INTO users (user_name, user_email, user_phone, password, user_type) 
                VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header('Location: ../../user/us_register.php?error=sqlerror');    
          exit();
        } else {
          $password = password_hash($prepassword, PASSWORD_DEFAULT);
          $type = 'user';
          mysqli_stmt_bind_param($stmt, "ssiss", $username, $email, $phone, $password, $type);
          mysqli_stmt_execute($stmt);
          header('Location: ../../user/us_register.php?signup=success');    
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
} 
else {
  header('Location: ../index.php')
}



//   $user_query = "SELECT * FROM users WHERE user_name='$username'";
//   $user_query_run =  mysqli_query($conn, $user_query);
//   if (mysqli_num_rows($user_query_run)>0) {

//     $_SESSION['msg'] = "Username Already Taken. Please Try Another One.";
//     $_SESSION['msg_code'] = 'error';
//     header('Location: user/us_register.php');

//   } else {
    
//     if ($prepassword === $conpassword) {

//       $password = md5($prepassword); 
//       $user_id = random_num(20);
//       $query = "INSERT INTO users (user_id, user_name, user_email, user_phone, password, user_type)
//                 VALUES ('$user_id', '$username', '$email', '$phone', '$password', '$usertype')";
//       $query_run = mysqli_query($conn, $query);;

//       if($query_run) {

//         // echo "Success"
//         $_SESSION['msg'] = "User Profile Added";
//         $_SESSION['msg_code'] = "success";
//         header('Location: login.php');
        
//       } else {

//         $_SESSION['msg'] = "User Profile Not Added";
//         $_SESSION['msg_code'] = "error";
//         header('Location: user/us_register.php');      
//       }

//     } else {
      
//       $_SESSION['msg'] = "Password and Confirm Password Does Not Match";
//         $_SESSION['msg_code'] = "warning";
//         header('Location: user/us_register.php');

//     }
//   }
  
// }

// // form validation: ensure that the frm is correctly filled
// if (empty($username)) {
//   array_push($errors, "Username is required");
// }	if (empty($email)) {
//   array_push($errors, "Email is required");
// }	if (empty($phone)) {
//   array_push($errors, "Phone is required");
// }	if (empty($prepassword)) {
//   array_push($errors, "Password is required");
// }	if ($prepassword != $conpassword) {
//   array_push($errors, "The passwords do not match");
// }

// // register user if there are no errors in the form
// if (count($errors)==0) {
//   // encrypt the password before saving in the database

//   if (isset($_POST['user_type'])) {
//     $user_type = e($_POST['user_type']);
//     $user_id = random_num(20);
//     $query = "INSERT INTO users (user_id, username, email, password, user_type)
//               VALUES ('$user_id', '$usernane', '$email', '$phone', '$password', 'user')";
//     mysqli_query($conn, $query);
//     $_SESSION['success'] = "Succesfully registered!";
//     header('Location: index.php');
//   } else {
//     $query = "INSERT INTO users (username, email, user_type, password, )
//               VALUES ('$usernane', '$email', '$phone', '$password')";
//     mysqli_query($conn, $query);

//     // get id of the created user
//     $logged_in_id = mysqli_insert_id($conn);

//     $_SESSION['user'] = getUserById($logged_in_id); // put logged in user in session
//     $_SESSION['success'] = "You are now logged in";
//     header('Location: index.php');
//   }
// }

// 	// escape string
// 	function e($val) {
// 		global $conn;
// 		return mysqli_real_escape_string($conn, trim($val));
// 	}

// function getUserById($id) {
//   global $conn;
//   $query = "SELECT * FROM users WHERE user_id=" . $id;
//   $result = mysqli_query($conn, $query);

//   $user = mysqli_fetch_assoc($result);
//   return $user;
// }

// function display_error() {
//   global $errors;

//   if (count($errors) > 0) {
//     echo '<div class="error">';
//       foreach ($errors as $error) {
//         echo $error .'<br>';
//       }
//     echo '</div>';
//   }
// }

