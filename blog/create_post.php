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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
		a:link 
	{
    color:darkolivegreen;
	text-decoration: none;
	}


	a:visited
	{
    color: green;
	text-decoration: none;
	}


	a:hover 
	{
    color: hotpink;
	text-decoration: none;
	}


	a:active 
	{
    color: blue;
	text-decoration: none;
	}
	
	#forminsidediv
	{
		position: absolute;
		margin-top: 4%;
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		border-radius:2px;
		width: 80%;
		margin-left: 10%;
		height: 680px;

	}
	#downHeader
	{
		margin-top: -3%;
	}
	input[type=text]{
    width: 92%;
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
	
	textarea
	{
		margin-left: 4%;
		border-radius: 4px;
		background-color:#FFFFE0;
		font-size: 20px;
		font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana," sans-serif";
		margin-top: -4%;
		
	}
	#changemargin
	{
		margin-top: -5%;
		position: absolute;
	}
	form
	{
		margin-left: 8%;
	}
	
	#headchange
	{
		text-align: center;
		color: brown;
		font-family:fontawesome;
		margin-top: 4%;
		margin-bottom: 2%;
		font-size: 25px;
		
		
		
	}
		#btn 
	{
    width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
	margin-right: 4%;
	margin-bottom: 120px;
	margin-top: 3%;
	float: right;
    border: none;
    border-radius: 4px;
    cursor: pointer;

	}
	
	.lblstyle
	{
		font-size: 20px;
		color: #9ACD32;
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
<div id="headdiv2"><a  href = "log2.php"> Sign In </a> </div><h5 id="headhead">|</h5><div id="headdiv3"><a href="Sign_up.html"> Sign Up</a> </div></div><br>
<br>
<br>
<br>
<br>
<br>
<div id="forminsidediv">
<h3 id="headchange">Add Your Post</h3>
<form action="action_post.php" method="post">
	<label class="lblstyle">Title</label><br><input type="text" name="title" required/> <br><br><br><br><br>
	<label class="lblstyle" id="changemargin">Content</label><br><textarea name="content" rows="10" cols="70" required/></textarea><br>
	<button id="btn" type="submit">submit</button>
</form?>

</div>


<div id="downHeader"> <div id="downHeaderDiv1"><a href="home.php"><i class="fa fa-bars"></i> &nbsp; Post List</a></div><div id="downHeaderDiv2"><a href="view_blog.php"><i class="fa-home"></i> &nbsp; Back to Blog </a></div></div><br>

	</body>
</html>