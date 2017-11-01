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
<style type="text/css">
	
	header
	{
		border: 2px solid black;
		position: relative;
		width: 100%;
		height: 50px;
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		border-radius:2px;
	}
	
	#headdiv
	{
		/*border: #CF070A solid 2px;*/
		position:absolute;
		margin-top: 0.9%;
		margin-bottom:1%;
		height: 30px;
		margin-left: 1%;
		font-family:fontawesome;
		font-size: 25px;
		color:#1F1D1D;
		float: left;
		
		

 	}
	
		#headmiddle
	{
		text-align: center;
		color: brown;
		padding: 4%;
		font-size: 30px;
		font-family:fontawesome;
	
	}
	


	#formdiv2
	{
		border: 2px solid black;
		margin-top: 10%;
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		border-radius:2px;
		margin-left: 30%;
		width: 35%;
		height: 400px;
	}
	
	input[type=text], select ,input[type=password]{
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
	margin-left:4%; 
	margin-top: 2%;
	margin-bottom: 2%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color:#FFFFE0;
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
		#headmiddle
	{
		text-align: center;
		color: brown;
	
	}

	.labelstyle
	{
		color:	#9ACD32;
	}
	
	#formchange
	{
		margin-top: 10%;
		margin-left: 12%;
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
	
	/*
	input[type=text]:, select ,input[type=password]:active
	{
		background-color: aqua;
	}
	
		input[type=text]:, select ,input[type=password]:active
	{
		background-color: aqua;
	}*/
	
	</style>
</head>



<body onload="checklog()">
<header><div id="headdiv">ZERO ZERO LIVE BLOGGER</div><a id="hidehide" href="logout.php">log out</a><div id="hideAlready"></div><div id="compactHeaddiv">
<div id="headdiv2"><a  href = "log2.php"> Sign In </a> </div><h5 id="headhead">|</h5><div id="headdiv3"><a href="signin.php"> Sign Up</a> </div></div><br>


<div id="downHeader"> <div id="downHeaderDiv1"><a href="home.php"><i class="fa fa-bars"></i> &nbsp; Post List</a></div><div id="downHeaderDiv2"><i class="fa-home"></i> &nbsp; Back to Blog </div></div><br>

<div id="formdiv2">
<h3 id="headmiddle">Log In</h3>
<form id="formchange" action="action1.php" method="post">
      <label class ="labelstyle" ><b>Username</b></label><br>


      <input type="text" placeholder="Enter Username" name="username" required/>
      <br><br>
      <label class ="labelstyle"  ><b>Password</b></label>
      <br>
      <input type="password" placeholder="Enter Password" name="password" required/><br><br>
        
      <button id="btn" type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
</form>
</div>
<footer id="footer2"><h2 id="footertxt">Copyright © 2017 ZERO ZERO LIVE BLOGGER. All Rights Reserved.</h2></footer>

</body>
</html>




















