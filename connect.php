<?php
try{
   $scann='mysql:host=localhost;dbname=schools';
   $pdo=new PDO($scann,'root','');
}
catch(PDOExeption $e){
   $msg='erreur pdo dans'.$e->gatMessage();
   die ($msg);
}
?>