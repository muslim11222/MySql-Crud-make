<?php 

  $hostname = 'localhost';
  $username = 'root';
  $password = '';


  $connection = new mysqli(  $hostname,   $username,   $password);

  if ($connection->connect_error) {
     echo $connnection->connect_error;
  }



  $sql = "CREATE DATABASE mydatabase";

  if($connection->query($sql) == true) {
     echo 'create database ';
  } else {
     echo 'not created database';
  }



$connection->close();
?>