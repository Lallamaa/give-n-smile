<?php

session_start();
require '../../app/lib/path.php';
require '../../app/includes/auth_functions.php';
require '../../app/includes/datacheck.php';
require '../../app/includes/security_functions.php';


//sign up for organization
if (isset($_POST['org_registerbtn'])) {

    /*
    * -------------------------------------------------------------------------------
    *   Securing against Header Injection
    * -------------------------------------------------------------------------------
    */

    foreach($_POST as $key => $value){

        $_POST[$key] = _cleaninjections(trim($value));
    }

    /*
    * -------------------------------------------------------------------------------
    *   Verifying CSRF token
    * -------------------------------------------------------------------------------
    */
    
    require '../../app/database/connect.php';

    //something was posted
  	$org_name = $_POST['org_name'];
  	$org_email = $_POST['org_email'];
  	$org_contact = $_POST['org_contact'];
  	$prepassword = $_POST['org_pass'];
  	$conpassword = $_POST['confirmpassword'];
    $userStatus = $_POST['userstatus'];
    $org_img = $_POST['org_img'];
    $usertype = $_POST['usertype'];


    /*
    * -------------------------------------------------------------------------------
    *   Data Validation
    * -------------------------------------------------------------------------------
    */

    if (empty($org_name) || empty($org_email) || empty($org_contact) || empty($prepassword) || empty($conpassword)) {

        $_SESSION['ERRORS']['formerror'] = 'Required fields cannot be empty, try again';
        header("Location: ../org_register.php?require");
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {

        $_SESSION['ERRORS']['usernameerror'] = 'Invalid username';
        header("Location: ../org_register.php?invalidname");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $_SESSION['ERRORS']['emailerror'] = 'Invalid email';
        header("Location: ../org_register.php");
        exit();
    } else if ($prepassword !== $conpassword) {

        $_SESSION['ERRORS']['passworderror'] = 'Passwords do not match';
        header("Location: ../org_register.php?passwordnomatch");
        exit();
    } else {

        if (!availableUsername($conn, $org_name)){

            $_SESSION['ERRORS']['usernameerror'] = 'Username already taken';
            header("Location: ../org_register.php?availableusername");
            exit();
        }
        if (!availableEmail($conn, $org_email)){

            $_SESSION['ERRORS']['emailerror'] = 'Email already taken';
            header("Location: ../org_register.php?emailtaken");
            exit();
        }
        // if (!availablePhone($conn, $org_contact)){

        //     $_SESSION['ERRORS']['phoneerror'] = 'Phone number has been taken';
        //     header("Location: ../org_register.php?contactnumbertaken");
        //     exit();
        // }

        /*
        * -------------------------------------------------------------------------------
        *   User Creation
        * -------------------------------------------------------------------------------
        */
        

        $sql = "insert into organization (org_name, org_pass, org_email, usertype, org_img) 
        values (?,?,?,?,?)";

        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            //$_SESSION['ERRORS']['scripterror'] = 'SQL ERROR';
            header("Location: ../us_register.php?SQLerror");
            exit();
        } 
        else {
            $hashedPwd = password_hash($prepassword, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sssssss", $org_name, $hashedPwd, $org_email, $org_img, $usertype);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $_SESSION['STATUS']['loginstatus'] = 'Account Created, please Login';
            header('Location: ../../login.php');
            exit();
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} 
else {

    header("Location: ../../us_register.php");
    exit();
}