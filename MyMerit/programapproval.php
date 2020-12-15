<?php
include "connection.php";
?>

<html>
	<head>
		<title>MANAGE PROGRAM | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">PROGRAM APPROVAL</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
</head>
<body>



<th>PENDING PROGRAM</th><br><br>
<div class="col-lg-12">
<table align = "center"class="zui-table">
    <thead>
      <tr>
		<th>Coordinator Name</th>
		<th>Program Image</th>
        <th>Program Name</th>
        <th>Program Details</th>
        <th>Program Location</th>
		<th>Program Date</th>
		<th>Program Time</th>
		<th>Program Merit</th>
		<th>Approve Program</th>
		<th>Reject Program</th>
      </tr>
    </thead>
    <tbody>
    
	
	<?php
	
	$res=mysqli_query($link, "select * from programtable inner join coordinator on programtable.coID = coordinator.coID where programstatus='PENDING'");
	$res2=mysqli_query($link,"select * from programtable where programstatus='PENDING'");
		
	while($row=mysqli_fetch_array($res) AND $row2=mysqli_fetch_array($res2))
	{
		echo "<tr>";
		echo "<td>" ; echo $row["coName"]; echo "</td>";
		echo "<td>" ; ?> <img src="<?php echo $row["image"];?>"  height="100"  width="100">   <?php echo "</td>";
		echo "<td>" ; echo $row["programname"]; echo "</td>";
		echo "<td>" ; echo $row["programdetails"]; echo "</td>";
		echo "<td>" ; echo $row["programlocation"]; echo "</td>";
		echo "<td>" ; echo $row["programdate"]; echo "</td>";
		echo "<td>" ; echo $row["programtime"]; echo "</td>";
		echo "<td>" ; echo $row["merit"]; echo "</td>";
		echo "<td>" ; ?><a href="approvalprocess.php?id=<?php echo $row2["id"]; ?>&status=approved"><button type="button" name="approve" class="btn btn-success">APPROVE</button></a> <?php echo "</td>";
		echo "<td>" ; ?><a href="approvalprocess.php?id=<?php echo $row2["id"]; ?>&status=reject"><button type="button" name="reject" class="btn btn-danger">REJECT</button></a> <?php echo "</td>";
		echo "</tr>";

		
	}	
	
	
	?> 
	  
   </tbody>
  </table>
 <br>
<th>APPROVED PROGRAM</th><br><br>
<div class="col-lg-12">
<table align = "center"class="zui-table">
    <thead>
      <tr>
		<th>Coordinator Name</th>
		<th>Program Image</th>
        <th>Program Name</th>
        <th>Program Details</th>
        <th>Program Location</th>
		<th>Program Date</th>
		<th>Program Time</th>
		<th>Program Merit</th>
      </tr>
    </thead>
    <tbody>
    
	
	<?php
	
	$res=mysqli_query($link, "select * from programtable inner join coordinator on programtable.coID = coordinator.coID where programstatus='APPROVED'");
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>" ; echo $row["coName"]; echo "</td>";
		echo "<td>" ; ?> <img src="<?php echo $row["image"];?>"  height="100"  width="100">   <?php echo "</td>";
		echo "<td>" ; echo $row["programname"]; echo "</td>";
		echo "<td>" ; echo $row["programdetails"]; echo "</td>";
		echo "<td>" ; echo $row["programlocation"]; echo "</td>";
		echo "<td>" ; echo $row["programdate"]; echo "</td>";
		echo "<td>" ; echo $row["programtime"]; echo "</td>";
		echo "<td>" ; echo $row["merit"]; echo "</td>";
		echo "</tr>";

		
	}	
	
	
	?> 
	  
    </tbody>
  </table>

<button type="submit" name="insert" class="btn btn-default" onclick="location.href='adminMenu.php'">Back</button>
</div>
		
</body>

</html>