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



$sql = "CREATE TABLE student (
    id INT(10) AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(255), 
    lastname VARCHAR(255), 
    email VARCHAR(255)
)";

if ($connection->query($sql) === true) {
    echo 'Table "student" created successfully'; // Clear success message
} else {
    echo 'Error creating table: ' . $connection->error; // Show error details
}



$connection->close();
?>
