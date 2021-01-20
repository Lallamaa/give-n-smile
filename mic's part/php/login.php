<?php 

session_start();

include("../../app/database/connect.php"); 	
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			echo " wrong username or password! Please retry again";
		}else
		{
			echo "wrong username or password! Please retry again";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<style type="text/css">
	body{
		background: #ffd66b;
		font-family: Arial, sans-serif;
	}
	.login-box{
		width: 300px;
		padding: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
 		transform: translate(-50%,-50%);
		text-align: center;
		border-radius: 20px;
		background: #fcf8e8;
	}
	.login-box h1, .login-box p{
		color: #214151;
		
		
	}
	.login-box input[type="text"], .login-box input[type="password"]{
		border:0;
		background: #e6e6e6;
		display: block;
		margin: 20px auto;
		text-align: center;
		padding: 14px 10px;
		width: 200px;
		outline: none;
		border-radius: 24px;
	}
	.login-box input[type="text"]:hover, .login-box input[type="password"]:hover{
		background: #c6ebc9;
	}
	#button{
		border:0;
		background: #70af85;
		display: block;
		margin: 20px auto;
		text-align: center;
		padding: 14px 40px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
		cursor: pointer;
	}
	#button:hover{
		background: #214151;
	}
	.login-box a:hover{
		color: #70af85;
	}
	</style>
	<div class="login-box">
		<form method="post">
			<h1>LOGIN</h1>
			<input id="user_name" type="text" name="user_name" placeholder="Username">
			<input id="password" type="password" name="password" placeholder="Password">
			<input id="button" type="submit" value="Login">

			</br></br><p>Don't have a account?
			<a href="signup.php">Click to Sign Up</a></p>
		</form>
	</div>
</body>
</html>