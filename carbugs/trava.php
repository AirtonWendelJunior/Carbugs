<?php


if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['nm_usuario'])) {
    die("Você não está logado!Faça o seu cadastro conosco!.<p><a href=\"login.php\">Entrar</a></p>");
}


?>