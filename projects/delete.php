<?php

	//creation connection//
	$con=new mysqli("localhost","root","","register");
	if($con->connect_error)
	{ 
		die('connection failed:'.$con->connect_error);

}
error_reporting(0);
$rollno=$_GET['fn'];
$query="DELETE from singin where Name='$rollno'";
$data=mysqli_query($con,$query);

?>
