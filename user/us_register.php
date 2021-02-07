<?php 
	session_start();
	include("../app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 

	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$user_email = $_POST['user_email'];
	$user_phone = $_POST['user_phone'];
			
		//save to database
		$sql = "INSERT INTO users ('user_name','password','user_email','user_phone', 'user_status') VALUES ('$user_name','$password','$user_email','$user_phone', '1')";

		if (mysqli_query($conn, $sql)){
			echo "You have register successfully! ";
		}else{
			echo "Error: " .$sql ." ". mysql_error($conn);
		}
		mysql_close($conn);
	}
?>     
<div class="container">
	<form method="post" action="<?php echo BASE_URL;?>app/lib/reg.inc.php">
		<legend class="title text-center">User Sign Up </legend>
		<fieldset class="form-box card card-box shadow p-3 mb-5 bg-white rounded">
			<div class="card-body ">					
				<label for="inUsername"> Username </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="user_name"
								id="user_name"
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
								id="user_email" 
								required 
								placeholder="Enter your email"
								value="<?php $email; ?>">
				<br>
				<label for="inContact"> Phone No. </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="user_phone"
								id="user_phone"
								required 
								maxlength="11" 
								placeholder="Enter your phone no."
								value="<?php $phone; ?>">
				<br>
				<label for="inputPassword1" class="form-label">Password</label>
				<input  type="password" 
								name="password" 
								id="password"
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
								id="conpassword"
								class="form-control" 
								aria-describedby="passwordHelpBlock" 
								required
								maxlength="20"
								minlength="8"
								placeholder="********"
								value="<?php $conpassword; ?>">				
				<br>
				<input type="hidden" name="usertype" value="user">
				<button type="submit" class="btn btn-primary" name="registerbtn"> Sign Up </button>
			</div>
		</fieldset>
	</form>
</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>