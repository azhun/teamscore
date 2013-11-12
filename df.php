<?php
include("./config/config.php");
include("header.php");

//dash 2013-11-8 增加房间判断与小组数获取
if(isset($_GET['room_id'])){
	$room_id = intval($_GET['room_id']);
	if(!$room_id){header('location:index.php');}
	$sql = "select * from `ts_room_list` where `id` = '$room_id'";
	$room = mysql_fetch_assoc(mysql_query($sql));
	$ws =  $_GET["ws"];
}else{
	header('location:index.php');
}

/*az:如果评过了，不能再评*/
if(isset($_COOKIE['over'.$room_id])){
	header("Location:jg.php?room_id=".$room_id);
}
/*dash 2013-11-8 增加IP判断不能再评*/
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "select * from `ts_df` where `ip`='$ip' and `room_id` = '$room_id'";
$row = mysql_fetch_assoc(mysql_query($sql));
if(!empty($row)){header("Location:jg.php?room_id=".$room_id);}

if(!empty($_POST)){ //是否按下了提交....

	$nz = $_POST["nz"];
	
	$sql = "INSERT INTO ts_df (a,b,ip,room_id) VALUES ('$ws','$nz','".$_SERVER['REMOTE_ADDR']."','$room_id')";
	mysql_query($sql);
	
	setcookie('over_'.$room_id,1,time()+3600*24);
	
	header("Location:jg.php?room_id=$room_id");	

}



?>
<div class="location">您当前的位置：<a href="index.php">程序首页</a>  >>  <a href="#">评选小组</a></div>




<h3>你觉得以下哪组做得最好？</h3>

<div class="team">

	<form method="post">
    	
	
		<?php
        	for($i=1;$i<=$room['team_nm'];$i++){
				if($i != $ws){
		?>
			<li><label><input type="radio" name="nz"  value="<?php echo $i; ?>" /> 第<?php echo $ZH_NM[$i]; ?>组</labeL></li>
		<?php }else{ ?>
        
        <li><label style="border:1px solid #eee;">我是第<?php echo $ZH_NM[$i]; ?>组成员</labeL></li>
        <?php }}?>
		
		<input type="submit" value="提交..." class="btn" />
		
	</form>
</div>


<?php include("footer.php"); ?>