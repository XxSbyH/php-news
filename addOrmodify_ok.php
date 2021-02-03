<?php
header("content-type:text/html;charset=utf-8");
require_once("config/config.php");
$flag=$_GET["flag"];
$title=$_POST["title"];
$content=$_POST["content"];

$newsid=$_GET["newsid"];

$pos1=strpos($content,'src=\"');
$pos2=strpos($content,'style=\"');
$imgUrl=substr($content,$pos1,$pos2-$pos1);
$pos3=strrpos($imgUrl,'upload_pic')+11;
$pos4=strrpos($imgUrl,'"')-1;
$picpath=substr($imgUrl,$pos3,$pos4-$pos3);

date_default_timezone_set("PRC");//设置时区
$datetime=date("Y-m-d H:i:s");//获取新闻发布日期和时间

if(!empty($title) && !empty($content)) //如果新闻标题和新闻内容都不为空，才提交数据库
{
	if($flag=="modify")
	{
		$sql="update news_tb set title='$title',content='$content',picpath='$picpath',datetime='$datetime' where newsid=$newsid";	
	}
	else
	{
		$sql="insert into news_tb(title,content,picpath,datetime) values('$title','$content','$picpath','$datetime')";
	}
	$res=non_query($sql);
	if($res)
	{
		if($flag=="modify")
		{
			echo "<script>alert('新闻修改成功！');location='index.php';</script>";	
		}
		else
		{
			echo "<script>alert('新闻添加成功！');location='index.php';</script>";	
		}
	}
	else
	{
		if($flag="modify")
		{
			echo "<script>alert('新闻修改失败！');history.back();</script>";
		}
		else
		{
			echo "<script>alert('新闻添加失败！');history.back();</script>";
		}	
		exit();
	}
}
else
{
	echo "<script>alert('新闻标题和新闻内容都必填！');history.back();</script>"	;
	exit();
}
close_conn($conn);
?>