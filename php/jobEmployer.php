<?php
	include_once("../php/connection.php");
	$ename = $_GET["ename"];
	$emailE = $_GET["emailE"];
	$phoneE = $_GET["phoneE"];
	$bname = $_GET["bname"];
	$typeofjob = $_GET["typeofjob"];
	$noofcanditates = $_GET["noofcanditates"];
	$query = "INSERT into employers values ('$ename', '$emailE', '$phoneE', '$bname', '$typeofjob', '$noofcanditates')";
	mysqli_query($dbCon, $query);
	$err = mysqli_error($dbCon);
	if ($err == "") echo "EMPLOYER";
	else echo $err;
?>