<?php 
    include ('profile-process.php');
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
<style>

.form-div{
    margin-top:40px;
    border: 1px solid #464242;
    width: 450px;
    padding: 30px;
    position: absolute;
}

.image {
    opacity: 1;
    display: block;
    margin-right:auto;
    margin-left:auto;
}
.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
}

</style>
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

                <div class="form-group text-center" style="position:center">
                     <span class="img-div">
                        <div class="text-center img-placeholder"  onClick="triggerClick()"> </div>
                        <img src="image/placeholder_img.png" class="image" style="width:60%" onclick="triggerClick()" id="imgDisplay"/>
                     </span>
                    <input type="file" name="userImage" onChange="showImage(this)" id="userImage" class="form-control" style="display:none;">
                    <label for="userImage">Profile Image</label>
                </div>
                
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="user_name" class="form-control" require/>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control"/>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="user_email" class="form-control"/>
                </div>
                
                <div class="form-group">
                    <label>Contact Number(+60)</label>
                    <input type="text" name="user_phone" class="form-control"/>
                </div>
    
                <div class="form-group">
                    <button type="submit" name="user-submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="profile_script.js"></script>
</html>

