<?php 
  session_start();
  include('app/lib/path.php');
  include(ROOT_PATH . 'app/includes/header.php');



  if (isset($_SESSION['loggedIn'])) {

    $userID = $_SESSION['loggedIn']->user_id;

    if (isset($_GET['add'])) {

      $eventID = $_GET['id'];
      $donate = '10';
      $status = '1';

      $checksql = "SELECT `user_id`, `event_id` FROM cart WHERE `user_id`='$userID' AND `event_id`='$eventID'";
      $checkquery = mysqli_query($conn, $checksql);

      if (mysqli_fetch_assoc($checkquery) > 0) {

        echo "Item Already Added!";

      } else {

        $insertsql = "INSERT INTO cart (`user_id`, `event_id`, `cart_amount`, `status`) VALUES ('$userID', '$eventID', '$donate', '$status');";
        $insertquery = mysqli_query($conn, $insertsql);
      }
  
      $sql = "SELECT * FROM cart INNER JOIN events ON cart.event_id = events.event_id WHERE cart.user_id='$userID' AND cart.status=1";
      $query = mysqli_query($conn, $sql);
    
    } 

   else {
  
    $sql = "SELECT * FROM cart INNER JOIN events ON cart.event_id = events.event_id WHERE cart.user_id='$userID' AND cart.status=1";
    $query = mysqli_query($conn, $sql);

  } 
}

$total = 0.00;

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<style>
.cart-container {

  background: #e0ba91;
  margin: 10%;
  margin-top: 5%;
  padding: 5%;

}

.continue-shop-btn {
  float: right;
}
.panel-title {

  margin-bottom: 10%;

}

.bi-cart-check {
  color: rgb(250, 180, 35);
}

.bi-trash {
  color: rgb(250, 180, 35);
  font-size: 30px;
}
</style>
<div class="cart-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-8">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="panel-title">
              <div class="row">
                <div class="col-lg-7 col-xs-6 float-left" >
                  <h2><i class="bi bi-cart-check"></i> <b>Shopping Cart</b></h2>
                </div>
                <div class="col-lg-5 col-xs-6 continue-shop-btn">
                  <a href="browse.php" type="button" class="btn btn-primary btn-sm btn-block" style="margin-bottom:4px; word-wrap:break-word;">
                  <i class="bi bi-arrow-left-circle"></i> Continue shopping
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-body">
          <form class="form-auth" action="app/lib/cartAction.php" method="post" enctype="multipart/form-data">
          <?php
          while ($row = mysqli_fetch_assoc($query)) {  ?>

            <div class="row">
              <div class="col-lg-4 col-sm-12">
                <img class="img-responsive" src="<?php echo $row['event_img']; ?>" style="width: 100%; height:250">
              </div>
              <div class="col-lg-6 col-sm-12">
                <h4 class="product-name"><strong><?php echo $row['event_name']; ?></strong></h4><h4><small><?= substr($row['event_desc'], 0, 200); ?>......</small></h4>
                <br>
                <div class="input-group mb-3">
                  <span class="grid-3 grid-md-2 input-group-text"><b>RM</b></span>
                  <input type="text" id="amount" class="form-control input-sm" name="amount<?php echo $row['cart_id']; ?>" value="<?php echo number_format($row['cart_amount'], 2); ?>" placeholder="<?php echo number_format($row['cart_amount'], 2); ?>" require>
                </div>
              </div>
              <div class="col-lg-2 col-xs-12">
                <a href="app/lib/cartDelete.php?cartID=<?php echo $row['cart_id']; ?>" type="submit" class="btn btn-link btn-xs" name="delete-btn" value="<?php $row['cart_id']; ?>"  >
                  <i class="bi bi-trash"></i>
                </a>
              </div>
            </div>
              <hr>
              <input type="hidden" id="cartID" name="cartID<?php echo $row['cart_id']; ?>" value="<?php echo $row['cart_id']; ?>" >
              <input type="hidden" id="eventID" name="eventID<?php echo $row['event_id']; ?>" value="<?php echo $row['event_id']; ?>" >
              <!-- <input type="hidden" id="amountArr" name="amountArr" value="" >
              <input type="hidden" id="amountArr" name="cartIDArr" value="" >
              <input type="hidden" id="amountArr" name="eventIDArr" value="" > -->

            <?php 
            

              $total += $row['cart_amount'];
              }
            ?>
            </div>

            <?php if($row = mysqli_fetch_array($query) <= 0) {  ?>
              <div class="row">
                <div class="cart-empty">
                  <h5> Your Cart Is Empty~ </h5>
                </div>
              </div>
              <hr/>
          <?php } ?>

          <div class="row">
              <div class="text-center">
                <div class="col-xs-9">
                  <h6 class="text-right">Added items?</h6>
                </div>
                <div class="col-xs-3 d-grid d-md-flex justify-content-md-end">
                  <button type="submit" class="btn btn-sm btn-light justify-content-md-end" name="update-cart-btn">
                    Update cart
                  </button>
                </div>
              </div>
            </div> <br>
          <div class="panel-footer">
            <div class="row text-center">
              <div class="col-xs-9">
                <h4 class="text-right">Total : <strong>RM  <?php echo number_format($total, 2); ?></strong></h4>
              </div>
              <div class="col-xs-3">
                <button type="submit" class="btn btn-warning btn-block" name="checkout-btn">
                  Checkout
                </button>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include(ROOT_PATH . 'app/includes/footer.php'); ?>

<script>

// var amountArr = $('#amount').map(function(){ 
//                     return this.value; 
//                 }).get();

// document.getElementById("amount").value = amountArr;


// var cartArr = $('#cartID').map(function(){ 
//                 return this.value; 
//             }).get();                

// document.getElementById("cartID").value = cartArr;


// var eventArr = $('#eventID').map(function(){ 
//                     return this.value; 
//                 }).get();

// document.getElementById("eventID").value = eventArr;
        








// $(document).ready(function(){

//  $('action').change(function(){
//   if($(this).val() != '')
//   {
//    var action = $(this).attr("id");
//    var query = $(this).val();
//    var result = '';
//    if(action == "state")
//    {
//     result = 'city';
//    }
//    $.ajax({
//     url:"app/includes/state_city.php",
//     method:"POST",
//     data:{action:action, query:query},
//     success:function(data){
//      $('#'+result).html(data);
//     }
//    })
//   }
//  });
// });

</script>

