<?php
  function pr($arr) {
    echo '<pre>';
    print_r($arr);
  }

  function prx($arr) {
    echo '<pre>';
    print_r($arr);
    die();
  }

  function check_login($conn)
  {
    if(isset($_SESSION['user_id'])) /*check if is user_name*/
    {
      $id = $_SESSION['user_id'];
      $query = "select * from users where user_id = '$id' limit 1";

      $result = mysqli_query($conn, $query);
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysqli_fetch_assoc($result);
        return $user_data;
      }
    }
    //redirect to login page
    header("Location: login.php");
    die;
  }

  //signup
  function random_num($length) {
    $text = "";
    if($length < 5){
      $length = 5;
    }
    $len = rand(4,$length);
    for($i=0; $i<$len; $i++){
      $text .= rand(0,9);
    }
    return $text;
  }

?>