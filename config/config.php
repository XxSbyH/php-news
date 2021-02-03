<?php
//读取配置文件
$config=parse_ini_file("config.ini");//结果是一个数组
$host=$config["host"];
$user=$config["user"];
$password=$config["password"];
$database=$config["database"];

$conn=mysqli_connect($host,$user,$password);//连接服务器那边的MYSQL
if(!$conn)
{
	die("连接失败！");
}

$db=mysqli_select_db($link,$database);//选择数据库
if(!$db)
{
	die("数据库不存在！");
}

mysqli_query("set names utf8");//设置编码，防止中文乱码

//--------query函数是自定义的，功能是接收sql查询语句，将查询结果转换为一个二维数组，并返回-----
function query($sql)
{
	$res=mysqli_query($conn,$sql);  //$res是资源类型数据
	while($row=mysqli_fetch_assoc($res))
	{
		$arr[]=$row; //每遍历一行就放到二维数组中
	}
	return $arr;  //将二维数组返回
}

//下面的函数执行删除、添加、修改
function non_query($sql)
{
	$res=mysqli_query($sql);
	if($res)
	{
		return 1;	//执行成功
	}
	else
	{
		return 0;	//执行失败
	}
}

//下面的函数功能：关闭连接
function close_conn($conn)
{
	if($conn)
	{
		mysqli_close($conn);
	}
	else
	{
		die("没有连接");
	}
}

/*
 -----------这是一个上传文件的工具------------
 $filetagname:文件域的名称
 $filefolder：要保存的文件的文件夹的名称
 $filetype：上传的文件类型（1:2:3：）
 $filesize：文件的大小（单位MB）
 */
function upload_file($filetagname,$filefolder,$filetypenum,$filesize)
{
	$myfile=$_FILES[$filetagname];  //结果是一个数组
	//1、判断是否有选择要上传的文件
	if($myfile["tmp_name"]=="")
	{
		echo "<script>alert('您没有选择要上传的文件');history.back();</script>";
		exit();
	}
	//2、判断文件类型
	if($filetypenum==1)//上传图片
	{
		$filetype=array("image/jpeg",
					"image/pjpeg",
					"image/png");
	}
	if($filetypenum==2)//上传视频
	{
		$filetype=array(
					'video/mp4');
	}

	if($filetypenum==3)//上传附件：rar,zip,txt,word,excel,ppt,pdf
	{
		$filetype=array(
			'application/octet-stream',
			'application/zip',
			'application/x-zip-compressed',
			'text/plain',
			'application/msword',
			'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
			'application/vnd.ms-excel',
			'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
			'application/vnd.ms-powerpoint',
			'application/vnd.openxmlformats-officedocument.presentationml.presentation',
			'application/pdf',
		);
	}
	if(!in_array($myfile["type"],$filetype))
	{
		switch($filetypenum)
		{
			case 1:$msg="必须上传jpg或png图片";break;
			case 2:$msg="必须上传mp4视频";break;
			case 3:$msg="必须上传：rar,zip,txt,word,excel,ppt,pdf文件";break;
		}

		echo "<script>alert('文件类型不对！{$msg}');history.back();</script>";
		exit();
	}


	//3判断文件尺寸
	if($myfile["size"]>$filesize*1000*1000)
	{
		echo "<script>alert('文件不能超过{$filesize}MB！');history.back();</script>";
		exit();
	}

	//4、构建存储文件夹和文件名
	if(!file_exists($filefolder)) //如果文件夹不存在
	{
		mkdir($filefolder);	//创建该文件夹
	}

	$fileinfo=pathinfo($myfile["name"]); //结果是一个数组。获取上传的文件名信息（含扩展名）
	$file_ext_name=$fileinfo["extension"];  //获取上传的文件的扩展名
	$filename=time().rand().".{$file_ext_name}";  //构造一个新的文件名

	//5、上传文件
	$ok=move_uploaded_file($myfile["tmp_name"],"{$filefolder}/{$filename}");
	if($ok)
	{
		return $filename;
	}
	else
	{
		return 0;
	}
}
function my_delete($content)
{
	$sty='style="';
	$j=0;
	$char='src="';
	$count=substr_count($content,$char);
	for($i=0;$i<$count;$i++)
	{
		$style=strpos($content,$sty,$style);
		$j=strpos($content,$char,$j);
		$nmsl=substr($content,$j+5,$style-$j-2-5);
		/*$arr[]=$j;
		$arr_o[]=$style;//$arr[0]=5  $arr[1]=75  $arr[2]=145*/
		$j++;
		$style++;
		unlink($nmsl);
	}
}
//判断注册信息是否为空 并给返回值给出相应提示
function check_regesternull($username,$psw,$psw2,$yzm)
{
  if($psw=="" && $username=="" && $yzm=="" && $psw2=="" )
  {
    header("location:regester.php?flag=allnull");
		exit();
  }
  if($username!="" && $psw=="" && $psw2 =="" && $yzm=="")
  {
    header("location:regester.php?flag=namenotnull");
		exit();
  }
  if($username!="" && $psw!="" && $psw2 =="" && $yzm=="")
  {
    header("location:regester.php?flag=namepswnotnull");
		exit();
  }
  if($username!="" && $psw!="" && $psw2 !="" && $yzm=="")
  {
    header("location:regester.php?flag=namepsw2notnull");
		exit();
  }
}

function close($conn) //关闭数据库连接
{
	mysqli_close();
}
?>
