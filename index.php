<?php 
	SESSION_START();
	include("lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
	
?>

<div id="main">
		<div class="container-fliud">
			<div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(image/jumbo_3.jpeg);">
				<div class="content">
				   <h2 class="mb-4">
					Jumbotron with background image
					</h2>
					<p class="mb-4">
						Hey, check this out.
					</p>
					<p>Welcome to homepage</p>
					<a href="browse.php" class="btn btn-primary">Browse more campaigns</a>
				</div>
			<?php endif ?>
			<!-- logged in user information -->
			<div class="profile-info">
				<img src="<?php echo BASE_URL;?>image/user_profile.png">
			</div>
				<?php if (isset($_SESSION['users'])) :?>
					<strong><?php echo $_SESSION['users']['username']; ?></strong>
				<?php endif ?>
		</div>
		<div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(image/jumbo_3.jpeg);">
			<div class="content">
					<h2 class="mb-4">
				Jumbotron with background image
				</h2>
				<p class="mb-4">
					Hey, check this out.
				</p>
				<a href="browse.php" class="btn btn-primary">Browse more campaigns</a>
			</div>
		</div>

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="app/image/jumbo_1.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="app/image/jumbo_2.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="app/image/jumbo_3.jpeg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<div class="card text-center">
			<div class="card-header">
				Featured
			</div>
			<div class="card-body">
				<h5 class="card-title">Start your fundraise now !</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="btn btn-primary">Fundraise</a>
			</div>
			<div class="card-footer text-muted">
				2 days ago
			</div>
		</div>
	</div>
</div>




<?php include(ROOT_PATH . "app/includes/footer.html"); ?>
