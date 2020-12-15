<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from programtable where id=$id");
?>




<script type = "text/javascript">
window.location="viewprogram.php";

</script>