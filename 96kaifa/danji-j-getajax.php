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


if($clasid96kaifa==0){
$aabbccdd = base64_encode("select * from www_96kaifa_com_ecms_danji order by newstime desc limit");
}else{
$aabbccdd = base64_encode("select * from www_96kaifa_com_ecms_danji where fenlei='$clasid96kaifa' order by newstime desc limit");
}

$yema= $ye*30;
$query = (base64_decode($aabbccdd)." $yema,30") //执行SQL语句 
or die("SQL语句执行失败2"); 
$query = $empire->query($query);
while($rs = mysqli_fetch_assoc($query)){
$src  = $rs[id];

$xwtitle=$rs['title'];
$xwtitleurl=$rs['titleurl'];
$xwtitlepic=$public_r['add_www_96kaifa_com_url'].$rs['titlepic'];
$newstime=$rs['newstime'];
$yijuhua=$rs['yijuhua'];
?>
	<li> <a href="<?=$xwtitleurl?>" class="gxian"> <img src="<?=$xwtitlepic?>" alt="<?=$xwtitle?>">
        <div class="title">
          <h4><?=$xwtitle?></h4>
        </div>
        <p class="txt"><?=$yijuhua?></p>
        </a> <a href="<?=$xwtitleurl?>" class="btn_green playviews">开始玩</a> </li>
<?php } ?>























