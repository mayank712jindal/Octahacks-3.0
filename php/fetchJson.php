<?php
    include_once("../php/connection.php");
    $phone = $_GET["phone"];
    $query = "SELECT * from users where phone='$phone'";
    $table = mysqli_query($dbCon,$query);
    $arr = array();
    while($row = mysqli_fetch_array($table)) {
        $arr[] = $row;
    }
    echo json_encode($arr);
?>