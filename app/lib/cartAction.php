<?php
session_start();
require '../database/connect.php';

// if(isset($_POST['cart_id'])){

//   if($_POST['action'] == 'add'){
      
//       if(isset($_SESSION['cart'])){
//           $isalreadyExist = 0;
        
//           if($isalreadyExist < 1){
//               $itemArray = array(
//                   'e_id' => $_POST['cart_id'],
//                   'e_name' => $_POST['cart_name'], 
//                   'e_amount' => $_POST['cart_amount'],
//               );
//               $_SESSION['cart'][]  = $itemArray;
//           }
//       }else{
//           $itemArray = array(
//               'e_id' => $_POST['cart_id'],
//               'e_name' => $_POST['cart_name'], 
//               'e_amount' => $_POST['cart_amount'],
//           );
//           $_SESSION['cart'][]  = $itemArray;
//       }
//     }
// }



// if($_POST['action'] == 'remove'){
//     foreach($_SESSION['cart'] as $key => $val){
//         if( $val['e_id'] == $_POST['id_to_remove']){
//             unset($_SESSION['cart'][$key]);
//         }
//     }

// }


// if(!empty($_SESSION['cart'])){
//     $outputTable = '';
//     $total = 0;
//     $outputTable .= "<table class='table table-bordered'>
//                         <thead>
//                             <tr>
//                                 <td>Name</td>
//                                 <td>Price</td>
//                                 <td>Quantity</td>
//                                 <td>Action</td>
//                             </tr>
//                         </thead>";

//     foreach($_SESSION['cart'] as $key => $value){
//         $outputTable .= "<tr>
//                             <td>".$value['e_name']."</td>
//                             <td>".($value['e_amount']) ."</td>
//                             <td>"."</td>
//                             <td>
//                                 <button id=".$value['e_id']." class='btn btn-danger delete'>Delete</button>
//                             </td>
//                         </tr>";  

//         $total = $total + ($value['p_price']);
//     }
//     $outputTable .= "</table>";
//     $outputTable .= "<div class='text-center'>
//                         <b>Total: ".$total."</b>
//                     </div>";

// }

// echo json_encode($outputTable);

// // Shopping Cart Function
// class Cart
// {
// private $con;
// private $productid;

// public function getProductDataById($passedId){

//     $this->productid = $passedId;

//     $statement = $this->conn->prepare("SELECT productname, productdescription, productimage, price FROM producten WHERE productid = :productid");
//     $statement->execute(array("productId" => $this->productid));
//     $data = $statement->fetch();

//     return($data);
// }
// public function getAllproducts(){

//     $statement = $this->conn->prepare("SELECT productid, productname, productdescription, productimage, price FROM producten");
//     $statement->execute();
//     $data = $statement->fetchAll();

//     return($data);
// }
// }

// if (isset($_POST['add-to-cart'])) {

//     $userID = $_POST['userID'];
//     $eventID = $_POST['eventID'];
//     $donateAmount = 10;
//     $status = 1;

//     $sql = "INSERT INTO cart (`user_id`, `event_id`, `cart_amount`, `status`)
//               VALUES ($userID, $eventID, $donateAmount, $status)";
//     $query = mysqli_query($conn, $sql);

// }

$userID = $_SESSION['loggedIn']->user_id;

$sql = "SELECT * FROM cart INNER JOIN events ON cart.event_id = events.event_id WHERE cart.user_id='$userID'";
$query = mysqli_query($conn, $sql);

// if (isset($_POST['delete-btn'])) {    

//     $cartID = $_POST['delete-btn'];
        
//         // $cartID = $_POST['cartID'.$row['cart_id']];

//         $del = "DELETE FROM cart WHERE cart_id='$cartID'";
//         $query = mysqli_query($conn, $del);
    
    
        
//     header('Location: ../../cart.php');

// } 

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



    // while ($row = mysqli_fetch_assoc($query)) {     

    //     $eventID = $_POST['eventID'.$row['event_id']];
    //     $cartID = $_POST['cartID'.$row['cart_id']];
    //     $donate = $_POST['amount'.$row['cart_amount']];

    //     $eventsql = "SELECT `event_amount`, `event_fund` FROM events WHERE `event_id`='$eventID'";
    //     $event = mysqli_query($conn, $eventsql);

    //     while ($result = mysqli_fetch_assoc($event)) {

    //         $FundToRaise = ($result['event_amount']) - $donate;
    //         $TotalFund = $donate;

    //         $updateFundSql = "UPDATE events SET `event_amount`='$FundToRaise', `event_fund`='$TotalFund' WHERE `event_id`='$eventID'";
    //     }

    //     $deleteCartSql = "DELETE FROM cart WHERE cart_id='$cartID";
    //     $deleteQuery = mysqli_query($conn, $deleteCartSql);

    // }

    // echo '<script>alert("Successfully Checkout")</script>';
    // header('Location: ../../browse.php');

    header('Location: ../../checkout.php?userID="$userID"');

}