<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewslink`;");
E_C("CREATE TABLE `www_96kaifa_com_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewslink` values('1','96KaiFa源码','','https://www.96kaifa.com','2017-10-28 10:04:22','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('2','网站源码','','https://www.96kaifa.com','2017-10-28 10:04:32','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('3','网站模版','','https://www.96kaifa.com','2017-10-28 10:04:42','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('4','帝国cms模版','','https://www.96kaifa.com','2017-10-28 10:04:57','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('5','下载站模版','','https://www.96kaifa.com/code-下载站-0.html','2017-10-28 10:06:20','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('6','老男人','','https://www.96kaifa.com/code/51.html','2017-10-28 10:06:33','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('7','笨手机','','https://www.96kaifa.com/code/32.html','2017-10-28 10:06:55','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('8','剧情狗','','https://www.96kaifa.com/code/67.html','2017-10-28 10:07:13','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('9','优游网','','https://www.96kaifa.com/code/66.html','2017-10-28 10:07:29','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('10','千库网','','https://www.96kaifa.com/code/70.html','2017-10-28 10:07:42','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('11','网站源码','','http://www.boydown.com/','2017-10-28 10:07:54','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('12','男人街','','https://www.96kaifa.com/code/1.html','2017-10-28 10:08:20','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('13','发型站','','https://www.96kaifa.com/code/53.html','2017-10-28 10:08:33','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('14','爱丽网','','https://www.96kaifa.com/code/54.html','2017-10-28 10:08:44','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('15','VR界','','https://www.96kaifa.com/code/49.html','2017-10-28 10:08:56','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('16','北京时间','','https://www.96kaifa.com/code/48.html','2017-10-28 10:09:19','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('17','系统天堂','','https://www.96kaifa.com/code/35.html','2017-10-28 10:09:32','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('18','系统之家','','https://www.96kaifa.com/code/59.html','2017-10-28 10:09:51','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('19','开淘网','','https://www.96kaifa.com/code/60.html','2017-10-28 10:10:07','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('20','猎奇吧','','https://www.96kaifa.com/code/56.html','2017-10-28 10:10:26','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('21','超人软件','','https://www.96kaifa.com/code/69.html','2017-10-28 10:11:48','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('22','3500游戏','','https://www.96kaifa.com/code/71.html','2017-10-28 10:12:03','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('23','东方头条','','https://www.96kaifa.com/code/62.html','2017-10-28 10:12:56','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('24','八宝网','','https://www.96kaifa.com/code/61.html','2017-10-28 10:13:11','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('25','吾爱诗经网','','https://www.96kaifa.com/code/64.html','2017-10-28 10:13:40','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('26','新趣头条','','https://www.96kaifa.com/code/65.html','2017-10-28 10:13:52','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('27','腾牛健康网','','https://www.96kaifa.com/code/68.html','2017-10-28 10:14:27','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('28','小皮手游网','','https://www.96kaifa.com/code/44.html','2017-10-28 10:14:54','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('29','当下软件园','','https://www.96kaifa.com/code/40.html','2017-10-28 10:16:04','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('30','鳄鱼下载站','','https://www.96kaifa.com/code/42.html','2017-10-28 10:16:13','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('31','绿茶软件园','','https://www.96kaifa.com/code/31.html','2017-10-28 10:16:26','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('32','XP系统之家','','https://www.96kaifa.com/code/34.html','2017-10-28 10:16:51','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('33','微信小程序','','https://www.96kaifa.com/code/47.html','2017-10-28 10:17:02','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('34','复兴军事网','','https://www.96kaifa.com/code/55.html','2017-10-28 10:17:12','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('35','72G手游网','','https://www.96kaifa.com/code/58.html','2017-10-28 10:17:42','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('39','96KaiFa源码','','https://www.96kaifa.com','2017-11-03 15:59:48','0','88','31','_blank','0','','','1','0','2');");
E_D("replace into `www_96kaifa_com_enewslink` values('37','女性健康网','','https://www.96kaifa.com/code/41.html','2017-10-28 10:18:53','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('38','PP助手','','https://www.96kaifa.com/code/39.html','2017-10-28 10:19:26','0','88','31','_blank','0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('40','网站模板','','https://www.96kaifa.com','2017-11-03 16:00:00','0','88','31','_blank','0','','','1','0','2');");
E_D("replace into `www_96kaifa_com_enewslink` values('41','网站源码','','http://www.boydown.com','2017-11-03 16:00:22','0','88','31','_blank','0','','','1','0','2');");
E_D("replace into `www_96kaifa_com_enewslink` values('42','帝国cms模版','','https://www.96kaifa.com/','2017-11-03 16:00:59','0','88','31','_blank','0','','','1','0','2');");

@include("../../inc/footer.php");
?>