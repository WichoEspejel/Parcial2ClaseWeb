<?php
require 'database.php';

Class User{
  public static function Add($usuario, $mail, $password)
  {
    $sql = 'INSERT INTO users (usuario, mail, password) VALUES (:usuario, :mail, :password)';
    try {
      $db = Database::connect();
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':usuario', $usuario);
      $stmt->bindParam(':mail', $mail);
      $stmt->bindParam(':password', $password);
      $stmt->execute();

      $stmt->rowCount();

      $db = null;

      echo "<script>alert('Se ha realizado con exito el registro'); location.href='index.php';</script>";
    } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
    }
  }
}
?>