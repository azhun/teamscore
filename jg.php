<?php

	include("./config/config.php");
	include("header.php");
	
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
	
?>
<div class="location">您当前的位置：<a href="index.php">程序首页</a>  >>  <a href="#">得分情况</a></div>

<h3>得分情况？</h3>

<div class="team">
	<ul>
	<?php foreach($jg as $k => $v){ ?>
		<li><a href="#">第<?php echo $ZH_NM[$k]; ?>组好评率：<?php echo  intval($v/$all_nm*100); ?>% </a></li>
	<?php } ?>
    </ul>
</div>

<br />
<br />
<br />
<br />

<a href="get_result.php?room_id=<?php echo $room_id; ?>">导出结果</a>
<a href="close_room.php?room_id=<?php echo $room_id; ?>">关闭课程</a>

<?php include("footer.php"); ?>
<script>
function sx(){

	window.location = 'jg.php?room_id=<?php echo $room_id; ?>';
}
setTimeout('sx()',1000);

</script>