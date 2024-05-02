<?php

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db_name = 'blog_app';

  $conn = new mysqli($host, $user, $pass, $db_name);

  if($conn->connect_error){
    die('Data error: ' . $conn->connect_error);
  } else {
    echo "Db connection successful!";
  }
?>