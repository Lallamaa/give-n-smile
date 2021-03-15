<?php
session_start();
require '../database/connect.php';

$userID = $_SESSION['loggedIn']->user_id;

$sql = "SELECT * FROM cart INNER JOIN events ON cart.event_id = events.event_id WHERE cart.user_id='$userID' AND cart.status=1";
$query = mysqli_query($conn, $sql);


if (isset($_POST['update-cart-btn'])) {

    while ($row = mysqli_fetch_assoc($query)) {     
        
        $updateAmount = $_POST['amount'.$row['cart_id']];
        $cartID = $_POST['cartID'.$row['cart_id']];
        $updatesql = "UPDATE cart SET cart_amount='$updateAmount' WHERE cart_id='$cartID'";
        $updatequery = mysqli_query($conn, $updatesql);
    }

    header('Location: ../../cart.php');

}

if (isset($_POST['checkout-btn'])) {

    header('Location: ../../checkout.php?userID="$userID"');

}