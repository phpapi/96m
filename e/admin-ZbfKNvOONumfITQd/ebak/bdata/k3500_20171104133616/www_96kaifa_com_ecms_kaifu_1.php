<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_ecms_kaifu`;");
E_C("CREATE TABLE `www_96kaifa_com_ecms_kaifu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(1) NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `yxid` int(11) NOT NULL DEFAULT '0',
  `fuwuqi` text NOT NULL,
  `kfsj` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('1','9','0','0','0','0','','1','1','96kaifa','0','0','0','0','0','0','0','1509075016','1509080250','1','0','0','','/kaifu/1.html','1','1','1','','传奇世界正版H5','1540610946','','828','40服','2018-11-27 11:00:06');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('2','9','0','0','0','0','','2','1','96kaifa','0','0','0','0','0','0','0','1509076059','1509080261','1','0','0','','/kaifu/2.html','1','1','1','','宠物精灵','1540612026','','871','超级球','2018-10-27 20:00:06');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('3','9','0','0','0','0','','3','1','96kaifa','0','0','0','0','0','0','0','1509076089','1509082820','1','0','0','','/kaifu/3.html','1','1','1','','梦道','1509076061','','837','S91','2018-12-27 00:10:41');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('4','9','0','0','0','0','','4','1','96kaifa','0','0','0','0','0','0','0','1509076125','1509082865','1','0','0','','/kaifu/4.html','1','1','1','','口袋妖怪联盟','1509076091','','916','557区','2018-12-30 08:00:11');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('5','9','0','0','0','0','','5','1','96kaifa','0','0','0','0','0','0','0','1509078339','1509082861','1','0','0','','/kaifu/5.html','1','1','1','','开心国王','1509078317','','822','147区','2018-11-10 12:00:17');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('6','9','0','0','0','0','','6','1','96kaifa','0','0','0','0','0','0','0','1509078380','1509078380','1','0','0','','/kaifu/6.html','1','1','1','','决战沙城','1509078355','','918','1330区','2018-11-10 11:00:55');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('7','9','0','0','0','0','','7','1','96kaifa','0','0','0','0','0','0','0','1509078456','1509080271','1','0','0','','/kaifu/7.html','1','1','1','','飘飘欲仙','1540614382','','840','王者11服','2018-10-27 12:26:22');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('8','9','0','0','0','0','','8','1','96kaifa','0','0','0','0','0','0','0','1509078490','1509082854','1','0','0','','/kaifu/8.html','1','1','1','','龙城霸业（新）','1509078470','','844','S408','2018-11-01 12:00:50');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('9','9','0','0','0','0','','9','1','96kaifa','0','0','0','0','0','0','0','1509078555','1509078555','1','0','0','','/kaifu/9.html','1','1','1','','极品三国','1509078492','','884','275服','2018-01-02 10:00:12');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('10','9','0','0','0','0','','10','1','96kaifa','0','0','0','0','0','0','0','1509078593','1509078593','1','0','0','','/kaifu/10.html','1','1','1','','武道至尊','1509078557','','891','S229','2018-01-30 08:00:17');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('11','9','0','0','0','0','','11','1','96kaifa','0','0','0','0','0','0','0','1509078648','1509078648','1','0','0','','/kaifu/11.html','1','1','1','','教主之家','1509078595','','795','势如破竹009','2018-03-03 12:00:55');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('12','9','0','0','0','0','','12','1','96kaifa','0','0','0','0','0','0','0','1509078730','1509614341','1','0','0','','/kaifu/12.html','1','1','1','','仙剑客栈','1509078650','','800','蜀山名人','2027-12-01 12:00:50');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('13','9','0','0','0','0','','13','1','96kaifa','0','0','0','0','0','0','0','1509078776','1509614349','1','0','0','','/kaifu/13.html','1','1','1','','百战沙城','1509078751','','851','百战162区','2019-02-03 12:00:31');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('14','9','0','0','0','0','','14','1','96kaifa','0','0','0','0','0','0','0','1509078798','1509082782','1','0','0','','/kaifu/14.html','1','1','1','','大宗师','1509078779','','877','139服','2018-05-05 12:00:59');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('15','9','0','0','0','0','','15','1','96kaifa','0','0','0','0','0','0','0','1509078880','1509078880','1','0','0','','/kaifu/15.html','1','1','1','','荣耀纪元','1509078800','','885','纪元120区','2018-01-01 12:00:20');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('16','9','0','0','0','0','','16','1','96kaifa','0','0','0','0','0','0','0','1509078901','1509082840','1','0','0','','/kaifu/16.html','1','1','1','','绝世神功','1509078882','','912','357区','2018-01-05 12:00:42');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('17','9','0','0','0','0','','17','1','96kaifa','0','0','0','0','0','0','0','1509079003','1509079003','1','0','0','','/kaifu/17.html','1','1','1','','蜀山世界','1509078904','','906','英雄豪杰','2018-03-03 12:00:04');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('18','9','0','0','0','0','','18','1','96kaifa','0','0','0','0','0','0','0','1509079158','1509079158','1','0','0','','/kaifu/18.html','1','1','1','','传奇来了','1509079005','','839','45服','2018-05-05 12:00:45');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('19','9','0','0','0','0','','19','1','96kaifa','0','0','0','0','0','0','0','1509079957','1509079957','1','0','0','','/kaifu/19.html','1','1','1','','梦想海岛王','1509079342','','852','76服-宠辱不惊','2018-01-30 12:00:22');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('20','9','0','0','0','0','','20','1','96kaifa','0','0','0','0','0','0','0','1509080056','1509614360','1','0','0','','/kaifu/20.html','1','1','1','','开心国王','1509080038','','822','148区','2018-12-10 12:00:58');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('21','9','0','0','0','0','','21','1','96kaifa','0','0','0','0','0','0','0','1509080142','1509699733','1','0','0','','/kaifu/21.html','1','1','1','','莽荒纪正版','1509080085','','857','摘星府-163','2018-11-03 17:01:45');");

@include("../../inc/footer.php");
?>