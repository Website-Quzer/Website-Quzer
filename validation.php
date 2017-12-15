<?php
$email = $_POST['email'];
$pass = $_POST['password'];
$confirm_pass = $_POST['confirm_password'];
$name = $_POST['name'];

$email = filter_var($email,FILTER_SANITIZE_EMAIL);
$email = filter_var($email,FILTER_VALIDATE_EMAIL);

if(strlen($pass)<6){
	$pass = $confirm_pass = null;
}
if($pass){
	if($pass != $confirm_pass){
		$confirm_pass = null;
	}
}

if ($email && $pass && $confirm_pass && $name) {
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

}
else {

	$message = "";
	if (!$name) {
		$message = $message . "enter name";
	}
	if(!$pass){
		$message = $message . "length of password>=6";
	}
	if(!$confirm_pass){
		$message = $message . "confirm password and password are different";
	}
	if(!$email){
		$message = $message . "enter valid email ";
	}
	// echo "<script> alert('$message'); window.location.href='sign_in_up.html';
	// 	window.location.href='sign_in_up.html';
	// </script>";

	$alertMess = "<script>window.location.href='sign_in_up.html';alert(".$message.");</script>";

	// echo "<script>window.location.href='sign_in_up.html';</script>";
	// echo "<script>alert('wrong details')</script>";
	echo "<script>alert('$message');
			
	window.location.href='sign_in_up.html';
	</script>";

	// document.getElementById('name_id_su_p')innerHTML= 'Enter Name';
	// document.getElementById('user_id_p')innerHTML= 'Enter valid Email';
	// document.getElementById('pass_p')innerHTML= 'password length >=6';
	// document.getElementById('c_pass_p')innerHTML= 'confirm password and password should match';
}
?>
