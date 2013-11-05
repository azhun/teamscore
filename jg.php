<?php include("./config/config.php") ?>
<?php include("header.php") ?>

<?php


	$sql = "SELECT COUNT(*) as num FROM df WHERE a='1' or b='1'";   //SQL  COUNT() 用于计算个数   as num 起一个叫num 的别名
	$r = mysql_query($sql);
	$z1 = mysql_fetch_array($r);
	
	$sql = "SELECT COUNT(*) as num FROM df WHERE a='2' or b='2'";
	$r = mysql_query($sql);
	$z2 = mysql_fetch_array($r);
	
	$sql = "SELECT COUNT(*) as num FROM df WHERE a='3' or b='3'";
	$r = mysql_query($sql);
	$z3 = mysql_fetch_array($r);	
	
	$sql = "SELECT COUNT(*) as num FROM df WHERE a='4' or b='4'";
	$r = mysql_query($sql);
	$z4 = mysql_fetch_array($r);

	$sql = "SELECT COUNT(*) as num FROM df WHERE a='5' or b='5'";
	$r = mysql_query($sql);
	$z5 = mysql_fetch_array($r);
	
?>

<h3>得分情况？</h3>

<div class="nr">

	第一组目前得分：<?php echo  $z1['num']*10 ?>分 <br /><br />
	第二组目前得分：<?php echo  $z2['num']*10 ?>分 <br /><br />
	第三组目前得分：<?php echo  $z3['num']*10 ?>分 <br /><br />
	第四组目前得分：<?php echo  $z4['num']*10 ?>分 <br /><br />
	第五组目前得分：<?php echo  $z5['num']*10 ?>分 <br /><br />

</div>
<?php include("footer.php"); ?>
<script>
function sx(){

	window.location = 'jg.php';
}
setTimeout('sx()',1000);

</script>