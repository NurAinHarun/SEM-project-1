<?php
$progid=$_GET["id"];
?>
<html>
<head>
	<title>COMMITTEE ASSIGN | MyMerit</title>
	<?php include 'navbarlogout.html'; session_start();?>
	<div class="container">
	<div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
	<h2 style="margin-bottom:-40px !important">COMMITTEE ASSIGN</h2>
	</div></div>
	<hr style="border: 2px solid #4682BF;">
</head>
<body>
	<div><form action="" method="POST">
		<h5>Search Student</h5>
		<form><input type="text" name="stdName"><button name="studSearch">Search</button></form>
		<table align="center">
		<?php
		require 'connect.php';		
		if(isset($_POST['studSearch'])){				
			$stdName=$_POST["stdName"];	
			$sql1 = "select * from student where stdName like '%$stdName%'";
			$result1 = $conn->query($sql1);
			if ($result1->num_rows > 0){
				// echo "<input type='text' name='studid value='".$row1['id']."'>";
				echo "<tr><td><select name='studname' id='studname' onclick='lol()'>";
				while($row1 = $result1->fetch_assoc()){
					echo "<option value='".$row1['id']."''>".$row1['stdName']."</option>";	
				}echo "</select></td></tr>";
			}	
			}else{
				echo '<tr><td>no data</td></tr>';
			}
		?>
		</table>	
	</form></div><br>
	<div><form action="" method="POST">
	<table align="center">
		<tr><td>Student ID:</td><td><input type="text" name="name1" id="name1" disabled></td></tr>
		<tr><td>Program:</td><td><input type="text" name="program" value="<?=$progid?>" disabled></td></tr>
		<tr><td>Position:</td>
			<td><select name="position" id="position" onchange="wow()">
				<option value="Program chair">Program chair</option>
				<option value="Program co-chair">Program co-chair</option>
				<option value="Main committee">Main committee</option>
				<option value="Sub committee">Sub committee</option>
			</select></td>
		</tr>
		<tr><td>Merit</td><td><input type="text" name="posmerit" id="posmerit" disabled></td></tr>
	</table>
	<input type="submit" name="submit" value="Submit">
	</form></div>
	<!-- <p id="wow">lol</p> -->
</body>
</html>
<script type="text/javascript">
	function lol(){
		var a = document.getElementById("studname").value;
		document.getElementById("name1").value = a ;
	}
	function wow(){
		var b = document.getElementById("position").value;
		// document.getElementById("wow").innerHTML = b;
		if(b=='Program chair'){
			document.getElementById("posmerit").value = '500';
		}
		else if(b=='Program co-chair'){
			document.getElementById("posmerit").value = '450';
		}
		else if(b=='Main committee'){
			document.getElementById("posmerit").value = '300';
		}
		else if(b=='Sub committee'){
			document.getElementById("posmerit").value = '200';
		}
		else{
			document.getElementById("posmerit").value = '0';
		}
		
	}
</script>
<?php
include 'connect.php';
if(isset($_POST['submit'])){
	$studid = $_POST['name1'];
	$progid = $_POST['program'];
	$position = $_POST['position'];
	$posmerit = $_POST['posmerit'];

	$sql2="insert into committee (studid,progid,position,posmerit) values ($studid,$progid,'$position',$posmerit)";
	if ($conn->query($sql2) === TRUE){
		echo '<script language="javascript">';
		echo 'alert("Successfully assigned");';
		echo 'window.location.href = "commiteeassign.php?id='.$progid.'";';
		echo '</script>';
	}
	else {
		echo "Error adding record: " . $conn->error;
	}
}
?>
