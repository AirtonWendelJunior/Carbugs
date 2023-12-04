<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>title</title>

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

    <?php
    require_once("conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['id_veiculo'])) {
            $idCarroEscolhido = $_POST['id_veiculo'];

            // Consulta para obter o nome do veículo
            $sqlNomeVeiculo = "SELECT nm_veiculo FROM tb_veiculo WHERE id_veiculo = :id_veiculo";
            $stmtNomeVeiculo = $pdo->prepare($sqlNomeVeiculo);
            $stmtNomeVeiculo->bindParam(':id_veiculo', $idCarroEscolhido);
            $stmtNomeVeiculo->execute();

            $nomeVeiculo = $stmtNomeVeiculo->fetch(PDO::FETCH_COLUMN);

            // Consulta para obter os vídeos relacionados ao carro
            $sqlVideos = "SELECT cd_video FROM tb_video WHERE id_veiculo = :id_veiculo";
            $stmtVideos = $pdo->prepare($sqlVideos);
            $stmtVideos->bindParam(':id_veiculo', $idCarroEscolhido);
            $stmtVideos->execute();

            $videos = $stmtVideos->fetchAll(PDO::FETCH_ASSOC);

            // Consulta para obter os comentários relacionados ao veículo
            $sqlComentarios = "SELECT txt_comentario FROM tb_comentario WHERE cd_video = :id_veiculo";
            $stmtComentarios = $pdo->prepare($sqlComentarios);
            $stmtComentarios->bindParam(':id_veiculo', $idCarroEscolhido);
            $stmtComentarios->execute();

            $comentarios = $stmtComentarios->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($nomeVeiculo)) {
                echo "<h2>Vídeos e Comentários relacionados ao carro $nomeVeiculo:</h2>";
            } else {
                echo "<p>Nome do veículo não encontrado para o Carro $idCarroEscolhido.</p>";
            }

            if (!empty($videos)) {
                echo "<h3>Vídeos:</h3>";
                echo "<ul>";
                foreach ($videos as $video) {
                    echo "<li><a href='{$video['cd_video']}' target='_blank'>{$video['cd_video']}</a></li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Nenhum vídeo encontrado para o Carro $idCarroEscolhido.</p>";
            }

            if (!empty($comentarios)) {
                echo "<h3>Comentários:</h3>";
                echo "<ul>";
                foreach ($comentarios as $comentario) {
                    echo "<li>{$comentario['txt_comentario']}</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Nenhum comentário encontrado para o Carro $idCarroEscolhido.</p>";
            }

        } else {
            echo "<p>Por favor, escolha um carro.</p>";
        }
    } else {
        echo "<p>Erro no processamento do formulário.</p>";
    }
    ?>
</section>

<section class="borda2">
    <h2>Adicione um comentário sobre o vídeo escolhido!</h2>   
    <form method="post" action="inserecoment.php">
        <input type="hidden" name="cd_video" value="<?php echo $idCarroEscolhido; ?>">
        <textarea name="txt_comentario" id="comentario" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar Dados">
    </form>
</section>

</body>
</html>
