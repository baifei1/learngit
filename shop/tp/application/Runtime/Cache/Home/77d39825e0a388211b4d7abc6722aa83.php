<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head lang="en">
		<meta charset="UTF-8">
		<title>注册</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />

		<link rel="stylesheet" href="/shop/tp/Public/Home/AmazeUI-2.4.2/assets/css/amazeui.min.css" />
		<link href="/shop/tp/Public/Home/css/dlstyle.css" rel="stylesheet" type="text/css">
		<script src="/shop/tp/Public/Home/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/shop/tp/Public/Home/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

	</head>

	<body>

		<div class="login-boxtitle">
			<a href="home/demo.html"><img alt="" src="/shop/tp/Public/Home/images/logobig.png" /></a>
		</div>

		<div class="res-banner">
			<div class="res-main">
				<div class="login-banner-bg"><span></span><img src="/shop/tp/Public/Home/images/big.jpg" /></div>
				<div class="login-box">

						<div class="am-tabs" id="doc-my-tabs">
							<ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
								<li class="am-active"><a href="">邮箱注册</a></li>
								<li><a href="">手机号注册</a></li>
							</ul>

							<div class="am-tabs-bd">
								<div class="am-tab-panel am-active">
									<form>
										
							   <div class="user-email">
										<label for="email"><i class="am-icon-envelope-o"></i></label>
										<input type="email" name="email" id="email" placeholder="请输入邮箱账号">
                 </div>										
                 <div class="user-pass">
								    <label for="password"><i class="am-icon-lock"></i></label>
								    <input type="password" name="password" id="password" placeholder="设置密码">
                 </div>										
                 <div class="user-pass">
								    <label for="passwordRepeat"><i class="am-icon-lock"></i></label>
								    <input type="password" name="passwordRepeat" id="passwordRepeat" placeholder="确认密码">
                 </div>	
                 
                 
               
</form>
								 <div class="login-links">
										
											<input name="dian" value="1" id="reader-me" type="checkbox" style="width:10%;height: 20%"><span>点击表示您同意商城《服务协议》</span><b id="xuan"></b>
										
							  	</div>
										<div class="am-cf">
											<input type="submit" name="zhuce" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
										</div>

								</div>
								<!-- 注册ajax传值 -->
								<script type="text/javascript">
								$("input[name='zhuce']").click(function(){
									var email = $('#email').val();
									var password = $('#password').val();
									var reader = $('#reader-me').is(':checked');
									var passwordRepeat = $('#passwordRepeat').val();
									
									if(reader===false){
										$('#xuan').nextAll().remove();
										$('#xuan').after("<font color=red>请勾选✔</font>");
										return false;
									}
									if(reader===true){
										$('#xuan').nextAll().remove();
									}
									if(email==""||password==""||passwordRepeat==""){
										alert('请正确填写信息');
										return false;
									}
									var reg =/^\d{5,}@[a-z0-9]{2,}(\.)(com|cn|net)$/;
									if(!reg.test(email)){
										alert('邮箱格式有误');
										return false;
									}
									if($.trim(password)!=$.trim(passwordRepeat)){
										alert('两次输入密码不一致');
										return false;
									}

									$.post("/shop/tp/index.php/Home/Login/register",{email,password,passwordRepeat},function(msg){
										if(msg.error==0){
											// alert(1);
											window.location.href=msg.url;
										}else{
											alert(msg.content);
										}
									})

								})


								</script>
								<div class="am-tab-panel">
									<form method="post">
                 				<div class="user-phone">
								    <label for="phone"><i class="am-icon-mobile-phone am-icon-md"></i></label>
								    <input type="tel" name="" id="phone" placeholder="请输入手机号">
                 </div>																			
										<div class="verification">
											<label for="code"><i class="am-icon-code-fork"></i></label>
											<input type="tel" name="" id="code" placeholder="请输入验证码">
											<a class="btn" href="javascript:void(0);" onClick="sendMobileCode();" id="sendMobileCode">
												<span id="dyMobileButton">获取</span></a>
										</div>
                 <div class="user-pass">
								    <label for="password"><i class="am-icon-lock"></i></label>
								    <input type="password" name="" id="password" placeholder="设置密码">
                 </div>										
                 <div class="user-pass">
								    <label for="passwordRepeat"><i class="am-icon-lock"></i></label>
								    <input type="password" name="" id="passwordRepeat" placeholder="确认密码">
                 </div>	
								
								 <div class="login-links">
										<label for="reader-me">
											<input id="reader-me" type="checkbox"> 点击表示您同意商城《服务协议》
										</label>
							  	</div>
										<div class="am-cf">
											<input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
										</div>
								
									<hr>
								</div>

								<script>
									$(function() {
									    $('#doc-my-tabs').tabs();
									  })
								</script>

							</div>
						</div>

				</div>
			</div>
			
					<div class="footer ">
						<div class="footer-hd ">
							<p>
								<a href="# ">恒望科技</a>
								<b>|</b>
								<a href="# ">商城首页</a>
								<b>|</b>
								<a href="# ">支付宝</a>
								<b>|</b>
								<a href="# ">物流</a>
							</p>
						</div>
						<div class="footer-bd ">
							<p>
								<a href="# ">关于恒望</a>
								<a href="# ">合作伙伴</a>
								<a href="# ">联系我们</a>
								<a href="# ">网站地图</a>
								<em>© 2015-2025 Hengwang.com 版权所有</em>
							</p>
						</div>
					</div>
	</body>

</html>