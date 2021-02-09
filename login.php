<?php 
	session_start();

	include("app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
	// include(ROOT_PATH . "lib/reg.inc.php");
 

	if(isset($_REQUEST['loginbtn'])){
		$arr = [];
		if($_REQUEST['user_email'] =='' || $_REQUEST['password'] == ''){
		array_push($arr, "Enter email and password fields.");
			
		}else{
			$user_email = $_REQUEST['user_email'];
			$password = $_REQUEST['password'];
				
				//login process
				$query = "SELECT * FROM users WHERE user_email='$user_email' and password='$password'";
				$excution = $conn->query($query);
				
				$data = $excution->fetch_object(); //fetch data
				
				if(isset($data) && count($data) == 1){
					$_SESSION['users'] = $data;
					header("location:index.php");
				}
				else{
					echo "wrong username or password! Please retry again";
				}
			}
	}


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
			
			<h1>LOGIN</h1>
			<input id="user_email" type="email" name="user_email" required placeholder="Email" required >
			
			<input id="password" type="password" name="password" required placeholder="Password">
			<button id="button" type="submit" name="loginbtn">Login</button>
			<br/>
			<p>Don't have a account?
				<a href="pre-register.php"></br>Click to Sign Up</a>
			</p>
		</form>
	</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>
