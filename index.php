<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <title>Gerenciador de Página de Capitura</title>
  <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#telefone').mask('(00)0 0000-0000');
    });
  </script>
</head>

<body>
<?php
include('./layout/header.php');
include('./php/Listar.php');
include('msg-grown/msg.php');
?>

<div class="corpo">
  <center>
    <span class="fs tam-32"><?php echo $noticia['titulo'];?></span>
    <div class="mg-top-10"></div>

    <span class="fs tam-16"><?php echo $noticia['descricao'];?></span>
    <div class="mg-top-10"></div>

    <div id="blocked"></div>
    <iframe id="video" width="560" height="315" src="<?php echo $noticia['url_recurso']."";?>" frameborder="0" allowfullscreen></iframe>
  </center>

  <div class="mg-top-20"></div>

  <input type="text" placeholder="Digite seu melhor e-mail" id="email" name="email" class="campo-text fs tam-16">
  <div class="mg-top-10"></div>

  <form id="interesse" name="form_dados" style="display:none">
    <span class="fs tam-20">Para agendar uma consultoria preencha os campos abaixo:</span>
    <div class="mg-top-10"></div>

    <span class="fs tam-16">Nome Completo:</span>
    <div class="mg-top-5"></div>
    <input type="text" name="nome_completo" class="campo-text fs tam-16">
    <div class="mg-top-10"></div>

    <span class="fs tam-16">Whatsapp: </span>
    <div class="mg-top-5"></div>
    <input type="text" name="telefone" id="telefone" class="campo-text fs tam-16">
    <div class="mg-top-10"></div>

    <span class="fs tam-16">Cidade: </span>
    <div class="mg-top-5"></div>
    <input type="text" name="cidade" class="campo-text fs tam-16">
    <div class="mg-top-10"></div>
  </form>
  <input type="button" value="Confirmar" class="primary-button" onclick="desbloqueiaVideo(this);">


</div>
</body>
<script type="text/javascript" src="js/noticias.js"></script>
</html>
