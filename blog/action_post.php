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

if($log_username == "")
{
	die("log in first");
}


$title = htmlentities($_POST['title']);
$content = htmlentities($_POST['content']);


$host='localhost';

$connect=mysqli_connect($host,'root','','blog');


$sql = mysqli_query($connect,"INSERT INTO posts (title,author,content) VALUES('$title','$log_username','$content')");

header("refresh:0.2 ; url=home.php");
?>
