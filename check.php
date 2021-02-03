<?php
include("config/config.php");
$username=$_GET["username"];
$sql="select * from users where name='$username'";
$result=mysql_query($sql);
$arr=mysql_num_rows($result);
//echo $username;
if($arr=="")
{
	echo 1;
}
else
{
	echo 0;
}
?>
