<?php 
    session_start();

	include('app/database/connect.php'); 	
    include('functions.php');
    
	if(isset($_POST['submit']))
	{
		//something was posted
		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];		
        //save to database
        $id = random_num(20);
        $query = "INSERT INTO users (`user_id`,`user_name`,`password`,'user_email','user_phone','user_status') VALUES ('$id','$name','$password','$email','$phone', '1');";
        mysqli_query($conn, $query);
        
        header('Location: login.php');
        die();
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> Give & Sm:)e | SignUp </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/query.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <!--Header-->
    <?php include("app/includes/header.php"); ?>
    
    <div class="container">
        <form method="post">
            <legend class="title text-center">User Sign Up </legend>
            <fieldset class="form-box card card-box">
                <div class="card-body">
                    <label for="inUsername"> Username </label>
                <input  class="form-control" 
                        class="form-text"
                        type="text" 
                        name="name"
                        required 
                        maxlength="50" 
                        placeholder="(Max 20 characters)">
                <br>
                <label for="inputPassword" class="form-label">Password</label>
                <input  type="password" 
                        name="password" 
                        class="form-control" 
                        aria-describedby="passwordHelpBlock" 
                        placeholder="********">
                        
                <small id="passwordHelpBlock" class="form-text">
                *Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </small>
                <br>
                <label for="inEmail"> Email </label>
                <input  class="form-control" 
                        class="form-text"
                        type="email" 
                        name="email" 
                        required 
                        placeholder="Enter your email">
                <br>
                <label for="inContact"> Phone No. </label>
                <input  class="form-control" 
                        class="form-text"
                        type="text" 
                        name="phone"
                        required 
                        maxlength="11" 
                        placeholder="Enter your phone no.">
                <br>
               
                <button type="submit" class="btn btn-primary"> SignUp </button>
              </div>
            </fieldset>
        </form>
    </div>
    <?php include("app/includes/footer.php"); ?>
</body>