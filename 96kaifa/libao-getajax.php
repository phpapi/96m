<?php  /*96KaiFa原创源码，官网：www.96kaifa.com*/
$ye=strFilter($_GET["next"]);
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


?>
<?php 

$aabbccdd = base64_encode("select * from www_96kaifa_com_ecms_libao order by newstime desc limit");

$yema= $ye*20;
$query = (base64_decode($aabbccdd)." $yema,20") //执行SQL语句 
or die("SQL语句执行失败2"); 
$query = $empire->query($query);
while($rs = mysqli_fetch_assoc($query)){
$src  = $rs[id];

$xwtitle=$rs['title'];
$xwtitleurl=$rs['titleurl'];
$xwtitlepic=$public_r['add_www_96kaifa_com_url'].$rs['titlepic'];
$newstime=$rs['newstime'];
$yijuhua=$rs['yijuhua'];

$cpl=round(($bqr[yiling]/$bqr[zongshu]),2)*100; $ss=100-$cpl; ?>

	<li> <a href="<?=$xwtitleurl?>" class="gxian"> <img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>">
        <div class="title">
          <h4><?=$xwtitle?></h4>
        </div>
        <p class="pro-num"><span class="progress"><span style="width: <?=$ss?>%;"></span></span><em><?=$ss?>%</em></p>
        </a> <a href="<?=$xwtitleurl?>" class="btn_lq">领取</a> </li>
<?php } ?>























