<!DOCTYPE html>

<html>
	<head>
		<title>STUDENT MENU | MyMerit</title>
		<?php include 'navbarlogout.html'; session_start();?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">STUDENT MENU</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
	</head>

	<body>
		<!--START MODULE-->
  
      <p>Select menu:</p>
        <div class="container">
          <div class="row features-inner">
            <!-- single features -->
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="single-features">
                <div class="f-icon">
                  <img src="images/user.png" width="150" alt=""></a>
                </div>
                <button type="button" class="btn btn-danger" onclick="location.href='stdProfile.php?id=<?=$_SESSION['id']?>'">View/Edit MyProfile</button>
              </div>
            </div>
            <!-- single features -->
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="single-features">
                <div class="f-icon">
                  <img src="images/create.png" width="150" alt=""></a>
                </div>
                <button type="button" class="btn btn-danger" onclick="location.href='createReport.php?id=<?=$_SESSION['id']?>'">Create Report</button>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="single-features">
                <div class="f-icon">
                  <img src="images/create.png" width="150" alt=""></a>
                </div>
                <button type="button" class="btn btn-danger" onclick="location.href='calculateMerit.php?id=<?=$_SESSION['id']?>'">Merit System</button>
                </div>
            </div>
	</body>
	
</html>
	