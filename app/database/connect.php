<?php
  session_start();

  $dbhost = 'remotemysql.com';
  $dbuser = 'SFPyG7VYOT';
  $dbpass = 'R40eEhD49P';
  $dbname = 'SFPyG7VYOT';

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if ($conn->connect_error) {
    die('Database connection error' . $conn->connect_error);
  } else {
    echo "Databse connection successful";
  }

?>