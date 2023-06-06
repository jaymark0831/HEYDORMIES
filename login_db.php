<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "login_dormies";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn){
		die("Something went wrong;");
	}


?>