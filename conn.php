<?php 

$con = mysqli_connect("localhost","root","test");

mysqli_select_db($con,"crudnew");

if($con){

	echo "connected successfully";
}
else {
	echo "not connected";
}

?>