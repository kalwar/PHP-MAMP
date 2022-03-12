<?php
echo "Welcome to PHP World ";
echo "</br>";  


// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database user name
$user = 'lionUser';

//database user password
$pass = 'lionPass';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}

?>