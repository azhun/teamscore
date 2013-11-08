<?php 
	include("header.php");
	include("./config/config.php");
	
	//dash 2013-11-8 关闭当天之前未关闭的房间
	$time = strtotime(date('Y-m-d',time()));
	$sql = "UPDATE `room_list` SET `event`='2' WHERE `time` < $time ";
	mysql_query($sql);
	
	
	//dash 2013-11-8 创建房间并自动跳转到房间页
	if(!empty($_POST)){
		$room_name = $_POST['room_name'];
		$time = time();
		$team_nm = $_POST['team_nm'];
		$sql = "INSERT INTO `room_list` (`room_name`,`time`,`event`,`team_nm`) VALUES ('$room_name','$time','1','$team_nm')";
		mysql_query($sql);
		$id = mysql_insert_id();
		header('location:select_team.php?room_id='.$id);
	}
	
	
	//dash 2013-11-8 房间列表
	$sql = 'SELECT * FROM `room_list` WHERE `event`="1"';
	$result = mysql_query($sql);
	
?>

<div style="margin:50px;">

<form method="post" action="">
    <label>房间名：<input type="text" name="room_name" /></label>
    <label>小组数：
    <select name="team_nm">
    	<?php for($i = 1; $i<=10; $i++){ ?>
    	<option><?php echo $i; ?></option>
        <?php } ?>
    </select>
    </label>
    <input type="submit" value="建立房间" />
</form>

</div>

<table>
	<tr>
    	<td>房间ID</td>
        <td>房间名</td>
        <td>创建时间</td>
    </tr>
    <?php while($row = mysql_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><a href="select_team.php?room_id=<?php echo $row['id']; ?>"><?php echo $row['room_name']; ?></a></td>
            <td><?php echo date('H时i分',$row['time']); ?></td>
        </tr>
    <?php } ?>
</table>

<?php include("footer.php"); ?>