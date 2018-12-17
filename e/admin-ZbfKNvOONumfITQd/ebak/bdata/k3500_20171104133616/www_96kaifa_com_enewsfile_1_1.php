<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsfile_1`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('1','1000010000000783','fea3aa79b53d76c7f189d7d16b66b0c0.jpg','27715','2017-10-24','96kaifa','1508853193','4','1.jpg','1','0','783','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('2','0','eaddc02376fa5383a6a7944632563c8a.jpg','11036','2017-10-26','96kaifa','1509004148','8','1.jpg','1','0','1509000734','1509000734','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('3','1000110000000001','8d8477ba7a9a05946dc69d195cedc0b0.jpg','11036','2017-10-26','96kaifa','1509004357','8','1.jpg','1','0','1','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('4','1000110000000002','22072aaa1c940d5766bd9664cfc16fec.jpg','10100','2017-10-26','96kaifa','1509004494','8','2.jpg','1','0','2','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('5','1000110000000003','1258e138dc976b535dc72a84da834193.gif','38228','2017-10-26','96kaifa','1509004820','8','3.gif','1','0','3','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('6','1000110000000004','e84dbb94b7388d9b604ecd669ac42b02.jpg','11706','2017-10-26','96kaifa','1509004967','8','4.jpg','1','0','4','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('7','1000110000000005','fa49f39f79cb9ece6c050e388436d6f0.png','11536','2017-10-26','96kaifa','1509005149','8','5.png','1','0','5','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('8','1000110000000006','359449facb2decd210adcd36dcf8a4c5.jpg','10194','2017-10-26','96kaifa','1509005227','8','6.jpg','1','0','6','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('9','1000110000000007','8be888ff3807c7a6cbb752bd2940a062.jpg','6844','2017-10-26','96kaifa','1509005547','8','7.jpg','1','0','7','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('10','1000110000000008','82ba42e13d34809397482a53dda21b7c.png','33460','2017-10-26','96kaifa','1509007394','8','1.png','1','0','8','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('11','1000110000000009','9d4e7c31c7a1992890d8b54bedf858ff.png','12530','2017-10-26','96kaifa','1509007760','8','2.png','1','0','9','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('12','1000110000000010','d9ef3d6787a515b39ba4309fe77da6bb.gif','91843','2017-10-26','96kaifa','1509011525','8','1.gif','1','0','10','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('13','1000110000000011','34e5b9f977894f291b9efc1ed99dad54.png','14111','2017-10-26','96kaifa','1509011676','8','2.png','1','0','11','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('14','1000110000000012','56295c80bcaf5b6647b2822da679d167.jpg','10159','2017-10-26','96kaifa','1509011797','8','3.jpg','1','0','12','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('15','1000110000000013','658ab510e46d593deda4402ee0d9cc24.gif','170699','2017-10-26','96kaifa','1509012054','8','4.gif','1','0','13','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('16','1000110000000014','6f257668398875fec7a88164bdd4f56d.png','34281','2017-10-26','96kaifa','1509012296','8','5.png','1','0','14','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('17','1000110000000015','feba751b85779ac24865bf588f7304f1.gif','48656','2017-10-26','96kaifa','1509012587','8','6.gif','1','0','15','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('18','1000110000000016','3751fa76a4b7d9bd1111a631ae7897c4.jpg','10310','2017-10-26','96kaifa','1509012818','8','7.jpg','1','0','16','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('19','1000110000000017','b583d0798705de2d24b099a81ccff07f.gif','24808','2017-10-26','96kaifa','1509014253','8','1.gif','1','0','17','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('20','1000110000000018','11ffdcd1cf8e2a853fd740e34f51e70b.jpg','10987','2017-10-26','96kaifa','1509014702','8','6.jpg','1','0','18','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('21','1000110000000019','14bed25e57c925ab0667d4026d196cf3.jpg','9001','2017-10-26','96kaifa','1509014816','8','7.jpg','1','0','19','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('22','1000110000000020','648f389862826b8ae738cd869800b916.png','33156','2017-10-26','96kaifa','1509014977','8','8.png','1','0','20','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('23','1000110000000021','e8345ee134daeb81676bcb14921c3df1.png','34281','2017-10-26','96kaifa','1509015728','8','9.png','1','0','21','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('24','1000090000000862','f9e0574072476d759cb633daa945c25b.gif','394952','2017-10-28','96kaifa','1509161229','6','1.gif','1','0','862','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('25','1000090000000837','0405c1441f9f04702ee0edc9d2500e95.gif','152448','2017-10-28','96kaifa','1509161264','6','2.gif','1','0','837','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('26','1000090000000925','b99db574db5f30f49737d3b7875780e8.jpg','52059','2017-10-28','96kaifa','1509161658','6','3.JPG','1','0','925','0','0','0');");
E_D("replace into `www_96kaifa_com_enewsfile_1` values('27','1000090000000927','875943cc6c8f9de6c8f948a4c3e074e7.gif','499146','2017-10-28','96kaifa','1509161686','6','4.gif','1','0','927','0','0','0');");

@include("../../inc/footer.php");
?>