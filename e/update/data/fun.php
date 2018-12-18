<?php

//是否重复升级
function upCheckReUpdate(){
	if($_COOKIE['ecmsupdate75'])
	{
		echo"升级程序不能重复运行";
		exit();
	}
	@setcookie('ecmsupdate75','empirecms');
}

//更新数据库缓存
function upChangeDbCache(){
	GetConfig(1);//更新参数设置
	GetClass();//更新栏目
	GetMemberLevel();//更新会员组
	GetSearchAllTb();//更新全站搜索数据表
}

//更新动态页面
function upChangeDtFile(){
	global $empire,$dbtbpre;
	//删除导航缓存
	$empire->query("delete from {$dbtbpre}enewsclassnavcache");
	DelListEnews();//删除栏目缓存文件
	GetPlTempPage();//评论列表模板
	GetPlJsPage();//评论JS模板
	ReCptemp();//控制面板模板
	GetSearch();//三搜索表单模板
	GetPrintPage();//打印模板
	GetDownloadPage();//下载地址页面
	ReGbooktemp();//留言板模板
	ReLoginIframe();//登陆状态模板
	ReSchAlltemp();//全站搜索模板
}

//更新模型表单文件
function upChangeAllModForm(){
	global $empire,$dbtbpre;
	$sql=$empire->query("select mid,tid,mtemp,qmtemp,cj from {$dbtbpre}enewsmod");
	while($r=$empire->fetch($sql))
	{
		ChangeMForm($r['mid'],$r['tid'],$r['mtemp']);//更新表单
		ChangeQmForm($r['mid'],$r['tid'],$r['qmtemp']);//更新前台表单
	}
	include(ECMS_PATH."e/class/classfun.php");
	ChangeZtForm();
	ChangeClassForm();
}

//返回表ID
function upChangeClassReturnTbid($classid){
	global $empire,$dbtbpre,$ecms_config;
	$classid=(int)$classid;
	$r=$empire->fetch1("select tid from {$dbtbpre}enewsclass where classid='$classid' limit 1");
	if(empty($r['tid']))
	{
		$r['tid']=0;
	}
	return $r['tid'];
}


//-------- 升级验证 ------

//验证信息
function upEcmsChangeCheckPass(){
	global $ecmsupset_pass;
	if(!$ecmsupset_pass)
	{
		return '';
	}
	$setpass='dg'.md5('ecms-'.$ecmsupset_pass);
	$ckpass='dg'.$_COOKIE['ecmsupdatepass75'];
	if($setpass!=$ckpass)
	{
		echo"您还没有通过验证，<a href='index.php'>点击这里</a>进行验证.";
		exit();
	}
}

//设置验证信息
function upEcmsChangeSetPass(){
	global $ecmsupset_pass;
	$setpass=md5('ecms-'.$ecmsupset_pass);
	@setcookie('ecmsupdatepass75',$setpass);
}

//验证密码
function upEcmsChangeLoginPass($add){
	global $ecmsupset_pass;
	if(!$ecmsupset_pass)
	{
		return '';
	}
	if('dg'.md5($ecmsupset_pass)!='dg'.md5($add['ecmsuppass']))
	{
		echo"密码不对，<a href='index.php'>点击这里</a>返回.";
		exit();
	}
	upEcmsChangeSetPass();
}


?>