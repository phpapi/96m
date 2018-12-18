<?php  /*96KaiFa原创源码，官网：www.96kaifa.com*/
$ye=strFilter($_GET["next"]);
$clasid96kaifa=strFilter($_GET["classid"]);

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

$tsql2=$empire->query("select * from {$dbtbpre}enewsclass where bclassid='$clasid96kaifa'");
$i=0;
$aex= array();

while($tr=$empire->fetch($tsql2)){
$aaa2=$tr['classid'];
$aex[$i]=$aaa2;
$i++;
}
$chare = implode(",", $aex);


if(1==$clasid96kaifa){$ccid=$chare;}else{$ccid=$clasid96kaifa;}

$aabbccdd = base64_encode("select * from www_96kaifa_com_ecms_news where classid in ($ccid) order by newstime desc limit");

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
$tuurl=$public_r[add_www_96kaifa_com_url];
?>
	<li> <a href="<?=$xwtitleurl?>"> <img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>">
        <div class="title"><?=$xwtitle?></div>
        <p class="time"><?=date('Y-m-d',$newstime)?></p>
        </a> </li>
<?php } ?>























