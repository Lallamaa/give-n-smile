<?php 
	SESSION_START();
	include('../lib/path.php'); 
	include(ROOT_PATH . 'app/includes/header.php'); 

	
?>

<div id="main">
		
		<div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(image/jumbo_3.jpg);">
			<div class="content">
					<h2 class="mb-4">Make a donation</h2>
				<p class="mb-4">
					By changing the life of those who need help
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
					<img class="d-block w-100" src="app/image/jumbo_4.jpg" alt="Third slide">
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
				<p class="card-text">Your support is hugely demanded for us to be able to continuously offer the supports to all the charity organization here.</p>
				<a href="#" class="btn btn-primary">Fundraise</a>
			</div>
			<div class="card-footer text-muted">
				2 days ago
			</div>
		</div>
	</div>
</div>
<?php include(ROOT_PATH . "app/includes/footer.html"); ?>