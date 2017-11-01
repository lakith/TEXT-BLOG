<?php


$username = $_GET['username'];


$host='localhost';
$connect=mysqli_connect($host,'root','','blog');



$sql = "DELETE FROM user_details WHERE username='$username'"; 

$user_query = mysqli_query($connect, $sql);

header("refresh:0.2 ; url=delete_users.php");
	
?>