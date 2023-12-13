<?php

require_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['txt_comentario'])) {
    $cdComentario = $_POST['txt_comentario'];

    $sqlApagarComentario = "DELETE FROM tb_comentario WHERE txt_comentario = :txt_comentario";
    $stmtApagarComentario = $pdo->prepare($sqlApagarComentario);
    $stmtApagarComentario->bindParam(':txt_comentario', $cdComentario);

    try {
        $stmtApagarComentario->execute();
        echo "<p>Comentário apagado com sucesso!</p>";
    } catch (PDOException $e) {
        echo "<p>Erro ao apagar comentário: " . $e->getMessage() . "</p>";
    }
} else {
    echo "<p>Erro no processamento do formulário para apagar o comentário.</p>";
}
?>