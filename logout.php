<?php
  SESSION_START();

  if(isset($_SESSION['users'])){
    unset($_SESSION['users']);
  }

  SESSION_DESTROY();
  header("location:index.php");

?>