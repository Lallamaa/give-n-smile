<?php 
	include 'connect.php';
	
	$conn = new MySQLi($dbhost, $dbuser, $dbpass, $dbname) or die('Can not connect to database');
	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Profile System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head> 
<style>
	.profile-form input, .profile-form div{
	  width: 30%;
	  height: 5%;
	  border: 1px;
	  border-radius: 05px;
	  padding: 8px 15px 8px 15px;
	  margin: 30px 0px 15px 0px;
	  box-shadow: 1px 1px 2px 1px rgb(114, 112, 112);
}
</style>
<body>
<div align="center">

    <h2>Your Profile</h2>
    <form action="" method="post" class="profile-form">
        <div>User ID :  <?php echo $_SESSION['organization']->org_id; ?></div> 
        <div>User Name : <?php echo $_SESSION['organization']->org_name; ?></div>
        <div>Password : <?php echo $_SESSION['organization']->org_password; ?></div>
		<div>Category : <?php echo $_SESSION['organization']->org_category; ?></div>
        <div>Email : <?php echo $_SESSION['organization']->org_email; ?> </div>
        <div>Website link : <?php echo $_SESSION['organization']->org_weblink; ?> </div>
		<div>Extra Social Media Link : <?php echo $_SESSION['organization']->org_xtralink; ?> </div>
		<div>Facebook Link : <?php echo $_SESSION['organization']->org_fblink; ?> </div>
		<div>Describe : <?php echo $_SESSION['organization']->user_phone; ?></div>
		<div>Address : <?php echo $_SESSION['organization']->org_address; ?> </div>
		<div>City/Town : <?php echo $_SESSION['organization']->org_city; ?> </div>
		<div>State : <?php echo $_SESSION['organization']->org_state; ?> </div>
		<div>Zip/Postal Code : <?php echo $_SESSION['organization']->org_contact; ?> </div>
		<div>Phone no. : <?php echo $_SESSION['organization']->org_email; ?> </div>
		
		<!---<a href="editprofile.php?user_name="<?php echo $_SESSION['organization']->org_id; ?> /> Edit Profile</a>
		--->
	</form>
</div>
</body>
</html>