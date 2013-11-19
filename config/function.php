<?php
	
	function creater_jump(){}
	
	
	
	/*
	az - 2013-11-19 
	页面重定向
	*/
	function jump($url=""){
		if($url){
			header("location:".$url);
		}else{
			$url = end(explode('/',$_SERVER['PHP_SELF']));
			header("location:".$url);
		}
	}
?>