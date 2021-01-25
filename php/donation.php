<?php
	include_once("../php/connection.php");
	$inputName = $_GET["inputName"];
	$inputContact = $_GET["inputContact"];
	$donate = $_GET["donate"];
	$inputAddress = $_GET["inputAddress"];
	$inputSomething = $_GET["inputSomething"];
	$query = "INSERT into donation values ('$inputName','$inputContact','$donate','$inputAddress','$inputSomething')";
	mysqli_query($dbCon, $query);
	$err = mysqli_error($dbCon);
	if ($err == "") echo "DONATION";
	else echo $err;
?>