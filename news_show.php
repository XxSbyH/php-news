<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
require_once("config/config.php");
//接收index.php页面传递过来的newsid的值
$newsid=$_GET["newsid"];
$sql="select * from news_tb where newsid=$newsid";
$arr=query($sql);  //$arr是二维数组,只有第0行  $arr[0]["title"]
$row=$arr[0];  //$row["title"]

echo "{$row['title']}<br />";
echo "发布日期：{$row['datetime']}";
echo "<hr />";
echo "{$row['content']}<br />";
close_conn($conn);
?>
<br/>
<a href="#" onClick="history.back();">返回</a>
</body>
</html>