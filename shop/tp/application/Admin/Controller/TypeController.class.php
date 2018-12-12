<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class TypeController extends CommonController {
    public function type_add(){
      if(IS_GET){
        $this->display();
      }

      if(IS_POST){
        $data = I('post.');

        if(empty($data)){
            $this->error('请填写数据');
        }

        if(M('goods_type')->add($data)){
            $this->success('添加成功',U('type_list'));
        }else{
            $this->error('添加失败');
        }
      }
    }

    public function type_list(){

        if(IS_GET){

            // 分页
            //查询数据
            //当前页数
            $p = I('get.p',1);
            //每页显示条数
            $pagenum = C('PAGE_TYPE'); 
            // dump($pagenum);die;
            $data = M('goods_type')->page($p,$pagenum)->select();
            foreach ($data as $k => $v) {
                $arr = M('attribute as a')
                                ->where('a.goods_type_id='.$v['goods_type_id'])
                                ->count(); 
            $data[$k]["k"]=$arr;
             }
             // dump($data);die;
            // 第一步：use Think\Page;
            // 第二部:实例化类
            // 查询总数据
            $count = M('goods_type')->count();
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

            



    }

   

 
    
}