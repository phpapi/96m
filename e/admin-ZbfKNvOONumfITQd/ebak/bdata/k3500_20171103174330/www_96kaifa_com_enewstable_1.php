<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewstable`;");
E_C("CREATE TABLE `www_96kaifa_com_enewstable` (
  `tid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tname` varchar(60) NOT NULL DEFAULT '',
  `tsay` text NOT NULL,
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `datatbs` text NOT NULL,
  `deftb` varchar(6) NOT NULL DEFAULT '',
  `yhid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `intb` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewstable` values('1','news','新闻系统数据表','新闻系统数据表','1',',1,','1','0','1','0');");
E_D("replace into `www_96kaifa_com_enewstable` values('9','game','网游系统数据表','网游系统数据表','0',',1,','1','0','9','0');");
E_D("replace into `www_96kaifa_com_enewstable` values('10','danji','小游戏系统数据表','小游戏系统数据表','0',',1,','1','0','10','0');");
E_D("replace into `www_96kaifa_com_enewstable` values('11','libao','礼包系统数据表','礼包系统数据表','0',',1,','1','0','11','0');");
E_D("replace into `www_96kaifa_com_enewstable` values('12','kaifu','开服系统数据表','开服系统数据表','0',',1,','1','0','12','0');");

@include("../../inc/footer.php");
?>