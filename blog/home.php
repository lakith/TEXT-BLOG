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
		color:orangered;
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
		margin-top: 1%;
		margin-left:69%; 
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
		color: maroon;
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
		margin-top: 4%;
		margin-left: 69%;
		width: 30%;
		height: 50px;
		background-color: #4CAF50; 
    	border: none;
   		color: white;
		border-radius:4px;
    	/*padding: 15px 32px;*/
    	text-align: center;
   		text-decoration: none;
    	display: inline-block;
    	font-size: 16px;
		cursor: pointer;
		
	}
	
	#postlistdiv
	{
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		width: 68%;
		margin-top: 4%;
		height: 40px;
		font-family: fontawesome;
		font-size: 30px;
		padding-top: 0.5%;
		padding-left: 1%;
		border-radius:4px;
	}
	
	#contentdiv
	{
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		width: 69%;
		margin-top: 1%;
	}
	
	#adminpanel,#contentdiv
	{
		display: inline-block;

	}
	
	table 
	{
    border-collapse: collapse;
    width: 104%;
	}
	
	th, td 
	{
    text-align: left;
    padding: 8px;
	
	}
	
	tr:nth-child(even){background-color: #f2f2f2;}
	
	#footer2{
	height:40px;
	background-color:#333;
	color:#999;
	text-align:center;
	margin-top: 12%;
	margin-bottom:-1%;
	
	}
	#footertxt
	{
		padding-top: 0.8%;
		font-size: 15px;
	}
	
	#adminpanel
	{
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		border:#FFF;
		width: 29.7%;
		margin-left:0.8%;
		margin-top: 1%;
		position:absolute;
		height: 100px;
		display: none;
		background-color:gray;
	}

		#btn 
	{
    width: 96%;
    background-color:red;
	font-size: 20px;
	height: 85px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
	margin-right: 2%;
	margin-bottom: 70px;
	font-family: fontawesome;
	float: right;
    border: none;
    border-radius: 4px;
    cursor: pointer;

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
	
	
	</style>
</head>

<?php

$username=$log_username;

$host='localhost';
$connect=mysqli_connect($host,'root','','blog');

$sql = "SELECT user_level FROM user_details WHERE username='$username' "; 

$user_query = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {

	$userlevel = $row["user_level"];
}

//$connect->close();
?>

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
	if(<?php echo $userlevel ?> == 1)
	{
		document.getElementById('adminpanel').style.display="inline-block";
	}
	
    }
</script>


<body onload="checklog()">
<header><div id="headdiv">ZERO ZERO LIVE BLOGGER</div><a id="hidehide" href="logout.php">log out</a><div id="hideAlready"></div><div id="compactHeaddiv">
<div id="headdiv2"><a  href = "log2.php"> Sign In </a> </div><h5 id="headhead">|</h5><div id="headdiv3"><a href="signin.php"> Sign Up</a> </div></div><br>

</header>



<div id="downHeader"> <div id="downHeaderDiv1"><i class="fa fa-bars"></i> &nbsp; Post List</div><div id="downHeaderDiv2"><a href="view_blog.php"><i class="fa-home"></i> &nbsp; Back to Blog </a></div></div><br>


<a href="create_post.php"><button type="button" id="btpcreatepost"><i class="fa-facebook-square"></i> Create New Post <i class="fa-facebook-square"></i></button></a>

<div id = "postlistdiv">
	<span>Post List</span>
</div>

<div id="contentdiv">
	<table id=" tblstyle">
		<tr>
			<th>Title</th>
			<th><i class="glyphicon glyphicon-user"></i> Author</th>
			<th><i class="fa-calendar"></i> Publish At</th>
			<th><i class="fa-wordpress"></i> Action</th>
			<th></th>
		</tr>
<?php
	
$host='localhost';

$conn=mysqli_connect($host,'root','','blog');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT title, author , content FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
		$val = $row["title"];
		//echo "$val";
        echo "<tr><td><a href='view_post.php?title=".$val."'>" . $row["title"]. "</a></td><td>" . $row["author"]. "</td><td>12/11/2017</td><td><a href='edit_post.php?title=".$val."'>Edit </a> | <a href='delete_post_back.php?topic=".$val."'>Delete</a></td></tr> ";
    }

} else {
    echo "0 results";
}

$conn->close();
?>

<a href="action1.php"></a>
		
	</table>
</div>

<div id ="adminpanel">
	<a href="delete_users.php"><button type="button" id="btn">Click Here To Delete User Accounts</button></a>
</div>


<footer id="footer2"><h2 id="footertxt">Copyright © 2017 ZERO ZERO LIVE BLOGGER. All Rights Reserved.</h2></footer>
</body>
</html>
