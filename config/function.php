<?php
	
	function creater_jump(){}
	
	
	
	/*
	az - 2013-11-19 
	页面重定向
	*/
	function jump($url=""){
		if($url){
			header("location:".$url);
		}else{//如果不带参数，回本页
			header("location:".getCurrentPageName());
		}
	}
	
	/*
	az - 2013-11-22 
	获取本页面名称
	*/
	function getCurrentPageName(){
	 	return end(explode('/',$_SERVER['PHP_SELF']));
	}
	
	/*需要一个导出函数*/
	
	
?>