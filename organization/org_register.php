<?php 
    session_start();
	include("../app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php");

	$queryy = "SELECT `cat_organization` FROM category ORDER BY `cat_organization` ASC";
	$category = mysqli_query($conn, $queryy);

	$sql = "SELECT * FROM events";
	$event = mysqli_query($conn, $sql);
?>

<div class="container">
	<form class="form-auth" action="includes/org_reg.inc.php" method="post" enctype="multipart/form-data">
		
		<legend class="title text-center">Charity Organization Sign Up</legend>
		<fieldset class="form-box card card-box shadow p-3 mb-5 bg-white rounded">
			<?php
				if (isset($_SESSION['STATUS']['signupstatus']))
					echo $_SESSION['STATUS']['signupstatus'];
			?>
			<div class="card-body ">
				<label> Organization Name </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="org_name"
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
				<label> Organization Email </label>
				<input  class="form-control" 
								class="form-text"
								type="email" 
								name="org_email"
								required 
								placeholder="Enter your email">
				<sub class="text-danger">
					<?php
						if (isset($_SESSION['ERRORS']['emailerror']))
							echo $_SESSION['ERRORS']['emailerror'];
					?>
				</sub>
				<br>
				<!-- <label> Organization Category </label>
				<div class="col-lg-3 col-md-3 col-sm-12 p-0">
					<select class="form-control search-slt" id="exampleFormControlSelect1" name="org_category">
						<option>Select Category</option>
														<?php while($row = mysqli_fetch_array($category)) 
															{
																echo '<option value="'.$row['cat_name'].'">'.$row['cat_name'].'</option>';
															} 
														?>
					</select>
				</div>
				<br> -->
				<label class="form-label">Password</label>
				<input  type="password" 
								name="org_pass" 
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
				<input type="hidden" name="user_type" value="organization">
				<input type="hidden" name="org_img" value="avatar.png">

				<button type="submit" class="btn btn-primary" name="registerbtn"> Sign Up </button>
			</div>
		</fieldset>
	</form>
</div>

<?php include(ROOT_PATH . "app/includes/footer.php"); ?>