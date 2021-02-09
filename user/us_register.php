<?php 
	session_start();
	include("../app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 

	$error = "";

	if(isset($_POST['register']))
	{

	//something was posted
  $username = $_POST['user_name'];
  $email = $_POST['user_email'];
  $phone = $_POST['user_phone'];
  $prepassword = $_POST['password'];
  $conpassword = $_POST['confirmpassword'];
	$usertype = $_POST['usertype'];
	$image = $_POST['image'];


	if($prepassword !== $conpassword) {
		$error = "Passwords does not match";
	} else {
		$password = password_hash($prepassword, PASSWORD_DEFAULT);
	}
		//save to database
		$query = "INSERT INTO users (`user_name`, `password`, user_email,user_phone, user_status, user_img) 
							VALUES ('$username','$password','$email','$phone', '1', '$image')";

		mysqli_query($conn, $query);
		header("Location:login.php");
		die();
	}
	
  
?>    
<div class="container">
	<form method="post">
		<legend class="title text-center">User Sign Up </legend>
		<fieldset class="form-box card card-box shadow p-3 mb-5 bg-white rounded">
			<div class="card-body ">					
				<label for="inUsername"> Username </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="user_name"
								required 
								maxlength="50" 
								placeholder="(Max 20 characters)"
								value="<?php $username; ?>">
				<br>
				<label for="inEmail"> Email </label>
				<input  class="form-control" 
								class="form-text"
								type="email" 
								name="user_email"
								required 
								placeholder="Enter your email"
								value="<?php $email; ?>">
				<br>
				<label for="inContact"> Phone No. </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="user_phone"
								required 
								maxlength="11" 
								placeholder="Enter your phone no."
								value="<?php $phone; ?>">
				<br>
				<label for="inputPassword1" class="form-label">Password</label>
				<input  type="password" 
								name="password" 
								class="form-control" 
								aria-describedby="passwordHelpBlock" 
								required
								maxlength="20"
								minlength="8"
								placeholder="********"
								value="<?php $prepassword; ?>">				
				<small id="passwordHelpBlock" class="form-text">
				*Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
				</small>
				<br>
				<label for="inputPassword2" class="form-label">Re-enter Password</label>
				<input  type="password" 
								name="confirmpassword" 
								class="form-control" 
								aria-describedby="passwordHelpBlock" 
								required
								maxlength="20"
								minlength="8"
								placeholder="********"
								value="<?php $conpassword; ?>">				
				<br>
				<input type="hidden" name="usertype" value="user">
				<input type="hidden" name="image" value="avatar.png">

				<button type="submit" class="btn btn-primary" name="registerbtn"> Sign Up </button>
			</div>
		</fieldset>
	</form>
</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>