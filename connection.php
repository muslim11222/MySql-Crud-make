<?php 

  $hostname = 'localhost';
  $username = 'root';
  $password = '';


  $connection = new mysqli(  $hostname,   $username,   $password);

  if ($connection->connect_error) {
     echo $connnection->connect_error;
  }
$connection->close();
?>

