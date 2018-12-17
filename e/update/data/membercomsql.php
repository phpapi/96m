<?php

//升级会员接口
function upMemberTbChangeMemberCom(){
	global $empire,$dbtbpre,$ecms_config,$user_tablename;
	if(stristr($user_tablename,'enewsmember'))
	{
		$truemembertablename=$user_tablename==$dbtbpre.'enewsmember'?'"{$dbtbpre}enewsmember"':"'$user_tablename'";
		$usedefmtable=1;
	}
	else
	{
		$truemembertablename="'$user_tablename'";
		$usedefmtable=0;
	}
	//默认
	if($usedefmtable==1)
	{
		return '';
	}
	$mfingid='enewsingid';
	$mfagid='enewsagid';
	$mfisern='enewsisern';

	$sql=$empire->query("alter table ".$ecms_config['member']['tablename']." 
	add `".$mfingid."` smallint(5) unsigned NOT NULL default '0',
	add `".$mfagid."` smallint(5) unsigned NOT NULL default '0',
	add `".$mfisern."` tinyint(1) NOT NULL default '0';");

	return $sql;
}

?>