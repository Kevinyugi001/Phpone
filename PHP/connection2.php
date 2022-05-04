<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "william";
//create a connetion
$conn = new mysqli($servername, $username, $password, $database);

//check conn

if ($conn->connect_error){
    die("connection Failed: ".$conn->connect_error);
}
echo "connection Successful";




