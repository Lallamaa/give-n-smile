<?php 
	include("app/includes/header.php");
?>

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
<?php include("app/includes/footer.php"); ?>

</body>
</html>