<?php
require_once("connect.php");

?>

<html>
<head>
<title>page d'authentification</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"></link>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"></link>
<link rel="stylesheet" type="text/css" href="style.css"></link>
</head>

<body class="form">
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-info">
<div class="panel-heading"><center><h2>Security</h2></center></div>
<form method="POST" action="savelogin.php" class="form-group">
<label class="label-control">username</label>
<input type="text" class="form-control" name="username" placeholder="username"/>
<label class="label-control">password</label>
<input type="password" class="form-control" name="password" placeholder="password"/>
<input type="submit"class="btn btn-success" name="saveuser" value="se connecter">
<input type="reset"class="btn btn-danger" name="annuler" value="annuler">
</form>
</div>
</div>
</body>
</html>
