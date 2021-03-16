<?php
    SESSION_START();
    include("../app/lib/path.php"); 
	include(ROOT_PATH . "app/includes/header.php"); 
    

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
    $user_id = $_SESSION['loggedIn']->user_id;
    $sql = mysqli_query($conn,"SELECT * FROM events WHERE organizer_id = '$user_id'");
    $result = mysqli_fetch_assoc($sql);

    ?>
    <div class="container-profile">
        <div class="profile-box">
            <div class="form-div col-4 offset-md-4 ">
            <form action="includes/us_edit.inc.php" method="post" enctype="multipart/form-data">
                <h3 class="text-center mb-3 mt-3">Edit Ongoing Event</h3>
                <?php
                    if(!empty($txt)): ?>
                    <div class="alert <?php echo $txt_class; ?>" role="alert">
                    <?php echo $txt; ?>
                </div>
                    <?php endif; ?>
                <div class="form-group">
                <label>Event Name</label>
                    <input type="text" name="eventName" class="form-control" require
                            value="<?php echo $result['event_name'];?>"
                                placeholder="Enter Event Name"
                    />
                </div>
                <div class="form-group">
                  <div>Campaign Date</div>
                  <label class="control-label">Start</label>
                  <input type="date" required="required" id="dateIn" placeholder="yyyy-mm-dd" name="start" value="<?php echo $result['event_start'];?>"/><br>
                  <label class="control-label">End</label>
                  <input type="date" required="required" id="dateOut" placeholder="yyyy-mm-dd" name="end" value="<?php echo $result['event_end'];?>"/>
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
                    <div>
                        <img class="text-align-center" src="<?php echo $result['user_img'];?>" alt="" width='200' height='200' style="  display:block; margin:auto !important;">
                    </div><br>
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