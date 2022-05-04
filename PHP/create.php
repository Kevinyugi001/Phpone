<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "Students";
//create a connetion
$conn = new mysqli($servername, $username, $password, $database);

//check conn

if ($conn->connect_error){
    die("connection Failed: ".$conn->connect_error);
}
echo "connection Successful";

//creating a database
$sql = "CREATE DATABASE winnie";
if ($conn->query($sql) == TRUE){
echo "database created successfully";
} else {
echo "error creating Database" .$conn->error;
}
$conn->close();
?>
