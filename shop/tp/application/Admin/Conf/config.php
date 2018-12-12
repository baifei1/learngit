<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_MODULE'        =>  'Admin',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Login', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'Login', // 默认操作名称


    'TMPL_LAYOUT_ITEM'      =>  '{__CONTENT__}', // 布局模板的内容替换标识
    'LAYOUT_ON'             =>  true, // 是否启用布局
    'LAYOUT_NAME'           =>  'layout', // 当前布局名称 默认为layout
	 
     /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'shop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀

    'PAGE_NUM'              => 5,    // 品牌每页显示条数
    'PAGE_TYPE'             => 2,    // 类型每页显示条数


    'TMPL_ACTION_ERROR'     =>   'Jump/dispatch_jump',  //错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'     =>   'Jump/dispatch_jump',  //成功跳转对应的模板文件
);