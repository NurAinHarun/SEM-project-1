<?php
require('dbconfig.php');
    
    session_start();

    
    $stdID = $_GET['id'];

   
    
    
	$sql = "UPDATE student SET status = 'APPROVED' WHERE id = '$stdID'" ;

	if (mysqli_query($mysqli,$sql)) {
       
      
       

       echo "<script>alert('User Approved!');
            window.location = 'stdApprove.php';</script>";
        
	} 
	else {
    	header("refresh:0; url=stdApprove.php");
		echo '<script language="javascript">';
        echo 'alert("Got Problem!")';
        echo '</script>';
	}
mysqli_close($mysqli);
?>