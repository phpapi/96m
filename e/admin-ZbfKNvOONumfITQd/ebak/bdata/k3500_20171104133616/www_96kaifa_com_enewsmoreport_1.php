<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsmoreport`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsmoreport` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` char(60) NOT NULL DEFAULT '',
  `purl` char(255) NOT NULL DEFAULT '',
  `ppath` char(255) NOT NULL DEFAULT '',
  `postpass` char(120) NOT NULL DEFAULT '',
  `postfile` char(255) NOT NULL DEFAULT '',
  `tempgid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `mustdt` tinyint(1) NOT NULL DEFAULT '0',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `closeadd` tinyint(1) NOT NULL DEFAULT '0',
  `headersign` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`),
  KEY `isclose` (`isclose`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsmoreport` values('1','主访问端','/','F:/wwwroot/3500/web/','86g7ejp3LDSylacxZcKOP4Wd4iq3SV8W1AmdVoiHXiNUamcwrayyITdJn64X','','0','0','0','0','');");
E_D("replace into `www_96kaifa_com_enewsmoreport` values('2','手机访问端','http://m.350.com/','F:/wwwroot/3500/m/','iFjS4Ec3Hi8yU9Odjg1Clzs66IeK3ZqscDqXNDT7ofcGM871y4rwJtsNPnN2','','2','0','0','0','');");

@include("../../inc/footer.php");
?>