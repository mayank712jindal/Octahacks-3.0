<?php
	include_once("../php/connection.php");
	$inputName = $_GET["inputName"];
	$inputContact = $_GET["inputContact"];
	$banking = $_GET["banking"];
	$inputAge = $_GET["inputAge"];
	$inputRequirement = $_GET["inputRequirement"];
	$inputSomething = $_GET["inputSomething"];
	$query = "INSERT into bank values ('$inputName','$inputContact','$banking','$inputAge','$inputRequirement','$inputSomething')";
	mysqli_query($dbCon, $query);
	$err = mysqli_error($dbCon);
	if ($err == "") echo "BANK";
	else echo $err;
?>