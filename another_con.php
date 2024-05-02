<?php
$server = 'localhost';
$usernamee = 'root';
$pass = '';
$dbname = 'blog_app';

$conn2 = mysqli_connect($server, $usernamee, $pass, $dbname);

if(!$conn2){
    echo "<h3>There is no database connection!</h3>";
  }

 
?>