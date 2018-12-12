<?php
header("Content-Type:text/html;charset=utf-8");

//1. 定义项目目录
define('APP_PATH', './application/');

//2. 定义调试模式还是生产模式, true调试模式 false生产模式
define('APP_DEBUG', true);

//3. 引入ThinkPHP的核心文件
include_once 'ThinkPHP/ThinkPHP.php';