<?php
$code=$_GET['code'];
require_once("connect.php");
$req=$pdo->prepare("delete from student where code=?");
$params=array($code);
$req->execute($params);
header("location:student.php");


?>
<?php
require_once("securite.php");
?>
<ul>
    <li><a href="student.php">student</a></li>
	<li><a href="student from.php">addstudent</a></li>
	<li><a href="logout.php">logout</a></li>



</ul>