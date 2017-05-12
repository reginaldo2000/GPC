function cadastrar() {
  var dados = $("#form-cadastro").serialize();
  if(validaCampos()) {
    $.ajax({
      type: 'post',
      dataType: 'html',
      url: '../php/Cadastrar.php',
      data: dados,
      success: function(msg) {
        if(msg == "ok") {
          document.getElementById("form-cadastro").reset();
          showMessage(1, "Cadastro realizado com sucesso!");
        } else {
          showMessage(-1, "Erro ao tentar cadastrar!");
        }
      }
    });
  }
}

function validaCampos() {
  var titulo = this.form_page.titulo.value;
  var desc = this.form_page.descricao.value;
  var recurso = this.form_page.recurso.value;

  if(titulo == "" || desc == "" || recurso == "") {
    showMessage(-1, "Preencha todos os campos obrigatórios!");
    return false;
  }
  return true;
}

function limpaCampos() {

}

function desbloqueiaVideo(button) {
  if(button.value == "Confirmar") {
    var email = document.getElementById('email').value;
    if(email == "" || email.indexOf("@") == -1 || email.indexOf(".com") == -1) {
      showMessage(-1, "Por favor, insira um e-mail válido!");
    } else {
      $("#blocked").css('display', 'none');
      $("#interesse").css('display', 'block');
      button.value = "Enviar";
      showMessage(1, "Vídeo desbloqueado!");
    }
  } else {
    if(validaCamposCadastro()) {
      $.ajax({
        type: 'post',
        dataType: 'html',
        url: './php/SalvarDados.php',
        data: {
          nome_completo: this.form_dados.nome_completo.value,
          email: document.getElementById('email').value,
          telefone: this.form_dados.telefone.value
        },
        success: function(ret) {
          if(ret == "ok") {
            showMessage(1, "Dados enviados com sucesso!");
            document.getElementById("interesse").reset();
            $('#interesse').css('display', 'none');
			button.value = "Confirmar";
          } else if(ret == "cad"){
            showMessage(-1, "Email ou telefone já cadastrados, por favor insira um novo email ou telefone!");
          }
        }
      });
    }
  }
}

function validaCamposCadastro() {
  var nome = this.form_dados.nome_completo.value;
  var email = document.getElementById('email').value;

  if(nome == "" || email == "" || nome == " " || email == " ") {
    showMessage(-1, "Por favor preencha todos os campos obrigatórios!");
    return false;
  }
  if(email.indexOf("@") == -1 || email.indexOf(".com") == -1 || email.indexOf(" ") != -1) {
    showMessage(-1, "E-mail inválido!");
    return false;
  }
  return true;
}

function atualizarStatusPost(id_post) {
  $.ajax({
    type: 'post',
    dataType: 'html',
    url: '../php/AtualizarStatus.php',
    data: {postid: id_post},
    success: function(ret) {
      if(ret == "ok") {
        showMessage(1, "Post atualizado com sucesso!");
      } else {
        showMessage(-1, "Erro ao tentar atualizar post!");
      }
    }
  });
}
