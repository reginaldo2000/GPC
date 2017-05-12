<?php

include('Conexao.php');
$st = $pdo->prepare('SELECT * FROM tb_noticias');
$st->execute();
$result = '';
if($st->rowCount() > 0) {
	while($dados = $st->fetch(PDO::FETCH_ASSOC)) {
		$pos = strrpos($dados['url_recurso'], 'embed/');
		$check = ($dados['status'] == 1)?'checked':'';
		$result .= '<div class="post">';
		$result .= '<div class="img-post"><img src="https://i.ytimg.com/vi/'.substr($dados['url_recurso'], $pos+6, 11).'/hqdefault.jpg" alt="" width="68" height="68" style="margin-right: 10px;"></div>';
		$result .= '<div class="titulo"><span class="fs tam-16">'.$dados['titulo'].'</span></div>';
		$result .= '<div class="acoes">';
		$result .= '<input type="radio" name="status" style="margin-right:8px;" '.$check.' onclick="atualizarStatusPost('.$dados['id'].');">';
		$result .= '<a href="#"><i class="fa fa-close"></i></a>';
		$result .= '</div>';
		$result .= '</div>';
	}
	echo $result;
} else {
	echo "Nenhum posts encontrado!";
}
