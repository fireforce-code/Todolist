<?php
$servername="localhost";
$username="username";
$password="password";
$dbname="todolists";

// Creating connection
$dbConn = mysqli_connect($servername, $username, $password, $dbname);
// Checking connection
if(!$dbConn) {
	die("Connection failed: ". mysqli_connect_error());
} // else {echo "Connected successfully...!";}

?>
