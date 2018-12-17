<?php 
$id=$_GET["id"];
$uid=$_GET["uid"];
require("../e/class/connect.php"); 
if(!defined('InEmpireCMS')) 
{ 
exit(); 
} 
require("../e/class/db_sql.php"); 
require("../e/class/q_functions.php"); 
$link=db_connect(); 
$empire=new mysqlquery(); 

$query = ("select * from www_96kaifa_com_ecms_libaoip where haoid='$id' and uid='$uid'") //执行SQL语句 
or die("SQL语句执行失败"); 
$query = $empire->query($query);  
while($rst = mysqli_fetch_assoc($query)){
$haoip=$rst['uid'];
$haom=$rst['hao'];
}


if($haoip==$uid){
	echo $haom;
}else{

	$query = ("select * from www_96kaifa_com_ecms_libao where id='$id'") //执行SQL语句 
	or die("SQL语句执行失败"); 
	
	
	$query = $empire->query($query);  
	$data=array();
	while ($tmp=mysqli_fetch_assoc($query)) {
		$data[]=$tmp;
	}

	$yiling=$data[0]['yiling'];
	$zongshu=$data[0]['zongshu'];
	$lbh=$data[0]['lbh'];
	

	$picr=explode(egetzy('rn'),$lbh);
	$haomai=$picr[$yiling];
	echo $haomai;
	
	if($yiling==$zongshu){
		echo $picr[rand(0,$zongshu-1)];
		$haomai=$picr[rand(0,$zongshu-1)];
	}else{
		$yiling2=$yiling+1;
		$query = ("update www_96kaifa_com_ecms_libao set yiling=$yiling2 where id=$id") //执行SQL语句 
			or die("01SQL语句执行失败"); 
	}

	$time=date('Y-m-d h:i:s',time());
	$query = ("INSERT INTO www_96kaifa_com_ecms_libaoip (id,haoid,uid,hao,newstime) VALUES (NULL,$id,'$uid','$haomai','$time')") //执行SQL语句 
	or die("11SQL语句执行失败"); 

}



?>