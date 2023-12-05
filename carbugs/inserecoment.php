<?php
require_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['cd_video']) && !empty($_POST['txt_comentario'])) {
        $cdVideo = $_POST['cd_video'];
        $comentario = $_POST['txt_comentario'];

        
        $sqlInserirComentario = "INSERT INTO tb_comentario (cd_video, txt_comentario) VALUES (:cd_video, :txt_comentario)";
        $stmtInserirComentario = $pdo->prepare($sqlInserirComentario);
        $stmtInserirComentario->bindParam(':cd_video', $cdVideo);
        $stmtInserirComentario->bindParam(':txt_comentario', $comentario);

        try {
            $stmtInserirComentario->execute();
            echo "<p>Comentário adicionado com sucesso!</p>";
            
        } catch (PDOException $e) {
            echo "<p>Erro ao adicionar comentário: " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p>Por favor, escolha um vídeo e adicione um comentário.</p>";
    }
} else {
    echo "<p>Erro no processamento do formulário.</p>";
}

?>
