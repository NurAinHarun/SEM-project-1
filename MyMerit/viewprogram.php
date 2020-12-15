<?php
include "connection.php";
session_start ();
$coID=$_SESSION['coID'];
?>

<html>
	<head>
		<title>MANAGE PROGRAM | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">VIEW PROGRAM</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
</head>
<body>

<div class="col-lg-12" style="margin-left:-40px">
<table class="zui-table">
    <thead>
      <tr>
		<th>ProgramID</th>
		<th>Program Image</th>
        <th>Program Name</th>
        <th>Program Details</th>
        <th>Program Location</th>
		<th>Program Date</th>
		<th>Program Time</th>
		<th>Program Merit</th>
		<th>Edit</th>
		<th>Delete</th>
		<th>Request Program Approval</th>
		<th>Program Approval Status</th>
      </tr>
    </thead>
    <tbody>
    
	
	<?php
	
	$res=mysqli_query($link, "select * from programtable where coID=$coID");
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>" ; echo $row["id"]; echo "</td>";
		echo "<td>" ; ?> <img src="<?php echo $row["image"];?>"  height="100"  width="100">   <?php echo "</td>";
		echo "<td>" ; echo $row["programname"]; echo "</td>";
		echo "<td>" ; echo $row["programdetails"]; echo "</td>";
		echo "<td>" ; echo $row["programlocation"]; echo "</td>";
		echo "<td>" ; echo $row["programdate"]; echo "</td>";
		echo "<td>" ; echo $row["programtime"]; echo "</td>";
		echo "<td>" ; echo $row["merit"]; echo "</td>";
		if ( $row["programstatus"]!="APPROVED" ) {
		echo "<td>" ; ?><a href="edit.php? id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
		echo "<td>" ; ?><a href="delete.php? id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
	    echo "<td>" ; ?><a href="approvalrequest.php? id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success">Request</button></a> <?php echo "</td>";
		}
		else{echo " <td colspan='3'> FINALIZED </td>" ;} 
		echo "<td>" ; echo $row["programstatus"]; echo "</td>";
		echo "</tr>";
		
		
	}	
	
	
	?> 
	  
    </tbody>
  </table>

<button type="submit" name="insert" class="btn btn-default" onclick="location.href='coordMenu.php'">Back</button>
</div>
		
</body>

<?php

if(isset($_POST["delete"]))
{
	mysqli_query($link,"delete from programtable where programname='$_POST[programname]'") or die(mysqli_error($_link));
	
	
	?>
	<script type = "text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php
}


?>
</html>