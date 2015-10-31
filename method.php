<?php

require 'user.php';

$Nam3 = $_POST['nam3'];
$Mail = $_POST['mail'];
$Password = $_POST['password'];
$nUser = new User;
$nUser->Add($Nam3, $Mail, $Password);

echo "<script>alert('Se ha realizado con exito el registro')</script>";
header("Location: index.php");

 ?>