<?php
	session_start();
	include_once("../php/connection.php");
	$phone = $_GET["phonein"];
	$your_pass = $_GET["your_pass"];
	$query = "SELECT * from users where phone='$phone' and pass='$your_pass'";
	$row = mysqli_query($dbCon, $query);
	if(mysqli_num_rows($row) == 1) {
		echo "VALID";
		$_SESSION["activeuser"] = $phone;
	}
	else echo "INVALID USER";
?>