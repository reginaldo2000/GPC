<?php
include('Conexao.php');
$st = $pdo->prepare("SELECT * FROM tb_usuarios where usuario = :user and senha = :pass");
$st->bindValue(":user", $_POST['usuario']);
$st->bindValue(":pass", $_POST['senha']);
$st->execute();

if($st->rowCount() > 0) {
  echo "ok";
} else {
  echo "not";
}
