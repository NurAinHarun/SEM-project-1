<!DOCTYPE html>

<html>
	<head>
		<title>COORDINATOR MENU | MyMerit</title>
		<?php include 'navbarlogout.html';
    session_start();?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">COORDINATOR MENU</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
	</head>

	<body>
		<!--START MODULE-->
      </div>
      <p>Select menu:</p>
        <div class="container">
          <div class="row features-inner">
            <!-- single features -->
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="single-features">
                <div class="f-icon">
                  <a href="addprogram.php"><img src="images/add.png" width="150" alt=""></a>
                </div>
                <h6>Add program</h6>
              </div>
			  
            </div>
			 <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="single-features">
                <div class="f-icon">
                  <a href="viewprogram.php"><img src="images/manage.png" width="150" alt=""></a>
                </div>
                <h6>Manage program</h6>
              </div>
            </div>
			
			<div class="col-lg-4 col-md-6 col-sm-6">
              <div class="single-features">
                <div class="f-icon">
                  <a href="qrview.php"><img src="images/file.png" width="150" alt=""></a>
                </div>
                <h6>View QR</h6>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="single-features">
                <div class="f-icon">
                  <img src="images/user.png" width="150" alt=""></a>
                </div>
                <button type="button" class="btn btn-danger" onclick="location.href='coordProfile.php?id=<?=$_SESSION['coID']?>'">View/Edit MyProfile</button>
              </div>
            </div>

            <!-- <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="single-features">
                <div class="f-icon">
                  <img src="images/user.png" width="150" alt=""></a>
                </div>
                <button type="button" class="btn btn-danger" onclick="location.href='commiteeassign.php?id=<?=$_SESSION['coID']?>'">Assign Comitee</button>
              </div>
            </div> -->
	</body>
	
</html>
	