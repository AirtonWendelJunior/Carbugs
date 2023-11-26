<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $genero = $_POST["genero"];
	$carro = $_POST ["carro"];
  
  
	require_once("conexao.php");

    try {
        
        $sql = "INSERT INTO tb_carbugs_usuario (nm_usuario, id_email, id_idade, id_genero,nm_carro) VALUES (?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $email, $idade, $genero, $carro]);

        session_start();
	
		$_SESSION['id_veiculo']=2;
		
		header('location: videosrelacionados.php');

	//header('location: videosrelacionados.php? id_veiculo=2');

		//die();

    } catch (PDOException $e) {
    
		echo "Erro ao inserir dados no banco de dados: " . $e->getMessage();
    }
}
?>