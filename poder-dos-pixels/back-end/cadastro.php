<?php
// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Carregue os dados do arquivo JSON
    $data = file_get_contents('users.json');
    $users = json_decode($data, true);

    // Receba as informações do formulário
    $newUser = [
        'nome' => $_POST['firstname'],
        'sobrenome' => $_POST['lastname'],
        'email' => $_POST['email'],
        'numero' => $_POST['number'],
        'senha' => $_POST['password'],
    ];

    // Verifique se o email já existe
    $emailExists = false;
    foreach ($users['usuarios'] as $usuario) {
        if ($usuario['email'] === $newUser['email']) {
            $emailExists = true;
            break;
        }
    }

    if ($emailExists) {
        echo "Este email já está em uso. Por favor, escolha outro email.";
    } else {
        // Adicione o novo usuário ao array de usuários
        $users['usuarios'][] = $newUser;

        // Salve os dados atualizados no arquivo JSON
        file_put_contents('users.json', json_encode($users));

        echo "Cadastro realizado com sucesso. Agora você pode fazer login.";
        header('refresh:1;url=/html/login.html'); // Redirecione para index.html após 1 segundos
        exit;
        
    }
}
?>
<br>
<a href="../html/cadastro.html">voltar</a>
