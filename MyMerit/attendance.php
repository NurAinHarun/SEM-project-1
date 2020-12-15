<html>

  <head>
    <title>PAGE TITLE | MyMerit</title>
     <?php include 'navbar.html';?>
	 

  </head>
	  
	<body style="background-image: url('images/bg.jpg')"onload="getLocation()">
		<center>
		
		<?php
			$programid=$_GET['id'];
			//$programid='12';
			include 'connect.php';
			$sql = "SELECT * FROM programtable WHERE id='$programid'";
			
			
			$result = $conn->query($sql);
			$host= gethostname();	
		
			if ($result->num_rows > 0) {
				
				$row = $result->fetch_assoc();
				echo '  <div class="container">
      <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
        <h2 style="margin-bottom:-40px !important">'.$row["programname"].'</h2>
      </div>
      <hr style="border: 2px solid #4682BF;">';
				echo '<img src='.$row["image"].'  height="300"  width="300" style="border: 2px solid #4682BF; margin-top:-22px"><br><br>';
				echo $row["programdetails"].'<br><br>';
				echo "Attendance for " .$row["programname"]. "<br>";
				echo "IP address : ".gethostbyname($host)."<br>";
				echo '<p id="loca"></p><br>';
				echo '<hr style="margin-top:-20px !important; border: 2px solid #4682BF;">';
				echo 'Please enter your ID and Password to validate and record your attendance';
				echo '<form action="validate.php" method="post""><table><tr><td>Student ID</td><td><input type="text" name="fname" required></td></tr>';
				echo '<tr><td>Password</td><td><input type="password" name="fpassword" required></td></tr>';
				echo '<input type="hidden" id="floca" name="floca" value="">';
				echo '<input type="hidden" name="fprogram" value="'.$row["id"].'">';
				echo '<input type="hidden" name="fip" value="'.gethostbyname($host).'">';
				echo '<tr><td><button type="reset" value="Reset">Reset</button></td><td><button type="submit" name="Submit" value="Submit">Submit</button></td></tr></table></form>';
			} else {
			  echo "0 results";
			}
		
		?>
		
		
		<center>
		
		<script>
			var x = document.getElementById("loca");
			var y = document.getElementById("floca");
			function getLocation() {
			  if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			  } else { 
				x.innerHTML = "Geolocation is not supported by this browser.";
				
			  }
			}

			function showPosition(position) {
			  x.innerHTML = "Current Latitude: " + position.coords.latitude + 
			  "<br>Current Longitude: " + position.coords.longitude;
			  y.innerHTML = position.coords.latitude + " & " + position.coords.longitude;
			  document.getElementById("floca").value = position.coords.latitude + " & " + position.coords.longitude;
			}
		
		</script>
	</body>
</html>