<?php
$username=$_POST['username'];
$password=($_POST['password']);
require_once('connect.php');
$ps=$pdo->prepare("select*from users where username=? and password=?");
$params=array($username,$password);
$ps->execute($params);
if($user=$ps->fetch()){
	session_start();
$_SESSION['utilisateur']=$user;
header("location:student.php");

}

else{
	header("location:index.php");
}

?>
