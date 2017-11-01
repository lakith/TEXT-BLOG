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


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	
	#tblstyle
	{
		width: 100%;
		margin-top:5%;
	}
	
	#contentdiv
	{
		margin-top: 1.7%;
		border-radius: 4px;
	}
	#downHeader
	{
		margin-left:69%; 
		margin-top: 0.5%;
	}
	
	#footer2{
	height:40px;
	background-color:#333;
	color:#999;
	text-align:center;
	margin-top: 29%;
	margin-bottom:-1%;
	
	}
	#footertxt
	{
		padding-top: 0.8%;
		font-size: 15px;
	}
	</style>
</head>
<script>
function checklog(){

	var user ="<?php echo $log_username?>";
	var check1=<?php echo $user_ok?>;

	if(check1 == true){	
		document.getElementById('compactHeaddiv').style.display="none";
		document.getElementById('hideAlready').style.display="block";
		document.getElementById('hidehide').style.display="block";
		document.getElementById("hideAlready").innerHTML="You are logged in as "+user;
		//document.getElementById('downHeader').style.marginRight=5%;
		}

    }
</script>


<body onload="checklog()">
<body onload="checklog()">
<header><div id="headdiv">ZERO ZERO LIVE BLOGGER</div><a id="hidehide" href="logout.php">log out</a><div id="hideAlready"></div><div id="compactHeaddiv">
<div id="headdiv2"><a  href = "log2.php"> Sign In </a> </div><h5 id="headhead">|</h5><div id="headdiv3"><a href="signin.php"> Sign Up</a> </div></div><br>

</header>



<div id="downHeader"> <div id="downHeaderDiv1"><i class="fa fa-bars"></i> &nbsp; Post List</div><div id="downHeaderDiv2"><a href="view_blog.php"><i class="fa-home"></i> &nbsp; Back to Blog </a></div></div><br>

<div id="contentdiv">
	<table id="tblstyle">
		<tr>
			<th><i class="glyphicon glyphicon-user"></i> First name</th>
			<th><i class="fa-calendar"></i> Username</th>
			<th><i class="fa-wordpress"></i> Email</th>
			<th><i class="fa-wordpress"></i> Action</th></th>
		</tr>

<?php
$host='localhost';

$conn=mysqli_connect($host,'root','','blog');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, first_name,email,user_level FROM user_details";
	
$result = $conn->query($sql);

		$count = 0;
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
		
		if($row["user_level"]==1)
		{
			continue;
		}
		
		$val = $row["username"];
		//echo "$val";
		echo "<tr><td>". $row["first_name"]."</td><td>". $row["username"]. "</td><td>".$row["email"]."</td><td><a href='del_user_back.php?username=".$val."'>delete</a></td>";
    }

} else {
    echo "0 results";
}

$conn->close();
?>
	</table>
	</div>
<footer id="footer2"><h2 id="footertxt">Copyright © 2017 ZERO ZERO LIVE BLOGGER. All Rights Reserved.</h2></footer>
</body>
</html>