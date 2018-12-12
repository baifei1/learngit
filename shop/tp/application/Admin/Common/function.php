<?php

//文件上传
function upload($img,$path="images"){    
$upload = new \Think\Upload();
// 实例化上传类    
$upload->maxSize   =     3145728 ;
// 设置附件上传大小   
 $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
 // 设置附件上传类型    
 $upload->savePath  =      $path; 
 // 设置附件上传目录    
 // 上传单个文件     
 $info   =   $upload->uploadOne($img);   
 if(!$info) {
 // 上传错误提示错误信息       
 	echo "<script>alert(".$upload->getError().");window.history.go(-1)</script>";
 }else{
 // 上传成功 获取上传文件信息      
	return $info['savepath'].$info['savename'];    
}}

function uploads($file,$path="images"){
	$upload = new \Think\Upload();
	// 实例化上传类
	$upload->maxSize   =     3145728 ;
	// 设置附件上传大小
	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
	// 设置附件上传类型
	$upload->savePath  =      $path; 
	// 设置附件上传目录// 上传文件
	 $info   =   $upload->upload($file);
	 if(!$info) {
	 // 上传错误提示错误信息    
	 echo "<script>alert(".$upload->getError().");window.history.go(-1)</script>";
	 }else{
	 // 上传成功 获取上传文件信息
	 $arr = array();
	 foreach($info as $file){ 
	 	$arr[] =  $file['savepath'].$file['savename'];   
	 	 }}
	return $arr;
}



//无限极分类
function getLevel($data,$pid=0,$level=0,$html="++"){
	$arr = [];

	foreach ($data as $k => $v) {
		if($v['parent_id'] == $pid){
			$v['level'] = str_repeat($html,$level);
			$arr[] = $v;
			$arr = array_merge($arr,getLevel($data,$v['cate_id'],$level+1));
		}
	}
	return $arr;
}
?>