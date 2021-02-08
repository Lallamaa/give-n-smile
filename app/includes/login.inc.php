<?php
// call the login() function if register button is clicked
if (isset($_POST['login'])) {
  login();
}

// Login user
function login() {
  global $conn, $username, $errors;

  // grap from values
  $username = e($_POST['username']);
  $password = e($_POST['password']);

  // attempt login if no error on form
  if (count($errors)==0) {

    $query = "SELECT * FROM users WHERE user_name"
  }
}