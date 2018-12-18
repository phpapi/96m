<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewspubvar`;");
E_C("CREATE TABLE `www_96kaifa_com_enewspubvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(20) NOT NULL DEFAULT '',
  `varvalue` text NOT NULL,
  `varsay` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tocache` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `classid` (`classid`),
  KEY `tocache` (`tocache`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewspubvar` values('1','www_96kaifa_com_name','网站名称','仿3500游戏','','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('2','www_96kaifa_com_url','网址（带http）','http://www.350.com','','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('3','www_96kaifa_com_url2','网址（不带http）','www.350.com','','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('4','www_96kaifa_com_murl','手机版URL','http://m.350.com','','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('5','www_96kaifa_com_ba','备案号','粤ICP备17024501号-2','','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('6','www_96kaifa_com_tongji','统计代码','','','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('7','www_96kaifa_com_qq','QQ号','21617372','','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('8','www_96kaifa_com_wx','微信公众号','96kaifa','','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('9','www_96kaifa_com_qun','QQ群链接','http://shang.qq.com/wpa/qunwpa?idkey=9e9c89e736ef5e888ed9979bebfa50127b1206a0d3ddbea705e63b00e761868b','','0','0','1');");
E_D("replace into `www_96kaifa_com_enewspubvar` values('10','www_96kaifa_com_weiduan','微端下载链接','#广告链接后台修改','','0','0','1');");

@include("../../inc/footer.php");
?>