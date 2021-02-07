<?php
	include("lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
	include(ROOT_PATH . "lib/function.php");

	if (!isOrganization()) {
		$_SESSION['fund'] = "You must login first";
		header('Location: login.php');
	}


?>

<div class="container">
	<div class="row">
		<div class="card text-center">
			<div class="card-header">
				Featured
			</div>
			<div class="card-body">
				<h5 class="card-title">Start your fundraise now!</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="btn btn-primary" name="fund">Fundraise</a>
			</div>
			<div class="card-footer text-muted">
				2 days ago
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
	<div class="jumbotron">
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
				<ol class="carousel-indicators">
					<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
					<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="app/image/jumbo_1.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>First slide label</h5>
							<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="app/image/jumbo_1.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Second slide label</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="app/image/jumbo_1.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Third slide label</h5>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>



<?php include(ROOT_PATH . "app/includes/footer.html"); ?>
