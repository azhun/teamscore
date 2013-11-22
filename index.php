<?php
	include("config/config.php");
	include("header.php");
	
	//dash 2013-11-8 关闭当天之前未关闭的房间
	$time = strtotime(date('Y-m-d',time()));
	$sql = "UPDATE `ts_room_list` SET `event`='2' WHERE `time` < $time ";
	mysql_query($sql);
	
	//检测当前网段所有的房间
	$ip = explode('.',$_SERVER['REMOTE_ADDR']);
	$ip = $ip[0].'.'.$ip[1].'.'.$ip[2];
	$sql = 'SELECT * FROM `ts_room_list` WHERE `event`="1" and `user_ip` like "'.$ip.'%"';
	$result = mysql_fetch_assoc(mysql_query($sql));
	if(!empty($result)){
		header('location:select_team.php?room_id='.$result['id'].'&s=1');//s参数是用于判断是不是同一网段有人创建了房间	
	}
	
	
	//dash 2013-11-8 房间列表
	$sql = 'SELECT * FROM `ts_room_list` WHERE `event`="1"';
	$result = mysql_query($sql);
	
	//dash 2013-11-13 已关闭房间显示
	if(isset($_GET['event']) && $_GET['event'] == 'end' ){
		$sql = 'SELECT * FROM `ts_room_list` WHERE `event`="2" order by id desc';
		$result = mysql_query($sql);	
	}
	
	
	
?>
<div class="location">您当前的位置：<a href="index.php">程序首页</a></div>



<table>
	<tr class="firstLine">
    	<td>ID</td>
        <td>课程名</td>
        <td>创建时间</td>
        <td>创建人</td>
        <td></td>
    </tr>
    <?php while($row = mysql_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><a href="select_team.php?room_id=<?php echo $row['id']; ?>"><?php echo $row['room_name']; ?></a></td>
            <td><?php echo date('y年m月d日 H时i分',$row['time']); ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td>
            	<!-- dash 2013-11-13 已经关闭的课程不允许评选 -->
            	<?php if(!isset($_GET['event'])){ ?>
                <a href="select_team.php?room_id=<?php echo $row['id']; ?>" class="minBtn">参与评选</a>
                <?php } ?>
                <a href="jg.php?room_id=<?php echo $row['id']; ?>" class="minBtn">查看结果</a>
            </td>
        </tr>
    <?php } ?>
</table>

<?php include("footer.php"); ?>