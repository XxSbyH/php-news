<?php
header("content-type:text/html;charset=utf-8");
require_once("config/config.php");
$newsid=$_GET["newsid"];
//下面查询这条新闻的内容，后面从内容里面截取出所有图片路径，从而删除图片
$sql="select content from news_tb where newsid=$newsid";
$res=query($sql);
$content=$res[0]["content"];
//下面开始删除这条新闻
$sql="delete from news_tb where newsid=$newsid";
$res=non_query($sql);
//如果新闻删除成功
if($res==1)
{
	//删除文件（新闻对应的图片）
	$char='src="';
	$count=substr_count($content,$char);
	$j=0;
	for($i=0;$i<$count;$i++)
	{
		$j=strpos($content,$char,$j);  
		$arr[]=$j;   
		$j++;
	}
	
	for($i=0;$i<$count;$i++)
	{
		$other_str=substr($content,$arr[$i]+5);  //每次从src="后面的"u"开始截取剩余的字符串
		$pos=strpos($other_str,'"');  //获取剩余字符串中的第一个双引号的位置
		$picpath=substr($other_str,0,$pos);
		if($picpath!="")
		{
			unlink($picpath);
		}
	}
	
	
	
	echo "<script>alert('删除成功');location='index.php'</script>";	
}
else
{
	echo "<script>alert('删除失败');location='index.php'</script>";		
}
close_conn($conn);
?>