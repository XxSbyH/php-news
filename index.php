<?php
session_start();
if(!isset($_SESSION["username"])) //如果是输入网址进入主页的，则跳回到登录界面
{
	header("location:login.php");

}
if(isset($_GET["sessiondes"]))
{
	if($_GET["sessiondes"]=="sessiondes")
	{
		session_destroy(); //清除当前的session;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="jedate/jedate.min.js"></script>
<script>
window.onload=function()
{
	 jeDate.skin('green');
	 jeDate({

		dateCell:"#datetime",
		format:"YYYY-MM-DD",
		isinitVal:true,
		//isTime:true, //isClear:false,
		minDate:"2014-09-19",
		//okfun:function(val){alert(val)}
	})
	//点击单选按钮，显示或隐藏两个文本框中的一个
	//1、获取两个单选按钮，两个文本框
	var radio1=document.getElementById('radio1');
	var radio2=document.getElementById('radio2');
	var content=document.getElementById('content');
	var datetime=document.getElementById('datetime');
	//2、默认隐藏日历文本框
	datetime.style.display='none';
	//3、点击第二个单选按钮，显示日历文本框，隐藏新闻内容文本框
	radio2.onclick=function()
	{
		datetime.style.display='inline';
		content.style.display='none';
	}
	//4、点击第一个单选按钮，隐藏日历文本框，显示新闻内容文本框
	radio1.onclick=function()
	{
		datetime.style.display='none';
		content.style.display='inline';
	}
	//下面显示动态大图
	var img=document.getElementsByTagName('img');
	var div1=document.getElementById('div1');
	for(var i=0;i<img.length;i++)
	{
		img[i].onmousemove=function(ev)
		{
			var oEvent=ev||event;
			div1.innerHTML="<img src='"+this.src+"' width='400' />";
			div1.style.position="absolute";
			div1.style.left=oEvent.clientX+"px";
			div1.style.top=oEvent.clientY+"px";
		}

		img[i].onmouseout=function()
		{
			div1.innerHTML="";
		}
	}
}
</script>
</head>

<body>
<font size="4">【<?php echo $_SESSION["username"]?>】欢迎登录新闻管理系统</font>
<a href="login.php?flag=sessiondes">退出登录</a>
<div id="div1"></div>
<form id="form1" name="form1" method="post" action="">
  <p>
    <input type="radio" name="querycontent" id="radio1" value="1" checked="checked"/>
    按照新闻标题查询
    <input type="radio" name="querycontent" id="radio2" value="2" />
    按照发布日期查询
  </p>
  <p>
    <input type="text" name="content" id="content"  />
    <input type="text" name="datetime" id="datetime" placeholder="请选择新闻发布日期"  />

    <input type="submit" name="button" id="button" value="查询" />
  </p>
</form>
<p>
<?php
require_once("config/config.php");
$pageSize=10;
$pageNow=1;//如果不是通过点击分页号进入的，默认第一页
if($_GET["pageNow"]) //如果是通过点击分页号进入的，就进入当前页
{
	$pageNow=$_GET["pageNow"];
}
if(!isset($_REQUEST["content"]) && !isset($_REQUEST["datetime"]))
{

	$sql="select * from news_tb order by datetime desc limit ".($pageNow-1)*$pageSize.",$pageSize";
}
else  //点击了“查询”
{
	if($_REQUEST["querycontent"]==1)//按标题查询
	{
		$content=$_REQUEST["content"];
		$sql="select * from news_tb where title like '%{$content}%' order by datetime desc limit ".($pageNow-1)*$pageSize.",$pageSize";
	}
	else  //按日期查询
	{
		$datetime=$_REQUEST["datetime"];
		$sql="select * from news_tb where datetime like '{$datetime}%' order by datetime desc limit ".($pageNow-1)*$pageSize.",$pageSize";
	}
}


$arr=query($sql);  //调用query函数，传入一个SQL查询语句，得到一个结果，此结果是一个二维数组
if($arr)
{
	echo "<table id='mytable' width='600' border='1' cellspacing='0' cellpadding='0'>
	  <tr>
		<td>序号</td>
		<td>标题</td>
		<td>图片</td>
		<td>发布日期</td>
		<td colspan='2'>操作</td>
	  </tr>";
	$i=0;
	foreach($arr as $row)
	{
		$i++;
		echo "<tr>
		<td>{$i}</td>
		<td><a href='news_show.php?newsid={$row["newsid"]}'>{$row["title"]}</a></td>
		<td>";
		if($row["picpath"]!=null)
		{
			echo "<img src='upload_pic/{$row["picpath"]}' width='100' name='img'/>";
		}
		else
		{
			echo "暂无图片";
		}
		echo "</td>
		<td>{$row["datetime"]}</td>
		<td><a href='addOrmodify.php?newsid={$row["newsid"]}&flag=modify'>修改</a></td>
		<td>
		<a href='delete.php?newsid={$row["newsid"]}' onclick='return confirm(\"您确认要删除吗？\");'>删除
		</a>
		</td>
		</tr>";
	}
	echo "</table>";
}
else
{
	echo "没有符合查询要求的新闻！";
}
//下面根据不同的条件查询记录条数
if(!isset($_REQUEST["content"]) && !isset($_REQUEST["datetime"]))
{
	$sql="select count(*) as recordNums from news_tb";
}
else
{
	if($_REQUEST["querycontent"]==1)
	{
		$content=$_REQUEST["content"];
		$sql="select count(*) as recordNums from news_tb where title like '%".$content."%'";
	}
	else
	{
		$datetime=$_REQUEST["datetime"];
		$sql="select count(*) as recordNums from news_tb where datetime like '%".$datetime."%'";
	}
}
//echo $sql;
$arr=query($sql);
$recordsCount=$arr[0]["recordNums"];
if($recordsCount>0)//如果有记录才显示分页页码
{
	$pageTotal=ceil($recordsCount/$pageSize);
	if(!isset($_REQUEST["content"]) && !isset($_REQUEST["datetime"]))
	{
		for($i=1;$i<=$pageTotal;$i++)
		{
			echo "<a href='index.php?pageNow={$i}'>【{$i}】 </a>";
			if($i % 5==0){echo "<br />";}
		}
	}
	else
	{
		if($_REQUEST["querycontent"]==1)
		{
			$content=$_REQUEST["content"];
			for($i=1;$i<=$pageTotal;$i++)
			{
				echo "<a href='index.php?pageNow={$i}&content=$content&querycontent=$querycontent'>【{$i}】 </a>";
				if($i % 5==0){echo "<br />";}
			}
		}
		else
		{
			$datetime=$_REQUEST["datetime"];
			for($i=1;$i<=$pageTotal;$i++)
			{
				echo "<a href='index.php?pageNow={$i}&datetime=$datetime&querycontent=$querycontent'>【{$i}】 </a>";
				if($i % 5==0){echo "<br />";}
			}
		}
	}
}
close_conn($conn);
?>

<p>
<br />
<a href="addOrmodify.php?flag=add">添加新闻</a>
</body>
</html>
