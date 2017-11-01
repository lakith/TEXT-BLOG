
<?php 


$title = $_POST['title'];
$content = $_POST['content'];

$topic = $_GET['topic'];

$host='localhost';

$connect=mysqli_connect($host,'root','','blog');


$sql = mysqli_query($connect,"UPDATE posts SET title = '$title', content= '$content' WHERE title= '$topic'");


header("refresh:0.2 ; url=home.php");
//$connect->close;
?>