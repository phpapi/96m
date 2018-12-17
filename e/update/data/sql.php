<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

//-------------------表处理

//会员管理组表
$empire->query(SetCreateTable("CREATE TABLE `{$dbtbpre}enewsag` (
  `agid` int(10) unsigned NOT NULL auto_increment,
  `agname` varchar(60) NOT NULL default '',
  `isadmin` tinyint(1) NOT NULL default '0',
  `auids` text NOT NULL,
  PRIMARY KEY  (`agid`),
  KEY `isadmin` (`isadmin`)
) TYPE=MyISAM;",$ecms_config['db']['dbchar']));

$empire->query("INSERT INTO `{$dbtbpre}enewsag` VALUES (1, '管理员', 9, '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsag` VALUES (2, '版主', 5, '');");


//执行表
$empire->query(SetCreateTable("CREATE TABLE `{$dbtbpre}enewsautodo` (
  `doid` bigint(20) unsigned NOT NULL auto_increment,
  `dotype` char(50) NOT NULL default '',
  `classid` int(11) NOT NULL default '0',
  `id` int(10) unsigned NOT NULL default '0',
  `tid` int(10) unsigned NOT NULL default '0',
  `userid` int(10) unsigned NOT NULL default '0',
  `dotime` int(10) unsigned NOT NULL default '0',
  `addtime` int(10) unsigned NOT NULL default '0',
  `pid` int(11) NOT NULL default '0',
  `ckstr` char(32) NOT NULL default '',
  `fname` char(255) NOT NULL default '',
  `ecmspno` char(32) NOT NULL default '',
  `ckpass` char(32) NOT NULL default '',
  PRIMARY KEY  (`doid`),
  KEY `userid` (`userid`),
  KEY `pid` (`pid`),
  KEY `dotime` (`dotime`),
  KEY `ckstr` (`ckstr`),
  KEY `ecmspno` (`ecmspno`)
) TYPE=MyISAM;",$ecms_config['db']['dbchar']));


//栏目表
$empire->query("alter table {$dbtbpre}enewsclass 
	add `oneinfo` tinyint(1) NOT NULL default '0',
	add `addsql` varchar(255) NOT NULL default '',
	add `wapislist` tinyint(1) NOT NULL default '0',
	add `fclast` int(10) unsigned NOT NULL default '0';");


//栏目副表
$empire->query("alter table {$dbtbpre}enewsclassadd 
	add `eclasspagetext` mediumtext NOT NULL;");


//推荐级别表
$empire->query(SetCreateTable("CREATE TABLE `{$dbtbpre}enewsgoodtype` (
  `tid` smallint(5) unsigned NOT NULL auto_increment,
  `tname` varchar(60) NOT NULL default '',
  `ttype` tinyint(1) NOT NULL default '0',
  `levelid` tinyint(3) unsigned NOT NULL default '0',
  `myorder` smallint(6) NOT NULL default '0',
  `groupid` varchar(255) NOT NULL default '',
  `showall` tinyint(1) NOT NULL default '0',
  `showcid` text NOT NULL,
  `hiddencid` text NOT NULL,
  PRIMARY KEY  (`tid`),
  KEY `ttype` (`ttype`),
  KEY `levelid` (`levelid`),
  KEY `myorder` (`myorder`)
) TYPE=MyISAM;",$ecms_config['db']['dbchar']));

$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (1, '一级头条', 1, 1, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (2, '二级头条', 1, 2, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (3, '三级头条', 1, 3, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (4, '四级头条', 1, 4, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (5, '五级头条', 1, 5, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (6, '六级头条', 1, 6, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (7, '七级头条', 1, 7, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (8, '八级头条', 1, 8, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (9, '九级头条', 1, 9, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (10, '一级推荐', 0, 1, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (11, '二级推荐', 0, 2, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (12, '三级推荐', 0, 3, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (13, '四级推荐', 0, 4, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (14, '五级推荐', 0, 5, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (15, '六级推荐', 0, 6, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (16, '七级推荐', 0, 7, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (17, '八级推荐', 0, 8, 0, '', 0, '', '');");
$empire->query("INSERT INTO `{$dbtbpre}enewsgoodtype` VALUES (18, '九级推荐', 0, 9, 0, '', 0, '', '');");


//用户组表
$empire->query("alter table {$dbtbpre}enewsgroup 
	add `docanhtml` tinyint(1) NOT NULL default '0',
	add `dodelclass` tinyint(1) NOT NULL default '0',
	add `doinfofile` tinyint(1) NOT NULL default '0',
	add `doingroup` tinyint(1) NOT NULL default '0',
	add `domembergroup` tinyint(1) NOT NULL default '0',
	add `doviewgroup` tinyint(1) NOT NULL default '0',
	add `domadmingroup` tinyint(1) NOT NULL default '0',
	add `dochmoreport` tinyint(1) NOT NULL default '0',
	add `doisqf` tinyint(1) NOT NULL default '0';");


//采集节点表
$empire->query("alter table {$dbtbpre}enewsinfoclass 
	add `repf` varchar(255) NOT NULL default '',
	add `repadf` varchar(255) NOT NULL default '',
	add `loadkeeptime` smallint(6) NOT NULL default '0',
	add `isnullf` varchar(255) NOT NULL default '';");

$empire->query("update {$dbtbpre}enewsinfoclass set repf=',title,newstext,',repadf=',newstext,',isnullf=',newstext,';");


//标题分类表
$empire->query("alter table {$dbtbpre}enewsinfotype 
	add `fclast` int(10) unsigned NOT NULL default '0';");


//会员内部表
$empire->query(SetCreateTable("CREATE TABLE `{$dbtbpre}enewsingroup` (
  `gid` smallint(5) unsigned NOT NULL auto_increment,
  `gname` char(60) NOT NULL default '',
  `myorder` smallint(6) NOT NULL default '0',
  PRIMARY KEY  (`gid`),
  KEY `myorder` (`myorder`)
) TYPE=MyISAM;",$ecms_config['db']['dbchar']));


//会员表
$empire->query("alter table {$dbtbpre}enewsmember 
	add `ingid` smallint(5) unsigned NOT NULL default '0',
	add `agid` smallint(5) unsigned NOT NULL default '0',
	add `isern` tinyint(1) NOT NULL default '0',
	add INDEX(ingid);");


//系统模型表
$empire->query("alter table {$dbtbpre}enewsmod 
	add `maddfun` varchar(255) NOT NULL default '',
	add `meditfun` varchar(255) NOT NULL default '',
	add `qmaddfun` varchar(255) NOT NULL default '',
	add `qmeditfun` varchar(255) NOT NULL default '';");


//访问端表
$empire->query("alter table {$dbtbpre}enewsmoreport 
	add `openadmin` tinyint(1) NOT NULL default '0',
	add `rehtml` tinyint(4) NOT NULL default '0';");


//播放器表
$empire->query("INSERT INTO `{$dbtbpre}enewsplayer` VALUES (NULL, 'HTML5Video', 'htmlvideo.php', 'HTML5的video播放标签');");
$empire->query("INSERT INTO `{$dbtbpre}enewsplayer` VALUES (NULL, 'JWPlayer', 'jwplayer.php', 'JWPlayer播放器');");
$empire->query("INSERT INTO `{$dbtbpre}enewsplayer` VALUES (NULL, 'HTML5Audio', 'htmlaudio.php', 'HTML5的audio播放标签');");


//公共设置表
$tbpr=$empire->fetch1("select * from {$dbtbpre}enewspublic limit 1");

$empire->query("alter table {$dbtbpre}enewspublic 
	drop COLUMN firsttitlename,
	drop COLUMN isgoodname,
	add `php_adminouttime` int(11) NOT NULL default '0',
	add `httptype` tinyint(1) NOT NULL default '0',
	add `qinfoaddfen` tinyint(1) NOT NULL default '0',
	add `bakescapetype` tinyint(1) NOT NULL default '0',
	add `hkeytime` int(11) NOT NULL default '0',
	add `hkeyrnd` varchar(60) NOT NULL default '',
	add `mhavedatedo` tinyint(1) NOT NULL default '0',
	add `reportkey` tinyint(1) NOT NULL default '0',
	add `wapchstyle` tinyint(1) NOT NULL default '0',
	add `usetotalnum` tinyint(1) NOT NULL default '0',
	add `spacegids` varchar(255) NOT NULL default '',
	add `candocodetag` tinyint(1) NOT NULL default '0',
	add `openern` varchar(255) NOT NULL default '',
	add `ernurl` varchar(200) NOT NULL default '';");

$hkeyrnd=make_password(36);
$keytime=$tbpr['keytime']*60;
$keybgcolor=addslashes(str_replace('#','',$tbpr['keybgcolor']));
$keyfontcolor=addslashes(str_replace('#','',$tbpr['keyfontcolor']));
$keydistcolor=addslashes(str_replace('#','',$tbpr['keydistcolor']));
$chclasscolor=addslashes(str_replace('#','',$tbpr['chclasscolor']));
$markfontcolor=addslashes(str_replace('#','',$tbpr['markfontcolor']));

$empire->query("UPDATE `{$dbtbpre}enewspublic` SET php_adminouttime=1000,bakescapetype=1,hkeytime=30,hkeyrnd='$hkeyrnd',keytime='$keytime',keybgcolor='$keybgcolor',keyfontcolor='$keyfontcolor',keydistcolor='$keydistcolor',chclasscolor='$chclasscolor',markfontcolor='$markfontcolor';");


//公共缓存表
$empire->query(SetCreateTable("CREATE TABLE `{$dbtbpre}enewspublic_fc` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `fclastindex` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;",$ecms_config['db']['dbchar']));

$empire->query("INSERT INTO `{$dbtbpre}enewspublic_fc` VALUES (1, 0);");


//公共更新表
$empire->query("ALTER TABLE `{$dbtbpre}enewspublic_update` RENAME `{$dbtbpre}enewspublic_up`");


//公共设置副表
$empire->query(SetCreateTable("CREATE TABLE `{$dbtbpre}enewspublicadd` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `ctimeopen` tinyint(1) NOT NULL default '0',
  `ctimelast` int(10) unsigned NOT NULL default '0',
  `ctimeindex` int(11) NOT NULL default '0',
  `ctimeclass` int(11) NOT NULL default '0',
  `ctimelist` int(11) NOT NULL default '0',
  `ctimetext` int(11) NOT NULL default '0',
  `ctimett` int(11) NOT NULL default '0',
  `ctimetags` int(11) NOT NULL default '0',
  `ctimegids` varchar(255) NOT NULL default '',
  `ctimecids` varchar(255) NOT NULL default '',
  `ctimernd` varchar(60) NOT NULL default '',
  `ctimeaddre` tinyint(4) NOT NULL default '0',
  `ctimeqaddre` tinyint(4) NOT NULL default '0',
  `autodoopen` tinyint(1) NOT NULL default '0',
  `autodouser` varchar(30) NOT NULL default '',
  `autodopass` varchar(32) NOT NULL default '',
  `autodosalt` varchar(20) NOT NULL default '',
  `autodoshowkey` tinyint(1) NOT NULL default '0',
  `autodotime` int(11) NOT NULL default '0',
  `autodoline` int(11) NOT NULL default '0',
  `autodovar` varchar(20) NOT NULL default '',
  `autodoval` varchar(60) NOT NULL default '',
  `autodoshow` tinyint(1) NOT NULL default '0',
  `autodofile` tinyint(1) NOT NULL default '0',
  `autodopostpass` varchar(120) NOT NULL default '',
  `autodoss` tinyint(1) NOT NULL default '0',
  `autodoaction` varchar(200) NOT NULL default '',
  `autodock` tinyint(1) NOT NULL default '0',
  `digglevel` int(11) NOT NULL default '0',
  `diggcmids` varchar(255) NOT NULL default '',
  `toqjf` text NOT NULL,
  `qtoqjf` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;",$ecms_config['db']['dbchar']));

$empire->query("INSERT INTO `{$dbtbpre}enewspublicadd` VALUES (1, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 'pLnmZpF4fqbKQmhv82WQAekQAyktoARuFccZjnLb21', 0, 0, 0, '', '', '', 0, 100, 12, '', '', 1, 0, 'EmpireCMS', 0, ',emp,', 0, 0, '', '', '');");

$ctimernd=make_password(42);
$autodopostpass=make_password(60);

$empire->query("UPDATE `{$dbtbpre}enewspublicadd` SET ctimernd='$ctimernd',autodopostpass='$autodopostpass';");


//TAGS表
$empire->query("alter table {$dbtbpre}enewstags 
	add `tagtitle` char(60) NOT NULL default '',
	add `tagkey` char(100) NOT NULL default '',
	add `tagdes` char(255) NOT NULL default '',
	add `fclast` int(10) unsigned NOT NULL default '0';");


//动态模板表
$empire->query("INSERT INTO `{$dbtbpre}enewstempdt` VALUES (NULL, 'InfoViewLevel', '信息权限提示页面', '查看信息权限提示页面', 'e/template/public/checklevel/info1.php', 0, 'pubtemp');");


//用户表
$empire->query("alter table {$dbtbpre}enewsuser 
	add `wname` varchar(60) NOT NULL default '',
	add `tel` varchar(20) NOT NULL default '',
	add `wxno` varchar(80) NOT NULL default '',
	add `qq` varchar(20) NOT NULL default '';");


//访问组表
$empire->query(SetCreateTable("CREATE TABLE `{$dbtbpre}enewsvg` (
  `vgid` smallint(5) unsigned NOT NULL auto_increment,
  `gname` char(60) NOT NULL default '',
  `gids` char(255) NOT NULL default '',
  `ingids` char(255) NOT NULL default '',
  `agids` char(255) NOT NULL default '',
  `mlist` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`vgid`)
) TYPE=MyISAM;",$ecms_config['db']['dbchar']));


//访问组表2
$empire->query(SetCreateTable("CREATE TABLE `{$dbtbpre}enewsvglist` (
  `vgid` smallint(5) unsigned NOT NULL default '0',
  `addtime` int(10) unsigned NOT NULL default '0',
  `userid` int(10) unsigned NOT NULL default '0',
  `outtime` int(10) unsigned NOT NULL default '0',
  KEY `vgid` (`vgid`),
  KEY `userid` (`userid`),
  KEY `addtime` (`addtime`)
) TYPE=MyISAM;",$ecms_config['db']['dbchar']));


//工作流表
$empire->query("alter table {$dbtbpre}enewsworkflow 
	add `canedit` tinyint(1) NOT NULL default '0';");


//专题信息表
$empire->query("alter table {$dbtbpre}enewsztinfo 
	change cid cid mediumint(8) unsigned NOT NULL default '0';");


//专题子类表
$empire->query("alter table {$dbtbpre}enewszttype 
	add `tfile` varchar(60) NOT NULL default '';");



?>