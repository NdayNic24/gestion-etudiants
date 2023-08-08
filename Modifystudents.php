 <?php
$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
require_once("connect.php");
$ps=$pdo->prepare("update student set nom=?,prenom=?,email=? where code=?");
$params=array($nom,$prenom,$email,$code);
$ps->execute($params);

header("location:student.php");
?>
   <?php
require_once('entete.php');

?>