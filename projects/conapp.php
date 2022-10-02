<?php

$Pname=$_POST['pname'];
$Date =$_POST['date'];
$Phnum=$_POST['phnum'];
$Department=$_POST['department'];
$Gender=$_POST['fgen'];
$Time=$_POST['time'];


	//creation connection//
	$con=new mysqli("localhost","root","","register");
	if($con->connect_error)
	{ 
		die('connection failed:'.$con->connect_error);
	}
	else{
	
	$stmt=$con->prepare("insert into appointment( Patientname,Date,Phnumber,Department,Gender,Time) values(?,?,?,?,?,?)");
	$stmt->bind_param("siissi",$Pname,$Date,$Phnum, $Department,$Gender, $Time);
	$stmt->execute();
	echo "registration sucessful...";
	$stmt->close();
	$con->close();

}
?>
