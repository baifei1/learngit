<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends CommonController {
    public function goods_info(){
     if(IS_GET){

       $goods_id=I('get.goods_id');

       $goods_info =M("goods")->where("goods_id = '$goods_id'")->find();
       // var_dump($goods_info);die;
       $attr = M("goods_attr")->join("attribute on goods_attr.attr_id=attribute.attr_id")->where("goods_attr.goods_id ='$goods_id'")->select();
       // var_dump($attr);die;
       $attr_info = array();
       foreach ($attr as $key => $v) {
        if($v['index_type']==3){

          $attr_info[$v['attr_id']]['attr_name']=$v['attr_name'];
          $attr_info[$v['attr_id']]['attr_val'][]=$v;
        }
       }
       // echo "<pre>";
       // print_r($attr_info);die;
       $goods_gallery = M('goods_gallery')->where("goods_id = '$goods_info[goods_id]'")->select();
       // var_dump($goods_gallery);die;
        $this->assign('goods_gallery',$goods_gallery);
        $this->assign('goods_info',$goods_info);
        $this->assign('attr_info',$attr_info);
     	  $this->display();
     }



    }
/*获取对应属性组合库存*/
public function get_sku(){
    $attr_list = I("post.attr_list");
    // var_dump($attr_list);die;
    $pro = M('products')->where("attr_list ='$attr_list'")->find();
    // var_dump($pro);die;
    if(empty($pro)){
        $msg['error'] =1;
        $msg['content']="已售罄";
    }else{
        $msg['error']=0;
        $msg['content']=array("pro_sku"=>$pro['product_sku'],"pro_price"=>$pro['product_price']);
    }
    $this->ajaxReturn($msg);
}
}