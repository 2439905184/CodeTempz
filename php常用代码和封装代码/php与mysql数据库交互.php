<?php

header("Content-Type: text/html; charset=utf-8");

#echo "连接成功";

	$servername = "localhost";
	$username = "xxx";
	$password = "xxx";
  $conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	echo "连接失败";
    die("连接失败: " . $conn->connect_error);
}
else
{
	echo "连接成功";
	echo "账号";
	echo $_POST["account"];
	echo "密码";
	echo $_POST["pwd"];
	mysqli_select_db($conn,"sfydb_6411555");
	$sql="";
	#mysqli_query($conn,$sql);
}
?>
