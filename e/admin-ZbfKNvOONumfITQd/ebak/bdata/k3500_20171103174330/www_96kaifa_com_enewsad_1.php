<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsad`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsad` (
  `adid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `picurl` varchar(255) NOT NULL DEFAULT '',
  `url` text NOT NULL,
  `pic_width` int(10) unsigned NOT NULL DEFAULT '0',
  `pic_height` int(10) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `adtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `alt` varchar(120) NOT NULL DEFAULT '',
  `starttime` date NOT NULL DEFAULT '0000-00-00',
  `endtime` date NOT NULL DEFAULT '0000-00-00',
  `adsay` varchar(255) NOT NULL DEFAULT '',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titlecolor` varchar(10) NOT NULL DEFAULT '',
  `htmlcode` text NOT NULL,
  `t` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ylink` tinyint(1) NOT NULL DEFAULT '0',
  `reptext` text NOT NULL,
  PRIMARY KEY (`adid`),
  KEY `classid` (`classid`),
  KEY `t` (`t`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsad` values('1','','','804','100','0','1','1','资讯内容页-正文下-横幅','','','2017-10-24','2027-11-23','','','','<div style=\"width:802px;height:98px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;background:#fff; \">id_1广告位-804*100  &nbsp;唯一官网：<a href=\"https://www.96kaifa.com\" target=\"_blank\" style=\"color:#ed252f;\">www.96kaifa.com</a></div>','2','0','');");
E_D("replace into `www_96kaifa_com_enewsad` values('2','','','336','280','0','1','1','右栏矩形1','','','2017-10-24','2027-11-23','','','','<div style=\"width:334px;height:278px;overflow:hidden;margin:auto;border:1px #f60 dashed;text-align:center;background:#fff; \">id_2广告位-336*280  <br>唯一官网：<a href=\"https://www.96kaifa.com\" target=\"_blank\" style=\"color:#ed252f;\">www.96kaifa.com</a></div>','2','0','');");

@include("../../inc/footer.php");
?>