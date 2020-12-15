<?php
include('dbconfig.php');


//student report
if (isset($_POST['crRP'])){

$reportTitle = $_POST['reportTitle'];
$reportDesc = $_POST['reportDesc'];
$reportDate= $_POST['reportDate'];
$errors = array(); 

//mysqli = config
//sql = query

// Attempt insert query execution
$sql = "INSERT INTO report (reportTitle, reportDesc, reportDate) VALUES ('$reportTitle', '$reportDesc', '$reportDate')";

if(mysqli_query($mysqli, $sql)){
    echo "<script>alert('Your report was successfully delivered to the Admin');
            window.location = 'stdMenu.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysqli);

}

?>




