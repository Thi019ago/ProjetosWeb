<!DOCTYPE html>
<html>
<head>
    <title>Usuários e Senhas</title>
</head>
<body>
    <h1>Usuários e Senhas</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>sobrenome</th>
            <th>E-mail</th>
            <th>number</th>
            <th>Senha</th>
        </tr>
        <?php
        // Lê o conteúdo do arquivo users.json
        $json_data = file_get_contents('users.json');
        
        // Decodifica o JSON em um array associativo
        $data = json_decode($json_data, true);

        // Verifica se o JSON foi decodificado com sucesso
        if ($data !== null) {
            // Loop através dos usuários e exibe-os na tabela
            foreach ($data['usuarios'] as $usuario) {
                echo "<tr>";
                echo "<td>" . $usuario['nome'] . "</td>";
                echo "<td>" . $usuario['sobrenome'] . "</td>";
                echo "<td>" . $usuario['email'] . "</td>"; 
                echo "<td>" . $usuario['numero'] . "</td>"; 
                echo "<td>" . $usuario['senha'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Erro ao ler o arquivo JSON</td></tr>";
        }
        ?>
    </table>
    <a href="index.html">voltar</a>
</body>
</html>
