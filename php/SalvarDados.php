<?php
include('Conexao.php');
date_default_timezone_set('America/Fortaleza');

$verifica = $pdo->prepare("SELECT * FROM tb_dados WHERE email = :email OR telefone = :tel");
$verifica->bindValue(":email", $_POST['email']);
$verifica->bindValue(":tel", $_POST['telefone']);
$verifica->execute();

if($verifica->rowCount() > 0) {
  echo "cad";
} else {
  $st = $pdo->prepare("INSERT INTO tb_dados (nome_completo, telefone, email, data_cadastro) VALUES(:nome, :tel, :email, :data)");
  $st->bindValue(":nome", strtoupper($_POST['nome_completo']));
  $st->bindValue(":tel", $_POST['telefone']);
  $st->bindValue(":email", $_POST['email']);
  $st->bindValue(":data", date('d/m/Y'));
  $st->execute();

  if($st) {
    echo "ok";
  } else {
    echo "not";
  }
}
