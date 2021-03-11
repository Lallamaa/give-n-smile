<?php
session_start();

if(isset($_POST['cart_id'])){

  if($_POST['action'] == 'add'){
      
      if(isset($_SESSION['cart'])){
          $isalreadyExist = 0;
        
          if($isalreadyExist < 1){
              $itemArray = array(
                  'e_id' => $_POST['cart_id'],
                  'e_name' => $_POST['cart_name'], 
                  'e_amount' => $_POST['cart_amount'],
              );
              $_SESSION['cart'][]  = $itemArray;
          }
      }else{
          $itemArray = array(
              'e_id' => $_POST['cart_id'],
              'e_name' => $_POST['cart_name'], 
              'e_amount' => $_POST['cart_amount'],
          );
          $_SESSION['cart'][]  = $itemArray;
      }
233  }

}



if($_POST['action'] == 'remove'){
    foreach($_SESSION['cart'] as $key => $val){
        if( $val['e_id'] == $_POST['id_to_remove']){
            unset($_SESSION['cart'][$key]);
        }
    }

}


if(!empty($_SESSION['cart'])){
    $outputTable = '';
    $total = 0;
    $outputTable .= "<table class='table table-bordered'><thead><tr><td>Name</td><td>Price</td><td>Quantity</td><td>Action</td> </tr></thead>";
    foreach($_SESSION['cart'] as $key => $value){
        $outputTable .= "<tr><td>".$value['e_name']."</td><td>".($value['e_amount']) ."</td><td>"."</td><td><button id=".$value['e_id']." class='btn btn-danger delete'>Delete</button></td></tr>";  
        $total = $total + ($value['p_price']);
    }
    $outputTable .= "</table>";
    $outputTable .= "<div class='text-center'><b>Total: ".$total."</b></div>";

}

echo json_encode($outputTable);

// Shopping Cart Function
class Cart
{
private $con;
private $productid;

function __construct(){
    $this->con = new PDO('mysql:host=localhost;dbname=#', '#', '#');
}

public function getProductDataById($passedId){

    $this->productid = $passedId;

    $statement = $this->con->prepare("SELECT productname, productdescription, productimage, price FROM producten WHERE productid = :productid");
    $statement->execute(array("productId" => $this->productid));
    $data = $statement->fetch();

    return($data);
}
public function getAllproducts(){

    $statement = $this->con->prepare("SELECT productid, productname, productdescription, productimage, price FROM producten");
    $statement->execute();
    $data = $statement->fetchAll();

    return($data);
}
}
