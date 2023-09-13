<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM `company-login` WHERE id=$id";
$run=mysqli_query($conect,$query);
if (!$run) {
	echo "Data Not deleted";
}
else{
	header("Location:view-company-login.php?msg=1");
}

?>