<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirma = $_POST['rsenha'];

    require_once("conexao.php"); 

    try {
        $sql = "INSERT INTO tb_senha (nm_senha, cd_senha, cd_confirma) VALUES (?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $senha, $confirma]);

      
        $pdo = null;

     
        header("Location: videosrelacionados.php");
    
    } catch (PDOException $e) {
        echo "Erro ao processar o formulário: " . $e->getMessage();
    }
}
?>
