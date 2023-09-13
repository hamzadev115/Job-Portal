<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM `contactus` WHERE id=$id";
$run=mysqli_query($conect,$query);
if (!$run) {
	echo "Data Not deleted";
}
else{
	header("Location:view-contactus.php?msg=1");
}

?>