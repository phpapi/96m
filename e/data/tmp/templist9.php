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
<title><?=$value=ReturnClassAddField(0,'seotitle')?>_<?=$public_r['add_www_96kaifa_com_name']?></title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="/96kaifa/statics/wap_v1/css/new_style.css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/swiper-3.3.1.min.js"></script>
</head>
<body>
<header class="header yt_top"> <a href="javascript:history.go(-1)" class="back"></a>
  <div class="htit">
    <p>新游</p>
  </div>
  <div class="hright"> <a href="/search.html" class="search-zoom" onclick="wap35.search();"></a> <a href="javascript:;" class="macte" onclick="wap35.openPublicMp();">关注下载</a> </div>
</header>
<div class="main-list">
  <div class="thex_hd">
    <ul>
      <li class="tab_2">网游</li>
      <li class="tab_1"><a href="/danji/">小游戏</a></li>
    </ul>
  </div>
  <div class="thex_bd">
    <ul class="listwrap" id="article_js_list">
[!--empirenews.listtemp--]
<!--list.var1-->
[!--empirenews.listtemp--]
    </ul>
    <div class="loading" id="loadmore"><span>点击查看更多</span></div>
  </div>
</div>
<div class="footMb"></div>
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/loading.js"></script>
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
<?php 
$num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_game");
$zongshu= $num - 30;
$www_96kaifa_com_zongye = ceil($zongshu/30);
?>
<script language="javascript" type="text/javascript">
var is_have_con = "Y";
$(function(){
    var pagenum = 1; //设置当前页数
	var www_96kaifa_com_zongpage = <?=$www_96kaifa_com_zongye?>;
	var currentclass = <?=$GLOBALS[navclassid]?>;
    $('#loadmore').on('click',function(){
		if(is_have_con=="Y"){
			$.ajax({
				url : '/96kaifa/game-getajax.php',
				type:'get',
				data:{"next":pagenum,'classid':currentclass},
				dataType : 'html',
				beforeSend:function(){
					var str = '<span><img src="/96kaifa/statics/wap_v1/images/loading.gif" alt="">加载中</span>';
					$('#div_content').css('height','auto');
					$("#loadmore").html(str);
				},
				success : function(data){
					if(www_96kaifa_com_zongpage>=pagenum){
						$("#article_js_list").append(data);
						$("#loadmore").html('<span>点击查看更多</span>');
						pagenum++;
					}else{
						$("#loadmore").html('<span>已全部加载完毕</span>');
						is_have_con = "N";
						return false;
					}
				}
			});
		}
    });
});
</script>
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