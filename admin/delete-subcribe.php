<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM `subcribe` WHERE id=$id";
$run=mysqli_query($conect,$query);
if (!$run) {
	echo "Data Not deleted";
}
else{
	header("Location:view-subcribe.php?msg=1");
}

?>