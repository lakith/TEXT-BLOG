<?php
session_start();

if(isset($_SESSION["userid"]) && isset($_SESSION["username"]) && isset($_SESSION["password"])) {
	header("Location: home.php");
	
} else if(isset($_COOKIE["user"]) && isset($_COOKIE["password"])){
	header("Location: home.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css" >
	
	#formstyle
	{
		margin-top: 8%;
		margin-left: 15%;
		border: 2px solid black;
		position: relative;
		width: 70%;
		height: 960px;
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		border-radius:2px;
	}
	.lab
	{
		padding-bottom: 10%;
		font-family:fontawesome;
		font-size: 20px;
		color:#9ACD32;
		

	}
	
	input[type=text], select ,input[type=password]{
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
	margin-left:4%; 
	margin-top: 2%;
	margin-bottom: 2%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
	#btn 
	{
    width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
	margin-right: 16%;
	margin-bottom: 70px;
	float: right;
    border: none;
    border-radius: 4px;
    cursor: pointer;

	}

	#btn:hover 
	{
		
    background-color: #45a049;

	}
	
	#formform
	{
		margin-top: 5%;
		margin-left: 9%;
	}
	
	#headmiddle
	{
		text-align: center;
		color: brown;
	
	}
	
	hr 
	{ 
  	border: 0; 
  	height: 1px; 
    background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
    background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
	}
	
	#btpcreatepost
	{
		display: none;
	}
	#postlistdiv
	{
		display: none;
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
<header><div id="headdiv">ZERO ZERO LIVE BLOGGER</div><a id="hidehide" href="logout.php">log out</a><div id="hideAlready"></div><div id="compactHeaddiv">
<div id="headdiv2"><a  href = "log2.php"> Sign In </a> </div><h5 id="headhead">|</h5><div id="headdiv3"><a href="signin.php"> Sign Up</a> </div></div><br>


<div id="downHeader"> <div id="downHeaderDiv1"><a href="home.php"><i class="fa fa-bars"></i> &nbsp; Post List</a></div><div id="downHeaderDiv2"><i class="fa-home"></i> &nbsp; Back to Blog </div></div><br>


<button type="button" id="btpcreatepost"><a href="create_post.php"><i class="fa-facebook-square"></i> Create New Post <i class="fa-facebook-square"></i></a></button>

<div id = "postlistdiv">
	<span>Post List</span>
</div>


<script>
	
	function check()
	{
		
		var pass1 = document.getElementById("pass1").value;
		var pass2 = document.getElementById("pass2").value;
		
		document.getElementById('display').innerHTML=pass1+" "+pass2;
		
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
		
	}
	
	</script>

<div id="formstyle"><br>
<h2 id="headmiddle">Sign up</h2><hr>
<form id="formform" action="insert_uesr.php" method="post" >
	
	<label class="lab">First name</label><br><input type="text" name="first_name" placeholder="First name" required/><br>
	<label class="lab">Last name</label><br><input type="text" name="last_name" placeholder="Last name" required/><br>
	<label class="lab">E-mail</label><br><input type="text" name="email" placeholder="E-mail" required/><br>
	<label class="lab">Tel-No</label><br><input type="text" name="tel_no" placeholder="Telephone Number" required/><br>
	<label class="lab">Username</label><br><input type="text" name="username" placeholder="Username" required/><br>
	<label class="lab">Password</label><br><input type="password" id="pass1" placeholder="Password" required/><br>
	<label class="lab">Confirm Password</label><br><input type="password" id="pass2" name="password" placeholder="Confirm Password" onKeyUp="check()" required/><br>
	<button id="btn" type="submit" disabled/>Submit</button>
	<p id ="display"></p>

	
</form>
</div>
<footer id="footer2"><h2 id="footertxt">Copyright © 2017 ZERO ZERO LIVE BLOGGER. All Rights Reserved.</h2></footer>
</body>
</html>