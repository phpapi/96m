<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsclassf`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsclassf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsclassf` values('1','seotitle','SEO标题','text','\r\n<input name=\\\\\"seotitle\\\\\" type=\\\\\"text\\\\\" id=\\\\\"seotitle\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(\$addr[seotitle])?>\\\\\" size=\\\\\"60\\\\\">\r\n','','0','VARCHAR','255','','60');");

@include("../../inc/footer.php");
?>