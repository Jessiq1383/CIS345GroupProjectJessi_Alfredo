<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "student_system";
$conn = new mysqli($servername, $username, $password, $db_name, 4306);

if ($conn->connect_error) {
	die("connection failed:" .$conn->connect_error);

}

echo "";

?>