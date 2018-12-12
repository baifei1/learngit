<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
     if(IS_GET){
     	$category = M('category')->where("is_show = 1 and is_nav = 1")->select();
     	$category = getChild($category);
     	//首页楼层显示
     	// echo "<pre>";
     	// print_r($category);die;
     	$res=M('category')->join("goods on category.cate_id = goods.cate_id")->select();
        // var_dump($res);die;
     	$this->assign('res',$res);
     	$this->assign('category',$category);
        $this->display();
     }



    }
}