<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Gerenciador de Página de Capitura</title>
	<script type="text/javascript" src="../jquery-3.2.1.min.js"></script>

</head>

<body>
<?php include('../layout/header.php');?>
<?php include('../msg-grown/msg.php');?>


<div class="corpo">
  <span class="fs tam-12">Campos obrigatórios (<b class="color-red">*</b>)</span>
  <div class="mg-top-10"></div>
  <div class="line-solid-1"></div>
  <div class="mg-top-10"></div>

  <form name="form_page" id="form-cadastro">
    <span class="fs tam-16">Título da notícia:<b class="color-red">*</b></span>
    <div class="mg-top-5"></div>
    <input type="text" name="titulo" class="campo-text fs tam-16" maxlength="80">
    <div class="mg-top-10"></div>

    <span class="fs tam-16">Descrição:<b class="color-red">*</b></span>
    <div class="mg-top-5"></div>
    <textarea class="fs tam-16" name="descricao"></textarea>
    <div class="mg-top-10"></div>

    <span class="fs tam-16">Cole aqui a url do recurso:<b class="color-red">*</b></span>
    <div class="mg-top-5"></div>
    <input type="text" name="recurso" class="campo-text fs tam-16"/>
    <div class="mg-top-10"></div>

    <input type="button" class="primary-button fs" value="Cadastrar" onclick="cadastrar();">
	<a href="posts.php" class="link-lista">gerenciar posts</a>
  </form>

</div>
</body>
<script type="text/javascript" src="../js/noticias.js"></script>
</html>
