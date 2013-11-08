<?php include("header.php");


/*az:评过的不能再评*/
if(isset($_COOKIE['over'])){
	header("Location:jg.php");
}



 ?>

<h3>你是哪一组成员？</h3>


<div class="nr">
	<ul>
		<li><a href="df.php?ws=1">第一组</a></li>
		<li><a href="df.php?ws=2">第二组</a></li>
		<li><a href="df.php?ws=3">第三组</a></li>
		<li><a href="df.php?ws=4">第四组</a></li>
		<li><a href="df.php?ws=5">第五组</a></li>
	</ul>
</div>




<?php include("footer.php"); ?>