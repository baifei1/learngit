<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends CommonController {

/*添加购物车*/
public function add_cart(){

	if(IS_AJAX){
		$data = I("post.");
		// var_dump($data);die;
		if(!empty($data)){
			$user = session("user");
			// var_dump($user['user_id']);die;
		/*用户已登录*/
		if(!empty($user)){
            // dump($user['user_id']);die;
			 	$goods_info = M("goods")->where("goods_id='$data[goods_id]'")->find();
                $products = M("products")->where("attr_list='$data[pro_list]'")->find();
                // var_dump($products);die;
                $cart=array(

                    'user_id'=>$user['user_id'],
                    'session_id'=>session_id(),
                    'goods_id'=>$data['goods_id'],
                    'product_sn'=>$products['product_sn'],
                    'product_id'=>$products['product_id'],
                    'goods_name'=>$goods_info['goods_name'],
                    'goods_price'=>$goods_info['shop_price']+$products['product_price'],
                    'market_price'=>$goods_info['market_price'],
                    'buy_number'=>$data['buy_num'],
                    'goods_attr_id'=>$products['attr_list'],
                    'goods_img'=>$goods_info['goods_thumb']
                    );
                $carts[]=$cart;
                // var_dump($carts);die;
                //判断数据库里有没有相同属性和相同得商品
                $where="user_id ='$user[user_id]' and goods_id ='$data[goods_id]' and product_id='$products[product_id]'";
                $cart_user = M("cart")->where($where)->find();
                // var_dump($cart_user);die;
                if(!empty($cart_user)){
                	$end_num = $cart_user['buy_number']+=$data['buy_num'];
                	M('cart')->where($where)->save(array("buy_number"=>$end_num));
                }else{
                	M('cart')->addAll($carts);
                }
                 //响应AJAX
               $cart = M("cart")->where("user_id = '$user[user_id]'")->select();
               foreach ($cart as $key => $v) {
               		$count+=$v['buy_number'];
               }
               $msg = array("error" =>0 ,"count"=>$count );
               $this->ajaxReturn($msg);

		}
		 /*用户未登录*/
		else{
			 $carts = cookie("carts");
			 $carts = unserialize($carts);
			 // var_dump($carts);die;
			 if(empty($carts)){
			 	 $carts=array();
			 	}
			 
			 	$keys = null;
			 	foreach ($carts as $key=>$v) {
			 		if($v['goods_id']==$v['goods_id']&&$v['goods_attr_id']==$data['pro_list']){
			 			$keys=$key;
			 		}
			 	}

			 //判断$keys是否为null
			  if($keys!==null){
                $carts[$keys]['buy_number']+=$data['buy_num'];
            }
			else{
                $goods_info = M("goods")->where("goods_id='$data[goods_id]'")->find();
                $products = M("products")->where("attr_list='$data[pro_list]'")->find();
                $cart=array(
                    'user_id'=>'',
                    // 'session'=>session_id,
                    'goods_id'=>$data['goods_id'],
                    'product_sn'=>$products['product_sn'],
                    'product_id'=>$products['product_id'],
                    'goods_name'=>$goods_info['goods_name'],
                    'goods_price'=>$goods_info['shop_price']+$products['product_price'],
                    'market_price'=>$goods_info['market_price'],
                    'buy_number'=>$data['buy_num'],
                    'goods_attr_id'=>$products['attr_list'],
                    'goods_img'=>$goods_info['goods_thumb']
                    );
                $carts[]=$cart;
            }
                foreach ($carts as $key => $v) {
                $count+=$v['buy_number'];
                }
                //序列化
                $carts= serialize($carts);
                // var_dump($carts);die;
                //将数组存到cookie里
                cookie("carts",$carts);

                //给前台返回数据
                
               $msg = array("error" =>0 ,"count"=>$count );
               $this->ajaxReturn($msg);
		}
	}

}
}

public function cart_list(){
	if(IS_GET){

		$user_id = I('get.user_id');
		// var_dump($user_id);die;
		if(empty($user_id)){
			$this->success("请先登录",U('Login/index'));
		}
		$data = M("cart")->where("user_id = '$user_id'")->select();
		// var_dump($data);die;
		$attr = array();
		foreach ($data as $key => $v) {
			//每个商品的总价
			$data[$key]['toatle'] = $v['buy_number']*$v['goods_price'];
			//全部商品的总价
			$t_price+= $v['buy_number']*$v['goods_price'];
			//全部商品的数量
			$t_num += $v['buy_number'];
			$attr = explode(",",$v['goods_attr_id']);

			$data[$key]['goods_attr_id'] =$attr;

		foreach ($data[$key]['goods_attr_id'] as $k => $va) {
			$data[$key]['goods_attr_id'][$k]=M("goods_attr")->where("goods_attr_id ='$va'")->getField("attr_value");

			$data[$key]['goods_attr'][] = M("attribute")->where("attr_id=".M("goods_attr")->where("goods_attr_id = '$va'")->getField("attr_id"))->getField("attr_name");

			// $data[$key]['goods_attr'][]=M("goods_attr")->where("goods_attr_id ='$va'")->field("attr_value,attr_id")->select();
		}
		}
		// echo "<pre>";
		// print_r($data);die;
		$this->assign('t_price',$t_price);
		$this->assign('t_num',$t_num);
		$this->assign('data',$data);
		$this->display("shopcart");
	}
}

}