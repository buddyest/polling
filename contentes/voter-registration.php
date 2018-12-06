<?php

include('../config/database.inc.php');
$name = $_POST['name'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];
$age = $_POST['age'];
$state = $_POST['state'];
$constituency = $_POST['constituency'];
$gender = $_POST['gender'];

$sql="insert into voters(vname,vage,vphone,state,constituency,gender,pass) values('$name','$age','$phone','$state','$constituency','$gender','$pass')";
$que=mysqli_query($con,$sql);
if($que !== false){
	$b='success';
	header("Location:../register.php?success='$b'");
	
}
else{
	$b='error';
	header("Location:../register.php?success='$b'");
	
}


?>