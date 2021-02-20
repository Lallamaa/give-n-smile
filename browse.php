<?php 
	session_start();

	include("app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 

	// $total_event = "";
	// $sql = "SELECT 
	// 				FROM table_name
	// 				WHERE condition";
	// $run_sql = mysqli_query($sql);

	$state = '';
	$city = '';

	$query = "SELECT `state` FROM `state_city` GROUP BY `state` ORDER BY `state` ASC";
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result))
	{
	$state.= '<option value="'. $row["state"].'">'.$row["state"].'</option>';
	}

	$queryy = "SELECT `cat_name` FROM category ORDER BY `cat_name` ASC";
	$category = mysqli_query($conn, $queryy);

	$sql = "SELECT * FROM events";
	$event = mysqli_query($conn, $sql);
/* 	$events = mysqli_fetch_assoc($event);
	while($events) {
		echo $event['event_img'];
	} */
	
?>

<script>
$(".progress-bar").animate({
    width: "50%"
}, 2500);
</script>


<div class="container-fluid">
	<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Library</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data</li>
			</ol>
		</nav>
		<div id="carouselExampleDark" class="carousel carousel-dark slide s-slide" data-bs-ride="carousel">
			<ol class="carousel-indicators">
				<li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
				<li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
				<li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="10000">
					<img src="app/image/jumbotron/jumbo_1.jpg" class="d-block w-100" alt="..." height="500" width="100%">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="carousel-item" data-bs-interval="2000">
					<img src="app/image/jumbotron/jumbo_2.jpeg" class="d-block w-100" alt="..." height="500" width="100%">
					<div class="carousel-caption d-none d-md-block">
						<h5>Second slide label</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="app/image/jumbotron/jumbo_3.jpg" class="d-block w-100" alt="..." height="500" width="100%">
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
	<section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
																<option>Select State</option>
																<?php echo $state; ?>

                            </select> 
                        </div>
                         <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="action">
                                <option>Select Drop City</option>
																<?php echo $city; ?>
                            </select>
                        </div>
                          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Select Category</option>
																<?php while($row = mysqli_fetch_array($category)) 
																	{
																		echo '<option value="'.$row['cat_name'].'">'.$row['cat_name'].'</option>';
																	} ?>

                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-primary wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
	</section>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<?php 
					while($row = mysqli_fetch_assoc($event)) {
				?>
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="card-body">
							<div class="candidate-list candidate-grid">
								<div class="candidate-list-image">
								<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner browse-image" style=" width:100%; height: 250px !important;">
										<div class="carousel-item active">
										<img class="img-fluid d-block w-100 rounded" src="app/image/event/<?= $row['event_img']; ?>" alt="" style="height: 100%; width: 100%; object-fit: contain !important;">
										</div>
										<div class="carousel-item">
										<img class="img-fluid d-block w-100 rounded" src="app/image/event/<?= $row['event_img']; ?>" alt="" style="height: 100%; width: 100%; object-fit: contain !important;">
										</div>
										<div class="carousel-item">
										<img class="img-fluid d-block w-100 rounded" src="app/image/event/<?= $row['event_img']; ?>" alt="" style="height: 100%; width: 100%; object-fit: contain !important;">
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</a>
									</div>
									<div class="tile-progress tile-primary active progress">									
										<div class="tile-progressbar progress-bar">
											<span data-fill="90%" style="width: 90%;"></span>
										</div>
										<div class="text-right">RM <?= number_format($row['event_amount'], 2); ?></div>										
									</div>
								
								<div class="candidate-list-details">
									<div class="candidate-list-info">
										<div class="candidate-list-title">
											<h5 class="card-title"><?= $row['event_name']; ?></h5>
											<p class="card-text"><?= substr($row['event_desc'], 0, 200); ?> "...".'</p>
										</div>
									</div>
									<div><br>
										<div class="card-title"><a href="org_profile.php"><?=$row['event_organizer']; ?></a></div>
										<div class="card-subtitle text-muted"><i class="fas fa-map-marker-alt pr-1"></i><small><?= $row['event_area']; ?></small></div>
										<div class="card-body">
											<a href="payment.php" class="btn btn-outline-warning">Donate</a>
											<a href="details.php" class="btn btn-outline-warning">View</a>
											<input type="hidden" id="name<?=$row['event_id']; ?>" value="<?= $row['event_name']; ?>">
							
											<button class="btn btn-outline-warning add" data-id="<?= $row['event_id']; ?>"><img class="cart-icon" src="<?php echo BASE_URL;?>app/image/icon/cart2.png" width="25" height="25"/></button>
							
										</div>
										<div class="candidate-list-favourite-time">
											<a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
											<span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i><?= $row['event_start']; ?></span>
											<span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i><?= $row['event_end']; ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 			
				</div>
			<?php
				}
			?>
			</div>
		</div>
	</div>


				
		<div class="row">
			<div class="col-12 text-center mt-4 mt-sm-5">
					<ul class="pagination justify-content-center mb-0">
						<li class="page-item disabled"> <span class="page-link">Prev</span> </li>
						<li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">...</a></li>
						<li class="page-item"><a class="page-link" href="#">25</a></li>
						<li class="page-item"> <a class="page-link" href="#">Next</a> </li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>


<?php include(ROOT_PATH . "app/includes/footer.php"); ?>

<script>
$(document).ready(function(){
 $('action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "state")
   {
    result = 'city';
   }
   $.ajax({
    url:"app/includes/state_city.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});
</script>