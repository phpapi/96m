<?php 
$word=$_GET["key"];
$word=strFilter($word);
function strFilter($str){
    $str = str_replace('`', '', $str);
    $str = str_replace('·', '', $str);
    $str = str_replace('~', '', $str);
    $str = str_replace('!', '', $str);
    $str = str_replace('！', '', $str);
    $str = str_replace('@', '', $str);
    $str = str_replace('#', '', $str);
    $str = str_replace('$', '', $str);
    $str = str_replace('￥', '', $str);
    $str = str_replace('%', '', $str);
    $str = str_replace('^', '', $str);
    $str = str_replace('……', '', $str);
    $str = str_replace('&', '', $str);
    $str = str_replace('*', '', $str);
    $str = str_replace('(', '', $str);
    $str = str_replace(')', '', $str);
    $str = str_replace('（', '', $str);
    $str = str_replace('）', '', $str);
    $str = str_replace('-', '', $str);
    $str = str_replace('_', '', $str);
    $str = str_replace('——', '', $str);
    $str = str_replace('+', '', $str);
    $str = str_replace('=', '', $str);
    $str = str_replace('|', '', $str);
    $str = str_replace('\\', '', $str);
    $str = str_replace('[', '', $str);
    $str = str_replace(']', '', $str);
    $str = str_replace('【', '', $str);
    $str = str_replace('】', '', $str);
    $str = str_replace('{', '', $str);
    $str = str_replace('}', '', $str);
    $str = str_replace(';', '', $str);
    $str = str_replace('；', '', $str);
    $str = str_replace(':', '', $str);
    $str = str_replace('：', '', $str);
    $str = str_replace('\'', '', $str);
    $str = str_replace('"', '', $str);
    $str = str_replace('“', '', $str);
    $str = str_replace('”', '', $str);
    $str = str_replace(',', '', $str);
    $str = str_replace('，', '', $str);
    $str = str_replace('<', '', $str);
    $str = str_replace('>', '', $str);
    $str = str_replace('《', '', $str);
    $str = str_replace('》', '', $str);
    $str = str_replace('.', '', $str);
    $str = str_replace('。', '', $str);
    $str = str_replace('/', '', $str);
    $str = str_replace('、', '', $str);
    $str = str_replace('?', '', $str);
    $str = str_replace('？', '', $str);
    return trim($str);
}
require("../e/class/connect.php"); 
if(!defined('InEmpireCMS')) 
{ 
exit(); 
} 
require("../e/class/db_sql.php"); 
require("../e/class/q_functions.php"); 
$link=db_connect(); 
$empire=new mysqlquery(); 
$www_96kaifa_com_footer=$empire->fetch1("select varvalue from {$dbtbpre}enewstempvar_2 where myvar='www_96kaifa_com_footer' limit 1");
$num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_danji  where title like '%$word%'");
?>
<!doctype html>
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
<title><?=$word?> 搜索结果_<?=$public_r['add_www_96kaifa_com_name']?></title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="/96kaifa/statics/wap_v1/css/new_style.css" rel="stylesheet">
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/swiper-3.3.1.min.js"></script>
</head>
<body>
<header class="header yt_top" id="result_top"> <a class="back" href="javascript:history.go(-1)"></a>
  <form class="search-form" action="/search/game.php" method="get" target="_blank" name="searchTop">
    <div class="soBox">
      <input type="text" id="platxt" name="key" class="search_txt" placeholder="请输入游戏名称">
      <input type="button" value="搜索" id="search" class="search_btn" >
    </div>
  </form>
</header>
<div class="position">搜索结果：找到 "<em class="red"><?=$word?></em>" 相关内容<?=$num?>个</div>
<div class="sec_main">
  <div class="thex_hd">
    <ul>
      <li class="tab_1" style="width:25%"><a href="/search/game.php?key=<?=$word?>">网游</a><i></i></li>
	  <li class="tab_2" style="width:25%">小游戏</li>
	  <li class="tab_1" style="width:25%"><a href="/search/libao.php?key=<?=$word?>">礼包</a><i></i></li>
	  <li class="tab_1" style="width:25%"><a href="/search/zixun.php?key=<?=$word?>">资讯</a><i></i></li>
    </ul>
  </div>
  <div class="main-list">
    <div class="thex_bd">
<?php if($word==''){?>
<!--无关键词开始-->
<div class="default"><span>亲，没有找到您搜的相关内容<br>试试搜索其他的</span></div>
<!--无关键词结束-->
<?php }else{
$Page_size=5; 
$result=$empire->query("select * from www_96kaifa_com_ecms_danji where title like '%$word%'");
$count = mysqli_num_rows($result); 
$page_count = ceil($count/$Page_size); 
$init=1; 
$page_len=5; 
$max_p=$page_count; 
$pages=$page_count; 
//判断当前页码 
if(empty($_GET['page'])||$_GET['page']<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 
$offset=$Page_size*($page-1); 
$sql=$empire->query("select * from www_96kaifa_com_ecms_danji where title like '%$word%' order by newstime desc limit $offset,$Page_size");
?>
      <ul class="listwrap" id="article_js_list">
<?php
while ($row=$empire->fetch($sql)) { 

if($row[fenlei]==1){$fenlei="卡牌游戏";}
else if($row[fenlei]==2){$fenlei="角色扮演";}
else if($row[fenlei]==3){$fenlei="模拟经营";}
else if($row[fenlei]==4){$fenlei="射击游戏";}
else if($row[fenlei]==5){$fenlei="动作游戏";}
else if($row[fenlei]==6){$fenlei="战争策略";}
else if($row[fenlei]==7){$fenlei="棋牌游戏";}
else if($row[fenlei]==8){$fenlei="休闲游戏";}
?>
        <li> <a href="<?php echo $row['titleurl']?>" class="gxian"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?php echo $row['titlepic']?>">
          <div class="title">
            <h4><?php echo $row['title']?></h4>
          </div>
          <p class="txt"><?php echo $row['yijuhua']?></p>
          </a> <a href="<?php echo $row['titleurl']?>" class="btn_green playcount" data="1">开始玩</a> </li>
<?php 
} 
?>
		</ul>
<?php
if($count==0){
	
?>
<!--无搜索结果开始-->
<div class="default"><span>亲，没有找到您搜的相关内容<br>试试搜索其他的</span></div>
<!--无搜索结果结束-->
<?php
}else{
?>
      <div class="loading" id="loadmore"><span>点击查看更多</span></div>
<?php
}} 
?>	
    </div>
  </div>
</div>
<div class="footMb"></div>
<?=stripslashes($www_96kaifa_com_footer[0])?>
<script type="text/javascript" src="/96kaifa/statics/wap_v1/js/loading.js"></script>
<?php 
$num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_danji where title like '%$word%'");
$zongshu= $num - 30;
$www_96kaifa_com_zongye = ceil($zongshu/30);
?>
<script language="javascript" type="text/javascript">
var is_have_con = "Y";
$(function(){
    var pagenum = 1; //设置当前页数
	var www_96kaifa_com_zongpage = <?=$www_96kaifa_com_zongye?>;
    $('#loadmore').on('click',function(){
		if(is_have_con=="Y"){
			$.ajax({
				url : '/search/danji-getajax.php',
				type:'get',
				data:{"next":pagenum,"key":"<?=$word?>"},
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
