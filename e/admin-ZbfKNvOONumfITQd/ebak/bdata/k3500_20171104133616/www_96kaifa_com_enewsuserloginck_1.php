<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsuserloginck`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsuserloginck` values('1','c199961bc5b01dc550f570bcf0d46c80');");

@include("../../inc/footer.php");
?>