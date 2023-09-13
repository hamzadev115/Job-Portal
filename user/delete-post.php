<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM `postjob` WHERE id=$id";
$run=mysqli_query($conect,$query);
if (!$run) {
	echo "Data Not deleted";
}
else{
	header("Location:employe-profile.php?msg=1");
}

?>