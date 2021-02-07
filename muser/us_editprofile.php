<?php
    SESSION_START();
    include("../lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
    include(ROOT_PATH . "app/database/connect.php");

    if (isset($_REQUEST['user_id'])) {
        $query = "SELECT * FROM users WHERE user_id='$_REQUEST[user_id]'";
        
        $execution = $conn->query($query);
    
        $data = $execution->fetch_object();
    }

    if(isset($_REQUEST['update']))
    {
        //$user_id=$_SESSION['user_id'];

        $user_name=$_REQUEST['user_name'];
        $password=$_REQUEST['password'];
        $user_email=$_REQUEST['user_email'];
        $user_phone=$_REQUEST['user_phone'];
        $user_img=$_REQUEST['user_img'];
        
        $user_img = $_FILES['user_img']['name'];
        $temp_path = $_FILES['user_img']['tmp_name'];

       $destination_path = 'image/'.uniqid().' '. $user_img;

       if(move_uploaded_file($temp_path, $destination_path)) {
        $query = " update users SET
        user_name='$user_name',
        password='$password',
        user_email = '$user_email',
        user_phone = '$user_phone' ,
        user_img = '$destination_path' where user_id='$_REQUEST[user_id]'";

    }else{ 
        // if file done upload
        $query = "update users SET
        first_name = '$first_name' ,
        last_name = '$last_name' ,
        email = '$email' ,
        user_phone = '$user_phone' ,
        user_img = '$destination_path' where user_id = '$_REQUEST[user_id]'";
    }
    $executionQuery = $conn->query($query);
    header("location:us_profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel class="stylesheet" href="style.css">
    
     <title>Profile Page</title>
</head>

<body>
    <div class="container-profile">
        <div class="profile-box">
            <div class="form-div col-4 offset-md-4 ">
            <form action="" method="post" enctype="multipart/form-data">
                <h3 class="text-center mb-3 mt-3">Edit Profile</h3>
                <?php
                    if(!empty($txt)): ?>
                    <div class="alert <?php echo $txt_class; ?>" role="alert">
                    <?php echo $txt; ?>
                </div>
                    <?php endif; ?>
                <div class="form-group">
                <label>User Name</label>
                    <input type="text" name="user_name" class="form-control" require
                        <?php
                            if(isset($data->user_name)) {
                                //print value
                                ?> value="<?=$data->user_name;?>"
                                <?php
                            } else {
                                ?>
                                placeholder="Enter Username"
                            <?php
                            }
                        ?>
                    />
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control"
                    <?php
                        if(isset($data->password)) {
                            //print value
                            ?> value="<?=$data->password;?>"
                            <?php
                        } else {
                            ?>
                            placeholder="Enter new password"
                        <?php
                        }
                        ?>
                    />
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="user_email" class="form-control"
                    <?php
                        if(isset($data->user_email)) {
                            //print value
                            ?> value="<?=$data->user_email;?>"
                            <?php
                        } else {
                            ?>
                            placeholder="Enter Email"
                        <?php
                        }
                        ?>
                    />
                </div>
                
                <div class="form-group">
                    <label>Contact Number(+60)</label>
                    <input type="text" name="user_phone" class="form-control"
                    <?php
                        if(isset($data->user_phone)) {
                            //print value
                            ?> value="<?=$data->user_phone;?>"
                            <?php
                        } else {
                            ?>
                            placeholder="Enter contact number"
                        <?php
                        }
                    ?>
                    />
                </div>

                <div class="form-group">
                    <label>Profile Picture</label>
                    <img src="" alt="" srcset="">
                    <input type="file" name="user_img" id="user_img" class="form-control"/>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" name="update" value="UPDATE" class="btn btn-primary btn-block">update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<?php include(ROOT_PATH . "app/includes/footer.html"); ?>
</html>