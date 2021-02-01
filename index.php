<?php 
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
					<a href="<?php echo BASE_URL; ?>browse.php" class="btn btn-primary">Browse more campaigns</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include(ROOT_PATH . "app/includes/footer.html"); ?>
