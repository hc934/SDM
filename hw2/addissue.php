<?
include("configure.php");
include("connect_db.php");

$decode = json_decode(file_get_contents('php://input'));
$issue_id = mysql_real_escape_string($decode->issue_id);
$issue_name = mysql_real_escape_string($decode->issue_name);
$usrname = mysql_real_escape_string($decode->usrname);

$sql = "INSERT INTO ISSUES (issue_id,issue_name,usrname)";
$sql .= "VALUES ($issue_id,'$issue_name','$usrname')";

if (!mysql_query($sql, $link)) {
    die('Error: ' . mysql_error());
    $arr = array('error' => mysql_error());
    // $jsn = $json_encode($arr);
    // print_r($jsn);
} else {
    echo "added";
}

?>	