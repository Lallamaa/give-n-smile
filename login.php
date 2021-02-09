<?php 
	//session_start();

	include('../lib/path.php'); 
	include('app/includes/header.php'); //this one <<

	$error=''; 
	if(isset($_POST['loginbtn'])) {
		$email	= $_POST['email'];
		$password	= $_POST['password'];
		
		//user
		$query1 = mysqli_query($conn, "SELECT * FROM users WHERE user_email='$email' AND password='$password'");
		if(mysqli_num_rows($query1) == 0)
		{
			$error = "Username or Password is invalid";
		}
		else
		{
			$row1 = mysqli_fetch_assoc($query1);
			$_SESSION['email']=$row1['user_email'];
			$_SESSION['users'] = $row1['user_type'];
			
			if($_SESSION['users'] == $row1['user_type'])
			{
				header("Location: index.php");
				//<script> location.replace("index.php"); </script>
			}
			else{
				$error = "Wrong username or password! Please retry again.";
			}
		}
		
		//organization
		$query2 = mysqli_query($conn, "SELECT * FROM organization WHERE org_email='$email' AND org_password='$password'");
		if(mysqli_num_rows($query2) == 0)
		{
			$error = "Username or Password is invalid";
		}
		else
		{
			$row2 = mysqli_fetch_assoc($query2);
			$_SESSION['email']=$row2['org_email'];
			$_SESSION['organization'] = $row2['user_type'];
			
			if($_SESSION['organization'] == $row2['user_type'])
			{
				header("Location: index.php");
				//<script> location.replace("index.php"); </script>
			}
			else
			{
				$error = "Failed Login";
			}
		}
	}

	//include(ROOT_PATH . "app/includes/header.php"); 

?>

	<div class="login-box">
		<form method="post" class="login-form">
		
			<!---Display validation message---->
				<?php
					if(isset($arr) && count($arr) > 0){
						foreach($arr as $error){
							?>
						<div class="alert alert-danger " >
							<span>	
								<?php
								echo $error;
							} ?>
							</span>
						</div>
					<?php
						}
					?>
			
			<h1>LOGIN</h1>
			<input id="email" type="email" name="email" required placeholder="Email" required >
			
			<input id="password" type="password" name="password" required placeholder="Password">
			<button id="button" type="submit" name="loginbtn">Login</button>
			<?php echo $error; ?>
			<br/>
			<p>Don't have a account?
				<a href="pre-register.php"></br>Click to Sign Up</a>
			</p>
		</form>
	</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>
