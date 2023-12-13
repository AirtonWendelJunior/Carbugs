<?php
require_once("conexao.php");

if (!isset($_SESSION)) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['cd_video']) && !empty($_POST['txt_comentario'])) {
        $cdVideo = $_POST['cd_video'];
        $comentario = $_POST['txt_comentario'];
        $email = $_POST["email_usuario"];

        
        $sqlInserirComentario = "INSERT INTO tb_comentario (cd_video, txt_comentario,email_usuario) VALUES (:cd_video, :txt_comentario, :email_usuario)";
        $stmtInserirComentario = $pdo->prepare($sqlInserirComentario);
        $stmtInserirComentario->bindParam(':cd_video', $cdVideo);
        $stmtInserirComentario->bindParam(':txt_comentario', $comentario);
        $stmtInserirComentario->bindParam(':email_usuario', $_SESSION['nm_usuario']);

        

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
