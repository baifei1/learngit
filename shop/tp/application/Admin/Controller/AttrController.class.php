<?php
namespace Admin\Controller;
use Think\Controller;
class AttrController extends CommonController {

  public function attr_add(){
  	if(IS_GET){
  		$type = M('goods_type')->select();
  		$this->assign('type',$type);
  		$this->display();
  	}

  	if(IS_POST){
  		$data = I('post.');
  		if(isset($data['attr_values']) && !empty($data['attr_values'])){
  			$data['attr_values'] = str_ireplace('
',',',$data['attr_values']);

  		}

  	if(M('attribute')->add($data)){
  		$this->success('添加成功',U("Attr/attr_list"));
  	}else{
  		$this->error('添加失败');
  	}
  	}
  }


   //对应类型属性查询
    public function attr_list(){
        if(IS_GET){
            $id = I('get.id');
            if(!empty($id)){
              $attr_list = M('attribute')->join("goods_type on attribute.goods_type_id = goods_type.goods_type_id")->where("attribute.goods_type_id = '$id'")->select();
            }else{
              $attr_list = M('attribute')->join("goods_type on attribute.goods_type_id = goods_type.goods_type_id")->select();
            }

            $type = M('goods_type')->select();
            $this->assign('type',$type);
           // var_dump($attr_list);die;
            $this->assign('attr_list',$attr_list);
            $this->display();
        }
    }

    //ajax搜索
    public function search(){
        $id = I('post.id');
        if(!empty($id)){
          $attr = M('attribute')->join("goods_type on attribute.goods_type_id = goods_type.goods_type_id")->where("attribute.goods_type_id = '$id'")->select();
          $msg['content'] = $attr;
          $msg['error'] = 0;
        }else{
          $msg['content'] = '暂无数据';
          $msg['error'] = 1;
        }

        $this->ajaxReturn($msg);
    }
 }