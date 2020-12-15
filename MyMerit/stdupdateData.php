<?php
require('dbconfig.php');
    
    session_start();

    // Store the $_SESSION in a more handy variable
    $stdID = $_SESSION['id'];

    $stdName = $_POST['stdName'];
    $stdMatric = $_POST['stdMatric'];
    $stdFaculty= $_POST['stdFaculty'];
    $stdPhone = $_POST['stdPhone'];
    
    
	$sql = "UPDATE student SET stdName = '$stdName', stdMatric = '$stdMatric', stdFaculty = '$stdFaculty', stdPhone = '$stdPhone' WHERE id = '$stdID'" ;

	if (mysqli_query($mysqli,$sql)) {
        //header("refresh:0; url=stdUpdateForm.php");
		//echo '<script language="javascript">';
       $_SESSION['stdName'] = $stdName;
       $_SESSION['stdMatric'] = $stdMatric;
       $_SESSION['stdFaculty'] = $stdFaculty;
       $_SESSION['stdPhone'] = $stdPhone;
       

       echo "<script>alert('Data successfully updated!');
            window.location = 'stdProfile.php?id=".$_SESSION['id']."';</script>";
        //echo 'alert("Data update successfully!")';
        //echo '</script>';
	} 
	else {
    	header("refresh:0; url=stdUpdateForm.php");
		echo '<script language="javascript">';
        echo 'alert("Data update fail!")';
        echo '</script>';
	}
mysqli_close($mysqli);
?>