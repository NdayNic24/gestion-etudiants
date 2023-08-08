<?php
require_once("connect.php");
?>


<html>
<head>
<title>formulaire d'insertion d'un Etudiant</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css"></link
<link rel="stylesheet" type="text/css" href="css/cs/bootstrap.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"></link>

<body class="danny">
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-info">
<?php require_once('entete.php'); ?>
<div class="panel-heading"><center><h2>Nouvel etudiant</h2></center></div>
<form method="POST" action="savestudent.php">
<table>
<label class="label-control">nom</label>
<input type="text" class="form-control" name="no" placeholder="first name" required />
<label class="label-control">prenom</label>
<input type="text" class="form-control" name="pre" placeholder="last name" required />
<label class="label-control">e-mail</label>
<input type="email" class="form-control" name="em" placeholder="E-mail" required />
<input class="btn btn-primary"type="submit" name="ENREGISTRE" value="ENREGISTRE"/>
<input type="reset"class="btn btn-danger" name="annuler" value="annuler">
</table>
</form>
</div>
</div>
</body>


</html>

