<?php
ob_start(); //为了解决header()跳转函数报错
session_start(); //dash 2013-11-8 启动SESSION变量
$ZH_NM = array('零','一','二','三','四','五','六','七','八','九','十');
if($_SERVER['REMOTE_ADDR'] == '::1'){$_SERVER['REMOTE_ADDR'] == '127.0.0.1';} //dash 2013-11-19 将WIN7本机ip ::1 转换成127.0.0.1
include("db_config.php");
include("function.php"); //dash 2013-11-13 增加方法文件
?>