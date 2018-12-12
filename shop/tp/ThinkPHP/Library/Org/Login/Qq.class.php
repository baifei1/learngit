<?php


/*第三方登录类qq*/
namespace Org\Login;

class Qq{

const APP_ID   = '101476861';//APPid
const APP_KEY  = '847d1383f4df18e7091802e481ab2905';
const CALLBACK = "http://www.api.com/shop/tp/index.php/Home/Login/callback";

/*跳转至qq_oauth2.0授权页面*/

public function qq_login(){
    $auth_url = "https://graph.qq.com/oauth2.0/authorize";

    //生成防止CSRF攻击的字符串
    $state    = md5(uniqid(rand(), TRUE));
    //将state值存入session
    session("state",$state);
    $arr      = array(
            "response_type" => "code",
            "client_id"     => self::APP_ID,
            "redirect_uri"  => self::CALLBACK,
            "state"         => $state,
            "scope"         => "get_user_info"

     );

	$params    = http_build_query($arr,'','&');
	$auth_urls = $auth_url."?".$params;
	
	echo "<script>top.location.href='".$auth_urls."'</script>";
	exit;

}
 /*登录成功回调*/
 public function response(){
    
 	$token  = $this->get_access_token();
 	$openid = $this->get_openid($token);
    // echo $openid;die;
 	$url = "https://graph.qq.com/user/get_user_info";
 	$arr = array(
        'access_token'      =>$token,
        'oauth_consumer_key'=>self::APP_ID,
        'openid'            =>$openid

 		);

 	$params = http_build_query($arr,'','&');
 	$get_user_info_url = $url."?".$params;
 
 	$user_info = $this->get_contents($get_user_info_url);
 	$user_info = json_decode($user_info,true);
 	
   return array(
                'openid'=>$openid,// QQ openid
                'oauth'=>'qq',
                'nickname'=>$user_info['nickname'],
                'head_pic'=>$user_info['figureurl_qq_2'],
            );

 	
 }
/*请求access_token*/

public function get_access_token(){ 
    $url="https://graph.qq.com/oauth2.0/token";
    //验证state
    if($_GET['state']!=session('state')){
 		    echo "state:error";
            exit;
 	}
    //构造请求参数
    $arr =  array(
            "grant_type"    => "authorization_code",
            "client_id"     => self::APP_ID,
            "redirect_uri"  => self::CALLBACK,
            "client_secret" => self::APP_KEY,
            "code"          => $_GET['code']
    	);
    $params    = http_build_query($arr,'','&');
    $token_url = $url."?".$params;

    $data = $this->get_contents($token_url);
  
 	if(strpos($data,'callback')!==false){
 		    $lpos      = strpos($response, "(");
            $rpos      = strrpos($response, ")");
            $response  = substr($response, $lpos + 1, $rpos - $lpos -1);
            $msg       = json_decode($response);
            if(isset($msg->error)){
            	echo "<h3>error:</h3>" . $msg->error;
				echo "<h3>msg  :</h3>" . $msg->error_description;
				exit;
            }
 	}
    $access_token = array();
    parse_str($data,$access_token);
    return $access_token['access_token'];
}

/*请求openid*/
public function get_openid($access_token){
	
	$url="https://graph.qq.com/oauth2.0/me";

	$arr = array(
         'access_token'=>$access_token,
		);
	$params     = http_build_query($arr,'','&');
	$openid_url = $url."?".$params;
	$response   = $this->get_contents($openid_url);
	if(strpos($response,'callback')!==false){
    		$lpos       = strpos($response,'(');
    		$rpos       = strpos($response,')');
    		$openid_str = substr($response,$lpos+1,$rpos-$lpos-1);
	}

	$openid = json_decode($openid_str,true);

	return $openid['openid'];
}

/*curl请求方法*/

public function get_contents($url,$type='get',$data = null,$method='https'){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    if($type  =='post'){
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$data);

    }
    if($method=='https'){
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);

    }
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}



}