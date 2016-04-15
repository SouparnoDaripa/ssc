<?php
include('../db_con.php');
	header("Content-Type: application/json");
	$jsonData = '{';
	$sql = "SELECT * from events order by id desc";
    $query = mysqli_query($db_conx, $sql);
	while($row = mysqli_fetch_array($query)){
			$jsonData .= '"event'.$row[0].'":{ "num": "'.$row[0].'", "name": "'.$row[1].'"},';
	}
	$jsonData = chop($jsonData, ",");
	$jsonData .= '}';
	echo $jsonData;
?>