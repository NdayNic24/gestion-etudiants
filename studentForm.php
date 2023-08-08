<html>
<head>
<title>formulaire d'un etudiant</title>
</head>
<body>
<h4>ENREGISTREMENT D'UN ETUDIANT</h4>
<form method="post" action="savestudent.php">
<label>nom</label>
<input type="text" name="nom" placeholder="entrer votre nom"/></br></br>
<label>prenom</label>
<input type="text" name="prenom" placeholder="entrer votre prenom"/></br></br>
<label>email</label>
<input type="text" name="email" placeholder="entrer votre email"/></br></br>
<input type="submit" value="ENREGISTRER"/>


</form>
</body>

</html>
<?php
require_once("security.php");
?>