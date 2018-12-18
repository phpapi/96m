<?php  /*96KaiFa原创源码，官网：www.96kaifa.com*/
$ye=strFilter($_GET["next"]);
$uid=strFilter($_GET["uid"]);
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


$aabbccdd = base64_encode("select * from www_96kaifa_com_ecms_game order by onclick desc limit");

$yema= $ye*32;
$query = (base64_decode($aabbccdd)." $yema,32") //执行SQL语句 
or die("SQL语句执行失败2"); 
$i=1;
$query = $empire->query($query);
while($rss = mysqli_fetch_assoc($query)){


$xwtitle=$rss['title'];
$xwtitleurl=$rss['titleurl'];
$xwtitlepic=$rss['titlepic'];
$smalltext=$rss['smalltext'];
$newstime=$rss['newstime'];
?>
      <li> <a href="<?=$xwtitleurl?>" target="_blank" title="<?=$xwtitle?>"><img src="<?=$xwtitlepic?>"><span><?=$xwtitle?></span></a> <a href="<?=$xwtitleurl?>" target="_blank" class="wanBtn playgame" >开始玩</a> </li>
<?php } ?>














