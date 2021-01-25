<?php
	include_once("../php/connection.php");
	$inputName = $_GET["inputName"];
	$inputContact = $_GET["inputContact"];
	$service = $_GET["service"];
	$inputRequirement = $_GET["inputRequirement"];
	$inputSomething = $_GET["inputSomething"];
	$query = "INSERT into business values ('$inputName','$inputContact','$service','$inputRequirement','$inputSomething')";
	mysqli_query($dbCon, $query);
	$err = mysqli_error($dbCon);
	if ($err == "") echo "BUSINESS";
	else echo $err;
?>