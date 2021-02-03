<?php
session_start();
header("content-type:text/html;charset=utf-8");
include("config/config.php");
$yzm=$_POST["yzm"];
if($_SESSION["se"]==$yzm) //判断验证码是否输入正确
{
	$check=$_POST["check"];
	$name=$_POST["username"];
	$psw=md5($_POST["psw"]);
	$sql="select * from users where name='$name' and psw='$psw'";
	$arr=query($sql);
	//var_dump($arr);
	//exit();
	/*$res=mysql_query($sql);
	$arr=mysql_num_rows($res);*/
	if($arr) //判断数据库中的用户名和密码与输入的是否正确
	{
		$_SESSION["username"]=$name;
		if($check==1) //如果选中了记住一周，则创建一个cookie用来记录用户名和密码
		{
			setcookie("username",$name,time()+7*24*3600);
			setcookie("psw",$psw,time()+7*24*3600);
		}
		echo "<script>alert('登录成功');location='index.php'</script>";
			
	}
	else
	{
		echo "<script>alert('登录失败');location='login.php'</script>";	
	}
}
else
{
	header("location:login.php?flag=yzmps");	
}
?>