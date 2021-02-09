<?php 
	session_start();
	include("../app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php");
	include(ROOT_PATH . "app/lib/function.php");

	if (isset($_REQUEST['submit'])) {
        //Check All Field Are Blank Or Not
        $err = [];
        if($_REQUEST['user_name']== '' ){
            array_push($err, "User name field is required");
        }
        elseif($_REQUEST['password']== ''){
            array_push($err, "Password field is required");
        }
		elseif($_REQUEST['confirm_pass']!= $_REQUEST['password']) {
            array_push($err, "Password and confirm password does not match");
        }
        elseif($_REQUEST['user_email']== ''){
            array_push($err, "Email field is required");
        }
        //elseif($_REQUEST['user_phone']== ''){
        //    array_push($err, "Phone field is required");
        //}
        else{
            //Assign to new variables
            $user_name = $_REQUEST['user_name'];
            $password = $_REQUEST['password'];
            $user_email = $_REQUEST['user_email'];
            
		
			if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($user_email))
			{
	
				//save to database
				$user_id = random_num(11);
				$query = "insert into users (user_id,user_name,password,user_email) values ('$user_id','$user_name','$password','$user_email')";
	
				mysqli_query($conn, $query);
	
				// header("Location:login.php");
				die;
			}
		}
	}
?>    

<div class="container">
	<form method="post" enctype="multipart/form-data">
    	<legend class="title text-center">User Sign Up</legend>
		<div class="col-l-4 col-l-offset-4">
            <?php if(isset($err) && count($err) >0) {
                foreach($err as $error){
                    ?>
                        <div class="alert alert-danger">
                        <span>
                            <?=$error?>
                        </span>       
                        </div>
                    <?php 
                    }
                }
            ?>
        </div>
		<fieldset class="form-box card card-box">
			<div class="card-body">
				<label for="inUsername"> Username </label>
				<input  class="form-control" 
								class="form-text"
								type="text" 
								name="user_name"
								id="user_name" 
								maxlength="50" 
								placeholder="(Max 20 characters)">
				<br>
				
				<label for="inputPassword" class="form-label">Password</label>
				<input  type="password" 
								name="password" 
								id="password"
								class="form-control" 
								aria-describedby="passwordHelpBlock" 
								placeholder="********">
								
				<small id="passwordHelpBlock" class="form-text">
				*Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
				</small>
				<br>
				
				<label for="inputPassword" class="form-label">Confirm Password</label>
				<input  type="password" 
								name="confirm_pass" 
								id="confirm_pass"
								class="form-control" 
								aria-describedby="passwordHelpBlock" 
								placeholder="********">
								
				<small id="passwordHelpBlock" class="form-text">
				*Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
				</small>
				<br>
				
				<label for="inEmail"> Email </label>
				<input  class="form-control" 
								class="form-text"
								type="email" 
								name="user_email"
								id="user_email"  
								placeholder="Enter your email">
				<br>
				<button type="submit" class="btn btn-primary" name="submit" value="submit"> Sign Up </button>
			</div>
		</fieldset>
	</form>
</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>