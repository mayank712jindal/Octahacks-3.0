<?php
	include_once("../php/connection.php");
	$inputName = $_GET["inputName"];
	$inputContact = $_GET["inputContact"];
	$insurance = $_GET["insurance"];
	$inputSomething = $_GET["inputSomething"];
	$query = "INSERT into insurance values ('$inputName','$inputContact','$insurance','$inputSomething')";
	mysqli_query($dbCon, $query);
	$err = mysqli_error($dbCon);
	if ($err == "") echo "INSURANCE";
	else echo $err;
?>