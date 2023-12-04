<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $genero = $_POST["genero"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $rsenha = $_POST["rsenha"];

    require_once("conexao.php");

    try {

        $sql = "INSERT INTO tb_cadastro (nm_usuario, id_idade, id_genero, email_usuario, id_senha, id_rsenha) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $idade, $genero, $email, $senha, $rsenha]);

        
        $sqlGetUser = "SELECT nm_usuario FROM tb_cadastro WHERE email_usuario = ?";
        $stmtGetUser = $pdo->prepare($sqlGetUser);
        $stmtGetUser->execute([$email]);
        $usuario = $stmtGetUser->fetch(PDO::FETCH_ASSOC);

        // Armazena o nome do usuário na variável de sessão
        $_SESSION['nm_usuario'] = $usuario['nm_usuario'];

        // Redirecione para a página index.php
        header('location: index.php');
        exit();

    } catch (PDOException $e) {
        echo "Erro ao inserir dados no banco de dados: " . $e->getMessage();
    }
}
?>
