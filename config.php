<?php
//conexção com o mysql
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//utilizei a porta 3307 no XAMPP porque o MySQL estava usando a 3306
$hostname = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "login";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>