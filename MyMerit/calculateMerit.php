<html>
/*888888*/
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  font-size: large;
}

th, td {
  text-align: left;
  padding: 8px;
}	
</style>
	<title>MERIT SYSTEM | MyMerit</title>
	<?php include 'navbarlogout.html'; session_start();?>
	<div class="container">
	<div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
	<h2 style="margin-bottom:-40px !important">MERIT SYSTEM LOL</h2>
	</div>
	<hr style="border: 2px solid #4682BF;">
</head>
<body>
	<div>
		<table style="border-collapse: collapse;width: 100%;font-size: large;">
			<tr><td style="background-color: #368ce7" colspan="2">Student Information</td></tr>
			<?php 
			$id=$_GET["id"];
			require 'connect.php';
			$sql1 = "select * from student where id=$id";
			$result1 = $conn->query($sql1);
			if ($result1) {
				$row1 = $result1->fetch_assoc();
				echo '<tr><td width="20%">Name</td><td>'.$row1["stdName"].'</td></tr>';
				echo '<tr><td>Matric Number</td><td>'.$row1["stdMatric"].'</td></tr>';
				echo '<tr><td>Faculty</td><td>'.$row1["stdFaculty"].'</td></tr>';
				$lol1=$row1["stdMatric"];
			}

			?>
		</table><hr>
	</div>
	<div>
		<table width="100%">
			<tr><td style="background-color: #368ce7" colspan="5">Merit Information<hr></td></tr>
			<tr style="background-color: #7ab3ef">
				<td>No</td><td>Program</td><td>Program Merit</td><td>Position</td><td>Position Merit</td>
			</tr>
			<?php 
			$id=$_GET["id"];
			require 'connect.php';
			$sql2 = "select * from attendance join committee on attendance.program_ID=committee.progid
			join programtable on committee.progid=programtable.id
			where attendance.student_ID='$lol1'";
			$result2 = $conn->query($sql2);
			if ($result2->num_rows > 0){
				while($row2 = $result2->fetch_assoc()){
				echo '<tr>';
				echo "<td>".$row2['program_ID']."</td>";
				echo "<td>".$row2['programname']."</td>";
				echo "<td>".$row2['merit']."</td>";
				echo "<td>".$row2['position']."</td>";
				echo "<td>".$row2['posmerit']."</td>";
				echo "</tr>";				
				
				}
			}else{
				echo '<tr><td colspan="5">no program joined</td></tr>';
			}
			echo "<tr><td style='background-color: #368ce7' colspan='5'></tr>";

			$id=$_GET["id"];
			$sql3 = "select sum(merit) as progmerit from programtable inner join attendance on programtable.id=attendance.program_ID where attendance.student_ID='$lol1'";

			$sql4 = "select sum(posmerit) as posmerit from attendance join committee on attendance.program_ID=committee.progid join programtable on committee.progid=programtable.id where attendance.student_ID='$lol1'";
			$result3 = $conn->query($sql3);
			$result4 = $conn->query($sql4);
			$row3 = $result3->fetch_assoc(); 
			$row4 = $result4->fetch_assoc();
			$progmerit = $row3['progmerit'];
			$posmerit = $row4['posmerit']; 
			$total = $progmerit+$posmerit;
			echo "<tr>";
			echo "<td>Cumulative Merit</td>";
			echo "<form action='' method='post'>";
			echo "<td><input type='text' name='3' value=".$total." disabled><input type='hidden' name='4' value=".$id."></td>";
			echo "<td><input type='hidden' name='1' value=".$progmerit."></td>";
			echo "<td><input type='hidden' name='2' value=".$posmerit."></td>";
			echo "<td><input type='submit' name='claim' value='Claim'></td></form>";
			echo "</tr>";
			?>
			<tr></tr>
			<tr><td></td><td></td><td></td><td></td><td><button onclick="window.print()">PRINT</button></td></tr>
		</table>
	<button type="button" class="btn btn-primary" onclick="location.href='stdMenu.php'">Back</button>
		
	</div>
</body>
</html>
<?php 
if(isset($_POST['claim'])){
	$lol1 = $_POST['1'];
	$lol2 = $_POST['2'];
	$lol3 = $_POST['3'];
	$lol4 = $_POST['4'];
	$sql1 = "select * from merit where studid='$lol4'";
	$result = $conn->query($sql1);
	if ($result->num_rows > 0){
		$sql3 = "update merit set studid='$lol4',progmerit='$lol1',posmerit='$lol2',ttlmerit='$lol3'";
		if ($conn->query($sql3) === TRUE){
			echo '<script language="javascript">';
			echo 'alert("Successfully update");';
			echo 'window.location.href = "calculateMerit.php?id='.$lol4.'";';
			echo '</script>';
		}
		else {
			echo "Error adding record: " . $conn->error;
		}
	}
	else{
		$sql2 = "insert into merit (studid,progmerit,posmerit,ttlmerit) values ('$lol4', '$lol1', '$lol2', '$lol3')";
		if ($conn->query($sql2) === TRUE){
			echo '<script language="javascript">';
			echo 'alert("Successfully claimed");';
			echo 'window.location.href = "calculateMerit.php?id='.$lol4.'";';
			echo '</script>';
		}
		else {
			echo "Error adding record: " . $conn->error;
		}
	}		
}


?>