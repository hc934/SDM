<?php
include("configure.php");
include("connect_db.php");

$decode = json_decode(file_get_contents('php://input'));
$issue_id = mysqli_real_escape_string($link,$decode->issue_id);
$issue_name = mysqli_real_escape_string($link,$decode->issue_name);
$usrname = mysqli_real_escape_string($link,$decode->usrname);

$sql = "INSERT INTO ISSUES (issue_id,issue_name,usrname)";
$sql .= "VALUES ($issue_id,'$issue_name','$usrname')";

//if (!mysql_query($sql, $link)) {
if (!mysqli_query($link, $sql)) {
    die('Error: ' . mysqli_error());
    $arr = array('error' => mysqli_error());
    // $jsn = $json_encode($arr);
    // print_r($jsn);
} else {
    echo "added";
}

?>	