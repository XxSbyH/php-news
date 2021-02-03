<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
.xstp
{
	position: absolute;
	top: 108px;
	left: 250px;
}
.div0
{
	display:inline-block;
	width:90px;
	height:6px;
	padding:2px;
}
.div1
{
	display:inline-block;
	width:30px;
	height:6px;
	padding:2px;
	background:red;
}
.div2
{
	display:inline-block;
	width:60px;
	height:6px;
	padding:2px;
	background:orange;
}
.div3
{
	display:inline-block;
	width:90px;
	height:6px;
	padding:2px;
	background:green;
}
</style>
<script>
window.onload=function()
{
	var myimg=document.getElementById("img");
	var usernames=document.getElementById("usernames");
	var username=document.getElementById("username");
	var psws=document.getElementById("psws");
	var psws2=document.getElementById("psws2");
	var div=document.getElementById("div");
	var see=document.getElementById("seepic");
	seepic.style.display="none";
	username.focus();
	img.style.display="none";

	var xhr=null;
	this.onkeydown=function(e) //禁止输入空格
	{
		var oEvent=e || event;
		var key=oEvent.keyCode;
		if(key==32)
		{
			return false;
		}
	}
	username.onkeyup=function()
	{
		check_username();
	}
	username.onblur=function()
	{
		check_username();
	}
	psw.onblur=function()
	{
		check_psw();
		//seepic.style.display="none";
	}
	psw.onkeyup=function()
	{
		check_psw();
	}
	psw.onfocus=function()
	{
		seepic.style.display="inline-block";
		seepic.onclick=function()
		{
			changepsw();
		}

	}
	function changepsw() //显示或隐藏密码
	{
		var show=true;
		if(psw.type=="password")
		{
			psw.type="text";
			seepic.src="images/xs.jpg";
			show=false;
		}
		else {
			psw.type="password";
			seepic.src="images/yc.jpg";
			show=true;
		}
	}
	function check_psw() //判断密码强度及长度
	{
		var len=0;
		var span=["","弱","中","强"];
		if(psw.value!="")
		{
			if(psw.value.length>=4 && psw.value.length<16)
			{
				if(/[0-9]/.test(psw.value))
				{
					len++;
				}
				if(/[a-zA-Z]/.test(psw.value))
				{
					len++;
				}
				if(/[^0-9a-zA-Z]/.test(psw.value))
				{
					len++;
				}
				psws.innerHTML=span[len];
				div.className="div"+len;
			}
			else
			{
				psws.innerHTML="<font color='red'>长度要为4-16位</font>";
				psw.focus();
			}
		}
		else
		{
			div.className="div0";
			psws.innerHTML="";
			psw.focus();
		}
	}
	//判断两次密码是否一致
	psw2.onkeyup=function()
	{
		if(psw2.value==psw.value)
		{
			psws2.innerHTML="<font color='green'>密码一致!</font>";
		}
		else
		{
			psws2.innerHTML="<font color='red'>密码不一致!</font>";
		}
	}
	function check_username()  //用Ajax检测用户名是否存在
	{
		if(username.value!="")
		{
			if(window.XMLHttpRequest)  //有XMLHttpRequest对象
			{
				xhr=new XMLHttpRequest();   //创建Ajax对象
			}
			else
			{
				xhr=new ActiveXObject("Microsoft.XMLHTTP");  //IE6下创建Ajax对象
			}

			xhr.open('get','check.php?username='+encodeURI(username.value),true);

			xhr.send();

			xhr.onreadystatechange=function()
			{
				if(xhr.readyState==4 && xhr.status==200)  // readyState 为Ajax的运行状态 4为服务器端已准备好，客户端可以调用
														  //404 为找不到网页 200为正常
				{

					myimg.style.display="inline-block";
					var t=xhr.responseText;

					if(t==0)
					{
						myimg.src="images/2.png"; //打X
						usernames.innerHTML="用户名已被注册";
						username.focus();
					}
					else
					{
						myimg.src="images/1.png"; //打√
						usernames.innerHTML="用户名可以使用";
					}
				}
			}
		}
		else
		{
			myimg.style.display="none";
			usernames.innerHTML="";
			username.focus();
		}
	}
	//判断用户名或者密码为空
	/*form1.btn_ok.onclick=function()
	{
		if(username.value=="" || psw.value=="")
		{
			alert("帐号或密码为空");
			return false;
		}
	}*/
}
</script>
</head>

<body>
<h2>用户注册</h2>
<form action="regester_ok.php" method="post" name="form1">
  <table width="543" border="1">
  <tr>
    <td width="93">用户名:</td>
    <td width="434"><label for="username"></label>
    <input type="text" name="username" id="username" placeholder="请输入用户名"/>
    <span id="usernames"></span>
    <img id="img" width="15" height="15"/>
    <?php
    if(isset($_GET["flag"]))
	{
		if($_GET["flag"]=="allnull")
		{
			echo '<font color="#FF0000" size="1">用户名不能为空</font>';
		}
		if($_GET["flag"]=="usernameHave")
		{
			echo '<font color="#FF0000" size="1">用户名已存在</font>';
		}
		/*else
		{
			echo '<font color="green" size="1">用户名可以使用</font>';
		}*/
	}
	?>
    </td>
  </tr>
  <tr>
    <td> 密码:</td>
    <td><input type="password" name="psw" id="psw" />
			<span class="xstp">
				<img src="images/yc.jpg" id='seepic' width="20" height="18" onclick="changepsw();">
			</span>
    <div id="div" class="div0"></div>
    <span id="psws"></span>
   <?php
   	if(isset($_GET["flag"]))
	{
		if($_GET["flag"]=="allnull" || $_GET["flag"]=="namenotnull" )
		{
			echo '<font color="#FF0000" size="1">密码不能为空</font>';
		}
		if($_GET["flag"]=="pswfall")
		{
			echo '<font color="#FF0000" size="1">密码长度要为4-16位</font>';
		}
		/*if($_GET["flag"]=="pswOk") 服务器端判断密码的强度
		{
			echo '<font color="green" size="1">密码长度要为6-16位</font>';
		}*/
	}
   ?>
    </td>
  </tr>
  <tr>
    <td align="left">重复密码:</td>
    <td align="left"><input type="password" name="psw2" id="psw2" />
      <span id="psws2"></span>
			<?php
			if(isset($_GET["flag"]))
			{
				if($_GET["flag"]=="allnull" || $_GET["flag"]=="namenotnull" || $_GET["flag"]=="namepswnotnull")
				{
					echo '<font color="#FF0000" size="1">密码不能为空</font>';
				}
        if($_GET["flag"]=="psw2fall")
        {
          echo '<font color="#FF0000" size="1">两次输入的密码不一致</font>';
        }
			}
			?>
    </td>
  </tr>
  <tr>
    <td>验证码:</td>
    <td><label for="yzm"></label>
      <input type="text" name="yzm" id="yzm" />
      <img src="img.php" onclick="this.src='img.php?nu='+new Date().getTime();" id="yzmimg"/>
      <a href="javascript:void(0)" onclick="document.getElementById('yzmimg').src='img.php?nu='+new Date().getTime();">看不清,换一张</a>
			<?php
			if(isset($_GET["flag"]))
			{
        if($_GET["flag"]=="allnull" || $_GET["flag"]=="namenotnull" || $_GET["flag"]=="namepswnotnull"  || $_GET["flag"]=="namepsw2notnull" )
				{
						echo '<font color="#FF0000" size="1">验证码不能为空</font>';
				}
				if($_GET["flag"]=="yzmnopass")
				{
						echo '<font color="#FF0000" size="1">验证码不正确</font>';
				}
			}
			?>
			</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><label for="select"></label>
      <select name="select" id="select">
        <option value="普通用户">普通用户</option>
        <option value="管理员">管理员</option>
      </select></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="btn_ok" id="btn_ok" value="提交" />
      <input type="reset" name="button2" id="button2" value="重置" /></td>
  </tr>
</table>

</form>
<a href="login.php">已有帐号，立即登录</a>
</body>
</html>
