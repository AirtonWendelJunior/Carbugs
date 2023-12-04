
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Carbugs</title>
    
      <script>
   
   function voltar() {
        window.location.href = 'login.php';
		}

   function validarForm() {
    var nome = document.forms["meu_form"]["nome"].value;
    var idade = document.forms["meu_form"]["idade"].value;
    var genero = document.forms["meu_form"]["genero"].value;

    var email = document.forms["form2"]["email"].value;
    var senha = document.forms["form2"]["senha"].value;
    var rsenha = document.forms["form2"]["rsenha"].value;

    // Validar Nome
    if (nome == "") {
        alert("Por favor, insira o seu nome.");
        return false;
    }

    // Validar Idade
    if (idade == "") {
        alert("Por favor, insira a sua idade.");
        return false;
    }

    // Validar Gênero
    if (genero == "") {
        alert("Por favor, selecione o seu gênero.");
        return false;
    }

    // Validar E-mail
    if (email == "") {
        alert("Por favor, insira o seu e-mail.");
        return false;
    }

    // Validar Senha
    if (senha == "") {
        alert("Por favor, insira a sua senha.");
        return false;
    }

    // Validar Repetição de Senha
    if (rsenha == "") {
        alert("Por favor, repita a sua senha.");
        return false;
    }

    // Verificar se as senhas coincidem
    if (senha !== rsenha) {
        alert("As senhas não coincidem. Por favor, digite novamente.");
        return false;
    }

    // Tratar erro de chave única
    if (chaveUnicaErro) {
        alert("Erro ao inserir dados no banco de dados: Este e-mail já está cadastrado.");
        return false;
    }

    // Se todas as validações passarem, o formulário é submetido com sucesso
    return true;
}

    </script>
</head>

<style type="text/css">
   
  

   .borda {
       
        border: 2px solid black;
        
        background-image: url('https://st3.depositphotos.com/4312111/17460/i/450/depositphotos_174604288-stock-photo-black-sports-car.jpg');	
        background-size: cover;
        color: azure;
    }
    .login {
    
        border: 2px solid black;
        padding: 40px;
    }
    .borda1 {
      
        
        border: 2px solid black;
        padding: 40px;
        background-color: rgba(153, 114, 189, 0.332);
    }
    .borda2 {
        border: 2px solid black;
        padding: 40px;
        background-color: rgba(153, 114, 189, 0.332);
    }
    .borda3 {
        border: 2px solid black;
        padding: 40px;
        background-color:rgba(153, 114, 189, 0.332);
    }
   
</style>

<section class="borda">
    <h2> CADASTRE-SE NO NOSSO SITE;</h2>
    <article class="borda1">
    <button onclick="voltar()">Voltar</button>

        <h1>CADASTRO</h1>
        


        <form method="post" name="meu_form" action="inserirusuario.php" onsubmit="return validarFormulario()">
          <label for="nome">Nome Completo:</label><br>
          <input type="text" name="nome"><br><br>
      
      <label for="idade">Idade:</label><br>
          <input type="text" name="idade"><br><br>
  
      <label for="genero">Gênero:</label><br>
      <input type="radio" name="genero" value="Masculino">
      <label for="masculino">Masculino</label><br>
      <input type="radio" name="genero" value="Feminino">
      <label for="feminino">Feminino</label><br>
      <input type="radio" name="genero" value="Outro">
      <label for="outro">Outro</label><br><br>
            
        
            <label for="email">E-mail:</label><br>
            <input type="text" name="email" required><br><br>

            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" required><br><br>

            <label for="rsenha">Repita a senha:</label><br>
            <input type="password" name="rsenha" required><br><br>

            <input type="reset" value="Limpar Dados">
            <input type="submit" value="Enviar">
            
            </form>
            </article>

       
    
          



   
</section>


   
    

</body>
</html>