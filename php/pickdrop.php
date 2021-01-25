<?php
	include_once("../php/connection.php");
	$inputName = $_GET["inputName"];
	$inputContact = $_GET["inputContact"];
	$inputPickup = $_GET["inputPickup"];
	$inputDelivery = $_GET["inputDelivery"];
	$inputSuggestion = $_GET["inputSuggestion"];
	$query = "INSERT into pickdrop values ('$inputName','$inputContact','$inputPickup','$inputDelivery', '$inputSuggestion')";
	mysqli_query($dbCon, $query);
	$err = mysqli_error($dbCon);
	if ($err == "") echo "PICKDROP";
	else echo $err;
?>