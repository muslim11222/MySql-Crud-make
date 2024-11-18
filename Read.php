<?php  

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mydatabase';

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    echo $connection->connect_error; // Corrected variable name
}

    $sql = "SELECT * FROM student";
    
    $result = $connection->query($sql);

     if($result->num_rows > 0) {
        while($row = $result->fetch_assoc() ) {

          echo $row['id']. '' .$row['firstname']. ' ' .$row['lastname']. ' ' .$row['email'];
     }


    } else {
     echo 'error';
    }

$connection->close();
?>
