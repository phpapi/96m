<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsclass`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsclass` values('1','0','资讯','|2|3|4|5|','0','20','10','0','0','1','','0','zixun','.html','Y-m-d','0','.html','0','1','10','10','10','','0','10','','10','1','1','10','资讯','1','0','1','news','0','0','2','2','id DESC','newstime DESC','游戏资讯频道提供最新H5游戏资讯、手机页游资讯。','','1','0','0','0','0','0','0','','0','0','0','H5游戏资讯','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1508810242');");
E_D("replace into `www_96kaifa_com_enewsclass` values('2','1','新闻','','0','20','10','1','0','1','|1|','1','zixun/xinwen','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','新闻','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','zixun','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','67','67','1508810336');");
E_D("replace into `www_96kaifa_com_enewsclass` values('3','1','攻略','','0','20','10','1','0','1','|1|','1','zixun/gonglue','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','攻略','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','zixun','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','78','78','1508810356');");
E_D("replace into `www_96kaifa_com_enewsclass` values('4','1','活动','','0','20','10','1','0','1','|1|','1','zixun/huodong','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','活动','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','zixun','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','403','403','1508810382');");
E_D("replace into `www_96kaifa_com_enewsclass` values('5','1','公告','','0','20','10','1','0','1','|1|','1','zixun/gonggao','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','公告','1','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','zixun','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','243','243','1508810411');");
E_D("replace into `www_96kaifa_com_enewsclass` values('6','0','网游','','0','30','10','10','0','9','','1','game','.html','','0','.html','0','1','10','10','10','','0','1','','10','9','1','10','网游','1','0','9','game','0','0','2','2','id DESC','newstime DESC','新游频道为用户提供最新的H5游戏、手机页游，新游及时玩，就在3500游戏H5新游频道。','','1','0','0','0','0','0','0','','0','0','0','H5新游,H5游戏,手机页游','9','0','0','0','0','0','game','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','135','135','1508827022');");
E_D("replace into `www_96kaifa_com_enewsclass` values('7','0','小游戏','','0','30','10','11','0','11','','1','danji','.html','','0','.html','0','1','10','10','10','','0','5','','10','10','1','10','小游戏','1','0','10','danji','0','0','2','2','id DESC','newstime DESC','单机在线小游戏平台提供时下最好玩的在线手机H5小游戏,手机网页小游戏在线玩。','','1','0','0','0','0','0','0','','0','0','0','手机在线小游戏,H5小游戏','11','1','0','0','0','0','danji','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','125','125','1508907595');");
E_D("replace into `www_96kaifa_com_enewsclass` values('8','0','礼包','','0','20','10','12','0','13','','1','libao','.html','','0','.html','0','1','10','10','10','','0','7','','10','11','1','10','礼包','0','0','11','libao','0','0','2','2','id DESC','newstime DESC','礼包中心为广大用户提供H5游戏礼包、激活码、新手卡、兑换码等等，更多手机页游礼包码，尽在礼包中心。','','1','0','0','0','0','0','0','','0','0','0','H5游戏礼包,手机页游礼包','13','1','0','0','0','0','libao','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','21','21','1509000597');");
E_D("replace into `www_96kaifa_com_enewsclass` values('9','0','开服表','','0','30','10','13','0','14','','1','kaifu','.html','','0','.html','0','1','10','10','10','','0','20','','10','12','1','10','开服表','1','0','12','kaifu','0','0','2','2','id DESC','newstime DESC','开服表为用户提供最新的以及未来第一时间的H5游戏开服时间表，包含最热手机页游开服时间表、开测礼包提醒等等。','','1','0','0','0','0','0','0','','0','0','0','H5游戏开服表,手机页游开服表,H5游戏','14','1','0','0','0','0','kaifu','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','21','21','1509066335');");

@include("../../inc/footer.php");
?>