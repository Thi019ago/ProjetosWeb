<?php
session_start();

// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Carregue os dados do arquivo JSON
    $data = file_get_contents('users.json');
    $users = json_decode($data, true);

    // Receba as credenciais do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verifique as credenciais
    foreach ($users['usuarios'] as $user) {
        if ($user['email'] === $email && $user['senha'] === $password) {
            $nome = $user['nome']; // Obtenha o nome do usuário

            // Defina a variável de sessão para armazenar o nome do usuário
            $_SESSION['nome_usuario'] = $nome;

            echo "Login bem-sucedido. Bem-vindo, $nome!";
            header('refresh:1;url=../index.php'); // Redirecione para index.html após 1 segundo
            exit;
        }
    }

    // Se as credenciais estiverem incorretas, exiba uma mensagem de erro
    echo "Credenciais inválidas. Tente novamente.";
    header('refresh:1;url=../html/login.html');
}