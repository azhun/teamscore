<?php include("header.php");


if(isset($_COOKIE['over'])){
	header("Location:jg.php");
}


 ?>

<h3>你觉得以下哪组做得最好？</h3>

<div class="nr">

	<form method="post">
	
		<?php if($_GET["ws"] != 1){ ?>
			<input type="radio" name="nz"  value="1" /> 第一组 <br />
		<?php } ?>
		
		<?php if($_GET["ws"] != 2){ ?>
			<input type="radio" name="nz"  value="2"  /> 第二组 <br />
		<?php } ?>
		
		<?php if($_GET["ws"] != 3){ ?>
			<input type="radio" name="nz"  value="3"  /> 第三组 <br />
		<?php } ?>
		
		
		<?php if($_GET["ws"] != 4){ ?>		
			<input type="radio" name="nz"  value="4" /> 第四组 <br />			
		<?php } ?>
		
		
		<?php if($_GET["ws"] != 5){ ?>
			<input type="radio" name="nz"  value="5" /> 第五组 <br />
		<?php } ?>
		
		
		
		<input type="submit" value="提交..." />
	
	</form>
</div>
<?php

$ws =  $_GET["ws"];
$nz = $_POST["nz"];

if($nz){ //是否按下了提交....

	
	mysql_connect('localhost','root','');
	mysql_select_db('xzhp');
	mysql_query('set names utf8');
	
	$sql = "INSERT INTO df (a,b) VALUES ('$ws','$nz')";
	mysql_query($sql);
	
	setcookie('over',1,time()+3600*24);
	
	
	header("Location:jg.php");	

}

?>

<?php include("footer.php"); ?>