<?php
	include_once("../php/connection.php");
	$name = $_GET["name"];
	$phone = $_GET["phone"];
	$email = $_GET["email"];
	$pass = $_GET["pass"];
	$address = $_GET["address"];
	$query = "INSERT into users values ('$name', '$phone', '$email', '$pass', '$address')";
	mysqli_query($dbCon, $query);
	$err = mysqli_error($dbCon);
	if ($err == "") echo "REGISTERED";
	else echo $err;
?>