<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewslinkclass`;");
E_C("CREATE TABLE `www_96kaifa_com_enewslinkclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewslinkclass` values('1','电脑端');");
E_D("replace into `www_96kaifa_com_enewslinkclass` values('2','手机端');");

@include("../../inc/footer.php");
?>