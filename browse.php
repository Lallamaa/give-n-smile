<?php 
	include("app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 

	// $total_event = "";
	// $sql = "SELECT 
	// 				FROM table_name
	// 				WHERE condition";
	// $run_sql = mysqli_query($sql);

	$state = '';
	$city = '';
	$category = '';

	$query1 = "SELECT `state` FROM `state_city` GROUP BY `state` ORDER BY `state` ASC";
	$result1 = mysqli_query($conn, $query1);
	while($row1 = mysqli_fetch_array($result1))
	{
	$state.= '<option value="'.$row1["state"].'">'.$row1["state"].'</option>';
	}
	// $query2 = "SELECT `state`, `city` FROM `state_city` WHERE `state`='$state' GROUP BY `state` ORDER BY `city` ASC";
	// $result2 = mysqli_query($conn, $query2);
	// while($row2 = mysqli_fetch_array($result2))
	// {
	// $city.= '<option value="'.$row2["city"].'">'.$row2["city"].'</option>';
	// }
	// $query3 = "SELECT `cat_name` FROM `category` GROUP BY `cat_name` ASC";
	// $result3 = mysqli_query($conn, $query3);
	// while($row3 = mysqli_fetch_array($result3))
	// {
	// 	$category.= '<option value="'.$row1["cat_name"].'">'.$row1["cat_name"].'</option>';
	// }
	
?>

<style>.tile-progress {
background-color: #303641;
color: #fff;
}
.tile-progress {
background: #00a65b;
color: #fff;
margin-bottom: 20px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
-webkit-background-clip: padding-box;
-moz-background-clip: padding;
background-clip: padding-box;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
}
.tile-progress .tile-header {
padding: 15px 20px;
padding-bottom: 40px;
}
.tile-progress .tile-progressbar {
height: 2px;
background: rgba(0,0,0,0.18);
margin: 0;
}
.tile-progress .tile-progressbar span {
background: #fff;
}
.tile-progress .tile-progressbar span {
display: block;
background: #fff;
width: 0;
height: 100%;
-webkit-transition: all 1.5s cubic-bezier(0.230,1.000,0.320,1.000);
-moz-transition: all 1.5s cubic-bezier(0.230,1.000,0.320,1.000);
-o-transition: all 1.5s cubic-bezier(0.230,1.000,0.320,1.000);
transition: all 1.5s cubic-bezier(0.230,1.000,0.320,1.000);
}
.tile-progress .tile-footer {
padding: 20px;
text-align: right;
background: rgba(0,0,0,0.1);
-webkit-border-radius: 0 0 3px 3px;
-webkit-background-clip: padding-box;
-moz-border-radius: 0 0 3px 3px;
-moz-background-clip: padding;
border-radius: 0 0 3px 3px;
background-clip: padding-box;
-webkit-border-radius: 0 0 3px 3px;
-moz-border-radius: 0 0 3px 3px;
border-radius: 0 0 3px 3px;
}
.tile-progress.tile-red {
background-color: #f56954;
color: #fff;
}
.tile-progress {
background-color: #303641;
color: #fff;
}
.tile-progress.tile-blue {
background-color: #0073b7;
color: #fff;
}
.tile-progress.tile-aqua {
background-color: #00c0ef;
color: #fff;
}
.tile-progress.tile-green {
background-color: #00a65a;
color: #fff;
}
.tile-progress.tile-cyan {
background-color: #00b29e;
color: #fff;
}
.tile-progress.tile-purple {
background-color: #ba79cb;
color: #fff;
}
.tile-progress.tile-pink {
background-color: #ec3b83;
color: #fff;
}
.progress.active .progress-bar {
    -webkit-transition: none !important;
    transition: none !important;
}
/*search box css start here*/
.search-sec{
    background: #1A4668;padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
     height: calc(3rem + 2px) !important;
     border-radius:0;
}


</style>
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
		<!--<div class="col-lg-3">
			<div class="sidebar">
				<div class="widget border-0">
					<div class="search">
						<input class="form-control" type="text" placeholder="Search Keywords">
					</div>
				</div>
				<div class="widget border-0">
					<div class="locations">
						<input class="form-control" type="text" placeholder="All Locations">
					</div>
				</div><br>
				 <div class="card">
					<div class="card-body">
						<div class="widget">
							<div class="widget-title widget-collapse">
									<h6>Date Posted</h6>
									<a class="ml-auto" data-toggle="collapse" href="#dateposted" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-chevron-down"></i> </a>
							</div>
							<div class="collapse show" id="dateposted">
								<div class="widget-content">
									<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="dateposted1">
											<label class="custom-control-label" for="dateposted1">Last hour</label>
									</div>
									<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="dateposted2">
											<label class="custom-control-label" for="dateposted2">Last 24 hour</label>
									</div>
									<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="dateposted3">
											<label class="custom-control-label" for="dateposted3">Last 7 days</label>
									</div>
									<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="dateposted4">
											<label class="custom-control-label" for="dateposted4">Last 14 days</label>
									</div>
									<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="dateposted5">
											<label class="custom-control-label" for="dateposted5">Last 30 days</label>
									</div>
								</div>
							</div>
						</div>
					
						<div class="widget">
							<div class="widget-title widget-collapse">
								<h6>Categories</h6>
								<a class="ml-auto" data-toggle="collapse" href="#specialism" role="button" aria-expanded="false" aria-controls="specialism"> <i class="fas fa-chevron-down"></i> </a>
							</div>
							<div class="collapse show" id="specialism">
								<div class="widget-content">
									<?php //echo '
										// <div class="custom-control custom-checkbox">
										// 	<input type="checkbox" class="custom-control-input" id="specialism1">
										// 	<label class="custom-control-label" for="specialism1">IT Contractor</label>
										// </div>'
									?>
								</div>
							</div>
						</div>
						<div class="widget border-0">
							<div class="widget-add">
								<img class="img-fluid" src="images/add-banner.png" alt=""></div>
						</div>
					</div>
</div></div></div>
<div class="col-lg-9">
	<div class="row mb-4">
		<div class="col-12">
			<h6 class="mb-0">Showing 1-30 of <span class="text-primary"><?php //echo $total_event?> Events</span></h6>
		</div>
	</div>
	<div class="job-filter mb-4 d-sm-flex align-items-center">
		<div class="job-shortby ml-sm-auto d-flex align-items-center">
			<form class="form-inline">
				<div class="form-group mb-0">
					<label class="justify-content-start mr-2">Sort by :</label>
					<div class="short-by">
						<select class="form-control basic-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
							<option data-select2-id="3">Newest</option>
							<option>Oldest</option>
						</select>
					</div>
				</div>
			</form>
		</div>
	</div> -->

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
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Select Drop City</option>
																<?php echo $city; ?>
                            </select>
                        </div>
                          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Select Category</option>
																<?php echo $category; ?>

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
				<?php echo '
					<div class="col-sm-6 col-lg-4 mb-4">
						<div class="card-body">
							<div class="candidate-list candidate-grid">
								<div class="candidate-list-image">
								<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
										<img class="img-fluid d-block w-100" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
										</div>
										<div class="carousel-item">
										<img class="img-fluid d-block w-100" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
										</div>
										<div class="carousel-item">
										<img class="img-fluid d-block w-100" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
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
									</div>
								
								<div class="candidate-list-details">
									<div class="candidate-list-info">
										<div class="candidate-list-title">
											<h5 class="card-title">Campaign Title</h5>
											<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										</div>
									</div>
									<div><br>
										<div class="card-title"><a href="org_profile.php">Organization Name</a></div>
										<div class="card-subtitle text-muted"><i class="fas fa-map-marker-alt pr-1"></i><small>Area Name</small></div>
										<div class="card-body">
											<a href="payment.php" class="btn btn-outline-warning">Donate</a>
											<a href="details.php" class="btn btn-outline-warning">View</a>
										</div>
										<div class="candidate-list-favourite-time">
											<a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
											<span class="candidate-list-time order-1"><i class="far fa-clock pr-1"></i>1M ago</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 					
					';
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


<?php include(ROOT_PATH . "app/includes/footer.html"); ?>

<script>
$(document).ready(function(){
 $('.action').change(function(){
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
