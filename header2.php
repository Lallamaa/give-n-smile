        <!-- original YS code-->
        <div class="btn-group dropstart"> 
            <button class="btn btn-primary-outline dropdown-toggle " type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?php echo BASE_URL; ?>app/image/icon/account.png" width="30" height="30" class="d-inline-block align-top">
            </button>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
						<?php if(isset($_SESSION['loggedIn'])) {		                
							echo  '<li><a class="nav-link" href="'. BASE_URL . 'user/us_profile.php">Account</a></li>
										 <li><a class="nav-link" href="'. BASE_URL . 'user/us_edit.php">Setting</a></li>
										 <li><hr class="dropdown-divider"></li>
										 <li><a class="nav-link" name="logout" href="'. BASE_URL .'index.php?logout=“1"><i class="fa fa-power-off"></i>Logout</a></li>';

						 } else if(isset($_SESSION['loggedIn'])) {	
							echo  '<li><a class="nav-link" href="'. BASE_URL . 'organization/org_profile.php">Account</a></li>
										 <li><a class="nav-link" href="'. BASE_URL . 'organization/org_edit.php">Setting</a></li>
										 <li><hr class="dropdown-divider"></li>
										 <li><a class="nav-link" name="logout" href="'. BASE_URL .'index.php?logout="1"><i class="fa fa-power-off"></i>Logout</a></li>';

						 }
						
						?>                          
            </ul>
        </div>
        
        <!-- For the app/includes/header.php From V code-->
        <div class="btn-group">
            <button class="btn btn-primary-outline dropdown-toggle mr-5" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?php echo BASE_URL; ?>app/image/icon/account.png" width="30" height="30" class="d-inline-block align-top">
            </button>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
						<?php if(isset($_SESSION['users'])) {		                
							echo  '<li><a class="nav-link" href="'. BASE_URL . 'user/us_profile.php">Account</a></li>
										 <li><a class="nav-link" href="'. BASE_URL . 'user/us_edit.php">Setting</a></li>
										 <li><hr class="dropdown-divider"></li>
										 <li><a class="nav-link" name="logout" href="'. BASE_URL .'index.php?logout=“1"><i class="fa fa-power-off"></i>Logout</a></li>';

						 } else if(isset($_SESSION['organization'])) {	
							echo  '<li><a class="nav-link" href="'. BASE_URL . 'organization/org_profile.php">Account</a></li>
										 <li><a class="nav-link" href="'. BASE_URL . 'organization/org_edit.php">Setting</a></li>
										 <li><hr class="dropdown-divider"></li>
										 <li><a class="nav-link" name="logout" href="'. BASE_URL .'index.php?logout="1"><i class="fa fa-power-off"></i>Logout</a></li>';

						 }
						
						?>                          
            </ul>
        </div>

