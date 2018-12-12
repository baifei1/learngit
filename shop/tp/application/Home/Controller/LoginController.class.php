<?php
namespace Home\Controller;
use Think\Controller;
use Org\Login\Qq;
class LoginController extends Controller {
    public $qq_auth;
    public function __construct(){
        parent::__construct();
        $this->qq_auth = new Qq();
    }


    public function index(){
        
        layout(false);
       $this->display('Login/login');
    }

//登录页
    public function login(){
    	if(IS_POST){
    		$data = I('post.');
            // var_dump($data);die;
    		$user=M('user')->where("email = '$data[user_name]'")->find();
    		// var_dump($user);die;
    		if($user){
    			if(md5($data['password'])==$user['password']){
                    session('user',$user);
                    // var_dump($a);die;
                    cookie('user',$user,60*30);
                    //调取购物车清空数据
                    $this->get_cart($user);
    				$this->success('登录成功',U('Index/index'));
    			}else{
    				$this->error('密码错误');
    				
    			}
    		}else{
    				$this->error("账号不存在");
    				exit;
    			}

    	}
    }
//post传值注册页面
    // public function register(){
    // 	if(IS_GET){
    // 		layout(false);
    // 		$this->display();
    // 	}

    //     if(IS_POST){
    //         $data = I('post.');
    //         // var_dump($data);die;
    //         if(empty($data)){
    //             $this->error('请填写完整信息');
    //         }

    //         $res = M('admin')->where("admin_name='$data[admin_name]'")->find();  
            
    //         if($data['admin_name'] == $res['admin_name']){
    //             $this->error('账号已被注册');
    //         };

           
    //         if($data['admin_pwd'] != $data['admin_pass']){
    //             $this->error('两次密码不一致,请核对密码');
    //         };

    //         if($data['dian'] != 1){
    //             $this->error('请点击同意协议'); 
    //         };
             
    //          if(M('admin')->add($data)){
    //             $this->success('注册成功',U('Index/index'));
    //         }else{
    //             $this->error('注册失败,请重新注册');
    //         };
    //     }

    // }

//防跳墙退出登录页面
    public function login_out(){
    	layout(false);
        session('user',null);
        $this->display('Login/login');
    }


//ajax传值注册页面
public function register(){
    if(IS_GET){
        layout(false);
        $this->display();
    }

    if(IS_AJAX){
        $data=I('post.');
        // var_dump($data);die;
        if($data['email']==""||$data['password']==""||$data['passwordRepeat']==""){
            $msg['error']=1;
            $msg['content']='信息填写有误';
            exit($this->ajaxReturn($msg));
        }elseif(md5($data['password'])!=md5($data['passwordRepeat'])) {
            $msg['error']=1;
            $msg['content']='两次输入的密码不一致';
            exit($this->ajaxReturn($msg));
        }else{
            $arr = array(
                'email'=>$data['email'],
                'password'=>md5($data['password']),
                'user_name'=>"1712_".$this->getRandCode(),
                'reg_time'=>time(),
                );
                $res=M("user")->add($arr);
                $user = M('user')->where("user_name ='$arr[user_name]'")->find();
                    session('user',$user);
                    cookie('user',$user['user_name'],60*30);
            if($res){
                $msg['error']=0;
                $msg['url']=U("Index/index");

            }else{
                $msg['error']=1;
                $msg['content']='注册失败';
            }
            exit($this->ajaxReturn($msg));
            }


    }

}

//QQ第三方登录
public function login_do(){
    $auth = I('get.auth');
   
    if(empty($auth)){
        $this->error('非法登录');
        exit;
    }
    if($auth='qq'){
        /*请求auth2.0授权*/
        $this->qq_auth->qq_login();

    }
}

//第三方登录回调地址
public function callback(){
  $user_info = $this->qq_auth->response();
    // var_dump($user_info);die;
  if($user_info['oauth'] == ""||$user_info['openid'] ==""){
        $this->error('非法登录');die;
  }
  $openid_user = M('user')->where("openid = '$user_info[openid]'")->getField("openid");
  if($openid_user==""){
    $user_name ="1712_".$this->getRandCode();
    //入库数据
    $arr = array(
        'user_name'=>$user_name,
        'sex' => 0,
        'reg_time'=>time(),
        'last_time'=>time(),
        'auth'=>$user_info['oauth'],
        'nickname'=>$user_info['nickname'],
        'openid'=>$user_info['openid'],

        );

        $res = M("user")->add($arr);
    }
        $user =M('user')->where("openid = '$user_info[openid]'")->find();
        session('user',$user);
        cookie('user',$user,60*30);
        //调取购物车清空数据
        $this->get_cart($user);
       $this->success("登录成功",U('Index/index'));
  }
//生成随机nickname；
 public function getRandCode()  
        {  
            $charts = "ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz0123456789";  
            $max = strlen($charts);  
            $noncestr = "";  
            for($i = 0; $i < 8; $i++)  
            {  
                $noncestr .= $charts[mt_rand(0, $max)];  
            }  
      
      
            return $noncestr;  
        }  


public function get_cart($user){
    //读取用户浏览器cookie中的数据
$carts = cookie("carts");
// dump($user);die;
if(!empty($carts)){
    $carts = unserialize($carts);
    // dump($carts);die;
    $where = "user_id ='$user[user_id]' and goods_id ='$v[goods_id]' and product_id = '$v[product_id]'";
    foreach ($carts as $key => $v) {
        $v['user_id']= $user['user_id'];
        $v['session_id']=session_id();
        // dump($carts);die;
        $cart_user = M("cart")->where($where)->find();
        if(!empty($cart_user)){
        $end_num = $v['buy_number']+=$cart_user['buy_number'];
        M("cart")->where($where)->save(array("buy_number"=>$end_num));
        }else{
            M("cart")->add($v);
        }
    }
    cookie("carts",null);
}
}
}