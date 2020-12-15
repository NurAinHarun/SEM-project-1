<?php
require('dbconfig.php');
    
    session_start();

    // Store the $_SESSION in a more handy variable
    $coID = $_SESSION['coID'];

    $coName = $_POST['coName'];
    $coEmail = $_POST['coEmail'];
    $coPhone= $_POST['coPhone'];
    $coType = $_POST['coType'];
    
    
	$sql = "UPDATE coordinator SET coName = '$coName', coEmail = '$coEmail', coPhone = '$coPhone', coType = '$coType' WHERE coID = '$coID'" ;

	if (mysqli_query($mysqli,$sql)) {
        //header("refresh:0; url=stdUpdateForm.php");
		//echo '<script language="javascript">';
       $_SESSION['coName'] = $coName;
       $_SESSION['coEmail'] = $coEmail;
       $_SESSION['coPhone'] = $coPhone;
       $_SESSION['coType'] = $coType;
       

       echo "<script>alert('Data successfully updated!');
            window.location = 'coordProfile.php?id=".$_SESSION['coID']."';</script>";
        //echo 'alert("Data update successfully!")';
        //echo '</script>';
	} 
	else {
    	header("refresh:0; url=coupdateProfileForm.php");
		echo '<script language="javascript">';
        echo 'alert("Data update fail!")';
        echo '</script>';
	}
mysqli_close($mysqli);
?>