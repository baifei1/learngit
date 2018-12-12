<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends CommonController {

public function is_order(){
	if(IS_GET){
		$region = $this->get_region();
		$this->assign("region",$region);
		$this->display();
	}
}

/*地区联动得方法*/
public function get_region($region_id=false){
	$region_id = I("post.region_id");
	// var_dump($region_id);
	if(!$region_id){
		$region = M("region")->where("parent_id = 0 ")->select();
		return $region;
	}
	// var_dump($region_id);
	else{

		$region =M("region")->where("parent_id = '$region_id' ")->select();
		// var_dump($region);
		if(!empty($region)){
			$msg['error']=0;
			$msg['content']=$region;
		}else{
			$msg['error']=1;
			$msg['content']="暂无数据";
		}
		$this->ajaxReturn($msg);
	}
	
}

//下单
 public function set_order(){
 	$payment = I("get.payment");
 	if($payment =="003"){
 		$pay_name ="支付宝";
 	}
 	/*1、接到对应的数据*/ 
 	$user = session("user");
 	$cart_info =M("cart")->where("user_id = '$user[user_id]'")->select();
 	foreach ($cart_info as $key => $v) {
 		$total_price+=$v['buy_number']*$v['goods_price'];
 	}
 	/*2、生成订单号*/
 	$order_sn =date('Ymd').str_pad(mt_rand(1, 99999),5,'0',STR_PAD_LEFT).$user['user_id'];
 	
 	/*3、构造数据表所需数据*/
 	$arr =array(
 		'order_sn'=>$order_sn,
 		'user_id'=>$user['user_id'],
 		'order_status'=>0,
 		'shipping_status'=>0,
 		'pay_status'=>0,
 		'message'=>'嗯',
 		'pay_id'=>$payment,
 		'pay_name'=>$pay_name,
 		'goods_amount'=>$total_price,
 		'money_paid'=>0,
 		'order_amount'=>$total_price,
 		'add_time'=>time(),
 		'pay_time'=>time()
 		);
 	// var_dump($arr);die;
if(!empty($arr['user_id'])){
	$res= M("order_info")->add($arr);

	if($res){
          $msg['error'] = 0;
      }else{
          $msg['error'] = 1;
      }
      $this->ajaxReturn($msg);
}

 	/*
	4、订单入库
	5、根据订单支付方式调取对应支付接口
	6、支付完成后，对应支付方式异步请求页面判断(如果支付成功，就修改对应数据库表字段值，支付失败，提示用户支付失败原因)

 	*/
 }

public function getpayment(){
      $user = session("user");
      $order_infos = M("order_info")->where("user_id = '$user[user_id]'")->order('add_time asc')->limit(0,1)->find();
      if($order_infos['pay_status']==1){
        $this->error("该订单已完成支付");
        die;
      }
      
      $arr = array(
           'out_trade_no'=>$order_infos['order_sn'],
           'total_amount'=>$order_infos['goods_amount'],
           'subject'     => '测试商品'
        );
      $pay = new \ Alipay($arr);
      $pay->getAlipay();

   }




}