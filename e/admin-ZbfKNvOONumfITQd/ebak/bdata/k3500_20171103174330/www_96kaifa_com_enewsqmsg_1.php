<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsqmsg`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsqmsg` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL DEFAULT '',
  `msgtext` text NOT NULL,
  `haveread` tinyint(1) NOT NULL DEFAULT '0',
  `msgtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `to_username` varchar(30) NOT NULL DEFAULT '',
  `from_userid` int(10) unsigned NOT NULL DEFAULT '0',
  `from_username` varchar(30) NOT NULL DEFAULT '',
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `issys` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`),
  KEY `to_username` (`to_username`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsqmsg` values('4','96KaiFa源码功能测试','96KaiFa源码唯一官网：www.96kaifa.com','1','2017-11-02 16:21:42','www.96kaifa.com','0','','1','1');");
E_D("replace into `www_96kaifa_com_enewsqmsg` values('2','96KaiFa源码功能测试','测试测试测试测试','0','2017-11-02 15:35:55','www.boydown.com','0','','1','1');");
E_D("replace into `www_96kaifa_com_enewsqmsg` values('3','96KaiFa源码功能测试','测试测试测试测试','0','2017-11-02 15:35:55','96kaifa.com','0','','1','1');");
E_D("replace into `www_96kaifa_com_enewsqmsg` values('5','96KaiFa源码功能测试','96KaiFa源码唯一官网：www.96kaifa.com','0','2017-11-02 16:21:42','www.boydown.com','0','','1','1');");
E_D("replace into `www_96kaifa_com_enewsqmsg` values('6','96KaiFa源码功能测试','96KaiFa源码唯一官网：www.96kaifa.com','0','2017-11-02 16:21:42','96kaifa.com','0','','1','1');");

@include("../../inc/footer.php");
?>