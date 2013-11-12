<?php

include("./config/config.php");

//dash 2013-11-8 增加房间判断与小组数获取
if(isset($_GET['room_id'])){
	$room_id = intval($_GET['room_id']);
	if(!$room_id){header('location:index.php');}
	$sql = "select * from `ts_room_list` where `id` = '$room_id'";
	$room = mysql_fetch_assoc(mysql_query($sql));
}else{
	header('location:index.php');
}


$all_nm = 0; //总权重
$jg = array();
for($i=1;$i<=$room['team_nm'];$i++){
	$sql = "SELECT COUNT(id) as num FROM ts_df WHERE (a='$i' or b='$i') AND room_id = '$room_id'";   //SQL  COUNT() 用于计算个数   as num 起一个叫num 的别名
	$r = mysql_query($sql);
	$z = mysql_fetch_array($r);
	$jg[$i] = $z['num'];
	$all_nm += $z['num'];
}

//az 2013-11-11 防止 $all_nm 为 0 这种情况，被除数不能为0
if(!$all_nm)$all_nm = 1;

header('Content-type: application/txt'); 
header('Content-Disposition: attachment; filename="'.$room['room_name'].'.txt"'); 

foreach($jg as $k => $v){
		echo "第".$ZH_NM[$k]."组好评率：".intval($v/$all_nm*100)."%\r\n";
}

exit(); 
?> 