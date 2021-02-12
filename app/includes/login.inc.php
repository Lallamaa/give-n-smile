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
						$_SESSION['users'] = $data;
						header("location: ../../index.php");   //having problem on redirecting to index(automatically)
					}
					else{
						$msg = "Login Failed! Wrong email or password.";
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
						//$password_hash = $row2['org_pass'];
						//if(password_verify($org_pass, $password_hash)){
						if($row2['org_password'] == $org_pass){
							$msg = "Login successfully!";
							$_SESSION['uesrs'] = $data;
							header("location: ../../index.php");   //having problem on redirecting to index(automatically)
						}
						else{
							$msg = "Login Failed! Wrong email or password.";
						}
					}
				}
