<?php
	include_once("../php/connection.php");
	$inputName = $_GET["inputName"];
	$inputContact = $_GET["inputContact"];
	$property = $_GET["property"];
	$inputRequirement = $_GET["inputRequirement"];
	$inputSomething = $_GET["inputSomething"];
	$query = "INSERT into property values ('$inputName','$inputContact','$property','$inputRequirement','$inputSomething')";
	mysqli_query($dbCon, $query);
	$err = mysqli_error($dbCon);
	if ($err == "") echo "PROPERTY";
	else echo $err;
?>