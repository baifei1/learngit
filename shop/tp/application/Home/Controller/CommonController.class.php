<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    
   public function __construct(){
    parent::__construct();

    //防跳墙
    // $name = session('res.admin_name');

    // if(empty($name)){
    //     $this->success('非法登录',U('Login/login'));
    //     exit;
    // }
    if(CONTROILLER_NAME =="Index"){
    //遍历
    $category = M('category')->where("is_show=1 and parent_id=0")->select();
    $this->assign('category',$category);

    
    }


$user = session('user');
if(!empty($user)){
    $cart_user = M("cart")->where("user_id = '$user[user_id]'")->select();
    foreach ($cart_user as $key => $v) {
       $count += $v['buy_number'];
    }
}else{

    /*查询cookie里的carts*/
    $carts=cookie('carts');
    $count=0;
    if(!empty($carts)){
        $carts = unserialize($carts);
        foreach ($carts as $key => $v) {
          $count+=$v['buy_number'];
        }
    }
}

    $this->assign('count',$count);


   }
}



   