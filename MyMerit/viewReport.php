<!DOCTYPE html>

<html>
	<head>
		<title>VIEW REPORT | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">VIEW REPORT</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
	</head>

	<body>
		<!--START MODULE-->
		<br>
		<table align = "center"class="zui-table">
			<thead>
			<tr>
				<th align="center">Title</th>
				<th>Description</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
			</thead>
			<?php
	// connect to the database
	include('dbconfig.php');

	// get record from db
	$sql = "SELECT id, reportTitle, reportDesc, reportDate from report";
	$result = $mysqli-> query($sql);

	

		// display  records if there are record to display
		if ($result->num_rows > 0){

				while ($row = $result-> fetch_assoc()){

						echo "<tr><td>". $row["reportTitle"] ."</td>
						<td>". $row["reportDesc"] ."</td>
						<td>". $row["reportDate"]."</td> 
						<td>". "<a href='deleteReport.php?id=".$row["id"]."'>Delete</a>". 
						"</td></tr>";
				}
				echo "</table>";

		}
			else {
				echo "No data to display";
			}

		$mysqli->close();
		

?>
		</table>
	<button type="button" class="btn btn-primary" onclick="location.href='adminMenu.php'">Back</button>
	</body>
	
</html>
	