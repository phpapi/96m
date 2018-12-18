<?php

//更新配置文件
function upChangeConfigFile(){
	global $empire,$dbtbpre,$ecms_config,$user_tablename,$public_r;

	$filetext=ReadFiletext('data/config.txt');

	//数据库信息
	$filetext=str_replace('[!@--dbtype--@!]',$ecms_config['db']['usedb'],$filetext);
	$filetext=str_replace('[!@--dbver--@!]',$ecms_config['db']['dbver'],$filetext);
	$filetext=str_replace('[!@--dbhost--@!]',$ecms_config['db']['dbserver'],$filetext);
	$filetext=str_replace('[!@--dbport--@!]',$ecms_config['db']['dbport'],$filetext);
	$filetext=str_replace('[!@--dbusername--@!]',$ecms_config['db']['dbusername'],$filetext);
	$filetext=str_replace('[!@--dbpassword--@!]',$ecms_config['db']['dbpassword'],$filetext);
	$filetext=str_replace('[!@--dbname--@!]',$ecms_config['db']['dbname'],$filetext);
	$filetext=str_replace('[!@--setchar--@!]',$ecms_config['db']['setchar'],$filetext);
	$filetext=str_replace('[!@--dbchar--@!]',$ecms_config['db']['dbchar'],$filetext);
	$filetext=str_replace('[!@--tbpre--@!]',$ecms_config['db']['dbtbpre'],$filetext);
	$filetext=str_replace('[!@--dbshowerror--@!]',intval($ecms_config['db']['showerror']),$filetext);

	//其他相关设置
	$filetext=str_replace('[!@--pagechar--@!]',$ecms_config['sets']['pagechar'],$filetext);
	$filetext=str_replace('[!@--setpagechar--@!]',intval($ecms_config['sets']['setpagechar']),$filetext);
	$filetext=str_replace('[!@--elang--@!]',$ecms_config['sets']['elang'],$filetext);

	$filetext=str_replace('[!@--openonlinesetting--@!]',intval($ecms_config['esafe']['openonlinesetting']),$filetext);
	$filetext=str_replace('[!@--openeditdttemp--@!]',intval($ecms_config['esafe']['openeditdttemp']),$filetext);

	$filetext=str_replace('[!@--openepassport--@!]',intval($ecms_config['epassport']['open']),$filetext);

	if($ecms_config['sets']['txtpath']==ECMS_PATH.'d/txt/')
	{
		$truetxtpath="ECMS_PATH.'d/txt/'";
	}
	else
	{
		$truetxtpath="'".$ecms_config['sets']['txtpath']."'";
	}
	$filetext=str_replace('[!@--txtpath--@!]',$truetxtpath,$filetext);
	$filetext=str_replace('[!@--saveurlimgclearurl--@!]',intval($ecms_config['sets']['saveurlimgclearurl']),$filetext);
	$filetext=str_replace('[!@--deftempid--@!]',intval($ecms_config['sets']['deftempid']),$filetext);
	$filetext=str_replace('[!@--selfmoreportid--@!]',intval($ecms_config['sets']['selfmoreportid']),$filetext);

	//会员接口信息
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
	$filetext=str_replace('[!@--membertablename--@!]',$truemembertablename,$filetext);
	$filetext=str_replace('[!@--changeregisterurl--@!]',$ecms_config['member']['changeregisterurl'],$filetext);
	$filetext=str_replace('[!@--registerurl--@!]',$ecms_config['member']['registerurl'],$filetext);
	$filetext=str_replace('[!@--loginurl--@!]',$ecms_config['member']['loginurl'],$filetext);
	$filetext=str_replace('[!@--quiturl--@!]',$ecms_config['member']['quiturl'],$filetext);
	$filetext=str_replace('[!@--chmember--@!]',intval($ecms_config['member']['chmember']),$filetext);
	$filetext=str_replace('[!@--pwtype--@!]',intval($ecms_config['member']['pwtype']),$filetext);
	$filetext=str_replace('[!@--regtimetype--@!]',intval($ecms_config['member']['regtimetype']),$filetext);
	$filetext=str_replace('[!@--regcookietime--@!]',intval($ecms_config['member']['regcookietime']),$filetext);
	$filetext=str_replace('[!@--defgroupid--@!]',intval($ecms_config['member']['defgroupid']),$filetext);
	$filetext=str_replace('[!@--saltnum--@!]',intval($ecms_config['member']['saltnum']),$filetext);
	$filetext=str_replace('[!@--utfdata--@!]',intval($ecms_config['member']['utfdata']),$filetext);

	if($usedefmtable==1)//默认会员表
	{
		$ecms_config['memberf']['ingid']='ingid';//内部会员组字段
		$ecms_config['memberf']['agid']='agid';//会员管理组字段
		$ecms_config['memberf']['isern']='isern';//实名字段
	}
	else
	{
		$ecms_config['memberf']['ingid']='enewsingid';//内部会员组字段
		$ecms_config['memberf']['agid']='enewsagid';//会员管理组字段
		$ecms_config['memberf']['isern']='enewsisern';//实名字段
	}
	$filetext=str_replace('[!@--fuserid--@!]',$ecms_config['memberf']['userid'],$filetext);
	$filetext=str_replace('[!@--fusername--@!]',$ecms_config['memberf']['username'],$filetext);
	$filetext=str_replace('[!@--fpassword--@!]',$ecms_config['memberf']['password'],$filetext);
	$filetext=str_replace('[!@--frnd--@!]',$ecms_config['memberf']['rnd'],$filetext);
	$filetext=str_replace('[!@--femail--@!]',$ecms_config['memberf']['email'],$filetext);
	$filetext=str_replace('[!@--fregistertime--@!]',$ecms_config['memberf']['registertime'],$filetext);
	$filetext=str_replace('[!@--fgroupid--@!]',$ecms_config['memberf']['groupid'],$filetext);
	$filetext=str_replace('[!@--fuserfen--@!]',$ecms_config['memberf']['userfen'],$filetext);
	$filetext=str_replace('[!@--fuserdate--@!]',$ecms_config['memberf']['userdate'],$filetext);
	$filetext=str_replace('[!@--fmoney--@!]',$ecms_config['memberf']['money'],$filetext);
	$filetext=str_replace('[!@--fzgroupid--@!]',$ecms_config['memberf']['zgroupid'],$filetext);
	$filetext=str_replace('[!@--fhavemsg--@!]',$ecms_config['memberf']['havemsg'],$filetext);
	$filetext=str_replace('[!@--fchecked--@!]',$ecms_config['memberf']['checked'],$filetext);
	$filetext=str_replace('[!@--fsalt--@!]',$ecms_config['memberf']['salt'],$filetext);
	$filetext=str_replace('[!@--fuserkey--@!]',$ecms_config['memberf']['userkey'],$filetext);
	$filetext=str_replace('[!@--fingid--@!]',$ecms_config['memberf']['ingid'],$filetext);
	$filetext=str_replace('[!@--fagid--@!]',$ecms_config['memberf']['agid'],$filetext);
	$filetext=str_replace('[!@--fisern--@!]',$ecms_config['memberf']['isern'],$filetext);

	//安全设置
	$filetext=str_replace('[!@--loginauth--@!]',$ecms_config['esafe']['loginauth'],$filetext);
	$filetext=str_replace('[!@--ecookiernd--@!]',$ecms_config['esafe']['ecookiernd'],$filetext);
	$filetext=str_replace('[!@--ckhloginip--@!]',intval($ecms_config['esafe']['ckhloginip']),$filetext);
	$filetext=str_replace('[!@--ckhsession--@!]',intval($ecms_config['esafe']['ckhsession']),$filetext);
	$filetext=str_replace('[!@--ckhanytime--@!]',intval($ecms_config['esafe']['ckhanytime']),$filetext);
	$filetext=str_replace('[!@--theloginlog--@!]',intval($ecms_config['esafe']['theloginlog']),$filetext);
	$filetext=str_replace('[!@--thedolog--@!]',intval($ecms_config['esafe']['thedolog']),$filetext);
	$filetext=str_replace('[!@--ckfromurl--@!]',intval($ecms_config['esafe']['ckfromurl']),$filetext);
	$filetext=str_replace('[!@--ckhash--@!]',intval($ecms_config['esafe']['ckhash']),$filetext);

	//COOKIE设置
	$ecms_config['cks']['ckrndthree']=make_password(36);
	$ecms_config['cks']['ckrndfour']=make_password(35);
	$ecms_config['cks']['ckrndfive']=make_password(34);

	$filetext=str_replace('[!@--cookiedomain--@!]',$ecms_config['cks']['ckdomain'],$filetext);
	$filetext=str_replace('[!@--cookiepath--@!]',$ecms_config['cks']['ckpath'],$filetext);
	$filetext=str_replace('[!@--cookievarpre--@!]',$ecms_config['cks']['ckvarpre'],$filetext);
	$filetext=str_replace('[!@--cookieadminvarpre--@!]',$ecms_config['cks']['ckadminvarpre'],$filetext);
	$filetext=str_replace('[!@--cookieckrnd--@!]',$ecms_config['cks']['ckrnd'],$filetext);
	$filetext=str_replace('[!@--cookieckrndtwo--@!]',$ecms_config['cks']['ckrndtwo'],$filetext);
	$filetext=str_replace('[!@--cookieckrndthree--@!]',$ecms_config['cks']['ckrndthree'],$filetext);
	$filetext=str_replace('[!@--cookieckrndfour--@!]',$ecms_config['cks']['ckrndfour'],$filetext);
	$filetext=str_replace('[!@--cookieckrndfive--@!]',$ecms_config['cks']['ckrndfive'],$filetext);

	//防火墙
	$filetext=str_replace('[!@--fwopen--@!]',intval($ecms_config['fw']['eopen']),$filetext);
	$filetext=str_replace('[!@--fwpass--@!]',$ecms_config['fw']['epass'],$filetext);
	$filetext=str_replace('[!@--fwadminloginurl--@!]',$ecms_config['fw']['adminloginurl'],$filetext);
	$filetext=str_replace('[!@--fwadminhour--@!]',$ecms_config['fw']['adminhour'],$filetext);
	$filetext=str_replace('[!@--fwadminweek--@!]',$ecms_config['fw']['adminweek'],$filetext);
	$filetext=str_replace('[!@--fwadminckpassvar--@!]',$ecms_config['fw']['adminckpassvar'],$filetext);
	$filetext=str_replace('[!@--fwadminckpassval--@!]',$ecms_config['fw']['adminckpassval'],$filetext);
	$filetext=str_replace('[!@--fwcleargettext--@!]',$ecms_config['fw']['cleargettext'],$filetext);

	//其他
	$filetext=str_replace('[!@--pnewsurl--@!]',$public_r['newsurl'],$filetext);

	WriteFiletext_n('../config/config.php',$filetext);
}

?>