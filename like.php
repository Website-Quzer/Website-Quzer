<?php
session_start();
if (!isset($_SESSION['email'])) {
	header("location:sign_in_up.html");
}
$s = $_GET['qid'];
$ans  = $_GET['aid'];
$type = $_GET['type'];
$con = mysqli_connect('localhost','******','******');
mysqli_select_db($con , 'id3968255_quzer');
if ($type==0){
	view($s,$con);
}
elseif ($type==1) {
	if ($ans==-1){
		like($s,$con);
	}
	else{
		like_ans($ans,$con,$s);
	}
}
else{if ($ans==-1){
	dislike($s,$con);
}
else{
	dislike_ans($ans,$con,$s);
}
}


function view($qs,$con){
	$v = "UPDATE posts SET views = views+1 WHERE Id = $qs";
	$v_query = mysqli_query($con ,$v);
	header('location:answers.php?qid='.$qs);
}
function like($qs,$con){
	$v = "UPDATE posts SET likes = likes+1 WHERE Id = $qs";
	$v_query = mysqli_query($con ,$v);
	header('location:answers.php?qid='.$qs); 
}
function dislike($qs,$con){
	$v = "UPDATE posts SET dislikes = dislikes+1 WHERE Id = $qs";
	$v_query = mysqli_query($con ,$v);
	header('location:answers.php?qid='.$qs); 
}
function like_ans($a,$con,$q){
	$v = "UPDATE posts SET likes = likes+1 WHERE Id = $a";
	$v_query = mysqli_query($con ,$v);
	header('location:answers.php?qid='.$q); 
}
function dislike_ans($a,$con,$q){
	$v = "UPDATE posts SET dislikes = dislikes+1 WHERE Id = $a";
	$v_query = mysqli_query($con ,$v);
	header('location:answers.php?qid='.$q); 
}
?>