<?php
include("configure.php");
include("connect_db.php");

$sql = "SELECT * FROM issues";
//$rs = mysql_query($sql, $link);
$rs = mysqli_query($link,$sql);
//$rs1 = mysql_fetch_array($rs);
$array = [];
while($rs1 = mysqli_fetch_array($rs)){
	//print_r($rs1);
	//echo json_encode($rs1);
	//array_push($array, json_encode($rs1));
	array_push($array, $rs1);
}
print_r(json_encode($array));
?>	