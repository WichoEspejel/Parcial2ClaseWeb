<?php

session_start();

  
?>

<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  .Jumbotron{text-align: center; }
  .form-horizontal{padding-top: 40px;}
</style>
<title>PDO</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<body>
	<div class="container-fluid">
		<br>
		<br>
		<br>
		<div class = "Jumbotron">
			<br><br>

			<h1>Registrate a nuestro Newsletter<br><br>Es muy fácil y rápido</h1>

			<form class="form-horizontal" action = "proceso.php" method = "post">
                <div class="form-group">
                  <label for="input3nombr3" class="col-sm-2 control-label">Nombre</label>
                  <div class="col-sm-10">
                    <input type="usuario" class="form-control input" id="input3nombr3" name="usuario">
                  </div>
                </div>
                <div class="form-group">
                  <label for="input3mail" class="col-sm-2 control-label">E-mail</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control input" id="input3mail" name="mail">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputpass" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control input" id="inputpass" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                  </div>
                </div>
              </form>
		</div>
	</div>
	
</body>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>