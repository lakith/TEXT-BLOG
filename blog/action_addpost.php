

<?php 


$title = $_POST['title'];
$author = $_POST['author'];
$content =$_POST['content'];


$host='localhost';

$connect=mysqli_connect($host,'root','','login');


$sql = mysqli_query($connect,"INSERT INTO posts (title,author,content) VALUES('$title','$author','$content')");

header("refresh:0.2 ; url=home.php");
?>

