<?php
$code=$_GET['code'];
require_once("connect.php");
$ps=$pdo->prepare("select * from student where code=?");
$params=array($code);
$ps->execute($params);
$student=$ps->fetch();

//header("location:student.php");
?>
<html>
<head>
<title>modification d'un etudiant</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css"></link
<link rel="stylesheet" type="text/css" href="css/cs/bootstrap.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"></link>

<body class="espace">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-info">
<?php require_once('entete.php'); ?>
<div class="panel-heading"><center><h2>modification d'un etudiant</h2></center></div>
<div class="panel-body">
<form method="post" action="Modifystudents.php">
<form>
<table>
<input type="hidden"  class="form-control" name="code" value="<?php echo($student['code'])  ?>" />
<label>nom</label>
<input type="text"  class="form-control" name="nom" value="<?php echo($student['no'])  ?>" />
<label>prenom</label>
<input type="text"  class="form-control" name="prenom" value="<?php echo($student['pre'])  ?>" />
<label>email</label>
<input type="text"  class="form-control" name="email" value="<?php echo($student['em'])  ?>" />
<input type="submit"  class="btn btn-success" name="modify" value="modifier"/>
</table>
</form>
</div>
</div>
</div>
</body>


</html>
