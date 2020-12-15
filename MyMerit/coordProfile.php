<?php
    session_start();
   
    $coord = $_SESSION;
?>
<!DOCTYPE html>
<html>
  <head>
 <title>COORDINATOR PROFILE | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">COORDINATOR PROFILE</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
  </head>
  <body>

      <div style="margin-left: 1em;">
          <div class="form">    
          <div class="row">
            <div class="col-xs-4">
            <label>Username</label>
            <input type="text" class="form-control" name="coName" value="<?=$coord['coName']?>" readonly>
          </div>
          </div>
          <br />
          <div class="row">
            <div class="col-xs-4">
              <label>Email</label>
               <input type="text" class="form-control" name="coEmail" value="<?=$coord['coEmail']?>" readonly>
             
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-xs-4">
              <label>Phone</label>
              <input type="text" class="form-control" name="coPhone" value="<?=$coord['coPhone']?>" readonly>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-xs-4">
              <label>Type</label>
              <input type="text" class="form-control" name="coType" value="<?=$coord['coType']?>" readonly>
            </div>
          </div>
          <br />
          <button type="button" class="btn btn-danger" onclick="location.href='coordUpdateProfileForm.php?id=<?=$_SESSION['coID']?>'">Edit</button>
          <div class="btn-group">
          <button type="submit" class="btn btn-primary" onclick="window.location.href='coordMenu.php';">Back</button>
        </div>
         
        </div>
    </div>




    
  </body>
</html>
