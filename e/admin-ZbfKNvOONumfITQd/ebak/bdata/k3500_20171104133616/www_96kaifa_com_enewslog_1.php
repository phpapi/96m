<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewslog`;");
E_C("CREATE TABLE `www_96kaifa_com_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewslog` values('1','96kaifa','2017-10-24 09:40:13','192.168.0.188','1','','0','51156');");
E_D("replace into `www_96kaifa_com_enewslog` values('2','96kaifa','2017-10-25 09:47:13','192.168.0.188','1','','0','52639');");
E_D("replace into `www_96kaifa_com_enewslog` values('3','96kaifa','2017-10-25 16:14:08','192.168.0.188','1','','0','53158');");
E_D("replace into `www_96kaifa_com_enewslog` values('4','96kaifa','2017-10-26 09:27:07','192.168.0.188','1','','0','49843');");
E_D("replace into `www_96kaifa_com_enewslog` values('5','96kaifa','2017-10-27 07:58:47','192.168.0.188','1','','0','51569');");
E_D("replace into `www_96kaifa_com_enewslog` values('6','96kaifa','2017-10-28 10:45:27','192.168.0.188','1','','0','60621');");
E_D("replace into `www_96kaifa_com_enewslog` values('7','96kaifa','2017-10-27 10:45:50','192.168.0.188','1','','0','60650');");
E_D("replace into `www_96kaifa_com_enewslog` values('8','96kaifa','2017-10-28 09:34:10','192.168.0.188','1','','0','51722');");
E_D("replace into `www_96kaifa_com_enewslog` values('9','96kaifa','2017-10-28 11:24:39','192.168.0.188','1','','0','51003');");
E_D("replace into `www_96kaifa_com_enewslog` values('10','96kaifa','2017-10-28 14:57:36','192.168.0.188','1','','0','50319');");
E_D("replace into `www_96kaifa_com_enewslog` values('11','96kaifa','2017-10-28 14:58:20','192.168.0.188','1','','0','50325');");
E_D("replace into `www_96kaifa_com_enewslog` values('12','96kaifa','2017-10-29 09:28:53','192.168.0.188','1','','0','52135');");
E_D("replace into `www_96kaifa_com_enewslog` values('13','96kaifa','2017-10-29 22:23:47','192.168.0.188','1','','0','60937');");
E_D("replace into `www_96kaifa_com_enewslog` values('14','96kaifa','2017-10-30 12:12:18','192.168.0.188','1','','0','57840');");
E_D("replace into `www_96kaifa_com_enewslog` values('15','96kaifa','2017-10-31 17:11:07','192.168.0.188','1','','0','57200');");
E_D("replace into `www_96kaifa_com_enewslog` values('16','96kaifa','2017-11-01 10:04:16','192.168.0.188','1','','0','49672');");
E_D("replace into `www_96kaifa_com_enewslog` values('17','96kaifa','2017-11-02 08:43:00','192.168.0.188','1','','0','50113');");
E_D("replace into `www_96kaifa_com_enewslog` values('18','96kaifa','2017-11-02 14:20:07','192.168.0.188','1','','0','56301');");
E_D("replace into `www_96kaifa_com_enewslog` values('19','96kaifa','2017-11-02 18:26:35','192.168.0.188','1','','0','61242');");
E_D("replace into `www_96kaifa_com_enewslog` values('20','96kaifa','2017-11-03 09:52:28','192.168.0.188','1','','0','50230');");
E_D("replace into `www_96kaifa_com_enewslog` values('21','96kaifa','2017-11-03 18:49:06','192.168.0.188','1','','0','60113');");
E_D("replace into `www_96kaifa_com_enewslog` values('22','96kaifa','2017-11-03 21:02:56','192.168.0.188','1','','0','59717');");
E_D("replace into `www_96kaifa_com_enewslog` values('23','96kaifa','2017-11-04 09:52:42','192.168.0.188','1','','0','54018');");

@include("../../inc/footer.php");
?>