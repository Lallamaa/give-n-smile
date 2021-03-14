<?php

    require '../database/connect.php';
    //import your dbconn

    $url = $_POST["photoUrl"];

    $sqlInsertUrl = "INSERT INTO events (event_img) VALUES ( $url )";

    $resultUrl = mysqli_query($conn, $sqlInsertUrl);

    if($resultUrl){

        echo 'success';

    } else{

        echo 'failed';

    }


?>