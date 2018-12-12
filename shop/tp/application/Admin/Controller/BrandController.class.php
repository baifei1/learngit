<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class BrandController extends CommonController{
    public function brand_add(){
       if(IS_GET){
         $this->display();
       } 

       if(IS_POST){
            $data = I('post.');
            if(!empty($data)){
               $img =  upload($_FILES['brand_logo'],'./brand_logo/');
               $data['brand_logo'] = $img;
              $res = M('brand')->add($data);
              if($res){
                $this->success('添加成功',U('brand_list'));
              }else{
                $this->error('添加失败');
                }
            }
       }

    }

    public function brand_list(){
            // 分页
            //查询数据
            //当前页数
            $p = I('get.p',1);
            //每页显示条数
            $pagenum = C('PAGE_NUM'); 
            // dump($pagenum);die;
            $data = M('brand')->page($p,$pagenum)->select();
            // 第一步：use Think\Page;
            // 第二部:实例化类
            // 查询总数据
            $count = M('brand')->count();
            // dump($count);die;
            $page = new Page($count,$pagenum);
            // 修改分页配置项参数
            $page->setConfig("prev","上一页");
            $page->setConfig("next","下一页");
            $page->setConfig("first","首页");
            $page->setConfig("last","尾页");
            // 分页栏每页显示的页数
            $page->rollPage   = 2;
            // 最后一页是否显示总页数
            $page->lastSuffix   = false;
            $show = $page->show();
            $this->assign('show',$show);
            $this->assign('data',$data);
            $this->display();
    }
   
    public function delete(){
        if(IS_GET){
            $id = I('get.brand_id');
            $res = M('brand')->delete($id);
            if($res){
                $this->success('删除成功',U('brand_list'));
            }else{
                $this->error('删除失败');
            }
        }

        if(IS_POST){
            $id = I('post.');

            $arr = implode(',',array_values($_POST['brand_id']));
            $sub = substr($arr, 3);
            
            $res = M('brand')->where("brand_id in(".$sub.")")->delete();

        }

    }

    public function brand_edit(){
    
        if(IS_GET){
            $id = I('get.brand_id');
            $res = M('brand')->where("brand_id=$id")->find();
            $this->assign('res',$res);
            $this->display();
        }

        if(IS_POST){
            $data = I('post.');

            $img = $_FILES['brand_logo'];

            if(!empty($img)){
                $files = upload($img,'./brand_logo/');
                $date['brand_logo'] = $files;
            }

            if($updat = M('brand')->save($data) !== false){
                $this->success('修改成功',U('Brand/brand_list'));
            }else{
                $this->error('修改失败');
            }

        }

    }


}