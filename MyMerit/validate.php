
<?php
	
	
			
				$a = $_POST["fname"];
				$b = $_POST["fpassword"];
				$c = $_POST["fprogram"];
				$d = $_POST["floca"];
				$e = $_POST["fip"];
				
				include 'connect.php';
				$sql = "SELECT * FROM student WHERE stdMatric='$a' AND stdPWD='$b'";
				
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				$stdid=$row["id"];
				if ($result->num_rows > 0) {
					
					$sql2 = "INSERT INTO committee VALUES (NULL,$stdid,$c,'None',0)";
					$sql = "INSERT INTO attendance VALUES ('','$a','$c','$d','$e')";
					$conn->query($sql2);
					if ($conn->query($sql) === TRUE) {
					echo '<script language="javascript">';
					echo 'alert("Your Attendance Has Been Recorded");';
					echo 'window.location.href = "attendance.php?id='.$c.'";';
					echo '</script>';

					} else {
					echo "Error: " . $sql . "<br>" . $conn->error;}
					
				  }
				  else
				  {
					echo '<script language="javascript">';
					echo 'alert("ID and password does not match. Please try again");';
					echo 'window.location.href = "attendance.php?id='.$c.'";';
					echo '</script>';

				  }
			
			
		
	
?>	