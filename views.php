<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location:sign_in_up.html");
}
$qs = $_GET['qid'];
$con = mysqli_connect('localhost','******','******');
mysqli_select_db($con , 'id3968255_quzer');
//view
$v = "UPDATE posts SET views = views+1 WHERE Id = $qs";
$v_query = mysqli_query($con ,$v);
header('location:answers.php?qid='.$qs) ?>