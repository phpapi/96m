<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html lang="en">
<?php
if(ehtmlspecialchars($_GET[fenlei])==1){$fenlei="益智";}
else if(ehtmlspecialchars($_GET[fenlei])==2){$fenlei="动作";}
else if(ehtmlspecialchars($_GET[fenlei])==3){$fenlei="射击";}
else if(ehtmlspecialchars($_GET[fenlei])==4){$fenlei="休闲";}
else if(ehtmlspecialchars($_GET[fenlei])==5){$fenlei="敏捷";}
else if(ehtmlspecialchars($_GET[fenlei])==6){$fenlei="棋牌";}
else if(ehtmlspecialchars($_GET[fenlei])==7){$fenlei="经营";}
else if(ehtmlspecialchars($_GET[fenlei])==8){$fenlei="体育";}
else if(ehtmlspecialchars($_GET[fenlei])==9){$fenlei="策略";}
else if(ehtmlspecialchars($_GET[fenlei])==10){$fenlei="冒险";}
else if(ehtmlspecialchars($_GET[fenlei])==11){$fenlei="装扮";}
$fenlid=ehtmlspecialchars($_GET[fenlei]);
?>
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
<title><?php if(ehtmlspecialchars($_GET[fenlei])==0){ ?>最热最新手机在线单机小游戏,H5小游戏大全<?php }else{ ?><?=$fenlei?><?php } ?> - <?=$public_r['add_www_96kaifa_com_name']?></title>
<meta name="keywords" content="<?=$fenlei?>H5游戏,H5游戏">
<meta name="description" content="游戏<?=$fenlei?>频道为用户提供最全的<?=$fenlei?>H5游戏在线玩。">
<link href="/96kaifa/statics/wap_v1/css/new_style.css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/swiper-3.3.1.min.js"></script>
</head>
<body>
<header class="header yt_top"> <a href="javascript:history.go(-1)" class="back"></a>
  <div class="htit">
    <p><?php if(ehtmlspecialchars($_GET[fenlei])==0){ ?>新游<?php }else{ ?><?=$fenlei?><?php } ?></p>
  </div>
  <div class="hright"> <a href="/search.html" class="search-zoom" onclick="wap35.search();"></a> <a href="javascript:;" class="macte" onclick="wap35.openPublicMp();">关注下载</a> </div>
</header>
<div class="main-list">
  <div class="thex_hd">
    <ul>
      <li class='tab_2'><a href="javascript:Filter('o','0')">最新</a></li>
      <li class='tab_1'><a href="javascript:Filter('o','0')">最热</a></li>
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
if(ehtmlspecialchars($_GET[fenlei])==0){$fenlid=0;
$num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_danji");
}else{$fenlid=$fenlid;
$num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_danji where fenlei='$fenlid'");
}
$zongshu= $num - 30;
$www_96kaifa_com_zongye = ceil($zongshu/30);
?>
<script language="javascript" type="text/javascript">
var is_have_con = "Y";
$(function(){
    var pagenum = 1; //设置当前页数
	var www_96kaifa_com_zongpage = <?=$www_96kaifa_com_zongye?>;
	var currentclass = <?=ehtmlspecialchars($_GET[fenlei])?>;
    $('#loadmore').on('click',function(){
		if(is_have_con=="Y"){
			$.ajax({
				url : '/96kaifa/danji-j-getajax.php',
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
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/orderby-danji.js"></script>
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