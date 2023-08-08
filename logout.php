<?php
    session_start();
	session_destroy();
	header("location:index.php");

?>
<?php
require_once('entete.php');

?>