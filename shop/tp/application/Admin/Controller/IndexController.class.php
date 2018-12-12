<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
      if(IS_GET){
      	$this->display();
      } 
    }
}