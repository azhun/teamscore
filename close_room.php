<?php

	include("./config/config.php");
	include("header.php");
	
	//dash 2013-11-13 关闭房间判断
	if(isset($_GET['room_id'])){
		$room_id = intval($_GET['room_id']);
		if(!$room_id){header('location:index.php');}
		$sql = "select * from `ts_room_list` where `id` = '$room_id'";
		$room = mysql_fetch_assoc(mysql_query($sql));
		
		if($_SERVER['REMOTE_ADDR'] == $room['user_ip']){
			$sql = "update `ts_room_list` set event = 2 where `id` = '$room_id'";
			mysql_query($sql);
			header('location:index.php');
			exit();
		}else{
			if(!empty($_POST)){
				if($_POST['password']=='gzittc'){
					$sql = "update `ts_room_list` set event = 2 where `id` = '$room_id'";
					mysql_query($sql);
					header('location:index.php');
					exit();
				}else{
					$err = '密码错误';	
				}
			}
		}
		
	}else{
		header('location:index.php');
	}

	
?>

<form action="" method="post">
    请输入密码:<input type="password" name="password" />
    <?php if(isset($err)){echo $err;} ?>
    <input type="submit" />
</form>

<?php include("footer.php"); ?>