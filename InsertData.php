<?php  

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mydatabase';

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    echo $connection->connect_error; // Corrected variable name
    exit; // Stop further execution if connection fails
}



$sql = "INSERT INTO student (firstname, lastname, email)
         VALUES('muslim', 'khan', 'khan@gmail.com')";



   if($connection->query($sql) == true) {
     echo "Successfully";
   } else {
     echo 'not found';
   }




$connection->close();
?>
