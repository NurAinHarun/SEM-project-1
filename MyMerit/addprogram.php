<?php
include "connection.php";
session_start ();
$coordinatorID=$_SESSION['coID'];
?>

<html>
	<head>
		<title>MANAGE PROGRAM | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">ADD PROGRAM</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
</head>
<body>
    <div class="col-lg-4 col-lg-offset-4">
<div class="container">
<div class="col-lg-4">
  <form action="" name="form1" method="post" enctype="multipart/form-data" align="center">
    <div class="form-group">
      <label for="email">Program Name:</label>
      <input type="text" class="form-control" id="programname" placeholder="Enter program name" name="programname" required>
    </div>
    <div class="form-group">
      <label for="pwd">Program Details:</label>
      <input type="text" class="form-control" id="programdetails" placeholder="Enter program details" name="programdetails" required>
    </div>
	<div class="form-group">
      <label for="pwd">Program Location:</label>
      <input type="text" class="form-control" id="programlocation" placeholder="Enter program location" name="programlocation" required>
    </div>
	  <div class="form-group">
      <label for="pwd">Program Date:</label>
      <input type="date" class="form-control" id="programdate" placeholder="Enter date" name="programdate" required>
    </div>
	<div class="form-group">
      <label for="pwd">Program Time:</label>
      <input type="time" class="form-control" id="programtime" placeholder="Enter time" name="programtime" required>
    </div>
    <div class="form-group">
      <label for="pwd">Merit Awarded:</label>
      <input type="text" class="form-control" id="merit" placeholder="Enter merit awarded" name="merit" required>
    </div>
	<div class="form-group">
      <label for="pwd">Program Image/Poster:</label>
      <input type="file" class="form-control"  name="f1" required>
    </div>
    <button type="submit" name="insert" class="btn btn-default">Insert</button>

  </form>
</div>
</div>
</body>

<?php
if(isset($_POST["insert"]))
{	
	$tm=md5(time());
	$fnm=$_FILES["f1"]["name"];
	$dst="./images/".$tm.$fnm;
	$dst1="images/".$tm.$fnm;
	move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);

	mysqli_query($link,"insert into programtable values (NULL,'$_POST[programname]','$_POST[programdetails]','$_POST[programlocation]','$_POST[programdate]','$_POST[programtime]','$_POST[merit]','$dst1','$_POST[programstatus]','$coordinatorID')");
	
	?>
	<script type = "text/javascript">
	window.location.href='viewprogram.php';
	</script>
	<?php
	
}

?>
</html>