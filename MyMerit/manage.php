<html>
  <head>
    <title>MANAGE ATTENDANCE | MyMerit</title>
     <?php include 'navbarlogout.html';?>
	 
	 
	<div class="container">
      <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
        <h2 style="margin-bottom:-40px !important">MANAGE ATTENDANCE</h2>
     </div>
	  <hr style="border: 2px solid #4682BF;">
  </head>
  
	<body>
	<center>
	<br>
	
	<table align = "center" class="zui-table">
		<thead><tr><th><b>Matric Number</b></th><th><b>Program Attended</b></th><th colspan="2"><b>Action</b></th></tr></thead>
		
		<?php
		if(isset($_POST['SubmitSearch']))
		{
			$student_ID = $_POST['student_ID'];
			include 'connect.php';
			$sql = "SELECT * FROM attendance INNER JOIN programtable ON attendance.program_ID=programtable.ID WHERE programtable.programname LIKE '%$student_ID%';";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo '<tr> 
					<td>'.$row["student_ID"].'</td>
					<td><center>'.$row["programname"].'</center></td>
					<form action ="update.php" method ="post">
					<input type="hidden" name="attendance_ID" value='.$row["attendance_ID"].'>
					<td><input type="submit" value="Edit" name="edit"></td>
					</form>
					<form action ="" method ="post">
					<input type="hidden" name="attendance_ID" value='.$row["attendance_ID"].'>
					<td><input type="submit" value="Delete" name="delete"></td></tr>
					</form>';
				}
			}
			else {
			}
		}
		else 
		{
			include 'connect.php';
			$sql = "SELECT * FROM attendance INNER JOIN programtable ON attendance.program_ID=programtable.ID";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo '<tr> 
					<td>'.$row["student_ID"].'</td>
					<td><center>'.$row["programname"].'</center></td>
					<form action ="update.php" method ="post">
					<input type="hidden" name="attendance_ID" value='.$row["attendance_ID"].'>
					<td><input type="submit" value="Edit" name="edit"></td>
					</form>
					<form action ="" method ="post">
					<input type="hidden" name="attendance_ID" value='.$row["attendance_ID"].'>
					<td><input type="submit" value="Delete" name="delete"></td></tr>
					</form>';
				}
			}
			else {
			}
		}
		?>
		</form>
	</table>
		<br>
	<table><tr><td>
	<form action="" method="post">
			Search for program
			<input type="input" value="" name="student_ID" required>
			<input type="submit" value="Search" name="SubmitSearch" >
	</form>
	</td><td>   </td><td>
	<form action="" method="post">
			<button onclick="window.location.href='./manage.php'">View All</button>
	</form>
	
	</td><td>   </td><td>
	<form action="" method="post">
			<input type="submit" value="Delete Duplicate Enteries" name="Del" >
	</form>
	</td>
	</table>
	<button type="button" class="btn btn-primary" onclick="location.href='adminMenu.php'">Back</button>
	</center>
	<br>
	
	
	
	<?php
		if(isset($_POST['Del']))
		{ 
			$sql2 = "DELETE a FROM attendance a INNER JOIN attendance b  WHERE a.attendance_ID < b.attendance_ID AND a.program_ID = b.program_ID AND a.student_ID = b.student_ID;";
			if ($conn->query($sql2) === TRUE) {
			  echo '<script language="javascript">
				alert("Duplicate data successfully deleted")
				window.location.href = "manage.php"
				</script>';
				

			} else {
			  echo "Error deleting record: " . $conn->error;
			}
		}
		else
		{
			
		}
	?>
	
	
	<?php
		if(isset($_POST['delete']))
		{ 
			$attendance_ID = $_POST['attendance_ID'];
			$sql3 = "DELETE FROM attendance WHERE attendance_ID='$attendance_ID'";
			if ($conn->query($sql3) === TRUE) {
				echo '<script language="javascript">
				alert("Data successfully deleted")
				window.location.href = "manage.php"
				</script>';
			} else {
				echo 'lol';
				echo  $conn->error;

			}

		}
		else
		{
			
		}
	?>



	</body>
</html>