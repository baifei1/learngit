<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends CommonController {
    public function goods_add(){
    	//分类遍历
      if(IS_GET){
        $cate = M('category')->select();
        $cate = getLevel($cate);
        
        //品牌遍历
        $brand_list = M('brand')->select();

        //商品属性查询
        $attr_list = M('goods_type')->select();
        // dump($attr_list);die;
        $this->assign('attr_list',$attr_list);
        $this->assign('brand_list',$brand_list);
        $this->assign('cate',$cate);
      	$this->display();
    }

      if(IS_POST){
        $data = I('post.');
        //var_dump($_FILES);die;
        /*入库*/
        /*转百度编辑器文字转为实体*/
        $data['goods_desc'] = htmlspecialchars_decode($data['goods_desc']);
        //商品添加起始时间
        $data['add_time'] = time();
        //商品最后修改时间
        $data['last_update'] =time();
        //主图上传
        $img = $_FILES['goods_img'];
        $data['goods_img'] = upload($img,'./goods_img/');
        //缩略图
        $image = new \Think\Image(); 
        $image->open("./uploads".$data['goods_img']);
        $path_img = "./uploads/goods_thumb/".md5(rand(111111111,9999999999)).".jpg";
        // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
        $image->thumb(150, 150)->save($path_img);
        $data['goods_thumb'] = $path_img;

        //开启事务
        M('goods')->startTrans();
       
        $a = false;
        $b = false;
        $c = false;
        if($goods_id = M('goods')->add($data)){
          $a = true;
        }

        /*商品属性表    Goods_attr*/
         $attr_arr = [];
         foreach ($data['attr_value'] as $k => $v){
                   $attr_arr[] = array(
                  'goods_id' => $goods_id,
                 'attr_id'   => $data['attr_id'][$k],
                 'attr_value'=> $v,
                 'attr_price'=> $data['attr_price'][$k]?$data['attr_price'][$k]:0,

                     );
         }
         if(M('goods_attr')->addAll($attr_arr)){
          $b = true;
        }

        //相册
        unset($_FILES['goods_img']);
        $imge = $_FILES['thumb_img'];
        foreach($imge['name'] as $key => $v){
              $arr[] = array(
                   'name' =>$v,
                   'type' =>$imge['type'][$key],
                   'tmp_name' =>$imge['tmp_name'][$key],
                   'error' =>$imge['error'][$key],
                   'size' =>$imge['size'][$key]
                );
        }
        //取得所有上传成功得图片路径
        $paths_img = uploads($arr,"./goods_thumb/");

        //构造goods_gallery
        foreach ($paths_img as $k => $value) {
          $info[] = array(
                'goods_id' => $goods_id,
                'thumb_img' =>$value,
            );
        }
        // var_dump($info);die;
        if(M('goods_gallery')->addAll($info)){
          $c = true;
        }

        if($a===true && $b===true&& $c===true){
          M('goods')->commit();
          $this->success('添加成功',u('Goods/goods_list'));
        }else{
          M('goods')->rollback();
          $this->error('添加失败');
        }
      }
} 



      //ajax属性查询
      public function getAttr(){
        $type_id = I('post.type_id');
        //dump($type_id);die;
        if($type_id ==""){
          exit;
        }

        $data = M('attribute')->where("goods_type_id = '$type_id'")->select();
        foreach ($data as $k => $v) {
         if(!empty($v['attr_values'])){
            $data[$k]['attr_values'] = explode(",",$v['attr_values']);
         }

        }

        if(!empty($data)){
          $msg['error'] = 0;
          $msg['content'] =$data;
        }else{
          $msg['error'] =1;
          $msg['content']='暂无数据';
        }
        $this->ajaxReturn($msg);
      }


    public function goods_list(){
      if(IS_GET){
          $data = M('goods')->select();
          //dump($data);die;
          $this->assign('data',$data);
         $this->display();
      }
    }


//货品库存合并
    public function goods_sku(){
      if(IS_GET){
        $goods_id = I('get.goods_id');
        $attr_sel = M('attribute')->join("goods_attr on goods_attr.attr_id = attribute.attr_id")->where("goods_attr.goods_id = '$goods_id'")->select();
        // var_dump($attr_sel);die;
        foreach($attr_sel as $k => $v){
              if($v['attr_values'] !=null){
                $attr_name[$v['attr_id']] = $v['attr_name'];
                $attr_val[$v['attr_id']][] = array(
                    'attr_val' => $v['attr_value'],
                    'goods_attr_id' =>$v['goods_attr_id'],
                    'pro_price' =>$v['attr_price'],
                  );
              }
        }
        // var_dump($attr_val);die;
        $this->assign('goods_id',$goods_id);
        $this->assign('attr_val',$attr_val);
        $this->assign('attr_name',$attr_name);
        $this->display();

      }

      if(IS_POST){
        $data = I('post.');
        // var_dump($data);die;

        foreach ($data['product_sn'] as $key => $v){
            $attr = array();
            foreach($data['attr_list'] as $k=>$vv){
               //$attr['attr_id'][] = $vv[$key];
                $ids = explode(",",$vv[$key]);
                $attr['attr_id'][] = $ids[0];
                $attr['attr_price'][] = $ids[1];
            }
        
        //attr_list的值
        $attr_list = implode(",",$attr['attr_id']);
        //var_dump($attr_list);die;
        // 构造最终入库数据
        $arr[] = array(
              'goods_id'=>$data['goods_id'],
              'attr_list'=>$attr_list,
              'product_sn'=>$v,
              'product_sku'=>$data['product_sku'][$k],
              'product_price'=>array_sum($attr['attr_price']),
          );

        }
        // var_dump($arr);die;
          
       if(M("products")->addAll($arr)){
         $this->success('合并成功',U('Goods/goods_list'));
       }else{
        $this->error('合并失败');
       }
      }
    }
}
