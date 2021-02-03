<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="ckeditor/ckeditor.js"></script>
<script>
window.onload=function()
{
	var ckeditor=CKEDITOR.replace('content',{"filebrowserUploadUrl" :"upload_pic.php"}); 
	var content=document.getElementById(ckeditor.id)
	var title=document.getElementById('title');
	var btn=document.getElementById('button');
	
	title.focus();
	title.onblur=function()
	{
		if(this.value=="")
		{
			this.focus();	
		}	
	}
	
	content.onblur=function()
	{
		if(this.value=="")
		{
			this.focus();	
		}	
	}
	
	btn.onclick=function()
	{
		if(title.value=="" || content.value=="")
		{
			return false;	
		}	
	}
}
</script>
</head>

<body>
<?php
require_once("config/config.php");
$flag=$_GET["flag"];
if($flag=="modify")
{
	$newsid=$_GET["newsid"];
	$sql="select * from news_tb where newsid={$newsid}";
	$res=query($sql);
	$title=$res[0]["title"];
	$content=$res[0]["content"];
}

?>
<form 
<?php 
if($flag=="modify")
{
?>
	action="addOrmodify_ok.php?newsid=<?php echo $newsid;?>&flag=modify" 
<?php
}
else
{
?>
	action="addOrmodify_ok.php?flag=add" 
<?php
}
?>
 method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="728" height="373" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td height="30" colspan="2" align="center">
      <?php
		if($flag=="modify")
		{
			echo "修改新闻";
		}
		else
		{
			echo "添加新闻";	
		}
	  ?>
      </td>
    </tr>
    <tr>
      <td width="88" height="34" bgcolor="#CCCCCC">新闻标题：</td>
      <td width="620" align="left" bgcolor="#CCCCCC"><input name="title" type="text" id="title" size="40" maxlength="50" 
      <?php
      if($flag=="modify")
	  {
	  ?>
      	value="<?php echo $title;?>" 
      <?php
	  }
	  ?>
      />
        *</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#CCCCCC">新闻内容：</td>
      <td align="left" valign="top" bgcolor="#CCCCCC">
      <textarea name="content" cols="45" rows="15" id="content">
      <?php
      if($flag=="modify")
	  {
	  	echo $content;
	  }
	  ?>
      </textarea>
        *</td>
    </tr>
    <tr>
      <td height="51" colspan="2" align="center" valign="middle"><input type="submit" name="button" id="button" value="提交" />
      <input type="reset" name="button2" id="button2" value="重置" /></td>
    </tr>
  </table>

</form>
<?php
close_conn($conn);
?>
</body>
</html>