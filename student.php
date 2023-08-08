<?php

require_once('connect.php');
$mc="";
if(isset($_GET['motcle'])){
	$mc=$_GET['motcle'];
	$req="select * from student where nom like '%$mc'";

}
else{
	$req='select * from student';
}
$ps=$pdo->prepare($req);
$ps->execute();
?>
<?php
require_once('securite.php');

?>

<html>
<head>
<title> student page </title>
<link rel="stylesheet" type="text/css" href="style.css"></link>
<link rel="stylesheet" type="text/css" href="css/cs/bootstrap.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"></link>
</head>
<body class="menu"> 
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-info">
<?php require_once('entete.php'); ?>
<div class="panel-heading"><center><h2>Liste des etudiants</h2></center></div>
<div class="panel-body">
<div class="search">
<form method="GET" action="student.php" class="form-group">
<input type="search" name="motcle" placeholder="search here....." />
<input type="submit" class="btn btn-success" value="RECHERCHE" />
</form>
</div>
<h2><a class="btn btn-success" href="student from.php">Ajouter</a></h2>
<table class="table table-striped" >

<thead>
       <tr>
	   <th>code</th>
	    <th>nom</th>
		 <th>prenom</th>
		  <th>email</th>
		  <th>action</th>
        </tr>
</thead>
    <tbody>
	<?php while ($stud=$ps->fetch()) {?>
	<tr>
	 <td><?php echo ($stud ['code'])?></td>
	 <td><?php echo ($stud ['no'])?></td>
	 <td><?php echo ($stud ['pre'])?></td>
	 <td><?php echo ($stud ['em'])?></td>
	 <td>
	<a class="btn btn-danger"onclick="return confirm('Voulez-Vous vraiment modify?');"href="modifystudent.php?code=<?php echo ($stud['code'])?>">Update</a></td>
	  </td>
	  <td>
	  <a class="btn btn-success"onclick="return confirm('Voulez-Vous vraiment Supprimer?');"href="deletestudent.php?code=<?php echo ($stud['code'])?>">Delete</a>
	  </td>
		
		</tr>
	<?php }
	?>
      </tbody>
</table>
</div>
</div>
</div>

</body>
			<footer>
				</footer>
</html>