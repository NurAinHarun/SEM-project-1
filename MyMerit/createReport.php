<?php
include "dbconfig.php";
session_start ();
?>

<html>
	<head>
		<title>CREATE REPORT | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">CREATE REPORT</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
</head>
<body>
    <div class="col-lg-4 col-lg-offset-4">
<div class="container">
<div class="col-lg-4">
  <form action="" name="form1" method="post" enctype="multipart/form-data" align="center">
    <div class="form-group">
      <label for="email">Report Title:</label>
      <input type="text" class="form-control" id="reportTitle" placeholder="Enter report title" name="reportTitle" required>
    </div>
    <div class="form-group">
      <label for="pwd">Report Details:</label>
      <input type="text" class="form-control" id="reportDest" placeholder="Enter report description" name="reportDesc" required>
    </div>
	  <div class="form-group">
      <label for="pwd">Report Date:</label>
      <input type="date" class="form-control" id="reportDate" placeholder="Enter date" name="reportDate" required>
    </div>
    <button type="submit" name="crRP" class="btn btn-default">Add Report</button>

  </form>
</div>
</div>
</body>

<?php
//student report
if (isset($_POST['crRP'])){

$reportTitle = $_POST['reportTitle'];
$reportDesc = $_POST['reportDesc'];
$reportDate= $_POST['reportDate'];
$errors = array(); 

//mysqli = config
//sql = query

// Attempt insert query execution
$sql = "INSERT INTO report (reportTitle, reportDesc, reportDate) VALUES ('$reportTitle', '$reportDesc', '$reportDate')";

if(mysqli_query($mysqli, $sql)){
    echo "<script>alert('Your report was successfully delivered to the Admin');
            window.location = 'stdMenu.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysqli);

}

?>
</html>