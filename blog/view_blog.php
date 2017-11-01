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
	
		#downHeader
		{
			margin-top: 1%;
			margin-left: 69%;
		}
		.detailsheadstyle,#detailsparastyle
		{
			display: inline-block;
		}
		.detailsstyle
		{
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		font-family:fontawesome;
		color:#060;
		width:40%;
		border-radius:3px;
		}
		#detailsparastyle
		{
			margin-left: 20%;
		}
		.detailsheadstyle
		{
			margin-left: -7%;
		}
		#imgstyle
		{
			margin-top: 8%;
			margin-bottom: 4%;
		}
		#changepass
		{
			margin-top: 1%;
			margin-bottom: 5%;
			margin-left: 30%;
			box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
			font-family:fontawesome;
			color:#060;
			width:40%;
			border-radius:3px;
			height: 400px;
			display: none;
		}
		
	input[type=password]{
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
	margin-left:4%; 
	margin-top: 2%;
	margin-bottom: 2%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
	background-color:#FFFFE0;
		
	}
		form
		{
			margin-left: 10%;
			margin-bottom: 10%;
			padding-top: 6%;
		}
		
		label
		{
			font-size: 20px
		}
		
			#footer2{
	height:40px;
	background-color:#333;
	color:#999;
	text-align:center;
	margin-top: 6%;
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
	
<?php

$username=$log_username;

$host='localhost';
$connect=mysqli_connect($host,'root','','blog');

$sql = "SELECT first_name, last_name, email,tel_no,username FROM user_details WHERE username='$username' "; 

$user_query = mysqli_query($connect, $sql);

$numrows = mysqli_num_rows($user_query);
if($numrows < 1){
	echo "That user does not exist or is not yet activated, press back";
    exit();	
}

while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$firstname = $row["first_name"];
	$lastname = $row["last_name"];
	$tel_no = $row["tel_no"];
	$email=$row["email"];
	$user = $row["username"];
}

?>
	
	
<header><div id="headdiv">ZERO ZERO LIVE BLOGGER</div><a id="hidehide" href="logout.php">log out</a><div id="hideAlready"></div><div id="compactHeaddiv">
<div id="headdiv2"><a  href = "log2.php"> Sign In </a> </div><h5 id="headhead">|</h5><div id="headdiv3"><a href="Sign_up.html"> Sign Up</a> </div></div><br>
	</header>
<div id="downHeader"> <div id="downHeaderDiv1"><a href="home.php"><i class="fa fa-bars"></i> &nbsp; Post List</a></div><div id="downHeaderDiv2"><i class="fa-home"></i> &nbsp; Back to Blog </div></div><br>
	
	<div>
	
		<center><img src="photoes/no-user-image.png" id="imgstyle"/></center>
		<center>
		<div class = "detailsstyle"><h4 class = "detailsheadstyle">First name </h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p id="detailsparastyle"><?php echo $firstname ?></p></div>
		<div class = "detailsstyle"><h4 class = "detailsheadstyle">Last name</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p id="detailsparastyle"><?php echo $lastname ?></p></div>
		<div class = "detailsstyle"><h4 class = "detailsheadstyle">&nbsp;&nbsp;&nbsp;&nbsp;Telephone number</h4><p id="detailsparastyle"><?php echo $tel_no ?></p></div>
		<div class = "detailsstyle"><h4 class = "detailsheadstyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p id="detailsparastyle"><?php echo $email ?></p></div>
		<div class = "detailsstyle"><h4 class = "detailsheadstyle">Username</h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p id="detailsparastyle"><?php echo $user ?></p></div>
		<div class = "detailsstyle"><h4 class = "detailsheadstyle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Change password </h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onClick="displaycall()">Change Password</button></div></center>
		
	</div>
	
	<script>
		
		var current = "<?php echo $log_password?>";
		
		
		function confirm(current2){

			if(current === current2)
			{
				document.getElementById("newnew").disabled=false;
				document.getElementById("newcon").disabled=false;

			}
		
		}
		
	</script>
	
	<script>
	
	function check()
	{
		
		var pass1 = document.getElementById("newnew").value;
		var pass2 = document.getElementById("newcon").value;
		
		//document.getElementById('display').innerHTML=pass1+" "+pass2;
		
		if(pass1 == "" && pass2 == "")
		{
			document.getElementById("btn").disabled = true;
			document.getElementById('display').innerHTML="im in2";
		}
		
		if(pass1 == pass2)
		{
			document.getElementById("btn").disabled = false;
			document.getElementById('display').innerHTML="im in3";
		}
		
		if(pass1 != pass2)
		{
			document.getElementById("btn").disabled = true;
			document.getElementById('display').innerHTML="im in3";
		}
		
	}
	
	</script>

	<script>
		function displaycall() {
    		var x = document.getElementById("changepass");
    		if (x.style.display === "none") {
        	x.style.display = "block";
    		} else {
        	x.style.display = "none";
    		}
}
</script>

	
	<div id="changepass">
		<form action="updatepass.php"  method="post">
			<label>Current Password</label><br><input type="password" name="currentpassword" id="getcurrent" onKeyUp="confirm(document.getElementById('getcurrent').value)" required/><br><br>
			<label >New Password</label><br><input id = "newnew" type="password" name="newpassword" disabled required/><br><br>
			<label >Confirm New Password</label><br><input id = "newcon" type="password" name="confirmpassword" disabled onKeyUp="check()" required/><br><br>
			<button type="submit" id="btn" onClick="check()" disabled/>Change password</button>
		</form>
	</div>
	
	<p id="display"></p>
	
<footer id="footer2"><h2 id="footertxt">Copyright © 2017 ZERO ZERO LIVE BLOGGER. All Rights Reserved.</h2></footer>
</body>
</html>