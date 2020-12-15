<!DOCTYPE html>

<html>
	<head>
		<title>STUDENT REGISTER | MyMerit</title>
		<?php include 'navbar.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">STUDENT REGISTER</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
	</head>

	<body>
		<!--START MODULE-->
    <div class="col-lg-4 col-lg-offset-4">
      <div class="page-header">  
      </div>
      <form action="userDB.php" method="POST">
        <div class="form-group">
          <div class="input-group col-xs-15">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="stdName" placeholder="Username" autofocus required>
          </div>
        </div>
        <div class="form-group"> 
          <div class="input-group col-xs-15">
            <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
            <input type="text" class="form-control" name="stdMatric" placeholder="Matric No" required>
          </div>
        </div>

          <div class="form-group"> 
          <div class="input-group col-xs-15">
      <label for="pwd">Photo:</label>
      <input type="file" class="form-control"  name="stdPhoto"></input>
          </div>
        </div>

          <div class="form-group"> 
          <div class="input-group col-xs-15">
            <label for="faculty">Faculty:&nbsp&nbsp&nbsp</label>
              <select name="stdFaculty" id="faculty">
              <option value="fkom">FKOM</option>
              <option value="fkasa">FKASA</option>
              <option value="ftek">FTEK</option>
              <option value="fim">FIM</option>
              <option value="fist">FIST</option>
        </select>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group col-xs-15">
             <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="stdPhone" placeholder="Phone Number" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group col-xs-15">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" name="stdPwd" placeholder="Password" required>
          </div>
        </div>
        <div class="btn-group">
          <button type="submit" name="regData" class="btn btn-primary">Add Profile</button>
        </div>
      </form>
    </div>
	</body>
	
</html>
	