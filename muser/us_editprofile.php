<?php
    SESSION_START();
    include("../app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
    include(ROOT_PATH . "app/database/connect.php");
    $user_id=$_SESSION['user_id'];

    if (isset($_POST['user_id'])) {
        $query = "SELECT * FROM users WHERE user_id='$_POST[user_id]'";
        $execution = $conn->$query($query);
        $data = $execution->fetch_object();
    }

    if(isset($_POST['update']))
    {
        $user_name=$_POST['user_name'];
        $user_email=$_POST['user_email'];
        $user_phone=$_POST['user_phone'];
        

        $filedir = "app/image/profile/";
        $pathName = basename($_FILES["user_img"]["name"]);
        $targetFilePath = $filedir.$pathName;
        $pathType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if(!empty($_FILES["user_img"]["name"])){
            
                $fileType = array('jpg', 'png', 'jpeg', 'gif');
                if(in_array($pathType, $fileType)){
                    if(move_uploaded_file($_FILES["user_img"]["name"], $targetFilePath)){

                        //upload image
                        $query = mysqli_query($conn,"update users SET user_name='$user_name', user_email='$user_email', user_phone='$user_phone', user_img='".pathName."' where user_id='$user_id'");
                        if($query){
                            echo "<script>alert('Your profile has been update successfully!');</script>";
                        }
                        else{
                            $php_errormsg['user_img'] = "Failed to upload profile picture, please try again.";
                        }
                    }
                }
            }
            else{
                $query = mysqli_query($conn,"update users SET user_name='$user_name',  user_email='$user_email', user_phone='$user_phone' where user_id='$user_id'");
                        if($query){
                            echo "<script>alert('Your profile has been update successfully!');</script>";
                        }
                        else{
                            echo "<script>alert('Your profile failed to update. Please try again');</script>";
                        }
            }
        

        $_SESSION['user_name'] = $user_name;
        
        
        
    }
            
        /*$password=$_POST['password'];*/
    //     $user_email=$_POST['user_email'];
    //     $user_phone=$_POST['user_phone'];
    //     $user_img=$_POST['user_img'];
        
    //     $user_img = $_FILES['user_img']['name'];
    //     $temp_path = $_FILES['user_img']['tmp_name'];

    //    $destination_path = 'image/'.uniqid().' '. $user_img;

    //    if(move_uploaded_file($temp_path, $destination_path)) {
    //     $query = " update users SET
    //     user_name='$user_name',
    //     user_email = '$user_email',
    //     user_phone = '$user_phone' ,
    //     user_img = '$destination_path' where user_id='$_POST[user_id]'";

    // }else{ 
    //     // if file done upload
    //     $query = "update users SET
    //     first_name = '$first_name' ,
    //     last_name = '$last_name' ,
    //     email = '$email' ,
    //     user_phone = '$user_phone' ,
    //     user_img = '$destination_path' where user_id = '$_POST[user_id]'";
    // }
    // $executionQuery = $conn->query($query);
    // header("location:us_profile.php");

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
<?php
    $sql = mysqli_query($conn,"SELECT * FROM users WHERE user_id='$user_id'");
    $result = mysqli_fetch_assoc($sql);

    ?>
    <div class="container-profile">
        <div class="profile-box">
            <div class="form-div col-4 offset-md-4 ">
            <form action="us_editprofile.php" method="post" enctype="multipart/form-data">
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
                            value="<?php echo $result['user_name'];?>"
                                placeholder="Enter Username"
                    />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="user_email" class="form-control"
                     value="<?php echo $result['user_email'];?>"
                            placeholder="Enter Email"
                    />
                </div>
                
                <div class="form-group">
                    <label>Contact Number(+60)</label>
                    <input type="text" name="user_phone" class="form-control"
                        value="<?php echo $result['user_phone'];?>"
                            placeholder="Enter contact number"
                    />
                </div>

                <div class="form-group">
                    <label>Profile Picture</label>
                    <img src="" alt="" srcset="">
                    <input type="file" name="user_img" id="user_img" class="form-control" />
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
<?php include(ROOT_PATH . "app/includes/footer.php"); ?>
</html>