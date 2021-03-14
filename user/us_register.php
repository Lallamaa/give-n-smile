<?php
	session_start();
	include("../app/lib/path.php");
	include(ROOT_PATH . "app/includes/header.php"); 
?>

<div class="container">
	<form class="form-auth" action=" includes/us_reg.inc.php" method="post" enctype="multipart/form-data">
		
		<legend class="title text-center">User Sign Up </legend>
		<fieldset class="form-box card card-box shadow p-3 mb-5 bg-white rounded">
			<?php
				if (isset($_SESSION['STATUS']['signupstatus']))
					echo $_SESSION['STATUS']['signupstatus'];
			?>
			<div class="card-body ">					
				<label> Username </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="user_name"
								required 
								maxlength="50" 
								placeholder="(Max 20 characters)">
				<sub class="text-danger">
					<?php
						if (isset($_SESSION['ERRORS']['usernameerror']))
							echo $_SESSION['ERRORS']['usernameerror'];
					?>
				</sub>
				<br>
				<label> Email </label>
				<input  class="form-control" 
								class="form-text"
								type="email" 
								name="user_email"
								required 
								placeholder="Enter your email">
				<sub class="text-danger">
					<?php
						if (isset($_SESSION['ERRORS']['emailerror']))
							echo $_SESSION['ERRORS']['emailerror'];
					?>
				</sub>
				<br>
				<label> Phone No. </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="user_phone"
								required 
								maxlength="11" 
								placeholder="Enter your phone no.">
				<br>
				<label class="form-label">Password</label>
				<input  type="password" 
								name="password" 
								class="form-control" 
								aria-describedby="passwordHelpBlock" 
								required
								maxlength="20"
								minlength="8"
								placeholder="********">				
				<small id="passwordHelpBlock" class="form-text">
				*Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
				</small>
				<br>
				<label class="form-label">Re-enter Password</label>
				<input  type="password" 
								name="confirmpassword" 
								class="form-control" 
								aria-describedby="passwordHelpBlock" 
								required
								maxlength="20"
								minlength="8"
								placeholder="********">
				<sub class="text-danger mb-4">
				<?php
					if (isset($_SESSION['ERRORS']['passworderror']))
						echo $_SESSION['ERRORS']['passworderror'];

				?>
        	</sub>
				<br>
				<input type="hidden" name="usertype" value="user">
				<input type="hidden" name="userstatus" value="1">
				<input type="hidden" name="image" value="avatar.png">

				<button type="submit" class="btn btn-primary" name="registerbtn"> Sign Up </button>
			</div>
		</fieldset>
	</form>
</div>

<?php include(ROOT_PATH . "app/includes/footer.php"); ?>