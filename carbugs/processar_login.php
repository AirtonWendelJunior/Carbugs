<?php


include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $senha = isset($_POST['senha']) ? trim($_POST['senha']) : "";

    if (empty($email) || empty($senha)) {
        echo "Preencha todos os campos.";
    } else {
        // Use prepared statements para proteger contra injeção SQL
        $sql_code = "SELECT * FROM tb_cadastro WHERE email_usuario = :email AND id_senha = :senha";
        $stmt = $pdo->prepare($sql_code);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":senha", $senha, PDO::PARAM_STR);
        $stmt->execute();

        $quantidade = $stmt->rowCount();

        if ($quantidade == 1) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!isset($_SESSION)) {
                session_start();
            }

        
            $_SESSION['nm_usuario'] = $usuario['nm_usuario'];

            header("Location: index.php");
            exit();
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}



?>



