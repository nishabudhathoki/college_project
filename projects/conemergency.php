<?php

$Dname=$_POST['dname'];
$Email =$_POST['email'];
$Phnum=$_POST['phnum'];
$Pname=$_POST['pname'];
$Address=$_POST['address'];
$City=$_POST['city'];
$Provience=$_POST['provience'];
$Blood=$_POST['blood'];
/*
$Street =$_POST['street'];
$Zipcode=$_POST['Zipcode'];
$Blood=$_POST['blood'];
$Medication1=$_POST['medication1'];
$Medication2=$_POST['medication2'];
$Medication3=$_POST['medication3'];
$Allery1 =$_POST['allergy1'];
$Allery2 =$_POST['allergy2'];
$Allery3 =$_POST['allergy3'];
$Surgery1=$_POST['surgery1'];
$Surgery2=$_POST['surgery2']; 
$surgery3=$_POST['surgery3'];
*/


	//creation connection//
	$con=new mysqli("localhost","root","","register");
	if($con->connect_error)
	{ 
		die('connection failed:'.$con->connect_error);
	}
	else{
	
	$stmt=$con->prepare("insert into emergency( Doctorname,Email,Phnumber,patientname,address,city,provience,blood) values(?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssisssss",$Dname,$Email,$Phnum, $Pname,$Address, $City,$Provience,$Blood);
	$stmt->execute();
	echo "registration sucessful...";
	$stmt->close();
	$con->close();

}
?>
