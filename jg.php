<?php include("./config/config.php") ?>
<?php include("header.php") ?>

<?php


	$sql = "SELECT COUNT(*) as num FROM df WHERE a='1' or b='1'";   //SQL  COUNT() ���ڼ������   as num ��һ����num �ı���
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

<h3>�÷������</h3>

<div class="nr">

	��һ��Ŀǰ�÷֣�<?php echo  $z1['num']*10 ?>�� <br /><br />
	�ڶ���Ŀǰ�÷֣�<?php echo  $z2['num']*10 ?>�� <br /><br />
	������Ŀǰ�÷֣�<?php echo  $z3['num']*10 ?>�� <br /><br />
	������Ŀǰ�÷֣�<?php echo  $z4['num']*10 ?>�� <br /><br />
	������Ŀǰ�÷֣�<?php echo  $z5['num']*10 ?>�� <br /><br />

</div>
<?php include("footer.php"); ?>
<script>
function sx(){

	window.location = 'jg.php';
}
setTimeout('sx()',1000);

</script>