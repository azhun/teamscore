<?php
	include("./config/config.php");
	include("header.php");
	
	
	//dash 2013-11-8 创建房间并自动跳转到房间页
	if(!empty($_POST)){
		$room_name = $_POST['room_name'];
		$time = time();
		$team_nm = $_POST['team_nm'];
		$user_name = $_POST['user_name'];
		$sql = "INSERT INTO `room_list` (`room_name`,`time`,`event`,`team_nm`,`user_name`) VALUES ('$room_name','$time','1','$team_nm','$user_name')";
		mysql_query($sql);
		$id = mysql_insert_id();
		header('location:jg.php?room_id='.$id);
	}
	
?>

<div style="margin:50px;">

<form method="post" action="">
    <label>房间名：<input type="text" name="room_name" /></label>
    <label>小组数：
    <select name="team_nm">
    	<?php for($i = 2; $i<=10; $i++){ ?>
    	<option><?php echo $i; ?></option>
        <?php } ?>
    </select>
    </label>
    <label>创建人：<input type="text" name="user_name" /></label>
    <input type="submit" value="建立房间" />
</form>

</div>


<?php include("footer.php"); ?>