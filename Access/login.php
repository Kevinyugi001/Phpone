<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "simplycoding";
function connect_db() {
$conn = new mysqli($servername, $username, $password, $database);
if(mysqli_connect_error($conn) !== null) {
    die("connection Failed: ".$conn->connect_error);
}
$conn -> select_db($sql_database);
return $conn;
?>
