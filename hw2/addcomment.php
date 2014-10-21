<?
include("configure.php");
include("connect_db.php");

$decode = json_decode(file_get_contents('php://input'));
$comments_id = mysql_real_escape_string($decode->comments_id);
$content = mysql_real_escape_string($decode->content);
$timestamp = mysql_real_escape_string($decode->timestamp);
$usrname = mysql_real_escape_string($decode->usrname);
$issue_id = mysql_real_escape_string($decode->issue_id);
echo $timestamp;
$sql = "INSERT INTO Comments (comments_id,content,time,usrname,issue_id)";
$sql .= "VALUES ($comments_id,'$content','$timestamp','$usrname',$issue_id)";

if (!mysql_query($sql, $link)) {
    die('Error: ' . mysql_error());
    $arr = array('error' => mysql_error());
    //$jsn = $json_encode($arr);
    //print_r($jsn);
} else {
    echo "Comment added";
}

?>	