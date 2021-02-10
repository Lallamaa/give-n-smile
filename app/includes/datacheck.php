<?php

//user-site
function availableUsername($conn, $username){
    $sql = "select user_id from users where user_name=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        return $_SESSION['ERRORS']['scripterror'] = 'SQL error';
    } 
    else {

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);

        if ($resultCheck > 0) {
            
            return false;
        } else {

            return true;
        }
    }
}

function availableEmail($conn, $email){
    $sql = "select user_id from users where user_email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return $_SESSION['ERRORS']['scripterror'] = 'SQL error';
    } 
    else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
            
            return false;
        } else {

            return true;
        }
    }
}

//end-user-site


//org-site
function availableOrgname($conn, $org_name){
    $sql = "select org_id from users where org_name=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        return $_SESSION['ERRORS']['scripterror'] = 'SQL error';
    } 
    else {
        mysqli_stmt_bind_param($stmt, "s", $org_name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);

        if ($resultCheck > 0) {
            return false;
        } else {

            return true;
        }
    }
}

function availableorgEmail($conn, $org_email){
    $sql = "select org_id from organization where org_email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return $_SESSION['ERRORS']['scripterror'] = 'SQL error';
    } 
    else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
            return false;
        } else {

            return true;
        }
    }
}


//end-org-site