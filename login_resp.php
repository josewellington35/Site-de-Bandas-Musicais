<?php

$email = $_REQUEST["email"];
$acao = $_REQUEST["acao"];

// Iniciar controle de Sessão:
session_start();

if ($acao == "login") {
    if ($email == "admin@admin.com.br" || $email == "cliente@admin.com.br") {
        // Iniciar variável de sessão:
        $_SESSION["usuario"] = $email;
        // Criar Cookie:
        setcookie("mensagem", "Usuário <b>$email</b> autenticado com sucesso!");
    } else {
        setcookie("mensagem", "<div style='color:red; background-color: bisque'>"
                . "Autenticação do usuário <b>$email</b> falhou!</div>");
    }
} else {
    // Eliminar variável sessão (poderia se utilizar: session_destroy() ):
    unset($_SESSION['usuario']);
    // Deletar cookie:
    setcookie("mensagem", "", time() - 3600);
}

// Redirecionar para a página principal:
header('Location: index.php');
?>
