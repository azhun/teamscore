<?php
	include("./config/config.php");
	include("header.php");
	
	//dash 2013-11-8 关闭当天之前未关闭的房间
	$time = strtotime(date('Y-m-d',time()));
	$sql = "UPDATE `room_list` SET `event`='2' WHERE `time` < $time ";
	mysql_query($sql);
	
	//dash 2013-11-8 房间列表
	$sql = 'SELECT * FROM `room_list` WHERE `event`="1"';
	$result = mysql_query($sql);
	
?>

<a href="create_room.php">创建房间</a>

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