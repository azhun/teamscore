<?php include("header.php");

if(isset($_COOKIE['over'])){
	header("Location:jg.php");
}



 ?>

<h3>������һ���Ա��</h3>


<div class="nr">
	<ul>
		<li><a href="df.php?ws=1">��һ��</a></li>
		<li><a href="df.php?ws=2">�ڶ���</a></li>
		<li><a href="df.php?ws=3">������</a></li>
		<li><a href="df.php?ws=4">������</a></li>
		<li><a href="df.php?ws=5">������</a></li>
	</ul>
</div>




<?php include("footer.php"); ?>