<!DOCTYPE html>
<html>
  <head>
   <title>REGISTRATION | MyMerit</title>
		<?php include 'navbarlogout.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">COORDINATOR REGISTRATION</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
  </head>
  
  <body>
    <div class="col-lg-4 col-lg-offset-4">
      <div class="page-header">  
      </div>
      <form action="userDB.php" method="POST">
        <div class="form-group">
          <div class="input-group col-xs-15">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="coName" placeholder="Username" autofocus required>
          </div>
        </div>
        <div class="form-group"> 
          <div class="input-group col-xs-15">
            <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
            <input type="email" class="form-control" name="coEmail" placeholder="Email:" required>
          </div>
        </div>

          <div class="form-group"> 
          <div class="input-group col-xs-15">
      <label for="pwd">Photo:</label>
      <input type="file" class="form-control"  name="coPhoto"></input>
          </div>
        </div>

          <div class="form-group"> 
          <div class="input-group col-xs-15">
            <label for="type">Type:&nbsp&nbsp&nbsp</label>
              <select name="coType" id="faculty">
              <option value="Inside Campus">Inside Campus</option>
              <option value="Outside Campus">Outside Campus</option>
        </select>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group col-xs-15">
             <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="coPhone" placeholder="Phone Number" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group col-xs-15">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" name="coPwd" placeholder="Password" required>
          </div>
        </div>
        <div class="btn-group">
          <button type="submit" name="coData" class="btn btn-primary">Add Profile</button>
        </div>
      </form>
    </div>
  </body>
</html>