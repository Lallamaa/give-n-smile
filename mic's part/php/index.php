<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Give & Smile main page</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Give & Sm:)e</h1>
	<h2>This is the main page</h2>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>