<?php


    $host = "200.19.1.18";  //fora do ifsul
    //$host = "192.168.20.18";  //dentro do ifsul
    $dbname = "airtonjunior";
    $username = "airtonjunior";
    $password = "123456";

    try {
        $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    
    } catch (PDOException $e) {
        echo "Erro ao conectar no banco de dados: " . $e->getMessage();
    }
    
    

    
    ?>