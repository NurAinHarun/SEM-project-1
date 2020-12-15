<?php
    session_start();
   
    $std = $_SESSION;
?>
<!DOCTYPE html>
<html>
  <head>
    <head>
 <title>EDIT PROFILE | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">EDIT PROFILE</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
  </head>
  <body>
    
    
    <form action="stdUpdateData.php" method="POST">
      <div style="margin-left: 1em;">
          <div class="form">    
          <div class="row">
            <div class="col-xs-4">
            <label>Username</label>
            <input type="text" class="form-control" name="stdName" value="<?=$std['stdName']?>" readonly>
          </div>
          </div>
          <br />
          <div class="row">
            <div class="col-xs-4">
              <label>Student Matric</label>
              <input type="text" class="form-control" name="stdMatric" value="<?=$std['stdMatric']?>" >
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-4">
              <label>Student Faculty: </label>
            
              <select name="stdFaculty" id="faculty">
              <option value="fkom">FKOM</option>
              <option value="fkasa">FKASA</option>
              <option value="ftek">FTEK</option>
              <option value="fim">FIM</option>
              <option value="fist">FIST</option>
        </select>
             
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-xs-4">
              <label>Student Phone</label>
              <input type="text" class="form-control" name="stdPhone" value="<?=$std['stdPhone']?>" >
            </div>
          </div>
          
          </div>
          <br />
          <div class="btn-group">
          <button type="submit" class="btn btn-primary">Update Profile</button>
        </div>
        <button type="button" class="btn btn-danger" onclick="location.href='stdProfile.php'">Cancel</button>
         
        </div>
    </div>
  </form>




    
  </body>
</html>
