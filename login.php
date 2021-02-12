<?php 
	session_start();

	include("app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
	//include(ROOT_PATH . "user/includes/us_reg.inc.php");
 
?>

	<div class="login-box">
		<form method="post" action="app/includes/login.inc.php" class="login-form">
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
			<small class="text-success font-weight-bold">
				<?php
					if (isset($_SESSION['STATUS']['loginstatus']))
						echo $_SESSION['STATUS']['loginstatus'];
				?>
			</small>			
			<input type="email" name="email"  placeholder="Email">
			
			<input type="password" name="password"  placeholder="Password">

			<button id="button" type="submit" name="loginbtn">Login</button>
			<br/>
			<p>Don't have a account?
				<a href="pre-register.php"></br>Click to Sign Up</a>
			</p>
		</form>
	</div>

<?php include(ROOT_PATH . "app/includes/footer.php"); ?>