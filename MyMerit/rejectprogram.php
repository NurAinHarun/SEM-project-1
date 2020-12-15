<?php
include "connection.php";

	$programid = $_GET["id"];
	$sql="update programtable set programstatus='APPROVED' where id=$programid";
	if ($link->query($sql) === TRUE)

	{
		
	}
	else
	{
		echo $link->error; 
	}
	?>
	<script type="text/javascript">
	window.location="programapproval.php";
	</script>
	
