<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>首页</title>

		<link href="/shop/tp/Public/Home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/shop/tp/Public/Home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

		<link href="/shop/tp/Public/Home/basic/css/demo.css" rel="stylesheet" type="text/css" />

		<link href="/shop/tp/Public/Home/css/hmstyle.css" rel="stylesheet" type="text/css"/>
		<link href="/shop/tp/Public/Home/css/skin.css" rel="stylesheet" type="text/css" />
		<script src="/shop/tp/Public/Home/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/shop/tp/Public/Home/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

	</head>

	<body>
		<div class="hmtop">
			<!--顶部导航条 -->
			<div class="am-container header">
				<ul class="message-l">
					<div class="topMessage">
						<div class="menu-hd">
						<?php if(isset($_SESSION['user']['user_name'])): ?><a href="#" target="_top" class="h"><?php echo ($_SESSION['user']['user_name']); ?></a>
							<?php else: ?>
							<a href="<?php echo U('Login/index');?>" target="_top" class="h">亲，请登录</a>
							<a href="#" target="_top">免费注册</a><?php endif; ?>
							<a href="<?php echo U('Login/login_out');?>" target="_top">退出登录</a>
						</div>
					</div>
				</ul>
				<ul class="message-r">
					<div class="topMessage home">
						<div class="menu-hd"><a href="<?php echo U('Index/index');?>" target="_top" class="h">商城首页</a></div>
					</div>
					<div class="topMessage my-shangcheng">
						<div class="menu-hd MyShangcheng"><a href="#" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
					</div>
					<div class="topMessage mini-cart">
						<div class="menu-hd"><a id="mc-menu-hd" href="#" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h"><?php echo ($count?$count:0); ?></strong></a></div>
					</div>
					<div class="topMessage favorite">
						<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
				</ul>
				</div>

				<!--悬浮搜索框-->

				<div class="nav white">
					<div class="logo"><img src="/shop/tp/Public/Home/images/logo.png" /></div>
					<div class="logoBig">
						<li><img src="/shop/tp/Public/Home/images/logobig.png" /></li>
					</div>

					<div class="search-bar pr">
						<a name="index_none_header_sysc" href="#"></a>
						<form>
							<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
							<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
						</form>
					</div>
				</div>

				<div class="clear"></div>
			</div>
		<?php if(CONTROLLER_NAME =='Index'){?>
			<div class="banner">
                      <!--轮播 -->
						<div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
							<ul class="am-slides">
								<li class="banner1"><a href="introduction.html"><img src="/shop/tp/Public/Home/images/ad1.jpg" /></a></li>
								<li class="banner2"><a><img src="/shop/tp/Public/Home/images/ad2.jpg" /></a></li>
								<li class="banner3"><a><img src="/shop/tp/Public/Home/images/ad3.jpg" /></a></li>
								<li class="banner4"><a><img src="/shop/tp/Public/Home/images/ad4.jpg" /></a></li>

							</ul>
						</div>
						<div class="clear"></div>	
			</div>
		<?php } ?>
			<div class="shopNav">
				<div class="slideall">
					
					   <div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="<?php echo U('Index/index');?>">首页</a></li>
                              <?php if(is_array($category)): foreach($category as $key=>$v): ?><li class="qc"><a href="#"><?php echo ($v["cat_name"]); ?></a></li><?php endforeach; endif; ?>
							</ul>
						    <div class="nav-extra">
						    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
						    </div>
						</div>



		<title>结算页面</title>

		<link href="/shop/tp/Public/Home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />

		<link href="/shop/tp/Public/Home/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/shop/tp/Public/Home/css/cartstyle.css" rel="stylesheet" type="text/css" />

		<link href="/shop/tp/Public/Home/css/jsstyle.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="/shop/tp/Public/Home/js/address.js"></script>

	

			
			<div class="concent">
				<!--地址 -->
				<div class="paycont">
					<div class="address">
						<h3>确认收货地址 </h3>
						<div class="control">
							<div class="tc-btn createAddr theme-login am-btn am-btn-danger">使用新地址</div>
						</div>
						<div class="clear"></div>
						<ul>
							<div class="per-border"></div>
							<li class="user-addresslist defaultAddr">

								<div class="address-left">
									<div class="user DefaultAddr">

										<span class="buy-address-detail">   
                   <span class="buy-user">艾迪 </span>
										<span class="buy-phone">15871145629</span>
										</span>
									</div>
									<div class="default-address DefaultAddr">
										<span class="buy-line-title buy-line-title-type">收货地址：</span>
										<span class="buy--address-detail">
								   <span class="province">湖北</span>省
										<span class="city">武汉</span>市
										<span class="dist">洪山</span>区
										<span class="street">雄楚大道666号(中南财经政法大学)</span>
										</span>

										</span>
									</div>
									<ins class="deftip">默认地址</ins>
								</div>
								<div class="address-right">
									<a href="person/address.html">
										<span class="am-icon-angle-right am-icon-lg"></span></a>
								</div>
								<div class="clear"></div>

								<div class="new-addr-btn">
									<a href="#" class="hidden">设为默认</a>
									<span class="new-addr-bar hidden">|</span>
									<a href="#">编辑</a>
									<span class="new-addr-bar">|</span>
									<a href="javascript:void(0);" onclick="delClick(this);">删除</a>
								</div>

							</li>
							<div class="per-border"></div>
							<li class="user-addresslist">
								<div class="address-left">
									<div class="user DefaultAddr">

										<span class="buy-address-detail">   
                   <span class="buy-user">艾迪 </span>
										<span class="buy-phone">15871145629</span>
										</span>
									</div>
									<div class="default-address DefaultAddr">
										<span class="buy-line-title buy-line-title-type">收货地址：</span>
										<span class="buy--address-detail">
								   <span class="province">湖北</span>省
										<span class="city">武汉</span>市
										<span class="dist">武昌</span>区
										<span class="street">东湖路75号众环大厦2栋9层902</span>
										</span>

										</span>
									</div>
									<ins class="deftip hidden">默认地址</ins>
								</div>
								<div class="address-right">
									<span class="am-icon-angle-right am-icon-lg"></span>
								</div>
								<div class="clear"></div>

								<div class="new-addr-btn">
									<a href="#">设为默认</a>
									<span class="new-addr-bar">|</span>
									<a href="#">编辑</a>
									<span class="new-addr-bar">|</span>
									<a href="javascript:void(0);"  onclick="delClick(this);">删除</a>
								</div>

							</li>

						</ul>

						<div class="clear"></div>
					</div>
					<!--物流 -->
					<div class="logistics">
						<h3>选择物流方式</h3>
						<ul class="op_express_delivery_hot">
							<li data-value="yuantong" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -468px"></i>圆通<span></span></li>
							<li data-value="shentong" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -1008px"></i>申通<span></span></li>
							<li data-value="yunda" class="OP_LOG_BTN  "><i class="c-gap-right" style="background-position:0px -576px"></i>韵达<span></span></li>
							<li data-value="zhongtong" class="OP_LOG_BTN op_express_delivery_hot_last "><i class="c-gap-right" style="background-position:0px -324px"></i>中通<span></span></li>
							<li data-value="shunfeng" class="OP_LOG_BTN  op_express_delivery_hot_bottom"><i class="c-gap-right" style="background-position:0px -180px"></i>顺丰<span></span></li>
						</ul>
					</div>
					<div class="clear"></div>

					<!--支付方式-->
					<div class="logistics">
						<h3>选择支付方式</h3>
						<ul class="pay-list">
							<li class="pay card "><img src="/shop/tp/Public/Home/images/wangyin.jpg" />银联<span pay_id="001"></span></li>
							<li class="pay qq "><img src="/shop/tp/Public/Home/images/weizhifu.jpg" />微信<span pay_id="002"></span></li>
							<li class="pay taobao "><img src="/shop/tp/Public/Home/images/zhifubao.jpg" />支付宝<span pay_id="003"></span></li>
						</ul>
					</div>
					<div class="clear"></div>
<script>
 $(function(){
 	$(".btn-go").click(function(){
 		var payment = $('.pay-list').find("li[class$=' selected']").children("span").attr("pay_id");
 		
 		if(payment==''){
 			return false;
 		}

 		$.ajax({
 			url:"/shop/tp/index.php/Home/Order/set_order",
 			data:{
 				payment
 			},
 			success:function(msg){
 				if(msg.error==0){
                        	window.location.href="<?php echo U('Order/getpayment')?>";
 			}
 		}
 		})

 	})
 })
</script>
					<!--订单 -->
					<div class="concent">
						<div id="payTable">
							<h3>确认订单信息</h3>
							<div class="cart-table-th">
								<div class="wp">

									<div class="th th-item">
										<div class="td-inner">商品信息</div>
									</div>
									<div class="th th-price">
										<div class="td-inner">单价</div>
									</div>
									<div class="th th-amount">
										<div class="td-inner">数量</div>
									</div>
									<div class="th th-sum">
										<div class="td-inner">金额</div>
									</div>
									<div class="th th-oplist">
										<div class="td-inner">配送方式</div>
									</div>

								</div>
							</div>
							<div class="clear"></div>

<tr class="item-list">
<div class="bundle  bundle-last">

	<div class="bundle-main">
		<ul class="item-content clearfix">
			<div class="pay-phone">
				<li class="td td-item">
					<div class="item-pic">
						<a href="#" class="J_MakePoint">
							<img src="/shop/tp/Public/Home/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg"></a>
					</div>
					<div class="item-info">
						<div class="item-basic-info">
							<a href="#" class="item-title J_MakePoint" data-point="tbcart.8.11">美康粉黛醉美唇膏 持久保湿滋润防水不掉色</a>
						</div>
					</div>
				</li>
				<li class="td td-info">
					<div class="item-props">
						<span class="sku-line">颜色：12#川南玛瑙</span>
						<span class="sku-line">包装：裸装</span>
					</div>
				</li>
				<li class="td td-price">
					<div class="item-price price-promo-promo">
						<div class="price-content">
							<em class="J_Price price-now">39.00</em>
						</div>
					</div>
				</li>
			</div>
			<li class="td td-amount">
				<div class="amount-wrapper ">
					<div class="item-amount ">
						<span class="phone-title">购买数量</span>
						<div class="sl">
							<input class="min am-btn" name="" type="button" value="-" />
							<input class="text_box" name="" type="text" value="3" style="width:30px;" />
							<input class="add am-btn" name="" type="button" value="+" />
						</div>
					</div>
				</div>
			</li>
			<li class="td td-sum">
				<div class="td-inner">
					<em tabindex="0" class="J_ItemSum number">117.00</em>
				</div>
			</li>
			<li class="td td-oplist">
				<div class="td-inner">
					<span class="phone-title">配送方式</span>
					<div class="pay-logis">
						快递<b class="sys_item_freprice">10</b>元
					</div>
				</div>
			</li>

		</ul>
		<div class="clear"></div>

	</div>
</tr>
<div class="clear"></div>
</div>

<tr id="J_BundleList_s_1911116345_1" class="item-list">
<div id="J_Bundle_s_1911116345_1_0" class="bundle  bundle-last">
	<div class="bundle-main">
		<ul class="item-content clearfix">
			<div class="pay-phone">
				<li class="td td-item">
					<div class="item-pic">
						<a href="#" class="J_MakePoint">
							<img src="/shop/tp/Public/Home/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg"></a>
					</div>
					<div class="item-info">
						<div class="item-basic-info">
							<a href="#" target="_blank" title="美康粉黛醉美唇膏 持久保湿滋润防水不掉色" class="item-title J_MakePoint" data-point="tbcart.8.11">美康粉黛醉美唇膏 持久保湿滋润防水不掉色</a>
						</div>
					</div>
				</li>
				<li class="td td-info">
					<div class="item-props">
						<span class="sku-line">颜色：10#蜜橘色+17#樱花粉</span>
						<span class="sku-line">包装：两支手袋装（送彩带）</span>
					</div>
				</li>
				<li class="td td-price">
					<div class="item-price price-promo-promo">
						<div class="price-content">
							<em class="J_Price price-now">39.00</em>
						</div>
					</div>
				</li>
			</div>

			<li class="td td-amount">
				<div class="amount-wrapper ">
					<div class="item-amount ">
						<span class="phone-title">购买数量</span>
						<div class="sl">
							<input class="min am-btn" name="" type="button" value="-" />
							<input class="text_box" name="" type="text" value="3" style="width:30px;" />
							<input class="add am-btn" name="" type="button" value="+" />
						</div>
					</div>
				</div>
			</li>
			<li class="td td-sum">
				<div class="td-inner">
					<em tabindex="0" class="J_ItemSum number">117.00</em>
				</div>
			</li>
			<li class="td td-oplist">
				<div class="td-inner">
					<span class="phone-title">配送方式</span>
					<div class="pay-logis">
						包邮
					</div>
				</div>
			</li>

		</ul>
		<div class="clear"></div>

	</div>
</tr>
</div>
<div class="clear"></div>
<div class="pay-total">
<!--留言-->
<div class="order-extra">
<div class="order-user-info">
	<div id="holyshit257" class="memo">
		<label>买家留言：</label>
		<input type="text" title="选填,对本次交易的说明（建议填写已经和卖家达成一致的说明）" placeholder="选填,建议填写和卖家达成一致的说明" class="memo-input J_MakePoint c2c-text-default memo-close">
		<div class="msg hidden J-msg">
			<p class="error">最多输入500个字符</p>
		</div>
	</div>
</div>

</div>
<!--优惠券 -->
<div class="buy-agio">
<li class="td td-coupon">

	<span class="coupon-title">优惠券</span>
	<select data-am-selected>
		<option value="a">
			<div class="c-price">
				<strong>￥8</strong>
			</div>
			<div class="c-limit">
				【消费满95元可用】
			</div>
		</option>
		<option value="b" selected>
			<div class="c-price">
				<strong>￥3</strong>
			</div>
			<div class="c-limit">
				【无使用门槛】
			</div>
		</option>
	</select>
</li>

<li class="td td-bonus">

	<span class="bonus-title">红包</span>
	<select data-am-selected>
		<option value="a">
			<div class="item-info">
				¥50.00<span>元</span>
			</div>
			<div class="item-remainderprice">
				<span>还剩</span>10.40<span>元</span>
			</div>
		</option>
		<option value="b" selected>
			<div class="item-info">
				¥50.00<span>元</span>
			</div>
			<div class="item-remainderprice">
				<span>还剩</span>50.00<span>元</span>
			</div>
		</option>
	</select>

</li>

</div>
<div class="clear"></div>
</div>
<!--含运费小计 -->
<div class="buy-point-discharge ">
<p class="price g_price ">
	合计（含运费） <span>¥</span><em class="pay-sum">244.00</em>
</p>
</div>

<!--信息 -->
<div class="order-go clearfix">
<div class="pay-confirm clearfix">
	<div class="box">
		<div tabindex="0" id="holyshit267" class="realPay"><em class="t">实付款：</em>
			<span class="price g_price ">
    <span>¥</span> <em class="style-large-bold-red " id="J_ActualFee">244.00</em>
			</span>
		</div>

		<div id="holyshit268" class="pay-address">

			<p class="buy-footer-address">
				<span class="buy-line-title buy-line-title-type">寄送至：</span>
				<span class="buy--address-detail">
   <span class="province">湖北</span>省
				<span class="city">武汉</span>市
				<span class="dist">洪山</span>区
				<span class="street">雄楚大道666号(中南财经政法大学)</span>
				</span>
				</span>
			</p>
			<p class="buy-footer-address">
				<span class="buy-line-title">收货人：</span>
				<span class="buy-address-detail">   
         <span class="buy-user">艾迪 </span>
				<span class="buy-phone">15871145629</span>
				</span>
			</p>
		</div>
	</div>

	<div id="holyshit269" class="submitOrder">
		<div class="go-btn-wrap">
			<a id="J_Go" href="javascript:void(0)" class="btn-go" tabindex="0" title="点击此按钮，提交订单">提交订单</a>
		</div>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>

<div class="clear"></div>
</div>
</div>
<div class="footer">
<div class="footer-hd">
<p>
<a href="#">恒望科技</a>
<b>|</b>
<a href="#">商城首页</a>
<b>|</b>
<a href="#">支付宝</a>
<b>|</b>
<a href="#">物流</a>
</p>
</div>
<div class="footer-bd">
<p>
<a href="#">关于恒望</a>
<a href="#">合作伙伴</a>
<a href="#">联系我们</a>
<a href="#">网站地图</a>
<em>© 2015-2025 Hengwang.com 版权所有</em>
</p>
</div>
</div>
</div>
<div class="theme-popover-mask"></div>
<div class="theme-popover">

				<!--标题 -->
				<div class="am-cf am-padding">
					<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add address</small></div>
				</div>
				<hr/>

				<div class="am-u-md-12">
					<form class="am-form am-form-horizontal">

						<div class="am-form-group">
							<label for="user-name" class="am-form-label">收货人</label>
							<div class="am-form-content">
								<input type="text" id="user-name" placeholder="收货人">
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-phone" class="am-form-label">手机号码</label>
							<div class="am-form-content">
								<input id="user-phone" placeholder="手机号必填" type="email">
							</div>
						</div>

						<div class="am-form-group">
							<label for="user-phone" class="am-form-label">所在地</label>
							<div class="am-form-content address">
								<select name="area[]" class="area">
									<option value="">请选择..</option>
									<?php if(is_array($region)): foreach($region as $key=>$v): ?><option value="<?php echo ($v["region_id"]); ?>"><?php echo ($v["region_name"]); ?></option><?php endforeach; endif; ?>
								</select>
								
								</select>
							</div>
						</div>
<script>
$(function(){

$(document).on("change",".area",function(){
	var region_id = $(this).val();
	var obj = $(this)
	 // alert(obj)
	if(region_id ==''){
		obj.nextAll().remove();
		return false;
	}

	$.ajax({
			type:"post",
			url:"/shop/tp/index.php/Home/Order/get_region",
			data:{
				region_id
			},
			dataType:"json",
			success:function(msg){
				if(msg.error==0){
					 var str ="<select name='area[]' class='area'>";
					 $.each(msg.content,function(k,v){
					 	str+="<option value='"+v.region_id+"'>"+v.region_name+"</option>";
					 })
					  	str+="</select>";
					 obj.nextAll().remove();
					 obj.after(str)

				}else{
					alert(msg.content)
				}
			}
	})
})

})

</script>
						<div class="am-form-group">
							<label for="user-intro" class="am-form-label">详细地址</label>
							<div class="am-form-content">
								<textarea class="" rows="3" id="user-intro" placeholder="输入详细地址"></textarea>
								<small>100字以内写出你的详细地址...</small>
							</div>
						</div>

						<div class="am-form-group theme-poptit">
							<div class="am-u-sm-9 am-u-sm-push-3">
								<div class="am-btn am-btn-danger">保存</div>
								<div class="am-btn am-btn-danger close">取消</div>
							</div>
						</div>
					</form>
				</div>

			</div>

			<div class="clear"></div>
	</body>

</html>


   
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

		</div>
		</div>
		<!--引导 -->
		<div class="navCir">
			<li class="active"><a href="home.html"><i class="am-icon-home "></i>首页</a></li>
			<li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
			<li><a href="<?php echo U('Cart/cart_list');?>"><i class="am-icon-shopping-basket"></i>购物车</a></li>	
			<li><a href="person/index.html"><i class="am-icon-user"></i>我的</a></li>					
		</div>


		<!--菜单 -->
		<div class=tip>
			<div id="sidebar">
				<div id="wrap">
					<div id="prof" class="item ">
						<a href="# ">
							<span class="setting "></span>
						</a>
						<div class="ibar_login_box status_login ">
							<div class="avatar_box ">
								<p class="avatar_imgbox "><img src="/shop/tp/Public/Home/images/no-img_mid_.jpg " /></p>
								<ul class="user_info ">
									<li><?php echo ($_SESSION['user']['user_id']); ?></li>
									<li>级&nbsp;别普通会员</li>
								</ul>
							</div>
							<div class="login_btnbox ">
								<a href="# " class="login_order ">我的订单</a>
								<a href="# " class="login_favorite ">我的收藏</a>
							</div>
							<i class="icon_arrow_white "></i>
						</div>

					</div>
					<div id="shopCart " class="item ">
						<a href="<?php echo U('Cart/cart_list',array('user_id'=>$_SESSION['user']['user_id']));?>">
							<span class="message "></span>
						</a>
						<p>
							购物车
						</p>
						<p class="cart_num " id="buy_"><?php echo ($count?$count:0); ?></p>
					</div>
					<div id="asset " class="item ">
						<a href="# ">
							<span class="view "></span>
						</a>
						<div class="mp_tooltip ">
							我的资产
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="foot " class="item ">
						<a href="# ">
							<span class="zuji "></span>
						</a>
						<div class="mp_tooltip ">
							我的足迹
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="brand " class="item ">
						<a href="#">
							<span class="wdsc "><img src="/shop/tp/Public/Home/images/wdsc.png " /></span>
						</a>
						<div class="mp_tooltip ">
							我的收藏
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="broadcast " class="item ">
						<a href="# ">
							<span class="chongzhi "><img src="/shop/tp/Public/Home/images/chongzhi.png " /></span>
						</a>
						<div class="mp_tooltip ">
							我要充值
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div class="quick_toggle ">
						<li class="qtitem ">
							<a href="# "><span class="kfzx "></span></a>
							<div class="mp_tooltip ">客服中心<i class="icon_arrow_right_black "></i></div>
						</li>
						<!--二维码 -->
						<li class="qtitem ">
							<a href="#none "><span class="mpbtn_qrcode "></span></a>
							<div class="mp_qrcode " style="display:none; "><img src="/shop/tp/Public/Home/images/weixin_code_145.png " /><i class="icon_arrow_white "></i></div>
						</li>
						<li class="qtitem ">
							<a href="#top " class="return_top "><span class="top "></span></a>
						</li>
					</div>

					<!--回到顶部 -->
					<div id="quick_links_pop " class="quick_links_pop hide "></div>

				</div>

			</div>
			<div id="prof-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					我
				</div>
			</div>
			<div id="shopCart-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					购物车
				</div>
			</div>
			<div id="asset-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					资产
				</div>

				<div class="ia-head-list ">
					<a href="# " target="_blank " class="pl ">
						<div class="num ">0</div>
						<div class="text ">优惠券</div>
					</a>
					<a href="# " target="_blank " class="pl ">
						<div class="num ">0</div>
						<div class="text ">红包</div>
					</a>
					<a href="# " target="_blank " class="pl money ">
						<div class="num ">￥0</div>
						<div class="text ">余额</div>
					</a>
				</div>

			</div>
			<div id="foot-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					足迹
				</div>
			</div>
			<div id="brand-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					收藏
				</div>
			</div>
			<div id="broadcast-content " class="nav-content ">
				<div class="nav-con-close ">
					<i class="am-icon-angle-right am-icon-fw "></i>
				</div>
				<div>
					充值
				</div>
			</div>
		</div>
		<script>
			window.jQuery || document.write('<script src="/shop/tp/Public/Home/basic/js/jquery.min.js "><\/script>');
		</script>
		<script type="text/javascript " src="/shop/tp/Public/Home/basic/js/quick_links.js "></script>
	</body>

</html>