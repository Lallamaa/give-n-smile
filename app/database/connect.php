<?php
  $dbhost = 'remotemysql.com';
  $dbuser = 'SFPyG7VYOT';
  $dbpass = 'R40eEhD49P';

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

  if ($conn->connect_error) {
    die('Database connection error' . $conn->connect_error);
  } else {
    echo "Databse connection successful";
  }

?>