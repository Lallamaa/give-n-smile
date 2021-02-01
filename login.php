<?php 
	// include(BASE_URL . "lib/path.php"); 
	include("lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 

	if(isset($_REQUEST['login'])){
	$arr = [];
	if($_REQUEST['user_name'] =='' || $_REQUEST['password'] == ''){
	array_push($arr, "Enter username and password fields.");
		
	}else{
		$user_name = $_REQUEST['user_name'];
		$password = $_REQUEST['password'];
			
			//login process
			$query = "SELECT * FROM users WHERE user_name='$user_name' and password='$password'";
			$excution = $conn->query($query);
			
			$data = $excution->fetch_object(); //fetch data
			
			if(isset($data) && count($data) == 1){
				$_SESSION['users'] = $data;
				header("location:index.php");
			}
			else{
				echo " wrong username or password! Please retry again";
			}
		
		}
	}

	if(isset($_POST['login'])) {
		
	}
?>

	<div class="login-box">
		<form method="post" class="login-form">
			<h1>LOGIN</h1>
			<input id="user_name" type="text" name="user_name"  placeholder="Username" require>
			<input id="password" type="password" name="password"  placeholder="Password" require>
			<input id="button" type="submit" value="Login" name="login">

			</br></br><p>Don't have a account?
			<a href="pre-register.html"></br>Click to Sign Up</a></p>
		</form>
	</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>