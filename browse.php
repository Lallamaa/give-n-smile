<?php 
	include("lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
?>
<div class="container-fluid">
<div class="row">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="app/image/jumbo_1.jpg" class="d-block w-100" alt="..." height="500" width="100%">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="app/image/jumbo_2.jpeg" class="d-block w-100" alt="..." height="500" width="100%">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="app/image/jumbo_3.jpg" class="d-block w-100" alt="..." height="500" width="100%">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
</div>

<div class="container">
	<div class="row">
		<div class="d-flex align-items-start">
			<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
					<a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
					<a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
					<a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
			</div>
			
			<div class="tab-content" id="v-pills-tabContent">
				<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
					<div class="row gutters-sm">
						<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
							<div class="card" style="width: 18rem;">
								<img src="app/image/pic_4.png" class="card-img-top" alt="...">
								<div class="card-body">
										<h5 class="card-title">Campaign Title</h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
								</div>
								<div class="card-body">
										<div class="card-title"><a href="org_profile.php">Organization Name</a></div>
										<div class="card-subtitle mb-2 text-muted"><small>Area Name</small></div>
								</div>
								<div class="card-body">
										<a href="#" class="btn btn-outline-warning">Donate</a>
										<a href="#" class="btn btn-outline-warning">View</a>
								</div>
							</div>
						</div> <!--End col -->
						<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
							<div class="card" style="width: 18rem;">
								<img src="image/pic_4.png" class="card-img-top" alt="...">
								<div class="card-body">
										<h5 class="card-title">Campaign Title</h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
								</div>
								<div class="card-body">
										<div class="card-title"><a href="org_profile.php">Organization Name</a></div>
										<div class="card-subtitle mb-2 text-muted"><small>Area Name</small></div>
								</div>
								<div class="card-body">
										<a href="#" class="btn btn-outline-warning">Donate</a>
										<a href="#" class="btn btn-outline-warning">View</a>
								</div>
							</div>
						</div> <!--End col -->
					</div>
				</div> 	<!-- End tab-pane-->
				<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
					<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
						<div class="card" style="width: 18rem;">
							<img src="image/pic_4.png" class="card-img-top" alt="...">
							<div class="card-body">
									<h5 class="card-title">Campaign Title</h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
							</div>
							<div class="card-body">
									<div class="card-title"><a href="org_profile.php">Organization Name</a></div>
									<div class="card-subtitle mb-2 text-muted"><small>Area Name</small></div>
							</div>
							<div class="card-body">
									<a href="#" class="btn btn-outline-warning">Donate</a>
									<a href="#" class="btn btn-outline-warning">View</a>
							</div>
						</div>
					</div> <!--End col -->
				</div>	<!-- End tab-pane-->
				<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
					<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
						<div class="card" style="width: 18rem;">
							<img src="image/pic_4.png" class="card-img-top" alt="...">
							<div class="card-body">
									<h5 class="card-title">Campaign Title</h5>
									<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
							</div>
							<div class="card-body">
									<div class="card-title"><a href="org_profile.php">Organization Name</a></div>
									<div class="card-subtitle mb-2 text-muted"><small>Area Name</small></div>
							</div>
							<div class="card-body">
									<a href="#" class="btn btn-outline-warning">Donate</a>
									<a href="#" class="btn btn-outline-warning">View</a>
							</div>
						</div>
					</div> <!--End col -->
				</div>	<!-- End tab-pane-->
			</div> <!-- End tab-content-->
		</div> <!-- End d-flex-->
	</div> 	<!-- End row-->
</div> 

<div class="container">
	<div class="row">
		
	</div>
</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>

<div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <?phpwhile ($row = mysql_fetch_array($result))
                    {?>
                    <img src="images/home/" alt="" />
                    <h2><?php echo $row['Book_Name']; ?></h2>
                    <p>Book 10</p>
                    <?php}?>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>Price</h2>
                        <p>Book 10</p>
                        <a href="#" class="btn btn-default view-item"><i class="glyphicon glyphicon-eye-open"></i>view Book</a>
                    </div>
                </div>

            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to  wishlist</a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i>Add to  cart</a></li>
                </ul>
            </div>
        </div>
    </div>