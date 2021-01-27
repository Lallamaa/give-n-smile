<?php 
	include ('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Profile Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head> 
<body>
<div align="center">
    <h2>Your Profile</h2>
    <form method="post" class="profile-form">
        <div>User ID :  <?php echo $_SESSION['users']->user_id; ?></div> 
        <div>User Name : <?php echo $_SESSION['users']->user_name; ?></div>
        <div>Password : <?php echo $_SESSION['users']->password; ?></div>
        <div>Email : <?php echo $_SESSION['users']->user_email; ?> </div>
        <div> Contact number : <?php echo $_SESSION['users']->user_phone; ?></div>

<<<<<<< HEAD
		

=======
                        if($gotResuslts){
                            if(mysqli_num_rows($gotResuslts)>0){
                                while($row = mysqli_fetch_array($gotResuslts)) ?>
                                
                                        <div class="form-group">
                                            <input placeholder="Enter user name" type="text" name="user_name" class="form-control" value="<?php echo $row['user_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input placeholder="Enter password" type="text" name="password" id="password" class="form-control" value="<?php echo $row['password']; ?>">
                                        </div>
										<div class="form-group">
                                            <input placeholder="Enter email" type="email" name="user_email" class="form-control" value="<?php echo $row['user_email']; ?>">
                                        </div>
										<div class="form-group">
                                            <input placeholder="Enter contact number"  type="text" name="user_phone" class="form-control" value="<?php echo $row['user_phone']; ?>">
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="submit" name="update"  class="btn btn-info" value="Update">
                                        </div>
                                    <?php
                                }
                            }
                        }
                        
                    ?>
                    <!---<a href="editprofile.php?user_name="<?php echo $_SESSION['users']->user_name; ?> /> Edit Profile</a>
		-->
                </form>
            </div>
        </div>
    </div>
>>>>>>> f6227e9175765641b88d196de28d2ef13f167cdd
</body>
</html>