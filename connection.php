<?php
$servername = "localhost"; //replace it with your database server name
$username = "root";  //replace it with your database username
$password = "1803076312";  //replace it with your database password
$dbname = "hastane";
@mysqli_query("SET NAMES 'utf8'");
@mysqli_query("SET CHARACTER SET utf8");
@mysqli_query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
// Create connection
$conn = @mysqli_connect($servername, $username, $password, $dbname);
// Check connection


if (!$conn) {
    die("Connection failed: " . @mysqli_connect_error());
}
?>