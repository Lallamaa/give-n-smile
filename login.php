<?php 
	session_start();

	include("app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); //this one <<
	// include(ROOT_PATH . "lib/reg.inc.php");
 
	

	// if (isset($_POST['loginbtn'])) {
	// 	$query = "SELECT user_email, password, user_type
	// 						FROM users 
	// 						UNION 
	// 						SELECT org_email, org_password, user_type
	// 						FROM organization
	// 						WHERE users.user_type = organization.user_type";
	// 	$query_run = mysqli_query($conn, $query);

	// 	if (mysqli_num_rows($user_query_run)>0) {

	// 	}
	// }
	
	// i try figure by myself la, this one is like connect two table , but then idk how to umm use 

// or u take same email de user out 
// using sql query no need straight compare password
// then u only can display error msg when user input wrong password
// u got hashur password mah 

// $password = password_hash($password, PASSWORD_DEFAULT);
// no lah 
// this also hash password de
// ur pasword length size got set to 255?
// then use this to check same or not 
// if same jiu login
// cuz hash liao 
// will become sibeh long
// if no 255 
// jiu cant get whole hash value liao 
// then compare jiu cant login 
// i also stuck at this last time 

// if(password_verify($password, $user['user_password'])){


// btw, how you create foreign key in the Databse i tried a few times, mcm got error 
// hmm
// you calling your gf hor

// but then now my prob is hor 
// need compare the email and password from two diff table 





	if(isset($_POST['loginbtn'])) {
		$email	= $_POST['email'];
		$password	= $_POST['password'];
		$error=''; 
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
			}
			else
			{
				$error = "Failed Login";
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
			}
			else
			{
				$error = "Failed Login";
			}
		}
	}



?>

	<div class="login-box">
		<form method="post" class="login-form">
			<h1>LOGIN</h1>
			<input id="email" type="email" name="email" required placeholder="Email" required >
			<input id="password" type="password" name="password" required placeholder="Password">
			<button id="button" type="submit" name="loginbtn">Login</button>
			<?php //echo display_error(); ?>
			<br/>
			<p>Don't have a account?
				<a href="pre-register.php"></br>Click to Sign Up</a>
			</p>
		</form>
	</div>

<?php //include(ROOT_PATH . "app/includes/footer.html"); ?>
