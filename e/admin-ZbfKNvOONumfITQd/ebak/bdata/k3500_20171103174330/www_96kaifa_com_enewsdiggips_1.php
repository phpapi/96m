<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsdiggips`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsdiggips` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL DEFAULT '0',
  `ips` mediumtext NOT NULL,
  KEY `classid` (`classid`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsdiggips` values('6','922',',192.168.0.188,');");
E_D("replace into `www_96kaifa_com_enewsdiggips` values('6','918',',192.168.0.188,');");
E_D("replace into `www_96kaifa_com_enewsdiggips` values('6','863',',192.168.0.188,');");

@include("../../inc/footer.php");
?>