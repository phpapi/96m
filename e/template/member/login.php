<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<!-- 游戏全屏 -->
<meta name="full-screen" content="yes">
<meta name="x5-fullscreen" content="true">
<meta name="360-fullscreen" content="true">
<title>会员登录 - <?=$public_r['add_www_96kaifa_com_name']?></title>
<link href="/96kaifa/statics/wap_v1/H5/css/game.css" type="text/css" rel="stylesheet">
<link href="" sizes="60x60" rel="apple-touch-icon-precomposed">
</head>
<body>
<div class="main" style="background:url(/96kaifa/statics/wap_v1/H5/images/login_bg.jpg) no-repeat center top; background-size:cover;max-width: 640px">
  <div id="mask" class="mask"></div>
  <div class="popupBox" id="popup">
    <div class="popdiv" id="login">
      <h3>账号登录</h3>
      <form class="form_input" action="/e/member/doaction.php" method="post">
      <input type="hidden" name="ecmsfrom" value="/e/member/cp/">
      <input type="hidden" name="enews" value="login">
      <input name="tobind" type="hidden" id="tobind" value="0">
        <p class="div-input">
          <input type="text" name="username" class="input-text username" placeholder="输入用户名">
        </p>
        <p class="div-input">
          <input type="password" name="password" class="input-pass password" placeholder="输入密码">
        </p>
        <p class="div-btn">
          <input type="submit" name="submit" class="btnblue" value="立即登录">
        </p>
        <p class="div-other">没有账号？<a href="/register.html">立即注册</a></p>
      </form>
    </div>
  </div>
</div>
</body>
</html>