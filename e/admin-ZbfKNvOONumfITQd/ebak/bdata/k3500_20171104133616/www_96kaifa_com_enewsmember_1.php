<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsmember`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsmember` values('1','www.96kaifa.com','6c0bdcae59f2354a4fcd7ea4caaf7b4e','7K0y9FPwH38nnkegTKRt','www@96kaifa.com','1509268591','1','0','0','0.00','0','0','1','vKcCM5','aNodVPFgY9Ri');");
E_D("replace into `www_96kaifa_com_enewsmember` values('2','www.boydown.com','9cd5a2b023b63245a49df17ff1a9c3ad','33WDtBW95LIDWT1uEUOf','www@boydown.com','1509358295','1','0','0','0.00','0','1','1','lRfAaC','H1eZiTvWKzjw');");
E_D("replace into `www_96kaifa_com_enewsmember` values('3','96kaifa.com','76008d1405abc5d241ec017e63b4abfb','dltEWpgA1i5jSjI4i42l','w@96kaifa.com','1509503358','1','0','0','0.00','0','1','1','YICQYS','VNAlGj3G7uqH');");

@include("../../inc/footer.php");
?>