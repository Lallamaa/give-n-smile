<?php 
	include("lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
?>

    <div class="container-fliud">
        <h2 class="my-5 ml-5"> Please choose a category to Sign Up </h2>
        <div class="container"> 
            <div class="pre-box box box-camp col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div>Charity Organization</div>
                <p> Sign up to fundraise for your campaigns and events</p>
                <a href="organization/org_register.php" class="btn btn-primary">Register as Organization</a></input>
            </div>
            <div class="pre-box box box-fund col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div>Personal Account</div>
                <p>Sign up to donate or fundraise for personal own business</p>
                <a href="user/us_register.php" class="btn btn-primary">Register for Personal Account </a>
            </div>
        </div>
    </div>

<?php include(ROOT_PATH . "app/includes/footer.php"); ?>


