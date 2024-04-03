<?php
session_start();

// Verifique se o usuário está logado
if (isset($_SESSION['nome_usuario'])) {
    // Destrua a sessão atual
    session_destroy();

    echo "Logout bem-sucedido. Você foi desconectado.";
} else {
    echo "Você não está logado. Não é possível fazer logout.";
}

header('refresh:1;url=../html/login.html'); // Redirecione para a página de login após 1 segundo
?>