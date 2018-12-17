<?php

//处理信息字段html代码
function upChangeFieldInfo(){
	global $empire,$dbtbpre,$ecms_config;
	//系统字段html代码
	$sysfr=upChangeFieldInfo_GetSysFHtml();

	$sql=$empire->query("select * from {$dbtbpre}enewsf where f='title' or f='newstime' or fform='date' or fform='color'");
	while($r=$empire->fetch($sql))
	{
		$doup=1;
		if($r['f']=='newstime')//时间字段
		{
			$fhtml=$sysfr['newstimehtml'];
			$qfhtml='';
		}
		elseif($r['f']=='title')//标题字段
		{
			$fhtml=$sysfr['titlehtml'];
			$qfhtml='';
		}
		elseif($r['fform']=='date')//日期字段
		{
			$fhtml=upChangeFieldInfo_RepDateF($r['fhtml'],0);
			$qfhtml=upChangeFieldInfo_RepDateF($r['qfhtml'],1);
		}
		elseif($r['fform']=='color')//颜色字段
		{
			$fhtml=upChangeFieldInfo_RepColorF($r['fhtml'],0);
			$qfhtml=upChangeFieldInfo_RepColorF($r['qfhtml'],1);
		}
		else
		{
			$doup=0;
		}
		if($doup==1)
		{
			$sqladd='';
			if($qfhtml)
			{
				$sqladd=",qfhtml='".addslashes($qfhtml)."'";
			}
			$empire->query("update {$dbtbpre}enewsf set fhtml='".addslashes($fhtml)."'".$sqladd." where fid='$r[fid]'");
		}
	}
}

//替换日期字段html代码
function upChangeFieldInfo_RepDateF($fhtml,$isq=0){
	//原字符
	$oldstr=' onclick="setday(this);"';

	//新字符
	$newstr=' class="Wdate" onClick="WdatePicker({skin:\'default\',dateFmt:\'yyyy-MM-dd\'})"';

	$fhtml=str_replace($oldstr,$newstr,stripSlashes($fhtml));
	return $fhtml;
}

//替换颜色字段html代码
function upChangeFieldInfo_RepColorF($fhtml,$isq=0){
	//原字符
	$oldstr=' onclick="FieldChangeColor(this);"';

	//新字符
	$newstr=' class="color"';

	$fhtml=str_replace($oldstr,$newstr,stripSlashes($fhtml));
	return $fhtml;
}

//获取系统字段html代码
function upChangeFieldInfo_GetSysFHtml(){
	$sysfdata=ReadFiletext('../data/html/sysfhtml.txt');

	//标题字段
	$sysf_titler=explode('[!--sys.title--]',$sysfdata);
	$sysf_titletr=explode('[!--sys.qf.exp--]',$sysf_titler[1]);
	$fr['titlehtml']=$sysf_titletr[0];

	//发布时间字段
	$sysf_newstimer=explode('[!--sys.newstime--]',$sysfdata);
	$sysf_newstimetr=explode('[!--sys.qf.exp--]',$sysf_newstimer[1]);
	$fr['newstimehtml']=$sysf_newstimetr[0];

	return $fr;
}

?>