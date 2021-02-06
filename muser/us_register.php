<?php 
	session_start();
	include("../lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
	
	if(isset($_POST['submit']))
	{

	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$user_email = $_POST['user_email'];
			$user_phone = $_POST['user_phone'];
			
		//save to database
		$user_id = random_num(10);
		$query = "INSERT INTO users ('user_id','user_name','password','user_email','user_phone', 'user_status') VALUES ('$user_id','$user_name','$password','$user_email','$user_phone', '1');";

		mysqli_query($conn, $query);
		header("Location:login.php");
					die();
	}
        
?>    
<div class="container">
	<form method="post">
		<legend class="title text-center">User Sign Up </legend>
		<fieldset class="form-box card card-box">
			<div class="card-body">
						<label for="inUsername"> Username </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="user_name"
								id="user_name"
								required 
								maxlength="50" 
								placeholder="(Max 20 characters)">
				<br>
				<label for="inputPassword" class="form-label">Password</label>
				<input  type="password" 
								name="password" 
								id="password"
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
								name="user_email"
								id="user_email" 
								required 
								placeholder="Enter your email">
				<br>
				<label for="inContact"> Phone No. </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="user_phone"
								id="user_phone"
								required 
								maxlength="11" 
								placeholder="Enter your phone no.">
				<br>
				
				<button type="submit" class="btn btn-primary" name="submit"> Sign Up </button>
			</div>
		</fieldset>
	</form>
</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>