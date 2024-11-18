<?php  

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mydatabase';

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    echo $connection->connect_error; // Corrected variable name
}

    $sql = "UPDATE student SET firstname='rasel', lastname='hasin', email='hasin@gmail.com' WHERE ID=1";


    if ($connection->query($sql) == true) {
     echo 'successfully';
    } else {
     echo 'failed';
    }

$connection->close();
?>
