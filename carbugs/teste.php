<?php
// Iniciar a sessão PDO
require_once("conexao.php");

// Restante do seu código...

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Vídeos relacionados</title>

    <script>
        function voltar() {
            window.location.href = 'http://localhost/carbugs/';
        }
    </script>

    <style type="text/css">
        .borda {
            border: 2px solid black;
            padding: 40px;
            background-image: url('https://st3.depositphotos.com/4312111/17460/i/450/depositphotos_174604288-stock-photo-black-sports-car.jpg');
            background-size: cover;
            color: azure;
        }

        .borda2 {
            background-color: grey;
            border: 2px solid black;
            padding: 40px;
            background-size: cover;
            color: azure;
        }
    </style>
</head>

<body>

<section class="borda">

<button onclick="voltar()">Voltar</button>

    <?php
    // Restante do seu código...
    ?>

</section>

<section class="borda2">
    <h2>Adicione um comentário sobre o veículo escolhido!</h2>   
    <form method="post" action="inserecoment.php">
        <input type="hidden" name="cd_video" value="<?php echo $idCarroEscolhido; ?>">
        <textarea name="txt_comentario" id="comentario" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar Dados">
    </form>

    <?php
    function obterIdentificadorUsuario($idUsuario) {
        require_once("conexao.php");

        $sqlObterIdentificador = "SELECT nm_usuario FROM tb_cadastro WHERE email_usuario = :email_usuario";
        $stmtObterIdentificador = $pdo->prepare($sqlObterIdentificador);
        $stmtObterIdentificador->bindParam(':email_usuario', $idUsuario);
        
        try {
            $stmtObterIdentificador->execute();
            $resultado = $stmtObterIdentificador->fetch(PDO::FETCH_ASSOC);

            if ($resultado) {
                return $resultado['nm_usuario'];
            } else {
                return "Identificador não encontrado";
            }
        } catch (PDOException $e) {
            return "Erro ao obter identificador: " . $e->getMessage();
        }
    }

    foreach ($comentarios as $comentario) {
        // Obtém o identificador do usuário para o comentário atual
        $identificadorUsuario = obterIdentificadorUsuario($comentario['email_usuario']);

        // Exibe o comentário com o identificador do usuário
        echo "<p>{$comentario['txt_comentario']} - Enviado por: {$identificadorUsuario}</p>";

        // Formulário para Apagar Comentário
        echo "<form action='apagar.php' method='post' style='display:inline;'>
                  <input type='hidden' name='txt_comentario' value='{$comentario['txt_comentario']}'>
                  <button type='submit'>Apagar Comentário</button>
              </form>";
        
        echo "<br><br>"; // Adiciona quebras de linha para separar os comentários
    }


    ?>

</section>

</body>
</html>
