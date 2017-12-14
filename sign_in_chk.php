<?php
session_start();
$login_input_name = $_POST['email'];
$login_input_password = $_POST['password'];

//connection start with database
$con = mysqli_connect('localhost','id3968255_member_quzer','7485116');
mysqli_select_db($con , 'id3968255_quzer');

//Query : for check username and passward in database
$q = "select * from user where email='$login_input_name' AND password='$login_input_password'";
$result = mysqli_query($con , $q);
$row = mysqli_num_rows($result);
if ($row==0) {
  echo "<script>alert('Incorrect username or password !');
  window.location.href='sign_in_up.html';</script>";
}
else {
	 $_SESSION['email']=$login_input_name;
	 header("location:user_home_pg.php");
}
?>