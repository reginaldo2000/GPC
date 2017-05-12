<?php

include('Conexao.php');
$st = $pdo->prepare("SELECT * FROM tb_noticias WHERE status = 1");
$st->execute();
$noticia = $st->fetch(PDO::FETCH_ASSOC);
