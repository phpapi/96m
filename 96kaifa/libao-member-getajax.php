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


$aabbccdd = base64_encode("select * from www_96kaifa_com_ecms_libaoip where uid='$uid' order by id desc limit");

$yema= $ye*4;
$query = (base64_decode($aabbccdd)." $yema,4") //执行SQL语句 
or die("SQL语句执行失败2"); 
$query = $empire->query($query);
$i=1;
while($rss = mysqli_fetch_assoc($query)){
$haoid  = $rss[haoid];



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
			<a href="javascript:;" value="<?=$src?>" uid="<?=$uid?>" class="plays">查看</a>
            </li>
<?php $i++; } ?>

<script src="/96kaifa/libao/base/js/base.js"></script>









