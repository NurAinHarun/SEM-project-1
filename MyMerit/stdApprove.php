<!DOCTYPE html>

<html>
<head>
	<title>STUDENT APPROVE | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">STUDENT APPROVE</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
</head>

<body>

	<br>
	<table align = "center"class="zui-table">
	<thead>
	<tr>
		<th align="center">Student Name</th>
		<th>Matric No</th>
		<th>Faculty</th>
		<th>Phone Num</th>
		<th>Action</th>
	</tr>
</thead>

	
	<?php
	// connect to the database
	include('dbconfig.php');
		
	// get record from db
	$sql = "SELECT * from student WHERE status != 'APPROVED'";
	$result = $mysqli-> query($sql);

	

		// display  records if there are record to display
		if ($result->num_rows > 0){

				while ($row = $result-> fetch_assoc()){

						echo "<tr><td>". $row["stdName"] ."</td>
						<td>". $row["stdMatric"] ."</td>
						<td>". $row["stdFaculty"]. "</td>
						<td>". $row["stdPhone"]. "</td>
						<td>". "<a href='adminApprove.php?id=".$row["id"]."'>Approve User</a>". 
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
	<br><br>
	<form action="" method="post">
			Search student matric id:&nbsp
			<input type="input" value="" name="matric" required>
			<input type="submit" value="Search" name="search" >
	</form>
	<br>

<?php
	include('dbconfig.php');
	if(isset($_POST['search'])){
	$search_value=$_POST["matric"];
	
	if($mysqli->connect_error){
    echo 'Connection Failed: '.$mysqli->connect_error;
    }else{
        $sql="SELECT * from student where stdMatric like '%$search_value%' AND status != 'APPROVED'";

        $result = $mysqli-> query($sql);

        while($row=$result->fetch_assoc()){
           				echo '<table align = "center" class="zui-table"> ';
           				echo '<thead>';
           				echo '<tr>';
           				echo '<th align="center">Student Name</th>';

           				echo '<th>Matric No</th>';
						echo '<th>Faculty</th>';
						echo '<th>Phone Num</th>';
						echo '<th>Action</th>';
						echo'</tr>';
						echo'</thead>';
           				echo "<tr><td>". $row["stdName"] ."</td>
						<td>". $row["stdMatric"] ."</td>
						<td>". $row["stdFaculty"]. "</td>
						<td>". $row["stdPhone"]. "</td>
						<td>". "<a href='adminApprove.php?id=" . $row["id"] . "'>Approve user</a>". 
						"</td></tr>";
            }   
            echo "</table>";   

        }
    }

	?>

</body>
</html>
	