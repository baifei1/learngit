<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends CommonController {

    /*分类列表查看*/
    public function category_list(){
      if(IS_GET){
        $cate = M('category')->select();
        $cate = getLevel($cate);
        $this->assign('cate',$cate);
      	$this->display();
      } 
    }

    /*添加分类*/
    public function cate_add(){
    	if(IS_GET){
            $cate = M('category')->select();
            $cate = getLevel($cate);
            $this->assign('cate',$cate);
    		$this->display();
    	}
    	if(IS_POST){
    		$data = I('post.');
            // var_dump($data);die;
    		if(empty($data)){
    			$this->errot('请填写数据');
    		}
    		if(M('category')->add($data)){
    			$this->success('添加成功',U('category_list'));
    		}else{
    			$this->error('添加失败');
    		}
    	}
    }

    /*分类删除，含有子分类时不允许删除*/
    public function cat_delete(){
        if(IS_GET){
            $id = I('get.cate_id');

            if(M('category')->where("cat_id = '$id'")->select()){
                $this->error('含有子分类不允许删除');
            }

           if(M('category')->delete($id)){
            $this->success('删除成功',U('Category/category_list'));
           }else{
            $this->error('删除失败');
           }
        }
    }

    public function cate_edit(){

        if(IS_GET){
            $id = I('get.cat_id');
            $data = M('category')->where("cat_id = '$id'")->find();
            $this->assign('data',$data);
            $this->display();
        }

        if(IS_POST){

        }

    }
    


}