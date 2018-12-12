<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="/shop/tp/Public/Admin/css/style.css" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="/shop/tp/Public/Admin/js/jquery.js"></script>
<script src="/shop/tp/Public/Admin/js/verificationNumbers.js"></script>
<script src="/shop/tp/Public/Admin/js/Particleground.js"></script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
  createCode();
</script>
</head>
<body>
<form action="<?php echo U('Login/Loging');?>" method="post">
<dl class="admin_login">
 <dt>
  <strong>站点后台管理系统</strong>
  <em>Management System</em>
 </dt>
 <dd class="user_icon">
  <input type="text" placeholder="账号" class="login_txtbx" name="admin_name"/>
 </dd>
 <dd class="pwd_icon">
  <input type="password" placeholder="密码" class="login_txtbx" name="admin_pwd"/>
 </dd>
 <dd class="val_icon">
  <div class="checkcode">
    <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx" name="code" >
  <img src="<?php echo U('Login/check');?>" onClick="this.src=this.src+'?'+Math.random;" alt="" class="J_codeimg" id="myCanvas" onclick="createCode()">
  </div>
  <input type="button" value="验证码核验" class="ver_btn" onClick="validate();">
 </dd>
 <dd>
  <input type="submit" value="立即登陆" class="submit_btn"/>
 </dd>
 <dd>
  <p>© 2015-2016 DeathGhost 版权所有</p>
  <p>陕B2-20080224-1</p>
 </dd>
</dl>
</form>
</body>
</html>