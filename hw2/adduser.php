<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Discussion Board</title>
</head>
<body>
<div>Hello</div> -->
<?php
include("configure.php");
include("connect_db.php");

// $content_type_args = explode(';', $_SERVER['CONTENT_TYPE']);
// if ($content_type_args[0] == 'application/json')
//	$_POST = json_decode(file_get_contents('php://input'),true);

//$json = '{"usr_id":"3","usr_name":"aaa","realname":"Apple","dept":"csie","gradyr":"2005"}';
//print_r($_POST['usr_id']);
//$decode = json_decode($_POST);
$decode = json_decode(file_get_contents('php://input'));
$id = mysql_real_escape_string($decode->usr_id);
$name = mysql_real_escape_string($decode->usr_name);
$realname = mysql_real_escape_string($decode->realname);
$dept = mysql_real_escape_string($decode->dept);
$gradyr = mysql_real_escape_string($decode->gradyr);

$sql = "INSERT INTO Alumnus (usr_id,usr_name,realname,dept,gradyr)";
//$sql .= "VALUES ($id,'$name','$realname','$dept','$gradyr')";
$sql .= "VALUES ($id,'$name','$realname','$dept','$gradyr')";

if (!mysql_query($sql, $link)) {
    die('Error: ' . mysql_error());
    $arr = array('error' => mysql_error());
    $jsn = $json_encode($arr);
    print_r($jsn);
} else {
    echo "Comment added";
}

// $sql = "SELECT * from Alumnus WHERE usr_id = 1";
// $rs = mysql_query($sql, $link);

// $rs1 = mysql_fetch_array($rs);
// echo "AAAAAAAA<br>";
// echo "My name is: ";
// print_r($rs1);

?>	
<!-- </body>
</html> -->
