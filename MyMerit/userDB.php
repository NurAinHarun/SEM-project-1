<?php
include('dbconfig.php');


//student register
if (isset($_POST['regData'])){

$stdName = $_POST['stdName'];
$stdMatric = $_POST['stdMatric'];
$stdFaculty= $_POST['stdFaculty'];
$stdPhone = $_POST['stdPhone'];
$stdPwd = $_POST['stdPwd'];
$stdPhoto = $_POST['stdPhoto'];


//mysqli = config
//sql = query

// Attempt insert query execution
$sql = "INSERT INTO student (stdName, stdMatric, stdFaculty,stdPhone, stdPwd, stdPhoto) VALUES ('$stdName', '$stdMatric', '$stdFaculty', '$stdPhone', 
'$stdPwd','$stdPhoto')";

if(mysqli_query($mysqli, $sql)){
    echo "<script>alert('Profile added and waiting for admin approval');
            window.location = 'stdLogin.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysqli);

}


// LOGIN student
if (isset($_POST['stdData'])) {
  $stdName = $_POST['stdName'];
  $stdPwd = $_POST['stdPwd'];

  
    $sql = "SELECT * FROM student WHERE stdName='$stdName' AND stdPwd='$stdPwd'";
    $results = mysqli_query($mysqli, $sql);
    $record = mysqli_num_rows($results);
    if ($record == 1) {
      session_start();
      $_SESSION["stdName"] = $_POST['stdName'];
      echo "<script>alert('Login Succesful! Welcome to MyMerit Admin');
            window.location = 'stdMenu.php?id=".$_SESSION['stdName']."';</script>"; 
    }else {
      echo "<script type='text/javascript'>alert('Wrong email and password! Please try again!!!');
            window.location = 'stdLogin.php';</script>";
    }
  }






//admin register
if (isset($_POST['admReg'])){

$admName = $_POST['admName'];
$admPwd = $_POST['admPwd'];

//mysqli = config
//sql = query

// Attempt insert query execution
$sql = "INSERT INTO admin (adminName, adminPwd) VALUES ('$admName', '$admPwd')";

if(mysqli_query($mysqli, $sql)){
    echo "<script>alert('Profile added successfully!');
            window.location = 'adminLogin.php';</script>"; 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysqli);

}



// LOGIN admin
if (isset($_POST['admCred'])) {
  $adminName = $_POST['adminName'];
  $adminPwd = $_POST['adminPwd'];

  
  	$sql = "SELECT * FROM admin WHERE adminName='$adminName' AND adminPwd='$adminPwd'";
  	$results = mysqli_query($mysqli, $sql);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['adminName'] = $adminName;
  	  $_SESSION['success'] = "You are now logged in";
  	  echo "<script>alert('Login Succesful! Welcome to MyMerit Admin');
            window.location = 'adminMenu.php';</script>"; 
  	}else {
  		echo "<script type='text/javascript'>alert('Wrong email and password! Please try again!!!');
            window.location = 'adminLogin.php';</script>";
  	}
  }

//coordinator register

if (isset($_POST['coData'])){

$coName = $_POST['coName'];
$coEmail = $_POST['coEmail'];
$coPhoto= $_POST['coPhoto'];
$coType = $_POST['coType'];
$coPhone = $_POST['coPhone'];
$coPwd = $_POST['coPwd'];

//mysqli = config
//sql = query

// Attempt insert query execution
$sql = "INSERT INTO coordinator (coName, coEmail, coPhoto, coType, coPhone, coPwd ) VALUES ('$coName', '$coEmail', '$coPhoto', '$coType', '$coPhone', '$coPwd')";

if(mysqli_query($mysqli, $sql)){
    echo "<script>alert('Profile added successfully!');
            window.location = 'coordLogin.php';</script>"; 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysqli);

}
?>




