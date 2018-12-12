<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct()
	{
		parent::__construct();
		$name = session('res.admin_name');
		// dump($name);die;
		if(empty($name)){
		$this->success("非法登录",U('Login/login'));die;
		}


		// if(time()-$_SESSION['mktime']>60*5){
		// 	$this->success("登录时间超时,请重新登录",U('Login/login'));die;
		// }else{
		// 	session('mktime',time());
		// }
	}

}