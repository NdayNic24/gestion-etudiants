<?php
$nom=$_POST["no"];
$prenom=$_POST["pre"];
$email=$_POST["em"];
require_once("connect.php");
$ps=$pdo->prepare("INSERT INTO student(`no`,`pre`,`em`) VALUES (?,?,?)");
$params=array($no,$pre,$em);
$ps->execute($params);
  	header("location:student.php");

	?>
