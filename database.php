<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_dormies";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>