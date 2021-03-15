<?php

    session_start();
    include('../database/connect.php');

		$msg='';
		//user-site
		if(isset($_POST['loginbtn'])){
			$user_email = $_POST['email'];
			$password = $_POST['password'];
				
			//filter variable for security
			$user_email = strip_tags(mysqli_real_escape_string($conn, trim($user_email)));
			$password = strip_tags(mysqli_real_escape_string($conn, trim($password)));

				//query
				$query = "SELECT * FROM users WHERE user_email='".$user_email."'";
				$tbl = mysqli_query($conn, $query);
				$excution = $conn->query($query);
				$data = $excution->fetch_object();

				
				if(mysqli_num_rows($tbl)>0){	//verify password now after verify email
		
					$row = mysqli_fetch_array($tbl);
					$password_hash = $row['password'];
					if(password_verify($password, $password_hash)){
						
						$msg = "Login successfully!";
						$_SESSION['loggedIn'] = $data;
						$_SESSION['user_id']=$row['user_id'];
						$_SESSION['user_name']=$row['user_name'];

						header("location: ../../index.php?loginsuccess");   
						header("refresh:0.5; url=../../login.php");
					}
					else{
						
						echo "<script>alert('Login Failed! Wrong email or password.');</script>";
						header("refresh:0.5; url=../../login.php");
					}
				} 
				
			}
		

			//org-site
			if(isset($_POST['loginbtn'])){
				$org_email = $_POST['email'];
				$org_pass = $_POST['password'];
					
				//filter variable for security
				$org_email = strip_tags(mysqli_real_escape_string($conn, trim($org_email)));
				$org_pass = strip_tags(mysqli_real_escape_string($conn, trim($org_pass)));
	
					//query
					$query2 = "SELECT * FROM organization WHERE org_email='".$org_email."'";
					$tbl2 = mysqli_query($conn, $query2);
					
					$excution = $conn->query($query2);
					$data = $excution->fetch_object();
	
					if(mysqli_num_rows($tbl2)>0){	//verify password now after verify email
						$row2 = mysqli_fetch_array($tbl2);
						$password_hash = $row2['org_password'];
						if(password_verify($org_pass, $password_hash)){
							$msg = "Login successfully!";
							$_SESSION['orgLoggedIn'] = $data;
							$_SESSION['org_id']=$row2['org_id'];
							$_SESSION['org_name']=$row2['org_name'];
							header("location: ../../index.php?loginsuccess");
							header("refresh:0.5; url=../../login.php");   //having problem on redirecting to index(automatically)
						}
						else{
							echo "<script>alert('Login Failed! Wrong email or password.');</script>";
							header("refresh:0.5; url=../../login.php");
						}
					}
					

				}
