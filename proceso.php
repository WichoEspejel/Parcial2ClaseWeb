<?php

require 'user.php';

$USUARIO = $_POST['usuario'];
$Mail = $_POST['mail'];
$Password = $_POST['password'];
$nUser = new User;
$nUser->Add($USUARIO, $Mail, $Password);

 ?>