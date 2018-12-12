<?php

function getChild($data,$pid=0){

	$arr = array();

	foreach ($data as $k => $v) {
		if($v['parent_id']==$pid){
			$son =getChild($data,$v['cate_id']);
			$v['son'] =$son;
			$arr[]=$v;
		};
	}
	return $arr;


}



?>