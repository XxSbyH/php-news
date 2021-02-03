<?php
if(isset($_GET["flag"]))
{
	if($_GET["flag"]=="delete")
	{
		setcookie("username",$username,time()-1);
		setcookie("psw",$psw,time()-1);	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script>
window.onload=function()
{
	var username=document.getElementById("username");
	var psw=document.getElementById("psw");
	var yzm=document.getElementById("yzm");
	var us=document.getElementById("us");
	var ps=document.getElementById("ps");
	username.focus();
	username.onblur=function()
	{
		if(username.value=="")
		{
			us.innerHTML="<font color='red'>用户名不能为空</font>";
			this.focus();	
		}
		else
		{
			us.innerHTML="";	
		}
	}
	psw.onblur=function()
	{
		if(psw.value=="")
		{
			ps.innerHTML="<font color='red'>用户名不能为空</font>";
			this.focus();	
		}
		else
		{
			ps.innerHTML="";	
		}
	}
	
	form1.onsubmit=function()
	{
		if(username.value=="")
		{
			return false;
		}
		if(psw.value=="")
		{
			return false;
		}
		if(yzm.value=="")
		{
			return false;	
		}
	}
	
}
</script>
</head>

<body>
<h2>用户登录</h2>
<form action="login_check.php" method="post" enctype="application/x-www-form-urlencoded" name="form1" id="form1">
  <p>用户名:
    <label for="username"></label>
    <input type="text" name="username" id="username" 
    <?php
    if(isset($_COOKIE["username"]))
	{
	?>
    value="<?php echo $_COOKIE["username"]?>" 
    <?php
	}
	?>
    />
    <span id="us"></span>
  </p>
  <p>密　码: 
    <label for="psw"></label>
    <input type="password" name="psw" id="psw" 
    <?php
    if(isset($_COOKIE["psw"]))
	{
	?>
    value="<?php echo $_COOKIE["psw"]?>"
    <?php 
	}
	?>
    />
    <span id="ps"></span>
  </p>
  <p>验证码:
    <label for="yzm"></label>
    <input type="text" name="yzm" id="yzm" />
    <img src="img.php" onclick="this.src='img.php?nu='+new Date().getTime();" id="yzmimg"/>
      <a href="javascript:void(0)" onclick="document.getElementById('yzmimg').src='img.php?nu='+new Date().getTime();">看不清,换一张</a>
      <?php
      if(isset($_GET["flag"]))
	  {
		if($_GET["flag"]=="yzmps")
		{
			echo "<font color='red'>验证码错误</font>";	
		}
	  }
	  ?>
  </p>
  <p>
    <input type="checkbox" name="check" id="check" value="1"/>
    <label for="check"></label>
  记住一周
  
  <a href="login.php?flag=delete">不再记住</a></p>
  <p>
    <input type="submit" name="button" id="button" value="提交" />
    <input type="reset" name="button2" id="button2" value="重置" />
  </p>
</form>
<a href="regester.php">立即注册</a>
</body>
</html>