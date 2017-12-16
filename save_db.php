<?php
session_start();
if (!isset($_SESSION['email'])) {
	header("location:sign_in_up.html");
}
$question = $_POST['user_query'];
$user_name = $_SESSION['email'];

$con = mysqli_connect('localhost','******','******');
mysqli_select_db($con , 'id3968255_quzer');
$q_all = "INSERT INTO posts(text,user,date) VALUES('$question','$user_name',now());";
mysqli_query($con ,$q_all);
mysqli_close($con);
header('location:related_ques_list.php');
?>