<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-transform " />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="screen-orientation" content="portrait">
<meta name="full-screen" content="yes">
<meta name="x5-orientation" content="portrait">
<meta name="x5-fullscreen" content="true">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-app-status-bar-style" content="black">
<title>仿3500游戏源码-96KaiFa原创源码（www.96kaifa.com）</title>
<meta name="keywords" content="仿3500游戏源码,3500游戏源码" />
<meta name="description" content="仿3500游戏源码-在线玩H5游戏为用户提供海量手机上不用下载就可以玩的手机页游、免费H5小游戏在线玩。好玩的H5游戏，就在3500游戏平台。" />
<link href="/96kaifa/statics/wap_v1/css/new_style.css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/swiper-3.3.1.min.js"></script>
</head>
<body>
<header class="header"> <a href="/e/member/cp/" class="user-photo"> <img src="/96kaifa/statics/wap_v1/images/user6.png"> </a>
  <div class="htit"><a href="javascript:;" class="logo"><img src="/96kaifa/statics/wap_v1/images/logo.png" /></a></div>
  <div class="hright"> <a href="/search.html" class="search-zoom" onclick="wap35.search();"></a> <a href="javascript:;" class="macte" id="macte" onclick="wap35.openPublicMp();"> 关注下载 </a> </div>
</header>
<div class="slider">
  <div class="mySwiper">
    <!-- 焦点图开始 -->
    <div class="swiper-wrapper">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where firsttitle=1 and fmimg<>'' order by newstime desc limit 4",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <div class="swiper-slide"> <a href="<?=$bqsr['titleurl']?>" class="posited" data="56"><img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['fmimg']?>" alt="<?=$bqr['title']?>"></a> </div>
<?php
}
}
?>
    </div>
    <!-- 如果需要分页器 -->
    <div class="swiper-pagination"></div>
  </div>
  <!-- 焦点图结束 -->
</div>
<div class="subnav">
  <ul class="nav-in">
    <li><a href="/list.html"><i class="icon_fl"></i>分类</a></li>
    <li><a href="/game/"><i class="icon_xy"></i>新游</a></li>
    <li><a href="/zixun/huodong/"><i class="icon_zx"></i>活动 </a></li>
    <li><a href="/kaifu/"><i class="icon_kf"></i>开服</a></li>
    <li><a href="/top.html"><i class="icon_ph"></i>排行</a></li>
  </ul>
</div>
<div class="idx-wrapper">
  <section class="mtop">
    <div class="idx-hd"> <a href="/top.html">
      <h3>火爆游戏必玩</h3>
      <span class="more">更多></span> <span class="line line1"></span><span class="line line2"></span><span class="line line2"></span> </a> </div>
    <div class="bd">
      <ul class="game-show cf">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game where isgood=1 order by newstime desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>" class="posited"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p class="title"><?=$bqr['title']?></p>
          </a>
          <div><a href="<?=$bqsr['titleurl']?>" class="btn_green posited">开始玩</a></div>
        </li>
<?php
}
}
?>
      </ul>
    </div>
  </section>
  <section class="mtop">
    <div class="idx-hd"> <a href="/game/">
      <h3>新游抢鲜玩</h3>
      <span class="more">更多></span> <span class="line line1"></span><span class="line line2"></span><span class="line line2"></span> </a> </div>
    <div class="bd">
      <ul class="listwrap">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by newstime desc limit 1",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li class='first'> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <div class="title">
            <h4><?=$bqr['title']?></h4>
          </div>
          <p class="txt"><?=$bqr['yijuhua']?></p>
          </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by newstime desc limit 1,5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <div class="title">
            <h4><?=$bqr['title']?></h4>
          </div>
          <p class="txt"><?=$bqr['yijuhua']?></p>
          </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
      </ul>
    </div>
  </section>
  <div class="webgame-type mtop">
    <div class="choose jsby"><a href="/list-2-0-0-0.html" class="">角色扮演</a></div>
    <div class="choose xxyx"><a href="/list-8-0-0-0.html" class="">休闲游戏</a></div>
    <div class="choose kpyx"><a href="/list-1-0-0-0.html" class="">卡牌游戏</a></div>
    <div class="choose zzcl"><a href="/list-6-0-0-0.html" class="">战争策略</a></div>
    <div class="choose dzyx"><a href="/list-5-0-0-0.html" class="">动作游戏</a></div>
    <div class="choose mnjy"><a href="/list-3-0-0-0.html" class="">模拟经营</a></div>
  </div>
  <section class="mtop">
    <div class="idx-hd"> <a href="/top.html">
      <h3>优质网游不容错过</h3>
      <span class="more">更多></span> <span class="line line1"></span><span class="line line2"></span><span class="line line2"></span> </a> </div>
    <div class="bd">
      <ul class="listwrap">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by onclick desc limit 5",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
        <li> <a href="<?=$bqsr['titleurl']?>" class="gxian"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <div class="title">
            <h4><?=$bqr['title']?></h4>
          </div>
          <p class="txt"><?=$bqr['yijuhua']?></p>
          </a> <a href="<?=$bqsr['titleurl']?>" class="btn_green playcount">开始玩</a> </li>
<?php
}
}
?>
      </ul>
    </div>
  </section>
  <section class="mtop">
    <div class="idx-hd"> <a href="/danji/">
      <h3>虐心游戏停不下来</h3>
      <span class="more">更多></span> <span class="line line1"></span><span class="line line2"></span><span class="line line2"></span> </a> </div>
    <div class="bd">
      <ul class="game-show cf">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from www_96kaifa_com_ecms_game order by onclick desc limit 8",6,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?php
if($bqr['fenlei']==1){$fenlei="益智";}
else if($bqr['fenlei']==2){$fenlei="动作";}
else if($bqr['fenlei']==3){$fenlei="射击";}
else if($bqr['fenlei']==4){$fenlei="休闲";}
else if($bqr['fenlei']==5){$fenlei="敏捷";}
else if($bqr['fenlei']==6){$fenlei="棋牌";}
else if($bqr['fenlei']==7){$fenlei="经营";}
else if($bqr['fenlei']==8){$fenlei="体育";}
else if($bqr['fenlei']==9){$fenlei="策略";}
else if($bqr['fenlei']==10){$fenlei="冒险";}
else if($bqr['fenlei']==11){$fenlei="装扮";}
?>
        <li> <a href="<?=$bqsr['titleurl']?>"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$bqr['titlepic']?>" alt="<?=$bqr['title']?>">
          <p class="title"><?=$bqr['title']?></p>
          <p class="desp"><?=$fenlei?></p>
          </a>
          <div><a href="<?=$bqsr['titleurl']?>" class="btn_green playviews">开始玩</a></div>
        </li>
<?php
}
}
?>
      </ul>
    </div>
  </section>
  <div class="choice mtop">
    <ul class="cf">
      <li><a href="/list-1-0-0-1.html" >益智</a></li>
      <li><a href="/list-2-0-0-1.html" >动作</a></li>
      <li><a href="/list-3-0-0-1.html" >射击</a></li>
      <li><a href="/list-4-0-0-1.html" >休闲</a></li>
      <li><a href="/list-5-0-0-1.html" >敏捷</a></li>
      <li><a href="/list-6-0-0-1.html" >棋牌</a></li>
      <li><a href="/list-7-0-0-1.html" >经营</a></li>
      <li><a href="/list-8-0-0-1.html" >体育</a></li>
      <li><a href="/list-9-0-0-1.html" >策略</a></li>
      <li><a href="/list.html">更多</a></li>
    </ul>
  </div>
  <div class="flinks mtop">
    <div class="idx-hd">
      <h3>友情链接</h3>
    </div>
    <div class="fbox">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and classid=2 order by lid',100,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
	 <a target="_blank" href="<?=$bqr[lurl]?>"><?=$bqr[lname]?></a> 
<?php
}
}
?>
    </div>
  </div>
</div>
<footer>
  <div>
    <p><em>礼包交流群：</em><a href="<?=$public_r['add_www_96kaifa_com_qun']?>" class="qqun"></a></p>
    <p>©2017-2018 <?=$public_r['add_www_96kaifa_com_name']?>平台 <?=$public_r['add_www_96kaifa_com_url2']?></p>
    <p><?=$public_r['add_www_96kaifa_com_ba']?> </p>
  </div>
</footer>
<nav class="footnav">
  <ul>
  <?php if($GLOBALS[navclassid]==8){$hover="active"; $hover2="";}else{$hover=""; $hover2="active";} ?>
    <li class='<?=$hover2?>'><a href="/game/"><i class="game"></i>
      <p>游戏</p>
      </a></li>
    <li class='<?=$hover?>'><a href="/libao/"><i class="bag"></i>
      <p>礼包</p>
      </a></li>
    <li><a href="/e/member/cp/"><i class="mine" ></i>
      <p>我的</p>
      </a></li>
  </ul>
</nav>
<div class="suspend" id="suspend">
  <!-- 右侧二维码 -->
  <div class="sus_hd"> <img src="/96kaifa/statics/wap_v1/images/erweima_2.jpg">
    <p>微信扫描&nbsp;马上玩</p>
  </div>
  <div class="sus_bd"> <img src="/96kaifa/statics/wap_v1/images/erweima_3.jpg">
    <p>安卓App扫描下载</p>
  </div>
</div>
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/new_style.js"></script>
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/wp35.js"></script>
<script type="text/javascript">
	var wap35 = new Wap35();
</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
<script>tyLoader();</script>
<script class="closetag">tyLoader(true);</script>
</body>
</html>