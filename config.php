<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
 die("Connection Failed".mysqli_connect_error());
}
?>