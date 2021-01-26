<?php

    include('../app/database/connect.php');
    include('../lib/function.php');

    $msg = '';

    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $sql = "select * from admin where ad_name='$name' and ad_password='$password'";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($count>0) {
            $_SESSION['ADMIN_LOGIN']='yes';
            $_SESSION['ADMIN_USERNAME']=$name;
            $_SESSION['ADMIN_PASSWORD']=$password;
            header('location:dashboard.php');
            die();
        } else {
            $msg = "Incorrect login details!";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

       <!-- Meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
       <title> Give & Sm:)e | Login </title>
   
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="../css/query.css">
       <link rel="stylesheet" href="../css/style.css">
 
</head>
<body>
<div class="container-fluid">
    <div class="card">
    <article class="card-body">
    <h4 class="card-title mb-4 mt-1">Sign in</h4>
        <form method="post">            
            <div class="form-group">
                <label>Username</label>
                <input name="name" class="form-control" placeholder="Username" type="text" required>
            </div> <!-- form-group// -->
            <div class="form-group">
                <label>Password</label>
                <input name="password" class="form-control" placeholder="******" type="password" required>
            </div> <!-- form-group// --> 
            <div class="form-group"> 
            <div class="checkbox">
            <label> <input type="checkbox"> Save password </label>
            </div> <!-- checkbox .// -->
            </div> <!-- form-group// -->  
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block"> Login  </button>
            </div> <!-- form-group//-->                                                            
        </form>
    </article>
    <p class="alert alert-danger" role="alert">
        <?php echo ($msg) ?>
    </p>
    </div> <!-- card.// -->
</div>
</body>
</html>


