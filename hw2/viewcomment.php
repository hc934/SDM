<?
include("configure.php");
include("connect_db.php");

$sql = "SELECT * FROM Comments";

$rs = mysql_query($sql, $link);
$array = [];
while($rs1 = mysql_fetch_array($rs)){
	array_push($array, $rs1);
}
print_r(json_encode($array));
?>	