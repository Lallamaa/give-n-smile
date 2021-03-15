<?php

session_start();
require '../database/connect.php';

$userID = $_SESSION['loggedIn']->user_id;
$userName = $_SESSION['loggedIn']->user_name;

$sql = "SELECT * FROM cart INNER JOIN events ON cart.event_id = events.event_id WHERE cart.user_id='$userID' AND cart.status=1";
$query = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($query)) {     

    $eventID = $row['event_id'];
    $cartID = $row['cart_id'];
    $donate = $row['cart_amount'];

    $eventsql = "SELECT `event_fund` FROM events WHERE `event_id`='$eventID'";
    $event = mysqli_query($conn, $eventsql);

    $result = mysqli_fetch_assoc($event);

    $preFund = $result['event_fund'];
    $totalFund = $preFund + $donate;

    $updateFundSql = "UPDATE events SET `event_fund`='$totalFund' WHERE `event_id`='$eventID'";
    $fundSqlQuery = mysqli_query($conn, $updateFundSql);
    
    $deleteFromCartSql = "UPDATE cart SET `status`=0 WHERE user_id='$userID'";
    $deleteQuery = mysqli_query($conn, $deleteFromCartSql);

    $insertDonationSql = "INSERT INTO donation (do_event_id, do_user_id, do_user_name, do_amount, do_status) VALUES ('$eventID', '$userID', '$userName', '$donate', '1');";
    $insertDonationQuery = mysqli_query($conn, $insertDonationSql);
}

echo '<script>alert("Successfully Checkout")</script>';
header('Location: ../../browse.php');