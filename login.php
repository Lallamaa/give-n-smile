<?php 
	SESSION_START();
	include("lib/path.php"); 
	include(ROOT_PATH . "app/database/connect.php");

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
				array_push($arr, "Wrong username or password! Please retry again.");
			}
		
		}
	}

	include(ROOT_PATH . "app/includes/header.php"); 

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
			<input id="user_name" type="text" name="user_name"  placeholder="Username" >
			<input id="password" type="password" name="password"  placeholder="Password" >
			<input id="button" type="submit" value="Login" name="login">

			</br></br><p>Don't have a account?
			<a href="pre-register.php"></br>Click to Sign Up</a></p>
		</form>
	</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>