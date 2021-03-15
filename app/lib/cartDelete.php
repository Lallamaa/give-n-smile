<?php

require '../database/connect.php';

if (isset($_GET['cartID'])) {    

    $cartID = $_GET['cartID'];
        
    $del = "DELETE FROM cart WHERE cart_id='$cartID'";
    $query = mysqli_query($conn, $del);
    
    header('Location: ../../cart.php');

} 