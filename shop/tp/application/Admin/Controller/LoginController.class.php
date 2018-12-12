<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function Login(){
    	layout(false);
       $this->display();
    }

    public function Loging(){
    	//接收表单值
    	$i = I('post.');
    	if(!$this->check_verify($i['code'])){
    		$this->error('验证码错误');
    		exit;
    	}
    	//查询账号
    	$res = M('admin')->where("admin_name='$i[admin_name]'")->find();
    	//判断密码或账号是否正确
    	if($res){
            if(md5($i['admin_pwd']==$res['admin_pwd'])){
    		$this->success('登录成功',U('Index/Index'));
    		session('res',$res);
            cookie('admininfo',$res,60*30);
           // session('mktime',time());
    	}else{
    		$this->error('密码错误');
    	}
        }else{
			$this->error('账号不存在');
		}
    }

    // 显示验证码
    public function check()
    {
    	$Verify = new \Think\Verify();
    	$Verify->fontSize = 18;
    	$Verify->length   = 2;
    	$Verify->useNoise = true;
    	$Verify->imageW   = 82;             // 验证码图片宽度
    	$Verify->imageH   =  50;               // 验证码图片高度
    	$Verify->entry();
    }

    // 检测验证码
    function check_verify($code)
    {    
    	$verify = new \Think\Verify();  
    	
    	return $verify->check($code);
    }

    public function login_out()
    {   
        layout(false);
        session('res',null);
        $this->display('Login/login');
    }
}