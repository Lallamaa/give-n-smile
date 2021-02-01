<?php

  // define('ROOT_PATH', 'dirname(dirname(__FILE__))');
  // // define(ROOT_PATH, "https://remotemysql.com");
  
  // // if($_SERVER['HTTP_HOST'] == "localhost"){
  //   define('BASE_URL', "https://$_SERVER[HTTP_HOST]/fyp");
  // // } else {
  // //   define('BASE_URL', "https://$_SERVER[HTTP_HOST]");
  // // }

  if ($_SERVER['SERVER_NAME'] == 'localhost') {  
      define("BASE_URL","/fyp/");
      define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/fyp/");
  } else {
      define("BASE_URL","/web/server/root/path/");
      define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/web/server/root/path/");
  }
?>