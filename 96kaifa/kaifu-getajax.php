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

$aabbccdd = base64_encode("select * from www_96kaifa_com_ecms_kaifu order by newstime desc limit");

$yema= $ye*20;
$query = (base64_decode($aabbccdd)." $yema,20") //执行SQL语句 
or die("SQL语句执行失败2"); 
$query = $empire->query($query);
while($rs = mysqli_fetch_assoc($query)){
$src  = $rs[id];

$xwtitle=$rs['title'];
$xwtitleurl=$rs['titleurl'];
$xwtitlepic=$public_r['add_www_96kaifa_com_url'].$rs['titlepic'];
$fuwuqi=$rs['fuwuqi'];
$kfsj=$rs['kfsj'];

$tsql2=$empire->query("select * from www_96kaifa_com_ecms_game where id=$rs[yxid]");
while($ttr=$empire->fetch($tsql2)){
$aaa=$ttr['title'];
$bbb=$ttr['titleurl'];
$ccc=$ttr['titlepic'];
$ddd=$ttr['fenlei'];
}
?>
      <li> <a href="<?=$bbb?>" class="gxian"> <img src="<?=$public_r['add_www_96kaifa_com_url']?><?=$ccc?>" alt="<?=$aaa?>">
        <div class="title">
          <h4><?=$aaa?></h4>
        </div>
        <p class="txt"><em ><?=date('H:s',strtotime($kfsj))?></em>｜<?=$fuwuqi?></p>
        </a> <a href="<?=$bbb?>" class="btn_green playcount" data="116">开始玩</a> </li>
<?php } ?>

















