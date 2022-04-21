<?php
$conn = mysqli_connect("localhost", "root", "", "reactjscrud");
$conn2 = mysqli_connect("localhost", "root", "", "db_arifsiddikm");

if(!$conn){
	echo "Failed " . mysqli_error();
}

?>