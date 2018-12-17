<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewssearch`;");
E_C("CREATE TABLE `www_96kaifa_com_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewssearch` values('1','桃花','1509175473','title','32','192.168.0.188','','3','newstime','0','5f0c10c1b76ef12fcc89ffe330e84f86','news','1','0',' and ((title LIKE ''%桃花%''))','0');");
E_D("replace into `www_96kaifa_com_enewssearch` values('2','桃花','1509178873','title','1','192.168.0.188','','4','newstime','0','9c9aaaa58446d6b05ea3947dae49a604','game','1','0',' and ((title LIKE ''%桃花%''))','0');");

@include("../../inc/footer.php");
?>