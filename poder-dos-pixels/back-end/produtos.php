<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Produtos</h1>
    <a href="index.html">voltar</a>

    <?php
    // Verifica se o arquivo JSON existe
    if (file_exists('produtos.json')) {
        // Lê o conteúdo do arquivo JSON
        $jsonContent = file_get_contents('produtos.json');
        
        // Decodifica o conteúdo JSON em um array associativo
        $data = json_decode($jsonContent, true);

        // Verifica se há dados no arquivo
        if (!empty($data)) {
            echo '<table>';
            echo '<tr>';
            echo '<th>Título</th>';
            echo '<th>Descrição</th>';
            echo '<th>Empresa</th>';
            echo '<th>Preço(R$)</th>';
            echo '<th>Imagem</th>';
            echo '<th>Remover</th>';
            echo '</tr>';
            foreach ($data as $key => $produto) {
                echo '<tr>';
                echo '<td>' . $produto['titulo'] . '</td>';
                echo '<td>' . $produto['descricao'] . '</td>';
                echo '<td>' . $produto['empresa'] . '</td>';
                echo '<td>' . $produto['preco'] . '</td>';
                echo '<td><img width = "100" src="' . $produto['imagem'] . '" alt="Imagem do Produto"></td>';
                echo '<td><a href="?delete=' . $key . '">Deletar</a></td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p>Nenhum item no arquivo JSON.</p>';
        }
    } else {
        echo '<p>O arquivo JSON não foi encontrado.</p>';
    }

    // Verifica se um item deve ser deletado
    if (isset($_GET['delete'])) {
        $itemToDelete = $_GET['delete'];
        
        // Verifica se o item existe no array
        if (array_key_exists($itemToDelete, $data)) {
            unset($data[$itemToDelete]);
            
            // Codifica o array atualizado de volta para JSON
            $updatedJsonContent = json_encode(array_values($data));
            
            // Sobrescreve o arquivo JSON com os dados atualizados
            file_put_contents('produtos.json', $updatedJsonContent);
            
            // Redireciona de volta para a página
            header('Location: ' . $_SERVER['PHP_SELF']);
        } else {
            echo '<p>O item não existe no arquivo JSON.</p>';
        }
    }
    ?>
</body>
</html>
