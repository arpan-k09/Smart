<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['username'];
$password = $_POST['pass'];

$sql = "SELECT * FROM user WHERE email='".$name."' AND pass='".$password."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    //header('Location: http://localhost/new/signup.html');
    echo "hii";
} else {
    echo "0 results";
}
$conn->close();


?>