<?php

$first_name = htmlentities($_POST['first_name']);
$last_name = htmlentities($_POST['last_name']);
$email = htmlentities($_POST['email']);
$tel_no = htmlentities($_POST['tel_no']);
$username=htmlentities($_POST['username']);
$password = htmlentities($_POST['password']);

if(empty($username) || empty($password) || empty($email) || empty($first_name))
{
	die('Enter username and password');
}

$host='localhost';

$connect=mysqli_connect($host,'root','','blog');

$sql = mysqli_query($connect,"INSERT INTO user_details (first_name, last_name, email,tel_no,username,password) VALUES('$first_name','$last_name','$email','$tel_no','$username','$password')");

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
setcookie("user",$username,time()+(60*60*60*2),"/");
setcookie("password",$password,time()+(60*60*60*2),"/");

header("refresh:0.2 ; url=home.php");

?>