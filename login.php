<?php 
	session_start();

	include("app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
	//include(ROOT_PATH . "user/includes/us_reg.inc.php");
 
		$msg='';
		//user-site
		if(isset($_POST['loginbtn'])){
			$user_email = $_POST['user_email'];
			$password = $_POST['password'];
				
			//filter variable for security
			$user_email = strip_tags(mysqli_real_escape_string($conn, trim($user_email)));
			$password = strip_tags(mysqli_real_escape_string($conn, trim($password)));

				//query
				$query = "SELECT * FROM users WHERE user_email='".$user_email."'";
				$tbl = mysqli_query($conn, $query);
				$excution = $conn->query($query);
				$data = $excution->fetch_object();

				if(mysqli_num_rows($tbl)>0){	//verify password now after verify email
					$row = mysqli_fetch_array($tbl);
					$password_hash = $row['password'];
					if(password_verify($password, $password_hash)){
						$msg = "Login successfully!";
						$_SESSION['users'] = $data;
						header("location:index.php");   //having problem on redirecting to index(automatically)
					}
					else{
						$msg = "Login Failed! Wrong email or password.";
					}
				}
			}


			// //org-site
			// if(isset($_POST['loginbtn'])){
			// 	$org_email = $_POST['user_email'];
			// 	$org_pass = $_POST['org_pass'];
					
			// 	//filter variable for security
			// 	$org_email = strip_tags(mysqli_real_escape_string($conn, trim($org_email)));
			// 	$org_pass = strip_tags(mysqli_real_escape_string($conn, trim($org_pass)));
	
			// 		//query
			// 		$query2 = "SELECT * FROM organization WHERE org_email='".$user_email."'";
			// 		$tbl2 = mysqli_query($conn, $query2);
					
			// 		$excution = $conn->query($query2);
			// 		$data = $excution->fetch_object();
	
			// 		if(mysqli_num_rows($tbl2)>0){	//verify password now after verify email
			// 			$row2 = mysqli_fetch_array($tbl2);
			// 			$password_hash = $row2['org_pass'];
			// 			if(password_verify($org_pass, $password_hash)){
			// 				$msg = "Login successfully!";
			// 				$_SESSION['organization'] = $data;
			// 				header("location:index.php");   //having problem on redirecting to index(automatically)
			// 			}
			// 			else{
			// 				$msg = "Login Failed! Wrong email or password.";
			// 			}
			// 		}
			// 	}


				//$excution = $conn->query($query);
				
				//$data = $excution->fetch_object(); //fetch data
				
				//if(password_verify($password, $users['password'])){
				//	echo "Loggin successfully!";
				//}else{
				//	echo "Wrong username or password! Please retry again";
				//}
				//if(isset($data) && count($data) == 1){
				//	$_SESSION['users'] = $data;
				//	header("location:index.php");
				//}
				//else{
				//	echo "wrong username or password! Please retry again";
				//}
			
	




	// if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
	// {
	// 	header("location:index.php");
	// }

	// if (isset($_POST['loginbtn'])) {
	// 	$query = "SELECT user_username, password, user_type
	// 						FROM users 
	// 						UNION 
	// 						SELECT org_username, org_password, user_type
	// 						FROM organization
	// 						WHERE users.user_type = organization.user_type";
	// 	$query_run = mysqli_query($conn, $query);

	// 	if (mysqli_num_rows($user_query_run)>0) {

	// 	}
	// }
	

	// if(isset($_POST['loginbtn'])) {
	// 	$username	= $_POST['username'];
	// 	$password	= $_POST['password'];
	// 	$usertype = '';
	// 	$error=''; 
	// 	//user
	// 	$query1 = mysqli_query($conn, "SELECT * FROM users WHERE user_username='$username' AND password='$password' AND user_type='$usertype'");
	// 	if(mysqli_num_rows($query1) == 0)
	// 	{
	// 		$error = "Username or Password is invalid";
	// 	}
	// 	else
	// 	{
	// 		$row1 = mysqli_fetch_assoc($query1);
	// 		$_SESSION['username']=$row1['user_username'];
	// 		$_SESSION['users'] = $row1['user_type'];
			
	// 		if($_SESSION['users'] == $row1['user_type'])
	// 		{
	// 			header("Location: index.php");
	// 		}
	// 		else
	// 		{
	// 			$error = "Failed Login";
	// 		}
	// 	}
		
	// 	//organization
	// 	$query2 = mysqli_query($conn, "SELECT * FROM organization WHERE org_username='$username' AND org_password='$password'");
	// 	if(mysqli_num_rows($query2) == 0)
	// 	{
	// 		$error = "Username or Password is invalid";
	// 	}
	// 	else
	// 	{
	// 		$row2 = mysqli_fetch_assoc($query2);
	// 		$_SESSION['username']=$row2['org_username'];
	// 		$_SESSION['organization'] = $row2['user_type'];
			
	// 		if($_SESSION['organization'] == $row2['user_type'])
	// 		{
	// 			header("Location: index.php");
	// 		}
	// 		else
	// 		{
	// 			$error = "Failed Login";
	// 		}
	// 	}
	// }

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
			<?php
			if(!empty($msg))
			{
				echo '<p class="alert alert-info">' .$msg. '</p>';
			}
			?>
			<h1>LOGIN</h1>
			<input id="user_email" type="email" name="user_email"  placeholder="Email">
			
			<input id="password" type="password" name="password"  placeholder="Password">
			<button id="button" type="submit" name="loginbtn">Login</button>
			<br/>
			<p>Don't have a account?
				<a href="pre-register.php"></br>Click to Sign Up</a>
			</p>
		</form>
	</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>
