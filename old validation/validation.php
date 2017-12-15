<?php
$email = $_POST['email'];
$pass = $_POST['password'];

$con = mysqli_connect('localhost','******','******');
mysqli_select_db($con , 'id3968255_quzer');

$check = "select * from user where email='$email'";
$result=mysqli_query($con , $check);
$row=mysqli_num_rows($result);
if ($row==0) {
	$q = "INSERT INTO user( email , password, date) VALUES('$email','$pass',now());";
	mysqli_query($con ,$q);
	echo "<script>alert('Congrats.....Successfully Sign up. Please Sign in to continue !!!');
	window.location.href='sign_in_up.html';</script>";
}
else {
	echo "<script>alert('Email Id already exists , Please try with a different Email Id!');
	window.location.href='sign_in_up.html';</script>";
}
mysqli_close($con);

?>
