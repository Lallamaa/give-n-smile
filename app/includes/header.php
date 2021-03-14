<?php 	
    include(ROOT_PATH . "app/database/connect.php");    
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title> Give & Sm:)e </title>

  <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo BASE_URL;?>app/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>>app/css/query.css">

<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <script src="<?= BASE_URL;?>>app/jvs/script.js"></script>


</head>
<body>
<header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light pr-5 pl-5">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php"><img src="<?php echo BASE_URL; ?>app/image/logo.png" alt="" width="100" height="50" class="d-inline-block align-top"></a>
            
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>fundraise.php">Start Fundraise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>browse.php">Donate</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>#">About Us</a>
                </li> -->
               

                 <!---For checking if login then don't show login button on header--->
            <?php
                if(isset($_SESSION['loggedIn'])){
            ?>  
                <li class="nav-item"><a class="nav-link" href="logout.php" name="logout">Logout</a></li> 
                
                <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
                </ul>

                <div class="btn-group">
                <!-- <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown"> -->
                    <button class="btn btn-primary-outline dropdown-toggle mr-2" type="button" data-toggle="dropdown" aria-expanded="false">
                        <!-- <span class="badge badge-pill red">1</span> -->
                        <i class="fas fa-shopping-cart pl-0"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-cart" role="menu">
                        <?php 
                        if(!empty($_SESSION['cart'])){
                            $outputTable = '';
                            $total = 0;
                            $outputTable .= '<table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td col-span="2">Name</td>
                                                        <td>Action</td>
                                                    </tr>
                                                </thead>';
                            
                            foreach($_SESSION['cart'] as $key => $value){
                                $outputTable .= '<tr>
                                                    <td>'.$value['e_image'].'</td>
                                                    <td>'.$value['e_name'].'</td>
                                                    <td><button id='.$value['e_id'].' class="btn btn-danger delete">Delete</button></td>
                                                </tr>';  
                                $total = $total + ($value['p_price'] * $value['p_quantity']);
                            }
                            $outputTable .= '</table>';
                            $outputTable .= '<div class="text-center">
                                                <b>Total: ".$total."</b>
                                            </div>';
                            echo $outputTable;
                        
                       
                        } else {
                                $outputTable = '';
                                $total = 0;
                                $outputTable .= "<table class='table table-bordered'>
                                                    <thead>
                                                        <tr>
                                                            <td>Name</td>
                                                            <td>Price</td>
                                                            <td>Action</td>
                                                        </tr>
                                                    </thead>";
                                
                                foreach($_SESSION['cart'] as $key => $value){
                                    $outputTable .= "<tr>
                                                        <td>".$value['p_name']."</td>
                                                        <td>".($value['p_price'] * $value['p_quantity']) ."</td>
                                                        <td><button id=".$value['p_id']." class='btn btn-danger delete'>Delete</button></td>
                                                    </tr>";  
                                    $total = $total + ($value['p_price'] * $value['p_quantity']);
                                }
                                $outputTable .= "</table>";
                                $outputTable .= "<div class='text-center'>
                                                    <b>Total: ".$total."</b>
                                                </div>";
                                echo $outputTable;
                            }
                
                        
                        ?>
                        <!-- <li class="divider"></li>
                        <li><a class="text-center" href="<?= BASE_URL; ?>payment.php">View Cart</a></li> -->
                </div>
                <!-- Make this btn-group for dropdownMenuButton2 at header2.php By V-->
        <div class="btn-group"> 
            <button class="btn btn-primary-outline mr-5" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?php echo BASE_URL; ?>app/image/icon/account.png" width="30" height="30" class="d-inline-block align-top">
            </button>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
				<li><a class="nav-link" href="'. BASE_URL . 'user/us_profile.php">Account</a></li>
                <li><a class="nav-link" href="'. BASE_URL . 'muser/us_editprofile.php">Setting</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="nav-link" name="logout" href="'. BASE_URL .'index.php?logout=“1"><i class="fa fa-power-off"></i>Logout</a></li>
            </ul>
        </div>
                    
        <?php
            } else{
        ?>    
                <li><a class="nav-link ml-auto" href="<?php echo BASE_URL; ?>login.php">Log In</a> </li>
                <li><a class="nav-link ml-auto" href="<?php echo BASE_URL; ?>pre-register.php">Sign Up</a> </li>

            </ul>
        <?php } ?>
             
                <!-- <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>     TODO: direct to user/org profile base on login
                </li> -->

            <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
            </div>
        </div>
       
        

        </div><!-- /.navbar-collapse -->

    </nav>
    <!--End of NavBar-->
</header>

<script>
$(document).ready(function() {
    alldeleteBtn = document.querySelectorAll('.delete')
    alldeleteBtn.forEach(onebyone => {
    onebyone.addEventListener('click',deleteINsession)
})

function deleteINsession(){
    removable_id = this.id;
    $.ajax({
                url:'cart.php',
                method:'POST',
                dataType:'json',
                data:{ 
                    id_to_remove:removable_id,
                    action:'remove' 
                },
                success:function(data){
                                $('#displayCheckout').html(data);
            alldeleteBtn = document.querySelectorAll('.delete')
        alldeleteBtn.forEach(onebyone => {
                onebyone.addEventListener('click',deleteINsession)
        })
                }
            }).fail( function(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
    });

}
</script>