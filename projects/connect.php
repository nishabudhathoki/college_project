<?php

$name=$_POST['fname'];
$age =$_POST['fage'];
$gender=$_POST['fgen'];
$address=$_POST['fadd'];
$phone=$_POST['phone'];
$password=$_POST['fpsw'];

/*if(!empty($name)||  !empty($age)||  !empty($address)|| !empty($gender)|| !empty($phone) !empty($password))

	*/
	//creation connection//
	$con=new mysqli("localhost","root","","register");
	if($con->connect_error)
	{ 
		die('connection failed:'.$con->connect_error);
	}
	else{
	
	$stmt=$con->prepare("insert into singin( Name,Age,Gender,Address,phonenumber,password) values(?,?,?,?,?,?)");
	$stmt->bind_param("sissis",$name,$age,$gender, $address,$phone, $password);
	$stmt->execute();
	echo "registration sucessful...";
	$stmt->close();
	$con->close();

}
?>
