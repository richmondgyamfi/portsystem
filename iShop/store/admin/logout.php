<?php
  // four step involved in logging OutOfBoundsException

  // 1.  find the sesseion
  session_start();

  //2.  unset all the session variables
  $_SESSION = array();

  //3. destroy the session cookie
  if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), "", time()-42000, '/');
  }

  //4.  Destroy the session
  session_destroy();

  header("Location: ../../signup.php");



 ?>
