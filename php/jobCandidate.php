<?php
	include_once("../php/connection.php");
	$cname = $_GET["cname"];
	$phone = $_GET["phone"];
	$email = $_GET["email"];
	$dob = $_GET["dob"];
	$gender = $_GET["gender"];
	$qualification = $_GET["qualification"];
	$coursename = $_GET["coursename"];
	$year = $_GET["year"];
	$uni = $_GET["uni"];
	$per = $_GET["per"];
	$compExp = $_GET["compExp"];
	$exp = $_GET["exp"];
	$city = $_GET["city"];
	$hno = $_GET["hno"];
	$area = $_GET["area"];
	$land = $_GET["land"];
	$query = "INSERT into candidates values ('$cname','$phone','$email','$dob','$gender','$qualification','$coursename','$year','$uni','$per','$compExp','$exp','$city','$hno','$area','$land')";
	mysqli_query($dbCon, $query);
	$err = mysqli_error($dbCon);
	if ($err == "") echo "CANDIDATE";
	else echo $err;
?>