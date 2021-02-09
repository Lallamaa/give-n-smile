<?php 
   session_start();

	include("../app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//data was posted
		$org_name = $_POST['org_name'];
		$org_password = $_POST['org_password'];
		$org_email = $_POST['org_email'];
		$org_category = $_POST['org_category'];
		$org_weblink = $_POST['org_weblink'];
		$org_fblink = $_POST['org_fblink'];
		$org_xtralink = $_POST['org_xtralink'];
		$org_address = $_POST['org_address'];
		$org_state = $_POST['org_state'];
		$org_city = $_POST['org_city'];
		$org_zipcode = $_POST['org_zipcode'];
		$org_contact = $_POST['org_contact'];

        if(!empty($org_name) && !is_numeric($org_name) &&!empty($org_password) && !empty($org_email) && !empty($org_category) && 
        !empty($org_weblink) && !empty($org_fblink) && !empty($org_xtralink) && !empty($org_address) && !empty($org_state) &&
        !empty($org_city) && !empty($org_zipcode) && !empty($org_contact)) {
            
            //save to database
			$user_name = random_num(20);
            $query = "INSERT INTO organization (org_name,org_password,org_email,org_category,org_weblink,org_fblink,org_xtralink,
            org_address,org_state, org_city,org_zipcode,org_contact) VALUES ('$user_id','$org_name','$org_password','$org_email','$org_category','$org_weblink','$org_fblink','$org_xtralink','$org_address','$org_state','$org_city',' $org_zipcode','$org_contact')";

			mysqli_query($conn, $query);
			header("location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

	$queryy = "SELECT `cat_name` FROM category ORDER BY `cat_name` ASC";
	$category = mysqli_query($conn, $queryy);
?>

<div class="container">
    <form method="POST" action=".php">
        <legend class="title text-center">Charity Organization Sign Up </legend>
        <fieldset class="form-box card card-box">
          <div class="card-body">
						
						<div class="dropdown">
								<select class="form-control search-slt btn-secondary dropdown-toggle" id="exampleFormControlSelect1">
									<option>Select Category</option>
									<?php while($row = mysqli_fetch_array($category)) 
										{
											echo '<option value="'.$row['cat_name'].'">'.$row['cat_name'].'</option>';
										} ?>

							</select>
						</div><br>
            <label for="coUsername"> Organization Name </label>
            <input  class="form-control" 
                    class="form-text"
                    type="text" 
                    name="org_name" 
                    id="org_name"
                    required 
										maxlength="50" 
										placeholder="Enter your organization name">
						<br>
						<label for="org_email"> Email </label>
						<input  class="form-control" 
										class="form-text"
										type="email" 
										name="org_email" 
										id="org_email"
										required 
										placeholder="Enter your email">
						<br>
            <label for="org_password" class="form-label">Password</label>
            <input  class="form-control"
                    type="password" 
                    id="inputPassword5" 
                    aria-describedby="hint" 
                    placeholder="********"/>
            <small id="hint" class="form-text">
              *Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </small>
            <br>
            <label for="inputPassword2" class="form-label">Re-enter Password</label>
							<input  type="password" 
											name="password_2" 
											id="password_2"
											class="form-control" 
											aria-describedby="passwordHelpBlock" 
											placeholder="********">
							<br>
  
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
            <button type="submit" class="btn btn-primary" value="Signup"> SignUp </button>
            </div>
        </fieldset>
    </form>
</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>






