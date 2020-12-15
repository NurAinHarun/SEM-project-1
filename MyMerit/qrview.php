<!DOCTYPE html>

<html>
	<head>
		<title>QR LISTING | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">QR LISTING</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
	</head>

	<body>
		<!--START MODULE-->


	<th>PENDING PROGRAM</th><br><br>
	<div class="col-lg-12">
	<table align = "center"class="zui-table">
		<thead>
		  <tr>
			<th>Program Name</th>
			<th>QR Attendance</th>
			<th>QR Committee</th>
		  </tr>
		</thead>
		<tbody>
		
		
		<?php
		
		include "connection.php"; 
		$res=mysqli_query($link,"select * from programtable where programstatus='APPROVED'");
			
		while($row=mysqli_fetch_array($res))
		{
			echo "<tr>";
			echo "<td>" ; echo $row["programname"]; echo "</td>";
			
			echo "<td>" ; ?> <img src="qrimage/<?php echo $row["id"];?>.png"  height="200"  width="200">   <?php echo "</td>";
			echo "<td>" ; ?> <img src="qrimage/Com<?php echo $row["id"];?>.png"  height="200"  width="200">   <?php echo "</td>";
			echo "</tr>";

			
		}	
		
		
		?> 
	  
   </tbody>
  </table>
	</body>
	
</html>
	