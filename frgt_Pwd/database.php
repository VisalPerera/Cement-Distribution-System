<?php
$servername = "localhost";//server name
$username = "root";//username
$password = "";//password
$dbname = "cement";//database

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){//if connection faild
	die("Connection Failed" . $conn->connect_error);
}
?>