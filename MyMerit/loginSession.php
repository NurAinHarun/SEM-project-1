<?php
include('dbconfig.php');


// LOGIN student
if (isset($_POST['stdData'])) {
  $stdName = $_POST['stdName'];
  $stdPwd = $_POST['stdPwd'];

  
    $sql = "SELECT * from student where stdName ='$stdName' and stdPwd = '$stdPwd'";
    
$query = $mysqli->query($sql);



        if(mysqli_num_rows($query) >= 1){
            $data = mysqli_fetch_assoc($query);

			
			if ($data["status"]=='APPROVED'){
			
				session_start();
				$_SESSION = $data;

				echo "<script>alert('Login Succesful! Welcome to MyMerit');
				window.location = 'stdMenu.php?id=".$_SESSION['id']."';</script>";
			}
			else   
			{
				echo "<script>alert('Account pending approval from admin.');
				window.location = 'stdLogin.php';</script>";
			}
    
          
          
        }else{
            
          echo "<script type='text/javascript'>alert('Wrong username or password!Please try again!');
            window.location = 'stdLogin.php';</script>";
        }

        $mysqli->close();
    }



    // LOGIN coordinator
if (isset($_POST['coData'])) {
  $coName = $_POST['coName'];
  $coPwd = $_POST['coPwd'];

  
    $sql = "SELECT * from coordinator where coName ='$coName' and coPwd = '$coPwd'";
    
$query = $mysqli->query($sql);

        if(mysqli_num_rows($query) >= 1){
            $data = mysqli_fetch_assoc($query);
            	
            	session_start();
				$_SESSION = $data;
		
				echo "<script>alert('Login Succesful! Welcome to MyMerit');
				window.location = 'coordMenu.php?id=".$_SESSION['coID']."';</script>";
        }else{
            
          echo "<script type='text/javascript'>alert('Wrong username or password!Please try again!');
            window.location = 'coordLogin.php';</script>";
        }

        $mysqli->close();
    }


?>