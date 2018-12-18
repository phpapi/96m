<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsclassadd`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  `seotitle` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('1','','','最新H5游戏资讯');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('2','','','新闻');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('3','','','攻略');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('4','','','活动');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('5','','','公告');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('6','','','最新H5游戏_最新手机页游大全');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('7','','','最热最新手机在线单机小游戏,H5小游戏大全');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('8','','','H5游戏礼包_手机页游礼包_激活码');");
E_D("replace into `www_96kaifa_com_enewsclassadd` values('9','','','最新H5游戏开服表_手机页游开服开测表');");

@include("../../inc/footer.php");
?>