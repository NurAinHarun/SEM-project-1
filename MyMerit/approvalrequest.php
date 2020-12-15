<?php
	include "connection.php";
	$id=$_GET["id"];
	mysqli_query($link,"update programtable set programstatus='PENDING' where id=$id");
	
	
	?>
	<script type = "text/javascript">
	window.location="viewprogram.php";
	</script>