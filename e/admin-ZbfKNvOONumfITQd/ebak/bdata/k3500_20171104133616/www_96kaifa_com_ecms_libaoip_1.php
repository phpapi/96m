<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_ecms_libaoip`;");
E_C("CREATE TABLE `www_96kaifa_com_ecms_libaoip` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `haoid` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` char(255) NOT NULL DEFAULT '0',
  `hao` char(255) NOT NULL DEFAULT '',
  `newstime` char(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('21','21','1','ajMikSnRhg9t','2017-10-29 09:56:33');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('22','10','1','7ZsSL6PgIIBd','2017-10-30 12:14:13');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('23','11','1','7ZsSL6PgIIBd','2017-10-30 12:14:45');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('24','8','1','b3twobjZVwIF','2017-10-30 12:15:06');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('25','15','1','7ZsSL6PgIIBd','2017-10-30 12:24:10');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('26','2','1','Np9WxbAJDlu3','2017-10-30 12:52:39');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('27','14','1','7ZsSL6PgIIBd','2017-10-30 01:09:39');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('28','3','1','Np9WxbAJDlu3','2017-10-30 04:37:59');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('29','4','1','b3twobjZVwIF','2017-10-30 04:42:26');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('30','1','1','Np9WxbAJDlu3','2017-10-30 04:42:38');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('31','17','1','7ZsSL6PgIIBd','2017-10-30 05:36:31');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('32','12','1','7ZsSL6PgIIBd','2017-10-30 06:08:35');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('33','12','2','L2lk0q90UVin','2017-10-30 06:11:47');");
E_D("replace into `www_96kaifa_com_ecms_libaoip` values('34','16','1','7ZsSL6PgIIBd','2017-11-04 10:07:34');");

@include("../../inc/footer.php");
?>