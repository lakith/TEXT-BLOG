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
	
	#headdiv2,#headdiv,#headdiv3,#headhead
	{
		display: inline;
		position:static;
		
	}
	
	#headdiv2,#headdiv3,#headhead
	{
		float: right;
	}
	
	#headdiv2
	{
		/*position:absolute;*/
		/*float: right;*/
		margin-top: 0.9%;
		margin-bottom:1%;
		height: 30px;
		margin-left: 1%;
		font-family:fontawesome;
		font-size: 20px;
		color:#1F1D1D;
	}
	
	#headdiv3
	{
		/*position:absolute;*/
		/*float: right;*/
		margin-top: 0.9%;
		margin-bottom:1%;
		height: 30px;
		margin-left: 1%;
		font-family:fontawesome;
		font-size: 20px;
		color:#1F1D1D;
		margin-right: 1%;
	}
	
	#headhead
	{
		margin-top: 1.2%;
		margin-bottom: 15%; 
		position: relative;
		
		
	}
	
	#compactHeaddiv
	{
		margin-right: 2%;
	}
	
	#downHeader
	{
		border: 2px solid black;
		position:absolute;
		margin-top: 3%;
		margin-left:70%; 
		width: 30%;
		height: 50px;
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		border-radius:2px;
		float: right;

 
	}
	
	#downHeaderDiv1,#downHeaderDiv2
	{
		display: inline;
		
	}
	
	#hideAlready
	{
		display: none;
		position: absolute;
		margin-top: 1%;
		float: right;
		margin-left: 85%;
	}
	#hidehide
	{
		display: none;
		position: absolute;
		margin-top: 1%;
		margin-left: 80%;
	}
	
	#downHeaderDiv1
	{
		float: left;
		margin-top: 3%;
		margin-bottom:1%;
		height: 30px;
		margin-left: 3%;
		font-family:fontawesome;
		font-size: 20px;
		color:#1F1D1D;
	}
	
	#downHeaderDiv2
	{
		float: right;
		margin-top: 3%;
		margin-bottom:1%;
		height: 30px;
		margin-right: 3%;
		font-family:fontawesome;
		font-size: 20px;
		color:#1F1D1D;
	}
	#btpcreatepost
	{
		position: absolute;
		float: right;
		margin-top: 6%;
		margin-left: 45.2%;
		width: 30%;
		height: 50px;
		background-color: #4CAF50; /* Green */
    	border: none;
   		color: white;
    	/*padding: 15px 32px;*/
    	text-align: center;
   		text-decoration: none;
    	display: inline-block;
    	font-size: 16px;
		
	}
	
	#postlistdiv
	{
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		width: 68%;
		margin-top: 6.1%;
		height: 40px;
		font-family: fontawesome;
		font-size: 30px;
		padding-top: 0.5%;
		padding-left: 1%;
	}
	
	#contentdiv
	{
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		width: 80%;
		margin-top: 1%;
		margin-left: 10%;
	}
	
	table 
	{
    border-collapse: collapse;
    width: 104.8%;
	}
	
	th, td 
	{
    text-align: left;
    padding: 8px;
	
	}
	
	tr:nth-child(even){background-color: #f2f2f2}
	
	#display
	{
		border: 2px solid black;
		position:absolute;
		
		margin-top: 3%;
		margin-left:10%; 
		width: 80%;
		height: 850%;
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		border-radius:2px;
		float:left;
	}
	
	#displayTitle
	{
		text-align:center;
		font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana," sans-serif";
		font-size: 50px;
		color: navy;
	}
	#diplay_content
	{
		text-align: justify;
		margin-left: 2%;
		margin-right: 2%;
		color: darkgreen;
	}
	#displayAuthor
	{
		float: right;
		margin-right: 2%;
		color: red;
		
	}
	
	#formContent
	{
		margin-top: 33%;
		margin-left: 10%;
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		width: 80%;
		background-color:lightgray;
	}
	
	img
	{
		width: 8%;
		margin-bottom: 12%;
		margin-left: 2%;
	}
	
	#imgstyle,#styleform
	{
		display:inline-block;

	}
	#txtstlye
	{
		width: 570%;
		margin-left: 10%;
		margin-top: 15%;
	}
	
	#btncom
	{
    background-color:red;
	font-size: 20px;
	height: 50px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
	margin-right: -480%;
	margin-bottom: 20px;
	font-family: fontawesome;
	float: right;
    border: none;
    border-radius: 4px;
    cursor: pointer;

	}
	
	ul
	{
		list-style-image:url(photoes/no-user-image_131526490260700846.ico);
		padding-top: 1%;
		padding-bottom: 1%;
	}


	strong
	{
		color: red;
		margin-top: -5%;
	}
	
	#changehight
	{
		margin-top:  -2.6%;
		position: absolute;
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

	#lilistyle
	{
		margin-left: 1%;
		margin-top: 2%;
	}
	
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
	
		#footer2{
	height:40px;
	background-color:#333;
	color:#999;
	text-align:center;
	margin-top: 1%;
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
<div id="headdiv2"><a  href = "log2.php"> Sign In </a> </div><h5 id="headhead">|</h5><div id="headdiv3"><a href="Sign_up.html"> Sign Up</a> </div></div><br>


<div id="downHeader"> <div id="downHeaderDiv1"><a href="home.php"><i class="fa fa-bars"></i> &nbsp; Post List</a></div><div id="downHeaderDiv2"><i class="fa-home"><a href="view_blog.php"></i> &nbsp; Back to Blog </a></div></div><br>


<?php
	
	$title = $_GET['title'];
	//echo "{$title}";
	
?>

<?php

$host='localhost';

$conn=mysqli_connect($host,'root','','blog');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT content,author FROM posts WHERE title='".$title."'";

$result = $conn->query($sql);

$user_query = mysqli_query($conn, $sql);


$numrows = mysqli_num_rows($user_query);
if($numrows < 1){
	echo "That user does not exist or is not yet activated, press back";
    exit();	
}
	
	while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$content = $row["content"];
	$author = $row["author"];
	
}
	
	
?>

<br>
<br>
<br>


<div id = "display"  >
	<h3 id="displayTitle"><?php echo "{$title}"?></h3>
	<br>
	<p id="diplay_content"><?php echo "{$content}"?></p>
	<h5 id = "displayAuthor"><?php echo "{$author}"?></h5>
	
</div>
	
	<br>
	<br>

<div id="formContent">
	<img src="photoes/no-user-image.png" id="imgstyle"/>
	<form action="insert_comment.php?post_title=<?php echo "{$title}"?>"  method="post" id="styleform">
		<textarea name="commentContent" id="txtstlye" rows="15" required /></textarea><br>
		<button id="btncom" type="submit">comment</button>
	</form>
</div>
<div id="contentdiv">
	<ul>

<?php
	
$host='localhost';

$conn=mysqli_connect($host,'root','','blog');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT user, comment_content FROM comments WHERE post_name='$title'";
$result = $conn->query($sql);

		$count = 0;
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<li id='lilistyle'><div id='changehight'><strong>". $row["user"]."</strong><br>". $row["comment_content"]."</div><hr></li>";
		$count++;
		if($count == 10)
		{
			break;
		}
    }

} else {
    echo "0 results";
}

$conn->close();
?>
	
	</ul></div>
	<footer id="footer2"><h2 id="footertxt">Copyright © 2017 ZERO ZERO LIVE BLOGGER. All Rights Reserved.</h2></footer>
	</body>
</html>
