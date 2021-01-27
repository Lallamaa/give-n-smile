<?php
    include ('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div align="center">
       <hr>
            <h3>Update User Information</h3>
       <hr>
        <div class="row">
            <div class="col-md-6 offset-3">
                <form action="userProfileUpdateProcess.php" method="POST" enctype="multipart/form-data">
                    <?php
                        $currentUser = $_SESSION['users']->user_name;
                        $sql = "SELECT * FROM users WHERE user_name ='$currentUser'";

                        $gotResuslts = mysqli_query($conn,$sql);

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
                </form>
            </div>
        </div>
    </div>
</body>
</html>