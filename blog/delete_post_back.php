
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

$topic = $_GET['topic'];

$username=$log_username;

$host='localhost';
$connect=mysqli_connect($host,'root','','blog');

$sql = "SELECT author FROM posts WHERE title='$topic'"; 

$user_query = mysqli_query($connect, $sql);

$numrows = mysqli_num_rows($user_query);
if($numrows < 1){
	echo "Post does not exists, press back";
    exit();	
}

while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$author = $row["author"];
}


$sql = mysqli_query($connect,"SELECT user_level FROM user_details WHERE username='$username'");

if($sql){
	$row=mysqli_fetch_array($sql);
		if($row['user_level']==1 || $author==$log_username)
		{
				$host='localhost';
				$connect=mysqli_connect($host,'root','','blog');
				$sql = mysqli_query($connect,"DELETE FROM posts WHERE title='$topic'");
				header("refresh:0.5 ; url=home.php");
		}
		else{
			echo "<center><h2>You Cannot Delete This Post!!</h2></center>";
			header("refresh:0.2 ; url=home.php");	
			} 
	}

?>


?>