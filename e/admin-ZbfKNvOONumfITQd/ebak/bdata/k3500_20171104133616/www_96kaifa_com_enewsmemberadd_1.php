<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsmemberadd`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsmemberadd` (
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `oicq` varchar(25) NOT NULL DEFAULT '',
  `msn` varchar(120) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zip` varchar(8) NOT NULL DEFAULT '',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `homepage` varchar(200) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `company` varchar(255) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `userpic` varchar(200) NOT NULL DEFAULT '',
  `spacename` varchar(255) NOT NULL DEFAULT '',
  `spacegg` text NOT NULL,
  `viewstats` int(11) NOT NULL DEFAULT '0',
  `regip` varchar(20) NOT NULL DEFAULT '',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `regipport` varchar(6) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsmemberadd` values('1','','','','','','','','1','','','','','/d/file/p/2017-11-02/44bad9e15154566ac29a568157ed444e.jpg','','','1','192.168.0.188','1509763134','192.168.0.188','42','58725','59160');");
E_D("replace into `www_96kaifa_com_enewsmemberadd` values('2','','','','','','','','1','www.boydown.com','www.boydown.com','','','','','','0','192.168.0.188','1509358295','192.168.0.188','1','59868','59868');");
E_D("replace into `www_96kaifa_com_enewsmemberadd` values('3','','','','','','','','1','','','','','','','','0','192.168.0.188','1509503358','192.168.0.188','1','51772','51772');");

@include("../../inc/footer.php");
?>