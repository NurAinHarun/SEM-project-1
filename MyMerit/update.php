<html>
	<head>
	<title>PAGE TITLE | MyMerit</title>
     <?php include 'navbarlogout.html';?>
	 <div class="container">
      <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
        <h2 style="margin-bottom:-40px !important">Attendance Info</h2>
     </div>
	  <hr style="border: 2px solid #4682BF;">
	</head>
	<body>
	<center>
	<br><br>
	<table align = "center"class="zui-table">
		
		
		<?php
		
			
				$attendance_ID=$_POST['attendance_ID'];
			
			echo '<form action="" method="post">';
			
			include 'connect.php';
			$sql = "SELECT * FROM attendance INNER JOIN student ON attendance.student_ID=student.stdMatric INNER JOIN programtable ON attendance.program_ID=programtable.ID WHERE attendance.attendance_ID='$attendance_ID'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
						echo '<tr><td>ID: </td><td> <input type="text" name="stdMatric" value="'.$row["stdMatric"].'" disabled></tr>';
						echo '<tr><td>Name: </td><td><input type="text" name="stdMatric" value="'.$row["stdName"].'" disabled><tr>';
						echo '<tr><td>Program Name: </td><td><input type="text" name="stdMatric" value="'.$row["programname"].'" disabled><tr>';
						echo '<tr><td>IP: </td><td><input type="text" name="ip" value="'.$row["ip"].'"><tr>';
						echo '<tr><td>Geolocation: </td><td><input type="text" name="geolocation" value="'.$row["geolocation"].'"><tr></table>';
						echo '<input type="hidden" name="attendance_ID" value='.$row["attendance_ID"].'>';
						echo '<br><input type="submit" value="Submit" name = "Submit" >';
						
				}
			}
			else {
				echo $attendance_ID; 
				echo $conn->error;
			}
			echo '</form>';
		?>
		
		</form>
	</table>
	<br><br>
	<button type="button" class="btn btn-primary" onclick="window.location.href='./manage.php'">Back</button>

	</center>
	<br>
	
	
	<?php
		if(isset($_POST['Submit']))
		{ 
			
			$ip=$_POST["ip"];
			$geolocation=$_POST["geolocation"];
			$attendance_ID=$_POST["attendance_ID"];
			$sql2 = "UPDATE attendance SET ip='$ip',geolocation='$geolocation' WHERE attendance_ID='$attendance_ID'";
			if ($conn->query($sql2) === TRUE) {
				
				echo "<script>
				alert('Data updated successfully');
				window.location.href='manage.php';
				</script>";
				
				
			} else {
			  echo "Error deleting record: " . $conn->error;
			}
		}
		else
		{
			
		}
	?>
	
</html>
