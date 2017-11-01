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
echo "I enter"; 

$currentpassword = $_POST['currentpassword'];
$newpassword = $_POST['newpassword'];
$connewpassword = $_POST['confirmpassword']; 
	
if(empty($currentpassword) || empty($newpassword) ||empty($connewpassword))
{
	die('Enter username and password');
}

/*echo $currentpassword;
echo $log_password;

if($log_password == $currentpassword)
{
	die('Password does not match');
}*/

$host='localhost';

$connect=mysqli_connect($host,'root','','blog');

$sql = mysqli_query($connect,"UPDATE user_details SET password = '$newpassword' WHERE username ='$log_username'");

$_SESSION = array();

if(isset($_COOKIE["user"]) && isset($_COOKIE["password"])) {
    setcookie("user", '', -time()+(60*60*60*2),"/");
	setcookie("password", '', -time()+(60*60*60*2),"/");
}

session_destroy();

if(isset($_SESSION['username'])){

	echo"<h1>Log Out Error!!</h1>";
} else {
	header("location:log2.php");
	exit();
} 

header("refresh:0.2 ; url=log2.php");
?>

