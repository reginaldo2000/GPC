<?php

include('Conexao.php');

$st0 = $pdo->prepare("UPDATE tb_noticias SET status = 0 WHERE status = 1");
$st0->execute();

$st = $pdo->prepare("UPDATE tb_noticias SET status = 1 WHERE id = :id");
$st->bindValue(":id", $_POST['postid']);
$st->execute();

if($st) {
  echo "ok";
} else {
  echo "not";
}
