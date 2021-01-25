<?php
	include_once("../php/connection.php");
	$inputName = $_GET["inputName"];
	$inputContact = $_GET["inputContact"];
	$bill = $_GET["bill"];
	$inputSomething = $_GET["inputSomething"];
	$query = "INSERT into bill values ('$inputName','$inputContact','$bill','$inputSomething')";
	mysqli_query($dbCon, $query);
	$err = mysqli_error($dbCon);
	if ($err == "") echo "BILLS";
	else echo $err;
?>