<?php
include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM `user-login` WHERE id=$id";
$run=mysqli_query($conect,$query);
if (!$run) {
	echo "Data Not deleted";
}
else{
	header("Location:view-signin.php?msg=1");
}

?>