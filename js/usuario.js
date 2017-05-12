function logar() {
  var dados = $("#login").serialize();
  $.ajax({
    type: 'post',
    dataType: 'html',
    url: '../php/Logar.php',
    data: dados,
    success: function(msg) {
      if(msg == "ok") {
        location.href = "home.php";
      } else {
        alert("Usuário ou senha incorretos!");
      }
    }
  })
}
