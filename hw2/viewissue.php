<?
include("configure.php");
include("connect_db.php");

// $decode = json_decode(file_get_contents('php://input'));
// $issue_id = mysql_real_escape_string($decode->issue_id);
// $issue_name = mysql_real_escape_string($decode->issue_name);
// $usr_id = mysql_real_escape_string($decode->usr_id);

$sql = "SELECT * FROM Issues";

$rs = mysql_query($sql, $link);
//$rs1 = mysql_fetch_array($rs);
$array = [];
while($rs1 = mysql_fetch_array($rs)){
	//print_r($rs1);
	//echo json_encode($rs1);
	//array_push($array, json_encode($rs1));
	array_push($array, $rs1);
}
print_r(json_encode($array));
?>	