<?php

include("./config/config.php");
include("header.php");

//dash 2013-11-8 增加房间判断与小组数获取
if(isset($_GET['room_id'])){
	$room_id = intval($_GET['room_id']);
	if(!$room_id){header('location:index.php');}
	$sql = "select * from `room_list` where `id` = '$room_id'";
	$room = mysql_fetch_assoc(mysql_query($sql));
}else{
	header('location:index.php');
}

/*az:如果评过了，不能再评*/
if(isset($_COOKIE['over'.$room_id])){
	header("Location:jg.php?room_id=".$room_id);
}
/*dash 2013-11-8 增加IP判断不能再评*/
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "select * from `teamscore_df` where `ip`='$ip' and `room_id` = '$room_id'";
$row = mysql_fetch_assoc(mysql_query($sql));
if(!empty($row)){header("Location:jg.php?room_id=".$room_id);}

 ?>

<h3>你是哪一组成员？</h3>


<div class="nr">
	<ul>
    	<?php for($i=1;$i<=$room['team_nm'];$i++){ ?>
            <li><a href="df.php?room_id=<?php echo $room_id; ?>&amp;ws=<?php echo $i; ?>">第<?php echo $ZH_NM[$i]; ?>组</a></li>
        <?php } ?>
	</ul>
</div>




<?php include("footer.php"); ?>