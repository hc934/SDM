<?php
include("configure.php");
include("connect_db.php");

$sql = "SELECT * FROM Comments";

//$rs = mysql_query($sql, $link);
$rs = mysqli_query($link,$sql);
$array = [];
while($rs1 = mysqli_fetch_array($rs)){
	array_push($array, $rs1);
}
print_r(json_encode($array));
?>	