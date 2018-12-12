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
      <ul class="am-icon-flag on"> 商品管理</ul>
      
      <dl class="am-icon-home" style="float: right;">当前位置： 首页 &gt; <a href="#">商品添加</a></dl>
       <dl>
       <a href="/shop/tp/index.php/Admin/Goods/goods_list" class="am-btn am-btn-danger am-round am-btn-xs am-icon-plus">商品列表</a>
      </dl>
      
      
    </div>
    
    
    
      <div class="am-tabs am-margin" data-am-tabs="">
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">通用信息</a></li>
      <li class=""><a href="#tab2">详情描述</a></li>
      <li class=""><a href="#tab3">其他信息</a></li>
      <li class=""><a href="#tab4">商品属性</a></li>
      <li class=""><a href="#tab5">商品相册</a></li>
    </ul>


<!-- 通用信息 -->
    <form action="/shop/tp/index.php/Admin/Goods/goods_add" method="post" enctype="multipart/form-data">
    <div class="am-tabs-bd" style="touch-action: pan-y; -moz-user-select: none;">
      <div class="am-tab-panel am-fade am-active am-in" id="tab1">
           <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              商品名称
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input class="am-input-sm" type="text" name="goods_name">
            </div>
            <div class="am-u-sm-12 am-u-md-6"></div>
          </div>

          
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              商品货号
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input class="am-input-sm" type="text" name="goods_sn">
            </div>
            <div class="am-u-sm-12 am-u-md-6"></div>
          </div>
            
        <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">商品分类</div>
          <div class="am-u-sm-8 am-u-md-10">
            <select data-am-selected="{btnSize: 'sm'}" style="display: none;" name="cate_id">
            <option value=""></option>
            <?php if(is_array($cate)): foreach($cate as $key=>$vo): ?><option value="<?php echo ($vo["cate_id"]); ?>"><?php echo ($vo["level"]); echo ($vo["cat_name"]); ?></option><?php endforeach; endif; ?>
            </select>
          </div>
            </div>

             <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">商品品牌</div>
          <div class="am-u-sm-8 am-u-md-10">
            <select data-am-selected="{btnSize: 'sm'}" style="display: none;" name="brand_id">
            <option value=""></option>
              <?php if(is_array($brand_list)): foreach($brand_list as $key=>$v): ?><option value="<?php echo ($v["brand_id"]); ?>"><?php echo ($v["brand_name"]); ?></option><?php endforeach; endif; ?>
            </select>
          </div>
            </div>




          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              商品排序
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input class="am-input-sm" type="text" name="sort">
            </div>
            <div class="am-u-sm-12 am-u-md-6"></div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              本店售价
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input class="am-input-sm" type="text" name="shop_price">
            </div>
            <div class="am-u-sm-12 am-u-md-6"></div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right" >
              市场售价
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input class="am-input-sm" type="text" name="market_price">
            </div>
            <div class="am-u-sm-12 am-u-md-6"></div>
          </div>

         <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right" >
              上传主图
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input class="am-input-sm" type="file" name="goods_img">
            </div>
            <div class="am-u-sm-12 am-u-md-6"></div>
          </div>

        <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">是否促销</div>
          <div class="am-u-sm-8 am-u-md-10">
           
              <label class="am-btn am-btn-default am-btn-xs">
                <input name="is_promote" id="option1" type="radio" value="1"> 是
              </label>
              <label class="am-btn am-btn-default am-btn-xs">
                <input name="is_promote" id="option2" type="radio" value="0"> 否
              </label>
            
          </div>
        </div>
        
        <div class="am-g am-margin-top cu" style="display: none">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              促销价格
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input class="am-input-sm" type="text" name="promote_price">
            </div>
            <div class="am-u-sm-12 am-u-md-6"></div>
          </div>

        <div class="am-g am-margin-top cu" style="display: none">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">
            促销时间
          </div>
          <div class="am-u-sm-8 am-u-md-10">
            <div action="" class="am-form am-form-inline">
              <div class="am-form-group am-form-icon">
               
                <input class="am-form-field am-input-sm" data-am-datepicker="" placeholder="开始时间" type="type" name="promote_start_date">-- <input class="am-form-field am-input-sm" data-am-datepicker="" placeholder="结束时间" type="type" name="promote_end_date">
              </div>
            </div>
          </div>

        </div>
<script type="text/javascript">
$(function(){
  $("input[name='is_promote']").click(function(){
    var val = $(this).val();
    if(val == 1){
      $(".cu").show();
    }else{
      $(".cu").hide();
    }

  })
})


</script>



      </div>
<!-- 详情信息 -->
    <script type="text/javascript" charset="utf-8" src="/shop/tp/Public/Admin/UE/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/shop/tp/Public/Admin/UE/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/shop/tp/Public/Admin/UE/lang/zh-cn/zh-cn.js"></script>

    <script>
    var ue = UE.getEditor('editor',{
      textarea:"goods_desc",
      initialFrameWidth:1100,
      initialFrameHeight:400

    });
    </script>
      <div class="am-tab-panel am-fade" id="tab2">
          <textarea name="" id="editor" cols="30" rows="10"></textarea>
      </div>

      <div class="am-tab-panel am-fade" id="tab3">
        <div class="am-form">
          


<div class="xitong">
    

      
    
              <div class="am-form-group">
          <div class="zuo">商品重量：</div>
          <div class="you" style="max-width: 300px;">
            <input class="am-input-sm" name="goods_weight" placeholder="请输入" type="text">
          </div>
        </div>
        
                 <div class="am-form-group">
          <div class="zuo">商品库存：</div>
          <div class="you" style="max-width: 300px;">
            <input class="am-input-sm" name="goods_number" placeholder="请输入标题" type="text">
          </div>
        </div>
        
        
                      <div class="am-form-group">
          <div class="zuo">库存警告量：</div>
          <div class="you" style="max-width: 300px;">
            <input class="am-input-sm" name="warn_number" placeholder="请输入标题" type="text">
          </div>
        </div>
        
        
          <div class="am-form-group">
          <div class="zuo">是否新品：</div>
          <div class="you" style="max-width: 300px;">
            <div class="am-btn-group" data-am-button="">
              <label class="am-btn am-btn-default am-btn-xs">
                <input name="is_new" id="" type="radio" value="1"> 是
              </label>
              <label class="am-btn am-btn-default am-btn-xs">
                <input name="is_new" id="" type="radio" value="0"> 否
              </label>
            </div>
          </div>
        </div>

        <div class="am-form-group">
          <div class="zuo">是否精品：</div>
          <div class="you" style="max-width: 300px;">
            <div class="am-btn-group" data-am-button="">
              <label class="am-btn am-btn-default am-btn-xs">
                <input name="is_best" id="option1" type="radio" value="1"> 是
              </label>
              <label class="am-btn am-btn-default am-btn-xs">
                <input name="is_best" id="option2" type="radio" value="0"> 否
              </label>
            </div>
          </div>
        </div>

        <div class="am-form-group">
          <div class="zuo">是否热销：</div>
          <div class="you" style="max-width: 300px;">
            <div class="am-btn-group" data-am-button="">
              <label class="am-btn am-btn-default am-btn-xs">
                <input name="is_hot" id="option1" type="radio" value="1"> 是
              </label>
              <label class="am-btn am-btn-default am-btn-xs">
                <input name="is_hot" id="option2" type="radio" value="0"> 否
              </label>
            </div>
          </div>
        </div>
        
         <div class="am-form-group">
          <div class="zuo">是否包邮：</div>
          <div class="you" style="max-width: 300px;">
            <div class="am-btn-group" data-am-button="">
              <label class="am-btn am-btn-default am-btn-xs">
                <input name="is_shipping" id="option1" type="radio" value="1"> 是
              </label>
              <label class="am-btn am-btn-default am-btn-xs">
                <input name="is_shipping" id="option2" type="radio" value="0"> 否
              </label>
            </div>
          </div>
        </div>

            <div class="am-form-group">
          <div class="zuo">关键词</div>
          <div class="you" style="max-width: 300px;">
            <input class="am-input-sm" name="keywords" id="doc-ipt-email-1" placeholder="请输入标题" type="text">
          </div>
        </div>
        
        
          <div class="am-form-group">
          <div class="zuo">简短描述：</div>
          <div class="you" style="max-width: 300px;">
           <textarea name="goods_brief" id="" cols="30" rows="10"></textarea>
          </div>
        </div>
    </div>
        </div>
      </div>
      
      <div class="am-tab-panel am-fade" id="tab4">
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
             请选择模型：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
             <select name="" id="mode">
             <option value="">请选择..</option>
             <?php if(is_array($attr_list)): foreach($attr_list as $key=>$v): ?><option value="<?php echo ($v["goods_type_id"]); ?>"><?php echo ($v["type_name"]); ?></option><?php endforeach; endif; ?>
             </select>
            </div>
          </div>
          <div id="moedel"></div>
          </div>
      <script>
        $(function(){
            $('#mode').change(function(){
              var type_id = $(this).val();
              var tab4 = $('#moedel');
              if(type_id ==""){
                tab4.nextAll().remove();
                return false;
              }
              $.ajax({
                type:'post',
                url:"/shop/tp/index.php/Admin/Goods/getAttr",
                data:{
                  type_id
                },
                dataType:"json",
                success:function(msg){
                    if(msg.error == 0){
                        var str = '';
                      $.each(msg.content,function(k,v){
                            var input ="";
                            var span ="";
                        if(v.index_type==2){
                            input = '<input class="am-input-sm" name="attr_value[]" type="text">'
                        }else{
                          span +="<span class='add_model'>[+]</span>"
                          input ="<select class='sel' name='attr_value[]'>"
                          $.each(v.attr_values,function(ke,vs){
                              
                              input+="<option value="+vs+">"+vs+"</option>";
                          })
                          input+="</select>"
                        }

                        var price = "";
                        if(v.index_type == 3){
                          price +='<div class="am-u-sm-8 am-u-md-4 jiage" ><span>价格</span><input class="am-input-sm" name="attr_price[]" type="text"></div>'
                        }


                        str+='<div class="am-g am-margin-top us"><div class="am-u-sm-4 am-u-md-2 am-text-right"><input name="attr_id[]" value="'+v.attr_id+'" type="hidden">'+span+v.attr_name+'</div><div class="am-u-sm-8 am-u-md-4" style="width:100px">'+input+'</div><span>'+price+'</span></div>'


                      })
                      tab4.nextAll().remove();
                      tab4.after(str);

                    }
                }


              })



            })

            $(document).on("click",".add_model",function(){
                var thi_html = $(this).parent().html()
                var html = $(this).parent().siblings().html();
                var htmll = $(this).parent().next().next().html()
                end_html='<div class="am-g am-margin-top us"><div class="am-u-sm-4 am-u-md-2 am-text-right">'+thi_html+'</div><div class="am-u-sm-8 am-u-md-4" style="width:100px">'+html+'</div><span>'+htmll+'</span></div>';
                end_html=end_html.replace('add_model','moedl_del');
                end_html =end_html.replace('[+]','[-]');
                $(this).parent().next().next().parent().after(end_html)
               
               
            })

              $(document).on("click",".moedl_del",function(){
              $(this).parents('.us').remove();
                 
              })
        })
        

      </script>
      
      
      
      <div class="am-tab-panel am-fade" id="tab5">
        
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right" >
             添加照片：
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end adds" style="width:70%">
              <span style="float:left;" class="add">[+]</span><input class="am-input-sm" type="file" name="thumb_img[]">
            </div>
          </div>

         
      </div>
  <script>
  $(function(){
    $('.add').click(function(){
      var html = $('.adds').html();
      html = html.replace("add","del");
      html = html.replace("[+]","[-]");
      html = $(this).parent().after("<div class='am-u-sm-8 am-u-md-4 am-u-end adds' style='margin-left:175px;margin-top:13px'>"+html+"</div>")

    })

    $(document).on("click",".del",function(){
      $(this).parent().remove();
    })

  })

  </script>
  </div>
  </div>

  <div class="am-margin">
    <button type="submit" class="am-btn am-btn-success am-radius ">提交保存</button>
    <button type="reset" class="am-btn am-btn-primary am-radius ">重置</button>
  </div>
  </form>
    
    
    
    
    
    
    
  
  


 
 <div class="foods">
  <ul>
    版权所有@2015. 模板收集自 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> -  More Templates<a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
  </ul>
  <dl>
    <a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a>
  </dl>
</div>


<script src="/shop/tp/Public/Admin/js/amazeui.min.js"></script>

</div>

    <div class="foods">
      <ul>版权所有@2015 .模板收集自 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> -  More Templates<a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></ul>
      <dl><a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a></dl>
    </div>