<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Gerenciador de Página de Capitura</title>
    <script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/modal.js"></script>
	<style>
		.corpo {
			width: 800px;
			height: 450px;
			overflow: auto;
		}
		@media(max-width:480px) {
			.tam-16 {
				font-size: 12px;
			}
		}
	</style>
  </head>

  <body>
    <?php include('../msg-grown/modal.php');?>
  	<?php include('../layout/header.php');?>
  	<?php include('../msg-grown/msg.php');?>


	<div class="corpo">
    <input type="button" value="Voltar" class="primary-button" onclick="location.href='home.php'">
    <div class="mg-top-10"></div>
    <div class="line-solid-1"></div>
    <div class="mg-top-10"></div>

		<?php include('../php/ListaPosts.php');?>
	</div>

  </body>
  <script type="text/javascript" src="../js/noticias.js"></script>
</html>
