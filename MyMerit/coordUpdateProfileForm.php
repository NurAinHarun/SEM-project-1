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
    <form action="coordUpdateProfile.php" method="POST">
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
               <input type="text" class="form-control" name="coEmail" value="<?=$coord['coEmail']?>" >
             
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-xs-4">
              <label>Phone</label>
              <input type="text" class="form-control" name="coPhone" value="<?=$coord['coPhone']?>" >
            </div>
          </div>
          <br />
          <div class="form-group"> 
          <div class="input-group col-xs-15">
            <label for="type">Type:&nbsp&nbsp&nbsp</label>
              <select name="coType" id="cotypee">
              <option value="Inside Campus">Inside Campus</option>
              <option value="Outside Campus">Outside Campus</option>
        </select>
          </div>
        </div>
          <br />
          <button type="submit" class="btn btn-primary">Update Profile</button>
          </div>
          <button type="button" class="btn btn-danger" onclick="location.href='coordProfile.php'">Cancel</button>
        </div>
         
        </div>
    </div>
</form>



    
  </body>
</html>
