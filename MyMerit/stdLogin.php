<!DOCTYPE html>

<html>
	<head>
		<title>STUDENT LOGIN | MyMerit</title>
		<?php include 'navbar.html';?>
		<div class="container">
		  <div style="background:transparent !important; padding-top:5px !important" class="jumbotron jumbotron-fluid">
			<h2 style="margin-bottom:-40px !important">STUDENT LOGIN</h2>
		 </div>
		 <hr style="border: 2px solid #4682BF;">
	</head>

	<body>
		<!--START MODULE-->
      </div> 
	  <div class="col-lg-4 col-lg-offset-4">
    <form action="loginSession.php" method="POST">  
      <div class="form-group">
        <div class="input-group col-xs-15">
          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input type="text" class="form-control" name="stdName" placeholder="Username" autofocus required /> <!-- need to fix this --> 
        </div>
      </div>
      <div class="form-group">
        <div class="input-group col-xs-15">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" name="stdPwd" placeholder="Password" autofocus required /> <!-- need to fix this --> 
        </div>
      </div>
      <div class="btn-group">
        <button type="submit" name="stdData" class="btn btn-primary">Login</button>
      </div>
      <p>No account?<a href="stdRegister.php">Register</a> Here</p>
	</body>
	
</html>
	
