<?php
	include_once("../php/connection.php");
	$inputName = $_GET["inputName"];
	$inputContact = $_GET["inputContact"];
	$ticket = $_GET["ticket"];
	$inputSomethingnew = $_GET["inputSomethingnew"];
	$inputSomething = $_GET["inputSomething"];
	$query = "INSERT into tickets values ('$inputName','$inputContact','$ticket','$inputSomethingnew','$inputSomething')";
	mysqli_query($dbCon, $query);
	$err = mysqli_error($dbCon);
	if ($err == "") echo "TICKETS";
	else echo $err;
?>