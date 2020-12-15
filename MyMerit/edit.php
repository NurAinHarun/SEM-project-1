<?php
include "connection.php";
$id=$_GET["id"];

$programname="";
$programdetails="";
$programlocation="";
$programdate="";
$programtime="";
$merit="";
$image="";


$res=mysqli_query($link,"select * from programtable where id=$id");
while($row=mysqli_fetch_array($res))
{
	$programname=$row["programname"];
	$programdetails=$row["programdetails"];
	$programlocation=$row["programlocation"];
	$programdate=$row["programdate"];
	$programtime=$row["programtime"];
	$merit=$row["merit"];
	$image=$row["image"];
}
?>

<html>
	<head>
		<title>MANAGE PROGRAM | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">EDIT PROGRAM DETAILS</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
	</head>
<body>
<div class="col-lg-4 col-lg-offset-4">
<div class="container">
<div class="col-lg-4">
  <form action="" name="form1" method="post" enctype="multipart/form-data" align="center">
  <img src="<?php echo $image; ?>" height="100" width="100">
  
  
  
    <div class="form-group">
      <label for="email">Program Name:</label>
      <input type="text" class="form-control" id="programname" placeholder="Enter programname" name="programname" value="<?php echo $programname; ?>" >
    </div>
    <div class="form-group">
      <label for="pwd">Program Details:</label>
      <input type="text" class="form-control" id="programdetails" placeholder="Enter programdetails" name="programdetails"value="<?php echo $programdetails; ?>">
    </div>
	<div class="form-group">
      <label for="pwd">Program Location:</label>
      <input type="text" class="form-control" id="programlocation" placeholder="Enter programlocation" name="programlocation"value="<?php echo $programlocation; ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Program Date:</label>
      <input type="date" class="form-control" id="programdate" placeholder="Enter date" name="programdate" value="<?php echo $programdate; ?>">
    </div>
	<div class="form-group">
      <label for="pwd">Program Time:</label>
      <input type="time" class="form-control" id="programtime" placeholder="Enter time" name="programtime" value="<?php echo $programtime; ?>">
    </div>
	 <div class="form-group">
      <label for="pwd">Merit Awarded:</label>
      <input type="text" class="form-control" id="merit" placeholder="Enter merit" name="merit" value="<?php echo $merit; ?>">
    </div>
	<div class="form-group">
      <label for="pwd">Image:</label>
      <input type="file" class="form-control"  name="f1">
    </div>
   
	<button type="submit" name="update" class="btn btn-default">Update</button>
	<button type="submit" name="cancelupdate" class="btn btn-default" onclick="location.href='viewprogram.php'">Cancel Update</button>
  </form>
</div>
</div>





</div>

</body>

<?php
if(isset($_POST["update"]))
{
	
	$tm=md5(time());
	$fnm=$_FILES["f1"]["name"];
	
	if($fnm=="")
	{
		mysqli_query($link,"update programtable set programname='$_POST[programname]',programdetails='$_POST[programdetails]',programlocation='$_POST[programlocation]',programdate='$_POST[programdate]',programtime='$_POST[programtime]',merit='$_POST[merit]'  where id=$id");
	}
	else
	{
		$dst="./images/".$tm.$fnm;
		$dst1="images/".$tm.$fnm;
		move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
		mysqli_query($link,"update programtable set programname='$_POST[programname]',programdetails='$_POST[programdetails]',programlocation='$_POST[programlocation]',programdate='$_POST[programdate]' ,programtime='$_POST[programtime]',merit='$_POST[merit]', image='$dst' where id=$id");
	}	
	?>
	<script type="text/javascript">
	window.location="viewprogram.php";
	</script>
	<?php
}

if (isset($_POST["cancelupdate"]))
{
	?>
	<script type="text/javascript">
	window.location="viewprogram.php";
	</script>
	<?php
	
}	
?>



</html>