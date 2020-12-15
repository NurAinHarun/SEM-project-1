<?php
    session_start();
   
    $std = $_SESSION;
?>
<!DOCTYPE html>
<html>
  <head>
 <title>STUDENT PROFILE | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">STUDENT PROFILE</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
  </head>
  <body>

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
              <input type="text" class="form-control" name="stdMatric" value="<?=$std['stdMatric']?>" readonly>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-4">
              <label>Student Faculty</label>
               <input type="text" class="form-control" name="stdFaculty" value="<?=$std['stdFaculty']?>" readonly>
             
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-xs-4">
              <label>Student Phone</label>
              <input type="text" class="form-control" name="stdPhone" value="<?=$std['stdPhone']?>" readonly>
            </div>
          </div>
          <br />
          <button type="button" class="btn btn-danger" onclick="location.href='stdUpdateForm.php?id=<?=$_SESSION['id']?>'">Edit</button>
          <div class="btn-group">
          <button type="submit" class="btn btn-primary" onclick="window.location.href='stdMenu.php';">Back</button>
        </div>
         
        </div>
    </div>




    
  </body>
</html>
