<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Amaze UI Admin index Examples</title>
<meta name="description" content="这是一个 index 页面">
<meta name="keywords" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="/shop/tp/Public/Admin/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/shop/tp/Public/Admin/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/shop/tp/Public/Admin/css/amazeui.min.css"/>
<link rel="stylesheet" href="/shop/tp/Public/Admin/css/admin.css">
<script src="/shop/tp/Public/Admin/js/jquery.min.js"></script>
<script src="/shop/tp/Public/Admin/js/app.js"></script>
</head>
<body>
<!--[if lte IE 9]><p class="browsehappy">升级你的浏览器吧！ <a href="http://se.360.cn/" target="_blank">升级浏览器</a>以获得更好的体验！</p><![endif]-->
</head>

<body>
<header class="am-topbar admin-header">
  <div class="am-topbar-brand"><img src="/shop/tp/Public/Admin/i/logo.png"></div>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">

   <li class="am-dropdown tognzhi" data-am-dropdown>
  <button class="am-btn am-btn-primary am-dropdown-toggle am-btn-xs am-radius am-icon-bell-o" data-am-dropdown-toggle> 消息管理<span class="am-badge am-badge-danger am-round">6</span></button>
  <ul class="am-dropdown-content">
  	
  	
  	
    <li class="am-dropdown-header">所有消息都在这里</li>

    

    <li><a href="#">未激活会员 <span class="am-badge am-badge-danger am-round">556</span></a></li>
    <li><a href="#">未激活代理 <span class="am-badge am-badge-danger am-round">69</span></a></a></li>
    <li><a href="#">未处理汇款</a></li>
    <li><a href="#">未发放提现</a></li>
    <li><a href="#">未发货订单</a></li>
    <li><a href="#">低库存产品</a></li>
    <li><a href="#">信息反馈</a></li>
    
    
    
  </ul>
</li>

 <li class="kuanjie">
 	
 	<a href="#">会员管理</a>          
 	<a href="#">奖金管理</a> 
 	<a href="#">订单管理</a>   
 	<a href="#">产品管理</a> 
 	<a href="#">个人中心</a> 
 	 <a href="<?php echo U('Login/login_out');?>">系统设置</a>
 </li>

 <li class="soso">
 	
<p>   
	
	<select data-am-selected="{btnWidth: 70, btnSize: 'sm', btnStyle: 'default'}">
          <option value="b">全部</option>
          <option value="o">产品</option>
          <option value="o">会员</option>
          
        </select>

</p>

<p class="ycfg"><input type="text" class="am-form-field am-input-sm" placeholder="圆角表单域" /></p>
<p><button class="am-btn am-btn-xs am-btn-default am-xiao"><i class="am-icon-search"></i></button></p>
 </li>




      <li class="am-hide-sm-only" style="float: right;"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main"> 

<div class="nav-navicon admin-main admin-sidebar">
    
    
    <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> 欢迎系统管理员：<?php echo ($_SESSION['res']['admin_name']); ?></div>
    <div class="sideMenu">
      <h3 class="am-icon-flag"><em></em> <a href="#">商品管理</a></h3>
      <ul>
        <li><a href="<?php echo U('Goods/goods_list');?>">商品列表</a></li>
        <li class="func" dataType='html' dataLink='msn.htm' iconImg='/shop/tp/Public/Admin/images/msn.gif'><a href="<?php echo U('Goods/goods_add');?>">添加新商品</a></li>
        <li><a href="<?php echo U('Category/category_list');?>">商品分类</a></li>
        <li><a href="<?php echo U('Brand/brand_list');?>">品牌列表</a></li>
        <li><a href="<?php echo U('Type/type_list');?>">商品类型</a></li>
        <li>用户评论</li>
        <li>商品回收站</li>
        <li>库存管理 </li>
      </ul>
      <h3 class="am-icon-cart-plus"><em></em> <a href="#"> 订单管理</a></h3>
      <ul>
        <li>订单列表</li>
        <li>合并订单</li>
        <li>订单打印</li>
        <li>添加订单</li>
        <li>发货单列表</li>
        <li>换货单列表</li>
      </ul>
      <h3 class="am-icon-users"><em></em> <a href="#">会员管理</a></h3>
      <ul>
        <li>会员列表 </li>
        <li>未激活会员</li>
        <li>团队系谱图</li>
        <li>会员推荐图</li>
        <li>推荐列表</li>
      </ul>
      <h3 class="am-icon-volume-up"><em></em> <a href="#">信息通知</a></h3>
      <ul>
        <li>站内消息 /留言 </li>
        <li>短信</li>
        <li>邮件</li>
        <li>微信</li>
        <li>客服</li>
      </ul>
      <h3 class="am-icon-gears"><em></em> <a href="#">系统设置</a></h3>
      <ul>
        <li>数据备份</li>
        <li>邮件/短信管理</li>
        <li>上传/下载</li>
        <li>权限</li>
        <li>网站设置</li>
        <li>第三方支付</li>
        <li>提现 /转账 出入账汇率</li>
        <li>平台设置</li>
        <li>声音文件</li>
      </ul>
    </div>
    <!-- sideMenu End --> 
    
    <script type="text/javascript">
			jQuery(".sideMenu").slide({
				titCell:"h3", //鼠标触发对象
				targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:150, //鼠标延迟触发时间（默认150）
				defaultPlay:true,//默认是否执行效果（默认true）
				returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
				});
		</script> 

    
    
    
    
    
    
    
</div>

<div class=" admin-content">
	
		<div class="daohang">
			<ul>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs"> 首页 </li>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs">帮助中心<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a></button></li>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs">奖金管理<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a></button></li>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs">产品管理<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="">×</a></button></li>
				
				
			</ul>

       

	
</div>
	
<div class="admin-biaogelist">
	
    <div class="listbiaoti am-cf">
      <ul class="am-icon-users"> 分类管理</ul>
      
      <dl class="am-icon-home" style="float: right;">当前位置： 首页 &gt; <a href="#">分类列表</a></dl>
      
      <dl>
       <a href="/shop/tp/index.php/Admin/Category/cate_add" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus">添加分类</a>
      </dl>
      <!--这里打开的是新页面-->

      
    </div>


    <form class="am-form am-g">
          <table class="am-table am-table-bordered am-table-radius am-table-striped" width="100%" id="datalist">
            
              <tr class="am-success">
                <td class="table-check"><input type="checkbox" id="xx" ></td>

                <td class="table-id">ID</td>
                <td class="table-title">分类名称</th>
                <td class="table-author am-hide-sm-only">分类描述</td>
                <td class="table-author am-hide-sm-only">所属分类</td>           
                <td class="table-date am-hide-sm-only">展示顺序</td>
                <td class="table-date am-hide-sm-only">是否导航展示</td>
                <td class="table-date am-hide-sm-only">是否展示</td>
                <td class="table-set" width="130px">操作</td>
              </tr>
           
            <?php if(is_array($cate)): foreach($cate as $key=>$vo): ?><tr>
                <td><input type="checkbox" class="son" value="<?php echo ($vo["cat_id"]); ?>" name="check"></td>
                <td><?php echo ($vo["cat_id"]); ?></td>
                <td><a href="#"><?php echo ($vo["level"]); echo ($vo["cat_name"]); ?></a></td>
                <td class="am-hide-sm-only"><?php echo ($vo["cat_desc"]); ?></td>
                <td class="am-hide-sm-only"><?php echo ($vo["parent_id"]); ?></td>
                <td class="am-hide-sm-only"><?php echo ($vo["sort"]); ?></td>
                <td class="am-hide-sm-only"><?php if($vo["is_nav"] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
                <td class="am-hide-sm-only"><?php if($vo["is_show"] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
                <td>
                      	
                	<div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <button class="am-btn am-btn-default am-btn-xs am-text-success am-round"><span class="am-icon-search" title="查看订单详情"></span> </button>
                      <a href="<?php echo U('Category/cate_edit');?>?cat_id=<?php echo ($vo["cat_id"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-secondary am-round" data-am-modal="{target: '#my-popups'}" title="修改订单"><span class="am-icon-pencil-square-o"></span></a>
                      <a href="<?php echo U('Category/cat_delete');?>?cat_id=<?php echo ($vo["cat_id"]); ?>" class="am-btn am-btn-default am-btn-xs am-text-danger am-round" title="删除订单"><span class="am-icon-trash-o"></span></a>
                    </div>
                  </div>
                </td>
              </tr><?php endforeach; endif; ?>

          </table>
          
                 <div class="am-btn-group am-btn-group-xs">
              <button type="button" class="am-btn am-btn-default" id="shan"><span class="am-icon-plus"></span> 删除</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 上架</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 下架</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 移动</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 移动</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
            </div>
          
          <ul class="am-pagination am-fr">              
                <li><?php echo ($show); ?></li>
              </ul>

          <hr>
          <p>注：.....</p>
        </form>
 
 
 
 
 <div class="foods">
  <ul>
    版权所有@2015. 模板收集自 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> -  More Templates<a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
  </ul>
  <dl>
    <a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a>
  </dl>
</div>




</div>

<script type="text/javascript">

$('#xx').click(function(){
// alert($(this).prop("checked"));
$(this).parents('table').find('.son').prop('checked',$(this).prop("checked"));
})

$('.son').click(function(){

 if($(this).prop('checked')){
  $(this).parents('table').find('#xx').prop('checked',$(this).prop('checked',true));
 }

//alert($(this).parents('tr').find("input[type='checkbox']:checked").size());
 if($(this).parents('table').find("input[type='checkbox']:checked").size()==1){
  $(this).parents('table').find('#xx').prop("checked",false);
 }
})


$('#shan').click(function(){
 
    var del = [];
    $("input[type='checkbox']:checked").each(function(){
      del.push($(this).val());
    })
   
    if(del!=""){
      if(confirm('确定要删除？')){
    $.post("<?php echo U('Brand/delete');?>",{brand_id:del},function(da){
      if(da == 1){
        alert('删除失败');
      }else{
        alert('删除成功');
        $("input[name='check']:checked").each(function(){
          $(this).parents('tr').remove();
        })
      }
      })

      }

    }else{ alert('没有选中数据')}//del大括号
  })



</script>>

    <div class="foods">
      <ul>版权所有@2015 .模板收集自 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> -  More Templates<a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></ul>
      <dl><a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a></dl>
    </div>