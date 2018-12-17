<?php
//--------------------- 更新信息表 ---------------------

//模型表处理
function upInfoTbChangeField($tb,$ecms=0){
	global $empire,$dbtbpre,$ecms_config;
	if($ecms==1)//归档
	{
		$tbname=$dbtbpre.'ecms_'.$tb.'_doc';
	}
	elseif($ecms==2)//未审核表
	{
		$tbname=$dbtbpre.'ecms_'.$tb.'_check';
	}
	else
	{
		$tbname=$dbtbpre.'ecms_'.$tb;
	}
	$empire->query("alter table ".$tbname." 
		change groupid groupid smallint(6) NOT NULL default '0',
		change firsttitle firsttitle tinyint(3) unsigned NOT NULL default '0',
		change isgood isgood tinyint(3) unsigned NOT NULL default '0',
		add eckuid int(11) NOT NULL default '0';");
}

//模型表结构更新
function upChangeInfoTbStru($add){
	global $empire,$dbtbpre,$ecms_config;
	$doline=1;
	$doretime=0;
	$start=(int)$add['start'];
	$b=0;
	$sql=$empire->query("select tid,tbname from {$dbtbpre}enewstable where tid>$start order by tid limit ".$doline);
	while($r=$empire->fetch($sql))
	{
		$b=1;
		$new_start=$r['tid'];
		$dotbname=$r['tbname'];
		//主表
		upInfoTbChangeField($r['tbname'],0);
		//未审核表
		upInfoTbChangeField($r['tbname'],2);
		//归档表
		upInfoTbChangeField($r['tbname'],1);
	}
	if(empty($b))
	{
		echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><meta http-equiv=\"refresh\" content=\"".$doretime.";url=index.php?ecms=ChangeTable\"><br>第二步：所有信息表结构更新完毕，正进入其它表结构升级......";
		exit();
	}
	echo"<link rel=\"stylesheet\" href=\"../data/images/css.css\" type=\"text/css\"><meta http-equiv=\"refresh\" content=\"".$doretime.";url=index.php?ecms=ChangeInfoTbStru&start=$new_start\">信息表 <b>".$dotbname."</b>: 更新表结构完毕，正在进入下一个信息表结构更新......(ID:<font color=red><b>".$new_start."</b></font>)";
	exit();
}

?>