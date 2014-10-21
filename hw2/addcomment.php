<?php
include("configure.php");
include("connect_db.php");

$decode = json_decode(file_get_contents('php://input'));
$comments_id = mysqli_real_escape_string($link,$decode->comments_id);
$content = mysqli_real_escape_string($link,$decode->content);
$timestamp = mysqli_real_escape_string($link,$decode->timestamp);
$usrname = mysqli_real_escape_string($link,$decode->usrname);
$issue_id = mysqli_real_escape_string($link,$decode->issue_id);
echo $timestamp;
$sql = "INSERT INTO Comments (comments_id,content,time,usrname,issue_id)";
$sql .= "VALUES ($comments_id,'$content','$timestamp','$usrname',$issue_id)";

//if (!mysql_query($sql, $link)) {
if (!mysqli_query($link,$sql)) {
    die('Error: ' . mysqli_error());
    $arr = array('error' => mysqli_error());
    //$jsn = $json_encode($arr);
    //print_r($jsn);
} else {
    echo "Comment added";
}

?>	