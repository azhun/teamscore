<?php
	include("./config/config.php");
	include("header.php");
	
	
	//dash 2013-11-8 创建房间并自动跳转到房间页
	if(!empty($_POST)){
		$room_name = $_POST['room_name'];
		$time = time();
		$team_nm = $_POST['team_nm'];
		$user_name = $_POST['user_name'];
		$sql = "INSERT INTO `ts_room_list` (`room_name`,`time`,`event`,`team_nm`,`user_name`) VALUES ('$room_name','$time','1','$team_nm','$user_name')";
		mysql_query($sql);
		$id = mysql_insert_id();
		header('location:jg.php?room_id='.$id);
	}
	
?>
<div class="location">您当前的位置：<a href="index.php">程序首页</a>  >>  <a href="#">创建新课堂</a></div>

<div class="create">

<form method="post" action="">

    <label><input type="text" name="room_name" placeholder="课堂名" />课堂名</label>
    <label>
        <select name="team_nm">
            <?php for($i = 3; $i<=10; $i++){ ?>
            <option><?php echo $i; ?></option>
            <?php } ?>
        </select>小组数
    </label>
    <label><input type="text" name="user_name" placeholder="创建人" />创建人</label>
    <label><input type="submit" value="创建" class="btn" /></label>
</form>

</div>


<?php include("footer.php"); ?>