<?php
session_start();
	
  $log_username = "";
  $log_password = "";
  $user_ok = false;

if(isset($_SESSION["userid"]) && isset($_SESSION["username"]) && isset($_SESSION["password"])) {
	$log_username = preg_replace('#[^a-z0-9]#i', '', $_SESSION['username']);
	$log_password = preg_replace('#[^a-z0-9]#i', '', $_SESSION['password']);
	$user_ok = true;
	
	
} else if(isset($_COOKIE["user"]) && isset($_COOKIE["password"])){
    $_SESSION['username'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['user']);
    $_SESSION['password'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['password']);
	$log_username = $_SESSION['username'];
	$log_password = $_SESSION['password'];
	$user_ok = true;
	
	
}
?>

<?php

$comment = htmlentities($_POST['commentContent']);


if(empty($comment))
{
	die('Enter Comment');
}

$host='localhost';

$title = $_GET['post_title'];
//echo "{$title}";

$connect=mysqli_connect($host,'root','','blog');

$sql = mysqli_query($connect,"INSERT INTO comments (user, comment_content,post_name) VALUES('$log_username','$comment','$title')");


header("refresh:0.2 ; url=view_post.php?title=$title");
?>