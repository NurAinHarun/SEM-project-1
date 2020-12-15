<?php
include "connection.php";

	$programid = $_GET["id"];
	$status = $_GET["status"];
	
	if($status=='approved'){
		$sql="update programtable set programstatus='APPROVED' where id=$programid";
		if ($link->query($sql) === TRUE)

		{
			include "phpqrcode/qrlib.php";

			$location="qrimage/";
			// Create a QR Code and export to PNG
			QRcode::png("http://localhost/NewMymerit/attendance.php?id=$programid", $location."$programid.png", QR_ECLEVEL_L, 10);
				   
			$locationcomite="qrimage/";
			// Create a QR Code and export to PNG
			QRcode::png("http://localhost/NewMymerit/commiteeassign.php?id=$programid", $locationcomite."Com$programid.png", QR_ECLEVEL_L, 10);
				   

		}
		else
		{
			echo $link->error; 
		}
	}
	
	else{
		$sql="update programtable set programstatus='REJECTED' where id=$programid";
		if ($link->query($sql) === TRUE)

		{
			
		}
		else
		{
			echo $link->error; 
		}
	}
	?>
	<script type="text/javascript">
	window.location="programapproval.php";
	</script>
	
