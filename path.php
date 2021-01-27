<?php

  define('ROOT_PATH', 'dirname(dirname(__FILE__))');
  // define(ROOT_PATH, "https://remotemysql.com");
  
  if($_SERVER['HTTP_HOST'] == "localhost"){
    define('BASE_URL', "https://$_SERVER[HTTP_HOST]/fyp");
  } else {
    define('BASE_URL', "https://$_SERVER[HTTP_HOST]");
  }


?>