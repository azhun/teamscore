<?php
	mysql_connect('127.0.0.1','root','gzittc123456') or die('数据库服务器连接出错');
	mysql_select_db('teamscore') or die('数据库连接出错');
	mysql_query('set names utf8');
?>