<?php
include("Conexao.php");
$st = $pdo->prepare("INSERT INTO tb_noticias (titulo, descricao, url_recurso, status) VALUES(:titulo, :descricao, :url, :status)");
$st->bindValue(":titulo", $_POST['titulo']);
$st->bindValue(":descricao", $_POST['descricao']);
$st->bindValue(":url", $_POST['recurso']);
$st->bindValue(":status", -1);
$st->execute();

if($st) {
  echo "ok";
} else {
  echo "not";
}
