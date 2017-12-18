<?php
session_start();
if (!isset($_SESSION['email'])) {
	header("location:sign_in_up.html");
}
$answer = $_POST['name'];
$user_name = $_SESSION['email'];
$q_id = $_POST['ques_id'];

$con = mysqli_connect('localhost','******','******');
mysqli_select_db($con , 'id3968255_quzer');
$q_all = "INSERT INTO posts(text,user,date,q_id_for_ans) VALUES('$answer','$user_name',now(),$q_id);";
mysqli_query($con ,$q_all);
mysqli_close($con);
header('location:answers.php?qid='.$q_id);
?>