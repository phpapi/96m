<?php 
require("../e/class/connect.php"); 
if(!defined('InEmpireCMS')) 
{ 
exit(); 
} 
require("../e/class/db_sql.php"); 
require("../e/class/q_functions.php"); 
$link=db_connect(); 
$empire=new mysqlquery(); 
$www_96kaifa_com_header=$empire->fetch1("select varvalue from {$dbtbpre}enewstempvar where myvar='www_96kaifa_com_header' limit 1");
$www_96kaifa_com_footer=$empire->fetch1("select varvalue from {$dbtbpre}enewstempvar where myvar='www_96kaifa_com_footer' limit 1");

$id=$_GET["id"];
$querys = ("select * from www_96kaifa_com_ecms_game where id='$id'") //执行SQL语句 
or die("SQL语句执行失败"); 
$querys = $empire->query($querys);  
while ($tmp=mysqli_fetch_assoc($querys)) {
	$data[]=$tmp;
}
$title=$data[0]['title'];
$titleurl=$data[0]['titleurl'];
$h5url=$data[0]['h5url'];
$titlepic=$data[0]['titlepic'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta name="full-screen" content="yes">
<meta name="x5-fullscreen" content="true">
<meta name="360-fullscreen" content="true">
<title><?=$title?></title>
<link href="<?=$public_r['add_www_96kaifa_com_url']?>/96kaifa/statics/home/H5/css/game.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?=$public_r['add_www_96kaifa_com_url']?>/96kaifa/statics/home/H5/js/jquery-1.8.3.min.js"></script>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="<?=$title?>">
<link href="<?=$titlepic?>" rel="apple-touch-icon-precomposed">
<style>
	.youxi{height:100%; position:absolute; top:0; width:100%; overflow-y :hidden;}
</style>
</head>
<body>
<div class="main">
  <div class="youxi" style="height:100%; position:absolute; top:0; width:100%; overflow-y :hidden;">
    <iframe id="iframe" src="<?=$h5url?>" scrolling="no" width="100%" height="100%" frameborder="0" marginwidth="0" marginheight="0" frameborder="0"> 您的浏览器不支持嵌入式框架，或者当前配置为不显示嵌入式框架。 </iframe>
  </div>
</div>
<div style="display:none;"><?=$public_r['add_www_96kaifa_com_tongji']?></div>
</body>

</html>
