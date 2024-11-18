<?php  

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mydatabase';

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    echo $connection->connect_error; // Corrected variable name
}

  

  $sql = "DELETE FROM student WHERE id = 1";

 if($connection->query($sql) == TRUE) {
     echo 'Deleted';
 } else {
     echo 'Failed to delete';
 }

$connection->close();
?>
