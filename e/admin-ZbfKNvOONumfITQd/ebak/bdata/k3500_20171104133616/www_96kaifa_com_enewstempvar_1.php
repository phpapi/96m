<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewstempvar`;");
E_C("CREATE TABLE `www_96kaifa_com_enewstempvar` (
  `varid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `myvar` varchar(60) NOT NULL DEFAULT '',
  `varname` varchar(60) NOT NULL DEFAULT '',
  `varvalue` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`varid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewstempvar` values('1','www_96kaifa_com_header','页面头部','<div class=\\\\\"topbox\\\\\">\r\n  <div class=\\\\\"boxin clearfix\\\\\">\r\n    <div class=\\\\\"topl fl\\\\\"> <span class=\\\\\"home\\\\\"><a href=\\\\\"/\\\\\">游戏首页</a></span>\r\n      <ul>\r\n        <li>|<a href=\\\\\"<?=\$public_r[\\\\''add_www_96kaifa_com_murl\\\\'']?>\\\\\" target=\\\\\"_blank\\\\\">手机版</a></li>\r\n        <li>|<a href=\\\\\"#\\\\\" target=\\\\\"_blank\\\\\">客户端下载</a></li>\r\n        <li>|<a href=\\\\\"javascript:;\\\\\" class=\\\\\"wx_show\\\\\">关注微信</a>\r\n          <div class=\\\\\"wx_hide\\\\\"> <i class=\\\\\"angle\\\\\"></i> <img src=\\\\\"/96kaifa/statics/home/images/wx_code.jpg\\\\\" width=\\\\\"103\\\\\" height=\\\\\"103\\\\\"> <span>关注微信公众号</span> </div>\r\n        </li>\r\n        <li>|<a href=\\\\\"#\\\\\" target=\\\\\"_blank\\\\\">开放平台</a></li>\r\n      </ul>\r\n    </div>\r\n    <div class=\\\\\"topr fr\\\\\">\r\n      <div class=\\\\\"login_ok\\\\\">\r\n	<!-- 登录 -->\r\n	<script>\r\n	document.write(\\\\''<script src=\\\\\"/e/member/login/loginjs.php?t=\\\\''+Math.random()+\\\\''\\\\\"><\\\\''+\\\\''/script>\\\\'');\r\n	\$(function(){\r\n	var dqurl = window.location.href;\r\n	\$(\\\\''#dquurl\\\\'').val(dqurl);\r\n	})\r\n	</script>\r\n	<!-- 登录 end-->\r\n	  </div>\r\n      <a href=\\\\\"javascript:;\\\\\" onClick=\\\\\"AddFavorite();\\\\\">收藏本站</a> </div>\r\n  </div>\r\n</div>\r\n<div class=\\\\\"header\\\\\">\r\n  <div class=\\\\\"header-top\\\\\">\r\n    <div class=\\\\\"in\\\\\">\r\n      <div class=\\\\\"logo fl\\\\\"><a href=\\\\\"/\\\\\"><img src=\\\\\"/96kaifa/statics/home/images/logo.png\\\\\" alt=\\\\\"<?=\$public_r[\\\\''add_www_96kaifa_com_name\\\\'']?>\\\\\"></a></div>\r\n      <div class=\\\\\"search fr\\\\\">\r\n        <form action=\\\\\"/search/game.php\\\\\" method=\\\\\"get\\\\\" target=\\\\\"_blank\\\\\" name=\\\\\"searchTop\\\\\">\r\n          <div class=\\\\\"search_box tr\\\\\">\r\n            <input type=\\\\\"text\\\\\" id=\\\\\"bdcsMain\\\\\" name=\\\\\"key\\\\\" class=\\\\\"sech_keyword\\\\\" placeholder=\\\\\"请输入游戏名称\\\\\">\r\n            <input type=\\\\\"submit\\\\\" value=\\\\\"搜索\\\\\" class=\\\\\"sech_btn\\\\\">\r\n          </div>\r\n        </form>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <div class=\\\\\"nav\\\\\">\r\n    <div class=\\\\\"in\\\\\">\r\n      <ul>\r\n<?php if(\$GLOBALS[navclassid]==\\\\''\\\\'' || \$GLOBALS[navclassid]==null){\$shou=\\\\\"nav-cur\\\\\";}else{\$shou=\\\\\"\\\\\";} ?>\r\n        <li><a href=\\\\\"/\\\\\" class=\\\\\"<?=\$shou?>\\\\\"><span class=\\\\\"menu-txt\\\\\">首页</span><span class=\\\\\"menu-line\\\\\"></span></a></li>\r\n[e:loop={\\\\\"select classid,classname from {\$dbtbpre}enewsclass where bclassid=0 order by myorder asc limit 8\\\\\",0,24,0}]\r\n<?php if(\$bqr[classid]==\$GLOBALS[navclassid] || \$bqr[classid]==\$class_r[\$GLOBALS[navclassid]][bclassid]){\$classon=\\\\\"nav-cur\\\\\";}else{\$classon=\\\\\"\\\\\";}?>\r\n        <li><a class=\\\\\"<?=\$classon?>\\\\\" href=\\\\\"<?=\$bqsr[classurl]?>\\\\\"><span class=\\\\\"menu-txt\\\\\"><?=\$bqr[classname]?></span><span class=\\\\\"menu-line\\\\\"></span></a></li>\r\n[/e:loop]\r\n      </ul>\r\n      <div class=\\\\\"grzx\\\\\">\r\n	  	<script> document.write(\\\\''<script src=\\\\\"/e/member/login/dh.php?t=\\\\''+Math.random()+\\\\''\\\\\"><\\\\''+\\\\''/script>\\\\''); </script>\r\n	  </div>\r\n    </div>\r\n  </div>\r\n</div>\r\n<div class=\\\\\"my_pop\\\\\">\r\n<!--弹出登录框开始-->\r\n  <div class=\\\\\"login_pop\\\\\" id=\\\\\"login_pop\\\\\" style=\\\\\"display: none;\\\\\"> <span class=\\\\\"pop_close\\\\\"></span>\r\n    <p class=\\\\\"pop-tit\\\\\">账号登录</p>\r\n    <form action=\\\\\"/e/member/doaction.php\\\\\" method=\\\\\"post\\\\\" onSubmit=\\\\\"return userLogin()\\\\\" id=\\\\\"form_login1\\\\\" class=\\\\\"form-login\\\\\">\r\n      <input type=hidden name=ecmsfrom value=\\\\\"\\\\\" id=\\\\\"dquurl\\\\\">\r\n      <input type=hidden name=enews value=login>\r\n      <input name=\\\\\"tobind\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"tobind\\\\\" value=\\\\\"0\\\\\">\r\n      <div class=\\\\\"modal-body\\\\\">\r\n        <div class=\\\\\"error_font\\\\\">*错误提示</div>\r\n        <div class=\\\\\"outer tr\\\\\"> <i class=\\\\\"user\\\\\"></i>\r\n          <input type=\\\\\"text\\\\\" name=\\\\\"username\\\\\" class=\\\\\"input-txt \\\\\" id=\\\\\"login_username\\\\\" placeholder=\\\\\"输入用户名\\\\\">\r\n        </div>\r\n        <div class=\\\\\"outer tr\\\\\"> <i class=\\\\\"pwd\\\\\"></i>\r\n          <input type=\\\\\"password\\\\\" name=\\\\\"password\\\\\" class=\\\\\"input-txt \\\\\" id=\\\\\"login_password\\\\\" placeholder=\\\\\"输入登录密码\\\\\">\r\n        </div>\r\n        <div class=\\\\\"outer\\\\\">\r\n          <div class=\\\\\"captcha\\\\\" id=\\\\\"logcaptcha\\\\\"></div>\r\n        </div>\r\n      </div>\r\n      <div class=\\\\\"modal-footer\\\\\" style=\\\\\"margin-bottom:40px;\\\\\">\r\n        <p class=\\\\\"outer\\\\\"> <input class=\\\\\"login_btn\\\\\" type=\\\\\"submit\\\\\" name=\\\\\"submit\\\\\" value=\\\\\"登录\\\\\"> <a href=\\\\\"javascript:;\\\\\" class=\\\\\"register_btn\\\\\" id=\\\\\"register_btn2\\\\\">注册</a> </p>\r\n      </div>\r\n    </form>\r\n  </div>\r\n<!--弹出登录框结束-->\r\n<!--弹出注册框开始-->\r\n<div class=\\\\\"register_pop\\\\\" style=\\\\\"display: none;\\\\\"> <span class=\\\\\"pop_close\\\\\"></span>\r\n  <p class=\\\\\"pop-tit\\\\\">会员注册</p>\r\n  <form name=\\\\\"userinfoform\\\\\" method=\\\\\"post\\\\\" enctype=\\\\\"multipart/form-data\\\\\" action=\\\\\"/e/member/doaction.php\\\\\" class=\\\\\"form-register\\\\\">\r\n	<input type=\\\\\"hidden\\\\\" name=\\\\\"enews\\\\\" value=\\\\\"register\\\\\">\r\n    <div class=\\\\\"modal-body\\\\\">\r\n      <div class=\\\\\"error_font\\\\\">*错误提示</div>\r\n      <div class=\\\\\"outer tr\\\\\"> <i class=\\\\\"user\\\\\"></i>\r\n        <input type=\\\\\"text\\\\\" name=\\\\\"username\\\\\" class=\\\\\"input-txt \\\\\" id=\\\\\"reg_phone\\\\\" placeholder=\\\\\"输入用户名\\\\\">\r\n      </div>\r\n      <div class=\\\\\"outer tr\\\\\"> <i class=\\\\\"pwd\\\\\"></i>\r\n        <input type=\\\\\"password\\\\\" name=\\\\\"password\\\\\" class=\\\\\"input-txt \\\\\" id=\\\\\"reg_password\\\\\" placeholder=\\\\\"设置密码(6-16位字母或数字)\\\\\">\r\n      </div>\r\n      <div class=\\\\\"outer tr\\\\\"> <i class=\\\\\"pwd\\\\\"></i>\r\n        <input type=\\\\\"password\\\\\" name=\\\\\"repassword\\\\\" class=\\\\\"input-txt \\\\\" id=\\\\\"reg_password\\\\\" placeholder=\\\\\"重复输入密码\\\\\">\r\n      </div>\r\n      <div class=\\\\\"outer tr\\\\\"> <i class=\\\\\"user\\\\\"></i>\r\n        <input type=\\\\\"text\\\\\" name=\\\\\"email\\\\\" class=\\\\\"input-txt \\\\\" id=\\\\\"fullname\\\\\" placeholder=\\\\\"邮箱\\\\\">\r\n      </div>\r\n      <div class=\\\\\"outer\\\\\">\r\n        <input type=\\\\\"text\\\\\" name=\\\\\"key\\\\\" class=\\\\\"input-txt \\\\\" id=\\\\\"reg_sjyzm\\\\\" placeholder=\\\\\"输入验证码\\\\\">\r\n        <a class=\\\\\"get-yzm\\\\\"><img src=\\\\\"/e/ShowKey/?v=reg\\\\\" name=\\\\\"regKeyImg\\\\\" id=\\\\\"regKeyImg\\\\\" onclick=\\\\\"regKeyImg.src=\\\\''/e/ShowKey/?v=reg&t=\\\\''+Math.random()\\\\\" width=\\\\\"130px\\\\\" height=\\\\\"44px\\\\\" title=\\\\\"看不清楚,点击刷新\\\\\"></a> </div>\r\n    </div>\r\n    <div class=\\\\\"modal-footer\\\\\">\r\n      <p class=\\\\\"outer\\\\\"> <input type=\\\\''submit\\\\'' name=\\\\''Submit\\\\'' class=\\\\\"orange_btn\\\\\" id=\\\\\"btnRegister\\\\\" value=\\\\\"立即注册\\\\\"> </p>\r\n      <p class=\\\\\"other\\\\\">已有账号? <a href=\\\\\"javascript:;\\\\\" id=\\\\\"user_login\\\\\">请登录</a></p>\r\n    </div>\r\n  </form>\r\n</div>\r\n<!--弹出注册框结束-->\r\n</div>','0','0','1');");
E_D("replace into `www_96kaifa_com_enewstempvar` values('2','www_96kaifa_com_footer','页面尾部','<div id=\\\\\"footer\\\\\">\r\n  <div class=\\\\\"about_me\\\\\"> <a href=\\\\\"/aboutus.html\\\\\" target=\\\\\"_blank\\\\\">关于我们</a> | <a href=\\\\\"/contact.html\\\\\" target=\\\\\"_blank\\\\\">联系方式</a> | <a href=\\\\\"/sitemap.html\\\\\" target=\\\\\"_blank\\\\\">网站地图</a> | <a href=\\\\\"/explain.html\\\\\" target=\\\\\"_blank\\\\\">用户协议</a> </div>\r\n  <div class=\\\\\"safety\\\\\"> <a><i class=\\\\\"icon_safe1\\\\\"></i>中国互联网举报中心</a> <a><i class=\\\\\"icon_safe2\\\\\"></i>网络违法举报中心</a> <a><i class=\\\\\"icon_safe3\\\\\"></i>垃圾信息举报中心</a> <a><i class=\\\\\"icon_safe4\\\\\"></i>闽公网安备35020302001953号</a> </div>\r\n  <p class=\\\\\"tips_text\\\\\">©2017-2018 &nbsp; <?=\$public_r[\\\\''add_www_96kaifa_com_name\\\\'']?> &nbsp; <?=\$public_r[\\\\''add_www_96kaifa_com_url2\\\\'']?> <em>礼包交流群：</em><a href=\\\\\"<?=\$public_r[\\\\''add_www_96kaifa_com_qun\\\\'']?>\\\\\" target=\\\\\"_blank\\\\\" class=\\\\\"qqun\\\\\"></a></p>\r\n  <p class=\\\\\"tips_text\\\\\">备案号：<?=\$public_r[\\\\''add_www_96kaifa_com_ba\\\\'']?> &nbsp; <?=\$public_r[\\\\''add_www_96kaifa_com_tongji\\\\'']?> 技术支持：<a href=\\\\\"https://www.96kaifa.com\\\\\" target=\\\\\"_blank\\\\\">96KaiFa源码</a></p>\r\n</div>','0','0','0');");
E_D("replace into `www_96kaifa_com_enewstempvar` values('8','www_96kaifa_com_cy','第三方评论插件','<!--PC版-->\r\n<div id=\\\\\"SOHUCS\\\\\" ></div>\r\n<script charset=\\\\\"utf-8\\\\\" type=\\\\\"text/javascript\\\\\" src=\\\\\"https://changyan.sohu.com/upload/changyan.js\\\\\" ></script>\r\n<script type=\\\\\"text/javascript\\\\\">\r\nwindow.changyan.api.config({\r\nappid: \\\\''cyrbiKxmG\\\\'',\r\nconf: \\\\''prod_8e11cfb50c20f2a0b31d59926e9e42c7\\\\''\r\n});\r\n</script>','0','0','0');");
E_D("replace into `www_96kaifa_com_enewstempvar` values('9','www_96kaifa_com_shead','搜索页头部','<div class=\\\\\"topbox\\\\\">\r\n  <div class=\\\\\"boxin clearfix\\\\\">\r\n    <div class=\\\\\"topl fl\\\\\"> <span class=\\\\\"home\\\\\"><a href=\\\\\"/\\\\\">游戏首页</a></span>\r\n      <ul>\r\n        <li>|<a href=\\\\\"http://m.350.com\\\\\" target=\\\\\"_blank\\\\\">手机版</a></li>\r\n        <li>|<a href=\\\\\"#\\\\\" target=\\\\\"_blank\\\\\">客户端下载</a></li>\r\n        <li>|<a href=\\\\\"javascript:;\\\\\" class=\\\\\"wx_show\\\\\">关注微信</a>\r\n          <div class=\\\\\"wx_hide\\\\\"> <i class=\\\\\"angle\\\\\"></i> <img src=\\\\\"/96kaifa/statics/home/images/wx_code.jpg\\\\\" width=\\\\\"103\\\\\" height=\\\\\"103\\\\\"> <span>关注微信公众号</span> </div>\r\n        </li>\r\n        <li>|<a href=\\\\\"#\\\\\" target=\\\\\"_blank\\\\\">开放平台</a></li>\r\n      </ul>\r\n    </div>\r\n    <div class=\\\\\"topr fr\\\\\">\r\n      <div class=\\\\\"login_ok\\\\\">\r\n	<!-- 登录 -->\r\n	<script>\r\n	document.write(\\\\''<script src=\\\\\"/e/member/login/loginjs.php?t=\\\\''+Math.random()+\\\\''\\\\\"><\\\\''+\\\\''/script>\\\\'');\r\n	\$(function(){\r\n	var dqurl = window.location.href;\r\n	\$(\\\\''#dquurl\\\\'').val(dqurl);\r\n	})\r\n	</script><script src=\\\\\"/e/member/login/loginjs.php?t=0.29024495921897\\\\\"></script><a href=\\\\\"javascript:;\\\\\" class=\\\\\"a1 a_login\\\\\" id=\\\\\"a_login\\\\\">登录</a> <a href=\\\\\"javascript:;\\\\\" class=\\\\\"a2 a_register\\\\\" id=\\\\\"register_btn\\\\\">注册</a>| \r\n	<!-- 登录 end-->\r\n	  </div>\r\n      <a href=\\\\\"javascript:;\\\\\" onclick=\\\\\"AddFavorite();\\\\\">收藏本站</a> </div>\r\n  </div>\r\n</div>\r\n<div class=\\\\\"header\\\\\">\r\n  <div class=\\\\\"header-top\\\\\">\r\n    <div class=\\\\\"in\\\\\">\r\n      <div class=\\\\\"logo fl\\\\\"><a href=\\\\\"/\\\\\"><img src=\\\\\"/96kaifa/statics/home/images/logo.png\\\\\" alt=\\\\\"仿3500游戏\\\\\"></a></div>\r\n      <div class=\\\\\"search fr\\\\\">\r\n        <form action=\\\\\"/search/game.php\\\\\" method=\\\\\"get\\\\\" target=\\\\\"_blank\\\\\" name=\\\\\"searchTop\\\\\">\r\n          <div class=\\\\\"search_box tr\\\\\">\r\n            <input type=\\\\\"text\\\\\" id=\\\\\"bdcsMain\\\\\" name=\\\\\"key\\\\\" class=\\\\\"sech_keyword\\\\\" placeholder=\\\\\"请输入游戏名称\\\\\">\r\n            <input type=\\\\\"submit\\\\\" value=\\\\\"搜索\\\\\" class=\\\\\"sech_btn\\\\\">\r\n          </div>\r\n        </form>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <div class=\\\\\"nav\\\\\">\r\n    <div class=\\\\\"in\\\\\">\r\n      <ul>\r\n        <li><a href=\\\\\"/\\\\\" class=\\\\\"nav-cur\\\\\"><span class=\\\\\"menu-txt\\\\\">首页</span><span class=\\\\\"menu-line\\\\\"></span></a></li>\r\n        <li><a class=\\\\\"\\\\\" href=\\\\\"/game/\\\\\"><span class=\\\\\"menu-txt\\\\\">网游</span><span class=\\\\\"menu-line\\\\\"></span></a></li>\r\n        <li><a class=\\\\\"\\\\\" href=\\\\\"/danji/\\\\\"><span class=\\\\\"menu-txt\\\\\">小游戏</span><span class=\\\\\"menu-line\\\\\"></span></a></li>\r\n        <li><a class=\\\\\"\\\\\" href=\\\\\"/libao/\\\\\"><span class=\\\\\"menu-txt\\\\\">礼包</span><span class=\\\\\"menu-line\\\\\"></span></a></li>\r\n        <li><a class=\\\\\"\\\\\" href=\\\\\"/zixun/\\\\\"><span class=\\\\\"menu-txt\\\\\">资讯</span><span class=\\\\\"menu-line\\\\\"></span></a></li>\r\n        <li><a class=\\\\\"\\\\\" href=\\\\\"/kaifu/\\\\\"><span class=\\\\\"menu-txt\\\\\">开服表</span><span class=\\\\\"menu-line\\\\\"></span></a></li>\r\n      </ul>\r\n      <div class=\\\\\"grzx\\\\\">\r\n	  	<script> document.write(\\\\''<script src=\\\\\"/e/member/login/dh.php?t=\\\\''+Math.random()+\\\\''\\\\\"><\\\\''+\\\\''/script>\\\\''); </script><script src=\\\\\"/e/member/login/dh.php?t=0.6056647043436161\\\\\"></script><a href=\\\\\"javascript:;\\\\\" id=\\\\\"gamegoo\\\\\">个人中心</a>\r\n	  </div>\r\n    </div>\r\n  </div>\r\n</div>','0','0','0');");
E_D("replace into `www_96kaifa_com_enewstempvar` values('3','www_96kaifa_com_dtheader','动态页面头部','<!-- 页头 -->\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" class=\\\\\"top\\\\\">\r\n<tr>\r\n<td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr>\r\n<td width=\\\\\"63%\\\\\">\r\n<!-- 登录 -->\r\n<script>\r\ndocument.write(\\\\''<script src=\\\\\"[!--news.url--]e/member/login/loginjs.php?t=\\\\''+Math.random()+\\\\''\\\\\"><\\\\''+\\\\''/script>\\\\'');\r\n</script>\r\n</td>\r\n<td align=\\\\\"right\\\\\">\r\n<a onclick=\\\\\"window.external.addFavorite(location.href,document.title)\\\\\" href=\\\\\"#ecms\\\\\">加入收藏</a> | <a onclick=\\\\\"this.style.behavior=\\\\''url(#default#homepage)\\\\'';this.setHomePage(\\\\''[!--news.url--]\\\\'')\\\\\" href=\\\\\"#ecms\\\\\">设为首页</a> | <a href=\\\\\"[!--news.url--]e/member/cp/\\\\\">会员中心</a> | <a href=\\\\\"[!--news.url--]e/DoInfo/\\\\\">我要投稿</a> | <a href=\\\\\"[!--news.url--]e/web/?type=rss2\\\\\" target=\\\\\"_blank\\\\\">RSS<img src=\\\\\"[!--news.url--]skin/default/images/rss.gif\\\\\" border=\\\\\"0\\\\\" hspace=\\\\\"2\\\\\" /></a>\r\n</td>\r\n</tr>\r\n</table></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\">\r\n<tr valign=\\\\\"middle\\\\\">\r\n<td width=\\\\\"240\\\\\" align=\\\\\"center\\\\\"><a href=\\\\\"[!--news.url--]\\\\\"><img src=\\\\\"[!--news.url--]skin/default/images/logo.gif\\\\\" width=\\\\\"200\\\\\" height=\\\\\"65\\\\\" border=\\\\\"0\\\\\" /></a></td>\r\n<td align=\\\\\"center\\\\\"><a href=\\\\\"http://www.phome.net/OpenSource/\\\\\" target=\\\\\"_blank\\\\\"><img src=\\\\\"[!--news.url--]skin/default/images/opensource.gif\\\\\" width=\\\\\"100%\\\\\" height=\\\\\"70\\\\\" border=\\\\\"0\\\\\" /></a></td>\r\n</tr>\r\n</table>\r\n<!-- 导航tab选项卡 -->\r\n<table width=\\\\\"920\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" class=\\\\\"nav\\\\\">\r\n  <tr> \r\n    <td class=\\\\\"nav_global\\\\\"><ul>\r\n        <li class=\\\\\"curr\\\\\" id=\\\\\"tabnav_btn_0\\\\\" onmouseover=\\\\\"tabit(this)\\\\\"><a href=\\\\\"[!--news.url--]\\\\\">首页</a></li>\r\n        <li id=\\\\\"tabnav_btn_1\\\\\" onmouseover=\\\\\"tabit(this)\\\\\"><a href=\\\\\"[!--news.url--]news/\\\\\">新闻中心</a></li>\r\n        <li id=\\\\\"tabnav_btn_2\\\\\" onmouseover=\\\\\"tabit(this)\\\\\"><a href=\\\\\"[!--news.url--]download/\\\\\">下载中心</a></li>\r\n        <li id=\\\\\"tabnav_btn_3\\\\\" onmouseover=\\\\\"tabit(this)\\\\\"><a href=\\\\\"[!--news.url--]movie/\\\\\">影视频道</a></li>\r\n        <li id=\\\\\"tabnav_btn_4\\\\\" onmouseover=\\\\\"tabit(this)\\\\\"><a href=\\\\\"[!--news.url--]shop/\\\\\">网上商城</a></li>\r\n        <li id=\\\\\"tabnav_btn_5\\\\\" onmouseover=\\\\\"tabit(this)\\\\\"><a href=\\\\\"[!--news.url--]flash/\\\\\">FLASH频道</a></li>\r\n        <li id=\\\\\"tabnav_btn_6\\\\\" onmouseover=\\\\\"tabit(this)\\\\\"><a href=\\\\\"[!--news.url--]photo/\\\\\">图片频道</a></li>\r\n        <li id=\\\\\"tabnav_btn_7\\\\\" onmouseover=\\\\\"tabit(this)\\\\\"><a href=\\\\\"[!--news.url--]article/\\\\\">文章中心</a></li>\r\n        <li id=\\\\\"tabnav_btn_8\\\\\" onmouseover=\\\\\"tabit(this)\\\\\"><a href=\\\\\"[!--news.url--]info/\\\\\">分类信息</a></li>\r\n      </ul></td>\r\n  </tr>\r\n</table>','0','0','0');");
E_D("replace into `www_96kaifa_com_enewstempvar` values('4','www_96kaifa_com_infoarea','分类信息区域导航','<table width=\\\\\"96%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"4\\\\\">\r\n	<tr>\r\n		<td width=\\\\\"33%\\\\\"><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=东城区\\\\\">东城区</a></td>\r\n		<td width=\\\\\"33%\\\\\"><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=西城区\\\\\">西城区</a></td>\r\n		<td width=\\\\\"33%\\\\\"><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=通州区\\\\\">通州区</a></td>\r\n	</tr>\r\n	<tr>\r\n		<td><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=崇文区\\\\\">崇文区</a></td>\r\n		<td><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=宣武区\\\\\">宣武区</a></td>\r\n		<td><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=大兴区\\\\\">大兴区</a></td>\r\n	</tr>\r\n	<tr>\r\n		<td><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" /><a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=朝阳区\\\\\">&nbsp;朝阳区</a></td>\r\n		<td><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=海淀区\\\\\">海淀区</a></td>\r\n		<td><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=昌平区\\\\\">昌平区</a></td>\r\n	</tr>\r\n	<tr>\r\n		<td><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=丰台区\\\\\">丰台区</a></td>\r\n		<td><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=石景山区\\\\\">石景山区</a></td>\r\n		<td><img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&ph=1&myarea=其它\\\\\">其它</a></td>\r\n	</tr>\r\n</table>','0','0','0');");
E_D("replace into `www_96kaifa_com_enewstempvar` values('5','www_96kaifa_com_infoclassnav','分类信息分类导航','<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"4\\\\\" cellspacing=\\\\\"0\\\\\">\r\n  <tr>\r\n    <td bgcolor=\\\\\"#EEF1F4\\\\\">&nbsp;<img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=10\\\\\"><strong>房屋信息</strong></a></td>\r\n  </tr> \r\n</table>\r\n<table width=\\\\\"96%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"4\\\\\">\r\n  <tr>\r\n    <td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=11\\\\\">房屋求租</a></td>\r\n    <td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=12\\\\\">房屋出租</a></td>\r\n  		<td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=15\\\\\">办公用房</a></td>\r\n  </tr>\r\n  <tr>\r\n    <td><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=13\\\\\">房屋求购</a></td>\r\n    <td><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=14\\\\\">房屋出售</a></td>\r\n  		<td><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=16\\\\\">旺铺门面</a></td>\r\n  </tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"4\\\\\" bgcolor=\\\\\"#EEF1F4\\\\\">\r\n  <tr>\r\n    <td>&nbsp;<img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=17\\\\\"><strong>跳蚤市场</strong></a></td>\r\n  </tr>\r\n</table>\r\n<table width=\\\\\"96%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"4\\\\\">\r\n  <tr>\r\n    <td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=18\\\\\">电脑配件</a></td>\r\n    <td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=19\\\\\">电器数码</a></td>\r\n  		<td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=21\\\\\">居家用品</a></td>\r\n  </tr>\r\n  <tr>\r\n    <td><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=20\\\\\">通讯产品</a></td>\r\n    <td><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=21\\\\\"></a></td>\r\n  		<td>&nbsp;</td>\r\n  </tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"4\\\\\" cellspacing=\\\\\"0\\\\\" bgcolor=\\\\\"#EEF1F4\\\\\">\r\n  <tr>\r\n    <td>&nbsp;<img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=22\\\\\"><strong>同城生活</strong></a></td>\r\n  </tr>\r\n</table>\r\n<table width=\\\\\"96%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"4\\\\\">\r\n  <tr>\r\n    <td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=23\\\\\">本地新闻</a></td>\r\n    <td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=24\\\\\">购物打折</a></td>\r\n  		<td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=26\\\\\">便民告示</a></td>\r\n  </tr>\r\n  <tr>\r\n    <td><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=25\\\\\">旅游活动</a></td>\r\n    <td>&nbsp;</td>\r\n  		<td>&nbsp;</td>\r\n  </tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"4\\\\\" cellspacing=\\\\\"0\\\\\" bgcolor=\\\\\"#EEF1F4\\\\\">\r\n  <tr>\r\n    <td>&nbsp;<img src=\\\\\"[!--news.url--]e/data/images/msgnav.gif\\\\\" width=\\\\\"5\\\\\" height=\\\\\"5\\\\\" />&nbsp;<a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=27\\\\\"><strong>求职招聘</strong></a></td>\r\n  </tr>\r\n</table>\r\n<table width=\\\\\"96%\\\\\" border=\\\\\"0\\\\\" align=\\\\\"center\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"4\\\\\">\r\n  <tr>\r\n    <td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=28\\\\\">工程技术</a></td>\r\n    <td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=29\\\\\">财务会计</a></td>\r\n  		<td width=\\\\\"33%\\\\\"><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=31\\\\\">经营管理</a></td>\r\n  </tr>\r\n  <tr>\r\n    <td><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=30\\\\\">餐饮行业</a></td>\r\n    <td><a href=\\\\\"[!--news.url--]e/action/ListInfo/?classid=31\\\\\"></a></td>\r\n  		<td>&nbsp;</td>\r\n  </tr>\r\n</table>','0','0','0');");
E_D("replace into `www_96kaifa_com_enewstempvar` values('7','www_96kaifa_com_pl','评论表单','<script>\r\n		  function CheckPl(obj)\r\n		  {\r\n		  if(obj.saytext.value==\\\\\"\\\\\")\r\n		  {\r\n		  alert(\\\\\"您没什么话要说吗？\\\\\");\r\n		  obj.saytext.focus();\r\n		  return false;\r\n		  }\r\n		  return true;\r\n		  }\r\n		  </script><form action=\\\\\"[!--news.url--]e/pl/doaction.php\\\\\" method=\\\\\"post\\\\\" name=\\\\\"saypl\\\\\" id=\\\\\"saypl\\\\\" onsubmit=\\\\\"return CheckPl(document.saypl)\\\\\">\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" id=\\\\\"plpost\\\\\">\r\n\r\n<tr>\r\n<td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"0\\\\\" class=\\\\\"title\\\\\">\r\n<tr>\r\n<td><strong>发表评论</strong></td>\r\n<td align=\\\\\"right\\\\\"><a href=\\\\\"[!--news.url--]e/pl/?classid=[!--classid--]&amp;id=[!--id--]\\\\\">共有<span><script type=\\\\\"text/javascript\\\\\" src=\\\\\"[!--news.url--]e/public/ViewClick/?classid=[!--classid--]&id=[!--id--]&down=2\\\\\"></script></span>条评论</a></td>\r\n</tr>\r\n</table>\r\n<table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellspacing=\\\\\"10\\\\\" cellpadding=\\\\\"0\\\\\">\r\n<tr>\r\n<td><table width=\\\\\"100%\\\\\" border=\\\\\"0\\\\\" cellpadding=\\\\\"0\\\\\" cellspacing=\\\\\"2\\\\\">\r\n<tr>\r\n<td width=\\\\\"56%\\\\\" align=\\\\\"left\\\\\">用户名:\r\n<input name=\\\\\"username\\\\\" type=\\\\\"text\\\\\" class=\\\\\"inputText\\\\\" id=\\\\\"username\\\\\" value=\\\\\"\\\\\" size=\\\\\"16\\\\\" /></td>\r\n<td width=\\\\\"44%\\\\\" align=\\\\\"left\\\\\">密码:\r\n<input name=\\\\\"password\\\\\" type=\\\\\"password\\\\\" class=\\\\\"inputText\\\\\" id=\\\\\"password\\\\\" value=\\\\\"\\\\\" size=\\\\\"16\\\\\" /></td>\r\n</tr>\r\n<tr>\r\n<td align=\\\\\"left\\\\\">验证码:\r\n<input name=\\\\\"key\\\\\" type=\\\\\"text\\\\\" class=\\\\\"inputText\\\\\" size=\\\\\"10\\\\\" />\r\n<img src=\\\\\"[!--news.url--]e/ShowKey/?v=pl\\\\\" align=\\\\\"absmiddle\\\\\" name=\\\\\"plKeyImg\\\\\" id=\\\\\"plKeyImg\\\\\" onclick=\\\\\"plKeyImg.src=\\\\''[!--news.url--]e/ShowKey/?v=pl&t=\\\\''+Math.random()\\\\\" title=\\\\\"看不清楚,点击刷新\\\\\" /> </td>\r\n<td align=\\\\\"left\\\\\"><input name=\\\\\"nomember\\\\\" type=\\\\\"checkbox\\\\\" id=\\\\\"nomember\\\\\" value=\\\\\"1\\\\\" checked=\\\\\"checked\\\\\" />\r\n匿名发表</td>\r\n</tr>\r\n</table>\r\n<textarea name=\\\\\"saytext\\\\\" rows=\\\\\"6\\\\\" id=\\\\\"saytext\\\\\"></textarea><input name=\\\\\"imageField\\\\\" type=\\\\\"image\\\\\" src=\\\\\"[!--news.url--]e/data/images/postpl.gif\\\\\"/>\r\n<input name=\\\\\"id\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"id\\\\\" value=\\\\\"[!--id--]\\\\\" />\r\n<input name=\\\\\"classid\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"classid\\\\\" value=\\\\\"[!--classid--]\\\\\" />\r\n<input name=\\\\\"enews\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"enews\\\\\" value=\\\\\"AddPl\\\\\" />\r\n<input name=\\\\\"repid\\\\\" type=\\\\\"hidden\\\\\" id=\\\\\"repid\\\\\" value=\\\\\"0\\\\\" />\r\n<input type=\\\\\"hidden\\\\\" name=\\\\\"ecmsfrom\\\\\" value=\\\\\"[!--titleurl--]\\\\\"></td>\r\n</tr>\r\n</table>\r\n</td>\r\n</tr>\r\n</table></form>','0','0','0');");
E_D("replace into `www_96kaifa_com_enewstempvar` values('10','www_96kaifa_com_sfoot','搜索页尾部','<div id=\\\\\"footer\\\\\">\r\n  <div class=\\\\\"about_me\\\\\"> <a href=\\\\\"/aboutus.html\\\\\" target=\\\\\"_blank\\\\\">关于我们</a> | <a href=\\\\\"/contact.html\\\\\" target=\\\\\"_blank\\\\\">联系方式</a> | <a href=\\\\\"/sitemap.html\\\\\" target=\\\\\"_blank\\\\\">网站地图</a> | <a href=\\\\\"/explain.html\\\\\" target=\\\\\"_blank\\\\\">用户协议</a> </div>\r\n  <div class=\\\\\"safety\\\\\"> <a><i class=\\\\\"icon_safe1\\\\\"></i>中国互联网举报中心</a> <a><i class=\\\\\"icon_safe2\\\\\"></i>网络违法举报中心</a> <a><i class=\\\\\"icon_safe3\\\\\"></i>垃圾信息举报中心</a> <a><i class=\\\\\"icon_safe4\\\\\"></i>闽公网安备35020302001953号</a> </div>\r\n  <p class=\\\\\"tips_text\\\\\">©2017-2018 &nbsp; 仿3500游戏 &nbsp; www.350.com <em>礼包交流群：</em><a href=\\\\\"http://shang.qq.com/wpa/qunwpa?idkey=9e9c89e736ef5e888ed9979bebfa50127b1206a0d3ddbea705e63b00e761868b\\\\\" target=\\\\\"_blank\\\\\" class=\\\\\"qqun\\\\\"></a></p>\r\n  <p class=\\\\\"tips_text\\\\\">备案号：粤ICP备17024501号-2 &nbsp;  技术支持：<a href=\\\\\"https://www.96kaifa.com\\\\\" target=\\\\\"_blank\\\\\">96KaiFa源码</a></p>\r\n</div>','0','0','0');");

@include("../../inc/footer.php");
?>