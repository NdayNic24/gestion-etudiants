<?php
if(!(isset($_SESSION['utilisateur']))){
	header("location:login.php");
}
?>