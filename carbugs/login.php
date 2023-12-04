<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carbugs</title>

    <style>
        .borda {
            border: 2px solid black;
            background-image: url('https://st3.depositphotos.com/4312111/17460/i/450/depositphotos_174604288-stock-photo-black-sports-car.jpg');
            background-size: cover;
            color: azure;
            padding: 20px; /* Adicionei um padding para espaçamento interno */
        }
        .login {
            border: 2px solid black;
            padding: 20px;
            margin-top: 20px; /* Adicionei um espaçamento entre as bordas */
        }
        .borda1, .borda2, .borda3 {
            border: 2px solid black;
            padding: 20px;
            background-color: rgba(153, 114, 189, 0.332);
            margin-top: 20px; /* Adicionei um espaçamento entre as bordas */
        }
    </style>

    <script>
        function voltar() {
            window.location.href = 'http://localhost/carbugs/cadastro.php';
        }

        function validarForm() {
            var email = form2.email.value;
            if (email === "") {
                alert("É necessário preencher o seu email!");
                return false;
            }

            var senha = form2.senha.value;
            if (senha === "") {
                alert("É necessário preencher a senha!");
                return false;
            }

            // A linha abaixo redireciona imediatamente após a validação, remova se não quiser
            window.location.href = "http://localhost/carbugs/";

            return true;
        }
    </script>
</head>

<body>
    <section class="borda">
        <h2>FAÇA O SEU LOGIN, OU CADASTRE-SE NO NOSSO SITE;</h2>

        <article class="borda1">
            <h1>CADASTRO</h1>
            <button onclick="voltar()">Cadastre-se aqui</button>
        </article>

        <section class="login">
            <h2>LOGIN</h2>
            <form method="post" name="form2" action="processar_login.php" onsubmit="return validarForm()">
                <label for="email">E-mail:</label><br>
                <input type="text" name="email" required><br><br>

                <label for="senha">Senha:</label><br>
                <input type="password" name="senha" required><br><br>

                <input type="reset" value="Limpar Dados">
                <input type="submit" value="Enviar">
            </form>
        </section>
    </section>
</body>
</html>
