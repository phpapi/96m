<?php
error_reporting(E_ALL ^ E_NOTICE);

@set_time_limit(10000);

define('EmpireCMSAdmin','1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require("../data/dbcache/class.php");
require("data/fun.php");
require("setconfig.php");

//事件处理
$ecms=$_POST['ecms'];
if(empty($ecms))
{
	$ecms=$_GET['ecms'];
}
//进入升级
if($ecms=="eLoginUpPass")
{
	upCheckReUpdate();
	upEcmsChangeLoginPass($_POST);

	echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><br>正进入升级处理......<script>self.location.href='index.php?ecms=ChangeConfigFile';</script>";
	exit();
}
//验证登录
if($ecms)
{
	upEcmsChangeCheckPass();
}
if(!$ecms||$ecms=="ChangeConfigFile")
{}
else
{
	$link=db_connect();
	$empire=new mysqlquery();
}

//开始处理
if($ecms=="success")
{
	echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><br><br><br><font color=red><b>帝国网站管理系统7.2版数据库升7.5版成功!请按照升级说明继续完成升级操作。</b></font>";
	exit();
}
elseif($ecms=="ChangeInfoTbStru")//信息表结构升级(2)
{
	include('data/infosql.php');
	upChangeInfoTbStru($_GET);
	exit();
}
elseif($ecms=="ChangeTable")//数据表结构升级(3)
{
	include('data/sql.php');

	echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><br>第三步：数据表结构升级完毕，正进入数据库缓存更新......<script>self.location.href='index.php?ecms=ChangeDbCache';</script>";
	exit();
}
elseif($ecms=="ChangeDbCache")//更新数据库缓存(4)
{
	upChangeDbCache();

	echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><br>第四步：数据库缓存更新完毕，正进入字段处理更新......<script>self.location.href='index.php?ecms=ChangeFieldData';</script>";
	exit();
}
elseif($ecms=="ChangeFieldData")//字段html代码更新(5)
{
	include('data/fieldsql.php');
	upChangeFieldInfo();

	echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><br>第五步：字段html代码更新完毕，正进入动态页面更新......<script>self.location.href='index.php?ecms=ChangeDtFile';</script>";
	exit();
}
elseif($ecms=="ChangeDtFile")//更新动态页面(6)
{
	include("../class/moddofun.php");
	upChangeDtFile();
	upChangeAllModForm();

	echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><br>第六步：动态页面更新完毕，正进入会员接口处理......<script>self.location.href='index.php?ecms=ChangeMemberCom';</script>";
	exit();
}
elseif($ecms=="ChangeMemberCom")//更新会员接口(7)
{
	include('data/membercomsql.php');
	upMemberTbChangeMemberCom();

	echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><br>第七步：会员接口更新完毕，马上完成......<script>self.location.href='index.php?ecms=success';</script>";
	exit();
}
elseif($ecms=="ChangeConfigFile")//更新数据库配置文件(1)
{
	include('data/repconfig.php');
	upChangeConfigFile();

	echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><br>第一步：配置文件转换完毕，正进入信息表结构升级......<script>self.location.href='index.php?ecms=ChangeInfoTbStru';</script>";
	exit();
}
else
{}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>帝国网站管理系统7.2版升7.5版升级程序</title>
<style>
a:link     { COLOR: #000000; TEXT-DECORATION: none }
a:visited   { COLOR: #000000 ; TEXT-DECORATION: none }
a:active   { COLOR: #000000 ; TEXT-DECORATION: underline }
a:hover    { COLOR: #000000 ; TEXT-DECORATION:underline }
.home_top { border-top:2px solid #4798ED; }
.home_path { background:#4798ED; padding-right:10px; color:#F0F0F0; font-size: 11px; }
td, th, caption { font-family:  "宋体"; font-size: 14px; color:#000000;  LINE-HEIGHT: 165%; }
.hrLine{MARGIN: 0px 0px; BORDER-BOTTOM: #807d76 1px dotted;}
</style>
<script>
function CheckUpdate(obj){
	if(confirm('确认开始升级?'))
	{
		//obj.updatebutton.disabled=true;
		return true;
	}
	return false;
}
</script>
</head>
<body>
<form method="POST" action="index.php" name="formupdate" id="formupdate" onsubmit="return CheckUpdate(document.formupdate);">
  <br>
  <br>
  <br>
  <table width="660" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#0472BC">
    <tr> 
      <td height="30"> <div align="center"><strong><font color="#FFFFFF">帝国网站管理系统7.2版升7.5版升级程序</font></strong></div></td>
    </tr>
	<?php
	if($ecmsupset_pass)
	{
	?>
    <tr bgcolor="#FFFFFF">
      <td height="50"><div align="center">输入升级密码：
          <input name="ecmsuppass" type="password" id="ecmsuppass">
      </div></td>
    </tr>
	<?php
	}	
	?>
    <tr bgcolor="#FFFFFF"> 
      <td height="50"> <div align="center"> 
          <input type=submit name=updatebutton value="开始升级">
          <input name="ecms" type="hidden" id="ecms" value="eLoginUpPass">
        </div></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25"> <div align="center">说明：点击开始升级。(共七个更新项)</div></td>
    </tr>
  </table>
</form>
</body>
</html>