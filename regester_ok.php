<?php
session_start();
header("content-type:text/html;charset=utf-8");
include("config/config.php");
$username=trim($_POST["username"]);
$username=htmlspecialchars(str_replace(" ","",$username));
$psw=trim($_POST["psw"]);
$psw=htmlspecialchars(str_replace(" ","",$psw));
$psw2=$_POST["psw2"];
$yzm=$_POST["yzm"];
$sql="select * from users where name='$username'";
$arr=query($sql);
//验证注册信息是否为空
check_regesternull($username,$psw,$psw2,$yzm);
if(count($arr)>0) //验证数据库是否有这个用户
{
  header("location:regester.php?flag=usernameHave");
  exit();
}
//判断密码的长度以及强度
if(strlen($psw)<3 || strlen($psw)>=16)
{
  header("location:regester.php?flag=pswfall");
  exit();
}
//两次输入的密码是否一致
	if($psw2!=$psw)
	{
	  header("location:regester.php?flag=psw2fall");
	  exit();
	}
//判断验证码是否一致
if($yzm!=$_SESSION["se"])
{
  header("location:regester.php?flag=yzmnopass");
  exit();
}
//插入到数据库中
$psw=md5($_POST["psw"]);
$sql="insert into users(name,psw) values('$username','$psw')";
$res=non_query($sql);
if($res)
{
	echo "<script>alert('注册成功');location='login.php';</script>";
}else
{
	echo "<script>alert('注册失败');location='regester.php';</script>";
}
//关闭数据库连接
close($conn);
?>
