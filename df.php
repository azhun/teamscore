<?php include("./config/config.php") ?>
<?php include("header.php");

/*az:��������ˣ���������*/
if(isset($_COOKIE['over'])){
	header("Location:jg.php");
}


 ?>

<h3>�������������������ã�</h3>

<div class="nr">

	<form method="post">
	
		<?php if($_GET["ws"] != 1){ ?>
			<input type="radio" name="nz"  value="1" /> ��һ�� <br />
		<?php } ?>
		
		<?php if($_GET["ws"] != 2){ ?>
			<input type="radio" name="nz"  value="2"  /> �ڶ��� <br />
		<?php } ?>
		
		<?php if($_GET["ws"] != 3){ ?>
			<input type="radio" name="nz"  value="3"  /> ������ <br />
		<?php } ?>
		
		
		<?php if($_GET["ws"] != 4){ ?>		
			<input type="radio" name="nz"  value="4" /> ������ <br />			
		<?php } ?>
		
		
		<?php if($_GET["ws"] != 5){ ?>
			<input type="radio" name="nz"  value="5" /> ������ <br />
		<?php } ?>
		
		
		
		<input type="submit" value="�ύ..." />
	
	</form>
</div>
<?php

$ws =  $_GET["ws"];
$nz = $_POST["nz"];

if($nz){ //�Ƿ������ύ....

	
	$sql = "INSERT INTO df (a,b) VALUES ('$ws','$nz')";
	mysql_query($sql);
	
	setcookie('over',1,time()+3600*24);
	
	
	header("Location:jg.php");	

}

?>

<?php include("footer.php"); ?>