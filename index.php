<?php 
	session_start();
	include("app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
	//checking if user already login
	// if(!isset($_SESSION['username'])){
	// 	header('Location: index.php');
	// }
?>

<div id="main">
	<div class="container-fliud">
		<div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(app/image/jumbotron/jumbo_3.jpg);">
			<div class="content">
					<h2 class="mb-4">Make a donation</h2>
				<p class="mb-4">
					By changing the life of those who need help
				</p>
				<a href="browse.php" class="btn btn-primary">Browse more campaigns</a>
			</div>
		</div>

		<div id="carouselExampleDark" class="carousel carousel-dark slide s-slide" data-bs-ride="carousel">
			<ol class="carousel-indicators">
				<li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
				<li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
				<li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="10000">
					<img src="app/image/jumbotron/jumbo_1.jpg" class="d-block w-100" alt="..." height="750" width="100%" style="object-fit: cover; !important;">
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
				<div class="carousel-item" data-bs-interval="2000">
					<img src="app/image/jumbotron/jumbo_2.jpeg" class="d-block w-100" alt="..." height="750" width="100%" style="object-fit: cover; !important;">
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
				<div class="carousel-item">
					<img src="app/image/jumbotron/jumbo_4.jpg" class="d-block w-100" alt="..." height="750" width="100%" style="object-fit: cover; !important;">
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
				<div class="carousel-item">
					<img src="app/image/jumbotron/jumbo_5.jpg" class="d-block w-100" alt="..." height="750" width="100%" style="object-fit: cover; !important;">
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
				<div class="carousel-item">
					<img src="app/image/jumbotron/jumbo_6.jpg" class="d-block w-100" alt="..." height="750" width="100%" style="object-fit: cover; !important;">
					<div class="carousel-caption d-none d-md-block">
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</a>
		</div>
	</div>

	<div class="fundraise-card">
		<div class="card text-center">
			<div class="card-header">
			</div>
			<div class="card-body">
				<h5 class="card-title">Start your fundraise now !</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="<?php echo BASE_URL;?>fundraise.php" class="btn btn-primary">Fundraise</a>
			</div>
			<div class="card-footer text-muted">
			</div>
		</div>
	</div>
		

	</div>
</div>
<?php include(ROOT_PATH . "app/includes/footer.php"); ?>