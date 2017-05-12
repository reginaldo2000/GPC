<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Gerenciador de Página de Capitura</title>
  <script type="text/javascript" src="../jquery-3.2.1.min.js"></script>

</head>

<body>
<?php include('../layout/header.php');?>

<div class="corpo">

<div class="form-login">
  <form name="login" id="login">
    <span class="fs tam-16">Usuário:*</span>
    <div class="mg-top-5"></div>
    <input type="text" name="usuario" class="campo-text fs tam-16">
    <div class="mg-top-10"></div>

    <span class="fs tam-16">Senha:*</span>
    <div class="mg-top-5"></div>
    <input type="password" name="senha" class="campo-text fs tam-16">
    <div class="mg-top-10"></div>

    <input type="button" value="Entrar" class="primary-button fs" onclick="logar();">
  </form>
</div>

</div>
</body>
<script type="text/javascript" src="../js/usuario.js"></script>
</html>
