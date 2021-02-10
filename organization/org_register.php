<?php 
    session_start();
	include("../app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php");
    
    // if($_SERVER['REQUEST_METHOD'] == "POST")
	// {
	// 	//data was posted
	// 	$org_name = $_POST['org_name'];
	// 	$org_password = $_POST['org_password'];
	// 	$org_email = $_POST['org_email'];
	// 	$org_category = $_POST['org_category'];
	// 	$org_weblink = $_POST['org_weblink'];
	// 	$org_fblink = $_POST['org_fblink'];
	// 	$org_xtralink = $_POST['org_xtralink'];
	// 	$org_address = $_POST['org_address'];
	// 	$org_state = $_POST['org_state'];
	// 	$org_city = $_POST['org_city'];
	// 	$org_zipcode = $_POST['org_zipcode'];
	// 	$org_contact = $_POST['org_contact'];

    //     if(!empty($org_name) && !is_numeric($org_name) &&!empty($org_password) && !empty($org_email) && !empty($org_category) && 
    //     !empty($org_weblink) && !empty($org_fblink) && !empty($org_xtralink) && !empty($org_address) && !empty($org_state) &&
    //     !empty($org_city) && !empty($org_zipcode) && !empty($org_contact)) {
            
    //         //save to database
	// 		$user_name = random_num(20);
    //         $query = "INSERT INTO organization (org_name,org_password,org_email,org_category,org_weblink,org_fblink,org_xtralink,
    //         org_address,org_state, org_city,org_zipcode,org_contact) VALUES ('$user_id','$org_name','$org_password','$org_email','$org_category','$org_weblink','$org_fblink','$org_xtralink','$org_address','$org_state','$org_city',' $org_zipcode','$org_contact')";

	// 		mysqli_query($conn, $query);
	// 		header("location: index.php");
	// 		die;
	// 	}else
	// 	{
	// 		echo "Please enter some valid information!";
	// 	}
	// }
	// $queryy = "SELECT `cat_name` FROM category ORDER BY `cat_name` ASC";
	// $category = mysqli_query($conn, $queryy);
?>

<div class="container">
	<form class="form-auth" action="includes/org_reg.inc.php" method="post" enctype="multipart/form-data">
		
		<legend class="title text-center">Charity Organization Sign Up </legend>
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
				<label> Email </label>
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
				<label> Phone No. </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="org_contact"
								required 
								maxlength="11" 
								placeholder="Enter your phone no.">
				<br>
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
				<input type="hidden" name="usertype" value="organization">
				<input type="hidden" name="userstatus" value="1">
				<input type="hidden" name="image" value="avatar.png">

				<button type="submit" class="btn btn-primary" name="registerbtn"> Sign Up </button>
			</div>
		</fieldset>
	</form>
</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>
  
        <!--<label for="org_contact"> Phone No. </label>
            <input  class="form-control" 
                    class="form-text"
                    type="text" 
                    name="org_contact"
                    id="org_contact" 
                    required 
                    maxlength="11" 
                    placeholder="Enter your phone no.">
            <br><hr>
            <label for="org_weblink"> Website Link </label>
            <input  class="form-control" 
                    class="form-text"
                    type="url" 
                    name="org_weblink"
                    id="org_weblink" 
                    placeholder="If have any (optional)">
            <br>
            <label for="org_xtralink"> Extra Social Media Link  </label>
            <p>
                <select name="org_xtralink" id="org_xtralink" class="btn btn-secondary btn-sm dropdown-toggle">
                <option class="dropdown-item"> Facebook </option>
                <option class="dropdown-item"> Instagram </option>
                <option class="dropdown-item"> LinkedIn </option>
                <option class="dropdown-item"> Twitter </option>   
            </p><br>
            <input  class="form-control" 
                    class="form-text"
                    type="url" 
                    name="coXtra" 
                    placeholder="If have any (optional)">
            <br>
            <label for="coDescript"> Describe </label>
            <textarea   class="form-control" 
                        class="form-text"
                        name="coDes" 
                        placeholder="Describe your organization">
            </textarea>
            <br><hr>
            <label for="org_address"> Address</label>
            <textarea  class="form-control" 
                    class="form-text" 
                    type="text"
                    name="org_address"
                    id="org_address" 
                    placeholder="Enter your full address here">
            </textarea><br>
            <label for="org_city"> City/Town </label>
            <input  class="form-control" 
                    class="form-text"
                    type="text"
                    required 
                    name="org_city"
                    id="org_city"/>
            <br>
            <label for="org_state"> State </label>
            <select class="form-control" 
                    class="form-text"
                    type="text"
                    required 
                    name="org_state"
                    id="org_state" >                    
                <option> Perlis </option>
                <option> Kedah </option>
                <option> Penang </option>
                <option> Perak </option>
                <option> Selangor </option>
                <option> Negeri Sembilan </option>
                <option> Melaka </option>
                <option> Johor </option>
                <option> Pahang </option>
                <option> Terengganu </option>
                <option> Kelantan </option>
                <option> Sabah </option>
                <option> Sarawak </option>
            </select></p>
            <br>
            <label for="org_zipcode"> Zip/Postal Code </label>
            <input  class="form-control" 
                    class="form-text"
                    type="text"
                    required 
                    name="org_zipcode"
                    id="org_zipcode"
                    maxlength="5"/>
            <br>   -->