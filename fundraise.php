<?php
	session_start();

	include("app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 

	// if (!isOrganization()) {
	// 	$_SESSION['fund'] = "You must login first";
	// 	header('Location: login.php');
	// }


?>

<div class="container">
	<div class="row">
		<div class="card text-center">
			<div class="card-header">
			</div>
			<div class="card-body">
				<h5 class="card-title">Start your fundraise now!</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<form class="form-auth" action="app/lib/checkLoggedIn.php" method="post">
				<button class="btn btn-primary" name="startFundraiseBtn">Fundraise</button>
				</form>
				<?php 
					// if ($_SESSION['usertype']=='user') {
					// 	echo '<a href="user/create_fund.php" class="btn btn-primary" name="fund">Fundraise</a>';
					// } else {
					// 	echo '<a href="organization/create_camp.php" class="btn btn-primary" name="fund">Create Campaign</a>';
					// }
				?>
			</div>
			<div class="card-footer text-muted">
				
			</div>
		</div>
	</div>
</div>

<?php include(ROOT_PATH . "app/includes/footer.php"); ?>
