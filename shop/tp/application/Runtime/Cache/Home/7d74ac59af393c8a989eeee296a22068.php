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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>购物车页面</title>

		<link href="/shop/tp/Public/Home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/shop/tp/Public/Home/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/shop/tp/Public/Home/css/cartstyle.css" rel="stylesheet" type="text/css" />
		<link href="/shop/tp/Public/Home/css/optstyle.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="/shop/tp/Public/Home/js/jquery.js"></script>

	</head>

	<body>

<!--购物车 -->
<div class="concent">
<div id="cartTable">
<div class="cart-table-th">
<div class="wp">
	<div class="th th-chk">
		<div id="J_SelectAll1" class="select-all J_SelectAll">

		</div>
	</div>
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
	<div class="th th-op">
		<div class="td-inner">操作</div>
	</div>
</div>
</div>
<div class="clear"></div>

<tr class="item-list">
<div class="bundle  bundle-last ">
	<div class="bundle-hd">
		<div class="bd-promos">
			<div class="bd-has-promo">已享优惠:<span class="bd-has-promo-content">省￥19.50</span>&nbsp;&nbsp;</div>
			<div class="act-promo">
				<a href="#" target="_blank">第二支半价，第三支免费<span class="gt">&gt;&gt;</span></a>
			</div>
			<span class="list-change theme-login">编辑</span>
		</div>
	</div>
	<div class="clear"></div>

		<?php if(is_array($data)): foreach($data as $key=>$v): ?><div class="bundle-main">
	<ul class="item-content clearfix">
									<li class="td td-chk">
										<div class="cart-checkbox ">
											<input class="check" id="J_CheckBox_170037950254" name="items[]" value="170037950254" type="checkbox">
											<label for="J_CheckBox_170037950254"></label>
										</div>
									</li>
									<li class="td td-item">
										<div class="item-pic">
											<a href="#" target="_blank" data-title="<?php echo ($v["goods_name"]); ?>" class="J_MakePoint" data-point="tbcart.8.12">
												<img src="/shop/tp<?php echo ($v["goods_img"]); ?>" class="itempic J_ItemImg"></a>
										</div>
										<div class="item-info">
											<div class="item-basic-info">
												<a href="#" target="_blank" title="<?php echo ($v["goods_name"]); ?>" class="item-title J_MakePoint" data-point="tbcart.8.11"><?php echo ($v["goods_name"]); ?></a>
											</div>
										</div>
									</li>
									<li class="td td-info">
										<div class="item-props item-props-can">
										<?php if(is_array($v['goods_attr'])): foreach($v['goods_attr'] as $k=>$vs): ?><span class="sku-line"><?php echo ($vs); ?>：</span>
											<span class="sku-line"><?php echo ($v["goods_attr_id"]["$k"]); ?>。</span><?php endforeach; endif; ?>
											<span tabindex="0" class="btn-edit-sku theme-login">修改</span>
											<i class="theme-login am-icon-sort-desc"></i>
										</div>
									</li>
									<li class="td td-price">
										<div class="item-price price-promo-promo">
											<div class="price-content">
												<div class="price-line">
													<em class="price-original"><?php echo ($v["market_price"]); ?></em>
												</div>
												<div class="price-line">
													<em class="J_Price price-now" tabindex="0"><?php echo ($v["goods_price"]); ?></em>
												</div>
											</div>
										</div>
									</li>
									<li class="td td-amount">
										<div class="amount-wrapper ">
											<div class="item-amount ">
												<div class="sl">
													<input class="min am-btn" name="" type="button" value="-" />
													<input class="text_box" name="" type="text" value="<?php echo ($v["buy_number"]); ?>" style="width:30px;" />
													<input class="add am-btn" name="" type="button" value="+" />
												</div>
											</div>
										</div>
									</li>
									<li class="td td-sum">
										<div class="td-inner">
											<em tabindex="0" class="J_ItemSum number"><?php echo ($v["toatle"]); ?></em>
										</div>
									</li>
									<li class="td td-op">
										<div class="td-inner">
											<a title="移入收藏夹" class="btn-fav" href="#">
                  移入收藏夹</a>
											<a href="javascript:;" data-point-url="#" class="delete">
                  删除</a>
										</div>
									</li>
								</ul>
	
		</div><?php endforeach; endif; ?>
</div>
</tr>
</div>

<div class="clear"></div>
<div class="float-bar-wrapper">
<div id="J_SelectAll2" class="select-all J_SelectAll">
<div class="cart-checkbox">
	<input class="check-all check" id="J_SelectAllCbx2" name="select-all" value="true" type="checkbox">
	<label for="J_SelectAllCbx2"></label>
</div>
<span>全选</span>
</div>
<div class="operations">
<a href="#" hidefocus="true" class="deleteAll">删除</a>
<a href="#" hidefocus="true" class="J_BatchFav">移入收藏夹</a>
</div>
<div class="float-bar-right">
<div class="amount-sum">
	<span class="txt">已选商品</span>
	<em id="J_SelectedItemsCount"><?php echo ($t_num); ?></em><span class="txt">件</span>
	<div class="arrow-box">
		<span class="selected-items-arrow"></span>
		<span class="arrow"></span>
	</div>
</div>
<div class="price-sum">
	<span class="txt">合计:</span>
	<strong class="price">¥<em id="J_Total"><?php echo ($t_price); ?></em></strong>
</div>
<div class="btn-area">
	<a href="<?php echo U('Order/is_order');?>" id="J_Go" class="submit-btn submit-btn-disabled" aria-label="请注意如果没有选择宝贝，将无法结算">
		<span>结&nbsp;算</span></a>
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