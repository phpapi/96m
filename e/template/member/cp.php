<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='会员中心';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="kb"></div>
<section>
  <div class="p_t">热门游戏</div>
  <div class="zjck">
    <ul>
<?php 
$query = ("select * from www_96kaifa_com_ecms_game where isgood=1 order by newstime desc limit 3") //执行SQL语句 
or die("SQL语句执行失败"); 
$query = $empire->query($query);
while($rs = mysqli_fetch_assoc($query)){
$src  = $rs[id];

$xwtitle=$rs['title'];
$xwtitleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
?>			
      <li><a href="<?=$xwtitleurl?>" class="img"><img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$xwtitlepic?>" alt="<?=$xwtitle?>">
        <p><?=$xwtitle?></p>
        </a></li>
<?php } ?> 
      <li><a href="/game/" class="img"><img src="/96kaifa/statics/wap_v1/images/qb.png" alt="查看全部"><p>全部</p></a></li>
    </ul>
  </div>
</section>
<div class="kb"></div>
<section>
  <div class="p_t">我的礼包</div>
<script src="/96kaifa/libao/js/feedback.js"></script>
<script src="/96kaifa/libao/v4/base/siteNav/siteNav.js"></script>
<script src="/96kaifa/libao/v4/base/siteNav/favorites.js"></script>
<script src="/96kaifa/libao/base/js/base.js"></script>
  <div class="thex_re">
    <div class="part1">
      <div class="item" id="mycard" tabindex="5000" style="overflow-y: hidden; outline: none;">
        <ul id="article_js_list">
<?php
$query = ("select * from www_96kaifa_com_ecms_libaoip where uid='$user[userid]' order by id desc limit 4") //执行SQL语句 
or die("SQL语句执行失败");
$query = $empire->query($query); 
while($hao = mysqli_fetch_assoc($query)){
$haoid  = $hao[haoid];

$query1 = ("select * from www_96kaifa_com_ecms_libao where id='$haoid'") //执行SQL语句 
or die("SQL语句执行失败"); 
$query1 = $empire->query($query1);
$rs=mysqli_fetch_array($query1); 

$src  = $rs[id];

$xwtitle=$rs['title'];
$xwtitleurl=$rs['titleurl'];
$xwtitlepic=$rs['titlepic'];
$smalltext=$rs['smalltext'];
$newstime=$rs['newstime'];

?>
          <li> <a href="<?=$xwtitleurl?>" class="img"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$xwtitlepic?>" alt="<?=$xwtitle?>"> </a>
            <div class="gxian">
              <p class="title"> <a href="<?=$xwtitleurl?>" target="_blank"><?=$xwtitle?></a> </p>
<?php if($rs[kstime]=="0000-00-00" && $rs[jstime]=="0000-00-00"){ ?>
              <p class="txt">永久有效</p>
<?php }else{ ?>
              <p class="txt">截止日期：<?=date('Y-m-d',strtotime($rs[jstime]))?></p>
<?php } ?>
            </div>
			<a href="javascript:;" value="<?=$src?>" uid="<?=$user[userid]?>" class="plays">查看</a>
            </li>
<?php } ?> 
        </ul>
		<div class="card-sets"><a href="javascript:;" id="loadmore">更多礼包</a></div>
      </div>
    </div>
  </div>
</section>
<?php
$num=$empire->gettotal("select count(*) as total from www_96kaifa_com_ecms_libaoip where uid='$user[userid]'");
$zongshu= $num - 4;
$www_96kaifa_com_zongye = ceil($zongshu/4);
?>
<script language="javascript" type="text/javascript">
var is_have_con = "Y";
$(function(){
    var pagenum = 1; //设置当前页数
	var www_96kaifa_com_zongpage = <?=$www_96kaifa_com_zongye?>;
	var currentclass = <?=$user[userid]?>;
    $('#loadmore').on('click',function(){
		if(is_have_con=="Y"){
			$.ajax({
				url : '/96kaifa/libao-member-getajax.php',
				type:'get',
				data:{"next":pagenum,'uid':currentclass},
				dataType : 'html',
				beforeSend:function(){
					var str = '努力加载中...';
					$('#div_content').css('height','auto');
					$("#loadmore").html(str);
				},
				success : function(data){
					if(www_96kaifa_com_zongpage>=pagenum){
						$("#article_js_list").append(data);
						$("#loadmore").html('更多礼包');
						pagenum++;
					}else{
						$("#loadmore").html('已到底，没有更多数据');
						is_have_con = "N";
						return false;
					}
				}
			});
		}
    });
});
</script>
<div id="user_box" class="laytan" style="display: none;"><div class="laysha"><div class="erwei"><div class="chat"><div class="chat_hd">操作提示 <i class="close" id="close"></i> </div> <div class="lq_succ ck"> <p class="ckone">请长按复制下方的礼包码</p> <p class="lqtwo" id="card"></p> </div> </div> </div> </div></div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>